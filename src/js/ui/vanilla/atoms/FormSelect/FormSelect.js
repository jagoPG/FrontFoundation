/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

import $ from 'jquery';
import debounce from 'lodash.debounce';
import {onWindowResized, OneTimeEventPublisher, LifeTimeEventPublisher} from 'lin3s-event-bus';
import {getHtmlLang} from './../../../../dom';
import FormSelectInitializedEvent from './../../../../event-bus/FormSelect/FormSelectInitializedEvent';
import FormSelectOptionSelectedEvent from './../../../../event-bus/FormSelect/FormSelectOptionSelectedEvent';
import FormSelectStateChangedEvent from './../../../../event-bus/FormSelect/FormSelectStateChangedEvent';
import {defaultValueValidator} from '../../../../parsley/validators';

const renderSelectOption = (optionValue, optionLabel) =>
    `<option value="${optionValue}">${optionLabel}</option>`,
  renderSelectOptionView = (optionValue, optionLabel) =>
    `<div class="form-select__option" data-label="${optionLabel}" data-value="${optionValue}">${optionLabel}</div>`;

const isMobile = (viewportWidth, mobileBreakpoint = 1024) => viewportWidth < mobileBreakpoint;

class FormSelect {

  static STATE = {
    OPENED: 'OPENED',
    CLOSED: 'CLOSED'
  };

  windowWidth;
  maxHeightMobile;
  maxHeightDesktop;
  mobileBreakpoint;
  mouseOverListenerEnabled;

  domNode;
  $domNode;
  $select;
  $selectOptions;
  $selectOptionsContainer;
  $selectLabel;
  $filterInput;
  options;
  opened;
  focused;
  enabled;
  selectedOptionLabel;
  selectedOptionValue;
  keyboardControlledSelectedOptionIndex = -1;

  constructor(domNode) {
    this.domNode = domNode;
    this.$domNode = $(domNode);
    this.opened = this.$domNode.hasClass('form-select--opened');
    this.focused = false;
    this.enabled = true;

    this.maxHeightDesktop = parseInt(domNode.dataset.maxHeightDesktop, 10);
    this.maxHeightMobile = parseInt(domNode.dataset.maxHeightMobile, 10);
    this.isFilterable = parseInt(domNode.dataset.filterable, 10) === 1;
    this.filterBy = domNode.dataset.filterOrderBy;
    this.mobileBreakpoint = parseInt(domNode.dataset.mobileBreakpoint, 10);
    this.mouseOverListenerEnabled = true;

    if (this.isFilterable) {
      this.$filterInput = this.$domNode.find('.form-select__input');
    }

    this.$select = this.$domNode.find('.form-select__select');
    this.$selectOptionsContainer = this.$domNode.find('.form-select__options-container');
    this.$selectOptions = this.$domNode.find('.form-select__options');
    this.$selectLabel = this.$domNode.find('.form-select__label');

    this.debouncedFilter = debounce(() => this.filter(), 500);

    this.needsParsleyValidation = this.$domNode.parents('form[data-parsley-validate]').length > 0
      || this.$domNode.attr('data-parsley-validation-enabled');

    this.addParsleyValidator();
    this.parseSelectOptions();
    this.bindListeners();
    this.setSelectOpened(this.opened);
    this.setInitiallySelectedOption();

    this.publishFormSelectInitializedEvent();
  }

  addParsleyValidator() {
    if (!this.needsParsleyValidation) {
      return;
    }

    const validatorName = 'notDefaultOption';

    if (window.Parsley.hasValidator(validatorName)) {
      return;
    }

    const
      noSelectionValue = this.$domNode.find('.form-select__select-no-selection').val(),
      parsleyValidationMessages = JSON.parse(this.$domNode.attr('data-parsley-validation-messages'));

    window.Parsley.addValidator(validatorName, defaultValueValidator(noSelectionValue, parsleyValidationMessages));
  }

