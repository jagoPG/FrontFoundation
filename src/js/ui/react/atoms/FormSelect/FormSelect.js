/*
 * This file is part of the Euskaltel project.
 *
 * Copyright (c) 2017 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@lin3s.com>
 */

import $ from 'jquery';
import React from 'react';
import PropTypes from 'prop-types';
import ArrowDown from './../../svg/ArrowDown';
import Loader from './../Loader/Loader';
import {defaultValueValidator} from './../../../../parsley/validators';

const isMobile = viewportWidth => {
  return viewportWidth < 1024;
};

class FormSelect extends React.Component {

  static OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE = 260;
  static OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP = 275;

  static propTypes = {
    enabled: PropTypes.bool,
    filterValue: PropTypes.string,
    filterable: PropTypes.bool,
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    loading: PropTypes.bool,
    onInputChanged: PropTypes.func,
    onOptionSelected: PropTypes.func.isRequired,
    options: PropTypes.arrayOf(PropTypes.shape({
      label: PropTypes.string,
      value: PropTypes.string
    })),
    outsideClickToCloseEnabled: PropTypes.bool,
    parsleyValidationDefaultValueMessages: PropTypes.object,
    parsleyValidationEnabled: PropTypes.bool,
    parsleyValidationForm: PropTypes.any,
    parsleyValidationNotValidValue: PropTypes.string,
    required: PropTypes.bool
  };

  static defaultProps = {
    enabled: true,
    filterValue: '',
    filterable: false,
    loading: false,
    onInputChanged: () => {},
    outsideClickToCloseEnabled: true,
    parsleyValidationDefaultValueMessages: undefined,
    parsleyValidationEnabled: false,
    parsleyValidationForm: undefined,
    parsleyValidationNotValidValue: '',
    required: false
  };

  constructor(props) {
    super(props);

    this.optionNodesRefs = [];

    this.state = {
      dataRendered: true,
      editingInput: false,
      focused: false,
      opened: false,
      touched: false,
      selectedOption: props.options[0],
      hoveredOption: null,
      mouseOverListenerEnabled: true
    };

    this.addParsleyValidator();

    // bre-bind method's context
    this.onFocus = this.onFocus.bind(this);
    this.onClick = this.onClick.bind(this);
    this.onOutsideClick = this.onOutsideClick.bind(this);
    this.onLabelClick = this.onLabelClick.bind(this);
    this.onInputChange = this.onInputChange.bind(this);
    this.onKeyDown = this.onKeyDown.bind(this);
    this.onOptionMouseMove = this.onOptionMouseMove.bind(this);
  }

  addParsleyValidator() {
    if (!this.props.parsleyValidationEnabled) {
      return;
    }

    const NO_DEFAULT_VALUE_VALIDATOR = 'notDefaultOption';

    if (window.Parsley.hasValidator(NO_DEFAULT_VALUE_VALIDATOR)) {
      return;
    }

    window.Parsley.addValidator(
      NO_DEFAULT_VALUE_VALIDATOR,
      defaultValueValidator(this.props.parsleyValidationNotValidValue, this.props.parsleyValidationDefaultValueMessages)
    );
  }

  onFocus() {
    this.setState({
      focused: true
    });
  }

  onInputChange(event) {
    event.persist();
    this.props.onInputChanged(event.target.value);
  }

  onClick(event) {
    if (!this.props.outsideClickToCloseEnabled) {
      return;
    }

    event.persist();
    event.stopPropagation();
  }

  onLabelClick() {
    if (this.state.opened) {
      this.closeSelect();
    } else {
      this.openSelect();
    }
  }

  onOutsideClick() {
    this.closeSelect();
  }