  parseSelectOptions() {
    const $selectOptions = this.$select.find('option');
    this.options = Array.from($selectOptions).map(selectOption => {
      const $selectOption = $(selectOption);
      return {
        value: $selectOption.val().trim(),
        label: $selectOption.text().trim()
      };
    });
  }

  getOptionsContainerNeedsOverflow(optionsContainerHeight) {
    return isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightMobile ||
      !isMobile(this.windowWidth, this.mobileBreakpoint) && optionsContainerHeight >= this.maxHeightDesktop;
  }

  setOptionsContainerHeight(height) {
    // Prevent overflow/scroll animation
    this.$selectOptionsContainer.toggleClass('form-select__options-container--no-overflow',
      !this.getOptionsContainerNeedsOverflow(height));

    this.$selectOptionsContainer.height(height);
  }

  getOptionsContainerHeight() {
    const totalHeight = Array.from(this.$domNode.find('.form-select__option')).reduce((accumulatedHeight, option) =>
      accumulatedHeight + $(option).outerHeight(), 0);

    if (isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightMobile) {
      return this.maxHeightMobile;
    } else if (!isMobile(this.windowWidth, this.mobileBreakpoint) && totalHeight >= this.maxHeightDesktop) {
      return this.maxHeightDesktop;
    }

    return totalHeight;
  }

  bindListeners() {
    if (this.isFilterable) {
      this.$filterInput.on('input.form_select', () => {
        this.debouncedFilter();
      });

      this.$filterInput.on('click.form_select', event => {
        if (this.opened) {
          event.stopPropagation();
        }
      });
    }

    $(window).on('click.form_select', this.close.bind(this));

    this.$domNode.on('focus.form_select', () => this.setSelectFocused(true));

    this.$domNode.on('click.form_select', event => {
      event.stopPropagation();

      this.setSelectOpened(!this.opened);
    });

    this.$domNode.on('click.form_select_option', '.form-select__option', (event) => {
      this.setSelectedOption($(event.currentTarget));
    });

    this.$domNode.on('mouseover.form_select_option', '.form-select__option', event => {
      if (!this.mouseOverListenerEnabled) {
        return;
      }

      this.setKeyboardControlledSelectedOptionView(this.$domNode.find('.form-select__option'), $(event.currentTarget));
      this.keyboardControlledSelectedOptionIndex = $(event.currentTarget).index();
    });

    this.$domNode.on('mousemove.form_select_option', '.form-select__option', () => {
      this.mouseOverListenerEnabled = true;
    });

    this.$domNode.on('keydown.form_select', event => {
      if (!(event.which === 40 || event.which === 38 || event.which === 13 || event.which === 9)) {
        return;
      }

      if (!this.opened && this.focused && event.which === 13) {
        this.open();
        return;
      } else if (event.which === 9) {
        this.close();
        return;
      }

      event.preventDefault();
      this.mouseOverListenerEnabled = false;

      const $selectOptionViews = this.$domNode.find('.form-select__option');

      if (event.which === 40) { // down
        this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex
        < $selectOptionViews.length - 1
          ? this.keyboardControlledSelectedOptionIndex + 1 : $selectOptionViews.length - 1;
        this.setKeyboardControlledSelectedOptionView($selectOptionViews,
          $selectOptionViews.eq(this.keyboardControlledSelectedOptionIndex),
          true);
      } else if (event.which === 38) { // up
        this.keyboardControlledSelectedOptionIndex = this.keyboardControlledSelectedOptionIndex > 0
          ? this.keyboardControlledSelectedOptionIndex - 1 : 0;
        this.setKeyboardControlledSelectedOptionView($selectOptionViews,
          $selectOptionViews.eq(this.keyboardControlledSelectedOptionIndex),
          true);
      } else if (event.which === 13) { // enter
        this.setSelectedOption($selectOptionViews.eq(this.keyboardControlledSelectedOptionIndex));
        this.close();
      }
    });

    onWindowResized(this.onResize.bind(this));
  }

  onResize(windowResizedEvent) {
    this.windowWidth = windowResizedEvent.windowWidth || $(window).width();

    if (this.opened) {
      this.open();
    }
  }

  setInitiallySelectedOption() {
    const $selectedOption = this.$select.find('option[selected="selected"]');

    if ($selectedOption.length === 0) {
      return;
    }

    this.onOptionSelected($selectedOption.text(), $selectedOption.val());
  }

  setSelectOpened(opened) {
    if (opened) {
      this.open();
    } else {
      this.close();
    }

    this.publishFormSelectStateChangedEvent(opened ? FormSelect.STATE.OPENED : FormSelect.STATE.CLOSED);
  }

  setSelectFocused(focused) {
    this.focused = focused;
    this.$domNode.toggleClass('form-select--focused', focused);
  }

  open() {
    if (!this.enabled) {
      return;
    }

    this.$domNode.addClass('form-select--opened');
    this.$domNode.addClass('form-select--editing-input', this.isFilterable);
    this.setOptionsContainerHeight(this.getOptionsContainerHeight());
    this.opened = true;
    this.setSelectFocused(false);

    if (this.isFilterable) {
      this.$filterInput.focus();
    }
  }

  close() {
    if (!this.enabled) {
      return;
    }

    this.$domNode.removeClass('form-select--opened');
    this.$domNode.removeClass('form-select--editing-input');
    this.setOptionsContainerHeight(0);
    this.opened = false;
    this.setSelectFocused(false);

    if (this.isFilterable) {
      this.$filterInput.blur();
    }
  }

  onOptionSelected(optionLabel, optionValue, publishEvent = true) {
    if (!this.enabled) {
      return;
    }

    // Explicitly cast to String
    const
      label = String(optionLabel),
      value = String(optionValue);

    if (this.selectedOptionLabel === optionLabel || this.selectedOptionValue === optionValue) {
      return;
    }

    this.setSelectValue(value);
    this.setSelectLabelValue(label);
    this.setSelectActiveOption(value);

    this.selectedOptionLabel = optionLabel;
    this.selectedOptionValue = optionValue;

    if (this.needsParsleyValidation) {
      this.$select.parsley().validate();
    }

    if ((this.selectedOptionLabel !== undefined || this.selectedOptionValue !== undefined) && publishEvent) {
      this.publishFormSelectOptionSelectedEvent(value);
    }
  }

  setSelectValue(value) {
    this.$select.val(value);
  }

  setSelectLabelValue(value) {
    this.$selectLabel.html(value);
  }

  setSelectActiveOption(optionValue) {
    Array.from(this.$domNode.find('.form-select__option')).forEach(selectOption => {
      const
        $selectOption = $(selectOption),
        selectOptionValue = $selectOption.data('value');
      $selectOption.toggleClass('form-select__option--active', String(selectOptionValue) === String(optionValue));
    });
  }

  setSelectedOptionByOptionValue(optionValue) {
    const
      $option = this.$domNode.find(`.form-select__option[data-value="${optionValue}"]`),
      label = $option.attr('data-label');
    this.onOptionSelected(label, optionValue, false);
  }

  update({options, publishEvent = true} = {}) {
    this.close();
    this.destroy();

    if (options.length === 0) {
      return;
    }

    this.build(options);
    this.setSelectedOptionDefault(publishEvent);
  }

  destroy() {
    this.$selectOptions.find('.form-select__option').not('.form-select__option--select-no-selection').remove();
    this.$select.find('option').not('.form-select__select-no-selection').remove();
    this.$filterInput.val('');
  }

  build(options) {
    this.options = options;
    this.options.forEach(option => {
      this.$select.append(renderSelectOption(option.value, option.label));
      this.$selectOptions.append(renderSelectOptionView(option.value, option.label));
    });
    this.setOptionsContainerHeight(this.getOptionsContainerHeight());
  }