  onKeyDown(event) {
    const keyCode = event.which;

    if (!(keyCode === 40 || keyCode === 38 || keyCode === 13)) {
      return;
    }

    if (!this.state.opened && this.state.focused && keyCode === 13) {
      this.openSelect();
      return;
    }

    let {hoveredOption} = this.state;
    const {options} = this.props;

    let hoveredOptionIndex = options.indexOf(hoveredOption);

    if (keyCode === 40) { // down
      hoveredOptionIndex = hoveredOptionIndex < 0
        ? 0
        : hoveredOptionIndex + 1 >= options.length
          ? options.length - 1 : hoveredOptionIndex + 1;

      this.setState({
        hoveredOption: options[hoveredOptionIndex],
        mouseOverListenerEnabled: false
      });

      this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({behaviour: 'smooth'});

    } else if (keyCode === 38) { // up
      hoveredOptionIndex = hoveredOptionIndex < 0
        ? 0
        : hoveredOptionIndex - 1 < 0
          ? 0 : hoveredOptionIndex - 1;

      this.setState({
        hoveredOption: options[hoveredOptionIndex],
        mouseOverListenerEnabled: false
      });

      this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({behaviour: 'smooth'});

    } else if (keyCode === 13) { // enter
      this.onOptionSelected(hoveredOption);
    }
  }

  onOptionSelected(option) {
    if (!this.props.enabled) {
      return;
    }

    this.setState({
      selectedOption: option
    });

    this.props.onOptionSelected(option);

    this.closeSelect();
  }

  onOptionMouseMove() {
    if (this.state.mouseOverListenerEnabled) {
      return;
    }

    this.setState({
      mouseOverListenerEnabled: true
    });
  }

  onOptionMouseOver(option) {
    if (!this.props.enabled) {
      return;
    }

    this.setState({
      hoveredOption: option
    });
  }

  openSelect() {
    if (!this.props.enabled) {
      return;
    }

    const {hoveredOption, selectedOption} = this.state;
    const {options} = this.props;

    if (this.props.filterable) {
      this.filterInput.focus();
    }

    this.setState({
      opened: true,
      touched: true,
      editingInput: this.props.filterable,
      hoveredOption: selectedOption !== null ? selectedOption : hoveredOption !== null ? hoveredOption : options[0]
    });
  }

  closeSelect() {
    if (this.props.filterable) {
      this.filterInput.blur();
    }

    this.setState({
      editingInput: false,
      focused: false,
      opened: false
    });
  }

  getOptionsContainerHeight() {
    const {windowWidth} = this.props;

    const totalHeight = this.optionNodesRefs.reduce((accumulatedHeight, optionNodeRef) => {
      return accumulatedHeight + (optionNodeRef !== null ? optionNodeRef.getBoundingClientRect().height : 0);
    }, 0);

    if (isMobile(windowWidth) && totalHeight > FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE) {
      return FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE;
    } else if (!isMobile(windowWidth) && totalHeight > FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP) {
      return FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP;
    }

    return totalHeight;
  }

  getOptionsContainerNeedsOverflow(optionsContainerHeight) {
    const {windowWidth} = this.props;

    return isMobile(windowWidth) && optionsContainerHeight >= FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_MOBILE ||
      !isMobile(windowWidth) && optionsContainerHeight >= FormSelect.OPTIONS_CONTAINER_MAX_HEIGHT_DESKTOP;
  }

  validate() {
    return $(this.hiddenInput).parsley().validate();
  }

  getDangerousHtml(rawHtml) {
    return {__html: rawHtml};
  }

  componentWillReceiveProps(nextProps) {
    const optionsAreEqual = this.props !== undefined && this.props.options.every(option =>
      nextProps.options.find(nextPropsOption => nextPropsOption === option));

    this.setState(prevState => {
      const
        selectedOption = optionsAreEqual && nextProps.enabled ? prevState.selectedOption : nextProps.options[0],
        hoveredOption = optionsAreEqual && nextProps.enabled
          ? prevState.selectedOption !== null ? prevState.selectedOption : prevState.hoveredOption
          : nextProps.options[0];

      return {
        dataRendered: !optionsAreEqual,
        editingInput: nextProps.enabled && prevState.editingInput,
        opened: nextProps.enabled && prevState.opened,
        selectedOption,
        hoveredOption
      };
    });
  }

  componentDidMount() {
    if (this.props.outsideClickToCloseEnabled) {
      window.addEventListener('click', () => this.onOutsideClick());
    }

    if (this.props.parsleyValidationForm !== undefined) {
      $(this.props.parsleyValidationForm).on('submit.form_select', event => {
        if (this.validate() !== true) {
          event.preventDefault();
        }
      });
    }

    /* eslint-disable react/no-did-mount-set-state */
    this.setState({
      dataRendered: false
    });
    /* eslint-enable react/no-did-mount-set-state */
  }

  componentWillUnmount() {
    window.removeEventListener('click', this.onOutsideClick);
    if (this.props.parsleyValidationForm !== undefined) {
      $(this.props.parsleyValidationForm).off('submit.form_select');
    }
  }

  componentDidUpdate(prevProps) {
    if (!this.state.opened && this.state.touched) {
      this.validate();
    }

    if (this.props.options !== prevProps.options) {
      /* eslint-disable react/no-did-update-set-state */
      this.setState({
        dataRendered: false
      });
      /* eslint-enable react/no-did-update-set-state */
    }
  }

  render() {
    /* eslint-disable react/no-danger */

    const {dataRendered, editingInput, opened, focused, selectedOption, hoveredOption, mouseOverListenerEnabled}
      = this.state;
    const {enabled, filterable, filterValue, id, label, loading, options, required} = this.props;
    const
      formSelectClassName = `form-select
        ${(opened && enabled) ? ' form-select--opened' : ''}
        ${loading ? ' form-select--loading' : ''}
        ${!enabled ? ' form-select--disabled' : ''}
        ${filterable && editingInput ? ' form-select--editing-input' : ''}
        ${focused ? ' form-select--focused' : ''}`,
      selectLabel = selectedOption !== undefined && selectedOption !== null
        ? this.getDangerousHtml(selectedOption.label) : this.getDangerousHtml(options[0].label),
      optionsContainerHeight = (opened && !dataRendered) ? this.getOptionsContainerHeight() : 0,
      needsOverflow = this.getOptionsContainerNeedsOverflow(optionsContainerHeight),
      optionsContainerClassName = `form-select__options-container${!needsOverflow
        ? ' form-select__options-container--no-overflow' : ''}`;

    return (
      <div className={formSelectClassName}
           onClick={this.onClick}
           onFocus={this.onFocus}
           onKeyDown={this.onKeyDown}
           tabIndex={0}>
        <div className="form-select__loader">
          <Loader/>
        </div>
        <span className="form-select__dropdown-icon">
          <ArrowDown/>
        </span>

        {filterable &&
        <div className="form-select__input-container">
          <input className="form-input form-select__input"
                 onChange={this.onInputChange}
                 placeholder={label}
                 ref={input => {
                   this.filterInput = input;
                 }}
                 tabIndex="-1"
                 type="text"
                 value={filterValue}/>
        </div>}
        <div className="form-select__label"
             dangerouslySetInnerHTML={selectLabel}
             onClick={this.onLabelClick}></div>
        <div className={optionsContainerClassName} style={{height: optionsContainerHeight}}>
          <div className="form-select__options">
            {options && options.map((option, index) => {
              const
                onOptionMouseOver = mouseOverListenerEnabled ? this.onOptionMouseOver.bind(this, option) : null,
                formOptionClassName = `form-select__option
                  ${option === selectedOption ? ' form-select__option--active' : ''}
                  ${option === hoveredOption ? ' form-select__option--hover' : ''}`,
                labelHtml = this.getDangerousHtml(option.label);
              return <div className={formOptionClassName}
                          dangerouslySetInnerHTML={labelHtml}
                          key={`form-select-view-${index}`}
                          onClick={this.onOptionSelected.bind(this, option)}
                          onMouseMove={this.onOptionMouseMove}
                          onMouseOver={onOptionMouseOver}
                          ref={optionNode => {
                            this.optionNodesRefs[index] = optionNode;
                          }}></div>;
            })}
          </div>
        </div>
        <input className="form-select__select"
               id={id}
               name={id}
               data-parsley-not-default-option
               ref={input => {
                 this.hiddenInput = input;
               }}
               required={required}
               tabIndex="-1"
               type="hidden"
               value={selectedOption !== undefined && selectedOption !== null ? selectedOption.value : ''}/>
      </div>
    );
    /* eslint-enable react/no-danger */
  }
}

export default FormSelect;