  filter() {
    const noSelectionValue = this.$domNode.find('.form-select__select-no-selection').val();
    const filterValue = this.$filterInput.val();
    const filteredOptions = this.options.filter(option =>
      option.label.toLowerCase().includes(filterValue.toLowerCase())
      || filterValue === ''
      || option.value === noSelectionValue
    );

    // Remove unnecessary ones
    this.options.forEach(option => {
      if (filteredOptions.indexOf(option) === -1) {
        const $option = this.$selectOptions.find(`[data-value="${option.value}"]`);
        $option.remove();
      }
    });

    // Add necessary ones
    filteredOptions.forEach(filteredOption => {
      const $selectOption = this.$domNode.find(`.form-select__option[data-value="${filteredOption.value}"]`);

      if ($selectOption.length === 0) {
        // Find place to inject
        const
          $currentSelectOptionViews = this.$domNode.find('.form-select__option:not(:first)'),
          newSelectOption = renderSelectOption(filteredOption.value, filteredOption.label),
          newSelectOptionView = renderSelectOptionView(filteredOption.value, filteredOption.label);
        let
          found = false,
          index = 0;

        while (index < $currentSelectOptionViews.length && !found) {
          const $currentSelectOption = $($currentSelectOptionViews[index]);

          const isInteger = (!isNaN(parseInt($currentSelectOption.data(`${this.filterBy}`), 10))
          && !isNaN(parseInt(filteredOption[`${this.filterBy}`], 10)));

          const currentOptionIsBiggerThanFilteredOne = isInteger
            ? parseInt($currentSelectOption.data(`${this.filterBy}`), 10) > parseInt(filteredOption[`${this.filterBy}`], 10) // eslint-disable-line max-len
            : String($currentSelectOption.data(`${this.filterBy}`)).trim().localeCompare(filteredOption[`${this.filterBy}`], getHtmlLang(), {sensitivity: 'base'}) > 0; // eslint-disable-line max-len

          if (currentOptionIsBiggerThanFilteredOne) {
            found = true;
          }

          index++;
        }

        if (found) {
          this.$select.find('option').eq(index).before(newSelectOption);
          this.$domNode.find('.form-select__option').eq(index).before(newSelectOptionView);
        } else {
          this.$select.append(newSelectOption);
          this.$selectOptions.append(newSelectOptionView);
        }
      }
    });

    this.setOptionsContainerHeight(this.getOptionsContainerHeight());

    // select none
    this.setSelectedOptionDefault(false);
  }

  setSelectedOptionDefault(publishEvent = true) {
    const $noSelection = this.$domNode.find('.form-select__select-no-selection');
    this.onOptionSelected($noSelection.text().trim(), $noSelection.val().trim(), publishEvent);
  }

  setSelectedOption($option) {
    this.onOptionSelected($option.data('label'), $option.data('value'));
  }

  setKeyboardControlledSelectedOptionView($selectOptionViews, $optionView, animateScroll = false) {
    $selectOptionViews.removeClass('form-select__option--hover');

    if ($optionView === undefined) {
      return;
    }

    $optionView.addClass('form-select__option--hover');

    // Scroll to option
    if (!animateScroll) {
      return;
    }

    $optionView[0].scrollIntoView({ behaviour: 'smooth' });
  }

  enable() {
    this.enabled = true;
  }

  disable() {
    this.enabled = false;
  }

  publishFormSelectInitializedEvent() {
    OneTimeEventPublisher.publish(new FormSelectInitializedEvent(this));
  }

  publishFormSelectOptionSelectedEvent(value) {
    LifeTimeEventPublisher.publish(new FormSelectOptionSelectedEvent(this, value));
  }

  publishFormSelectStateChangedEvent(state) {
    LifeTimeEventPublisher.publish(new FormSelectStateChangedEvent(this, state));
  }
}

export default FormSelect;
