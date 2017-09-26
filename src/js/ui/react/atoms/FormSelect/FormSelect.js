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

import React from 'react';
import PropTypes from 'prop-types';
import ArrowDown from './../../svg/ArrowDown';
import Loader from './../Loader/Loader';

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
    required: PropTypes.bool
  };

  static defaultProps = {
    enabled: true,
    filterValue: '',
    filterable: false,
    loading: false,
    onInputChanged: () => {},
    outsideClickToCloseEnabled: true,
    required: false
  };

  constructor(props) {
    super(props);

    this.optionNodesRefs = [];

    this.state = {
      dataRendered: true,
      editingInput: false,
      opened: false,
      selectedOption: props.options[0],
      hoveredOption: null
    };

    // bre-bind method's context
    this.onClick = this.onClick.bind(this);
    this.onOutsideClick = this.onOutsideClick.bind(this);
    this.onLabelClick = this.onLabelClick.bind(this);
    this.onInputChange = this.onInputChange.bind(this);
    this.onKeyDown = this.onKeyDown.bind(this);
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

    if (!(this.state.opened) || !(keyCode === 40 || keyCode === 38 || keyCode === 13)) {
      return;
    }

    const {hoveredOption} = this.state;
    const {options} = this.props;

    let hoveredOptionIndex = options.indexOf(hoveredOption);

    if (keyCode === 40) { // down
      hoveredOptionIndex = hoveredOptionIndex < 0
        ? 0
        : hoveredOptionIndex + 1 >= options.length
          ? options.length - 1 : hoveredOptionIndex + 1;

      this.setState({
        hoveredOption: options[hoveredOptionIndex]
      });

      this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({ behaviour: 'smooth' });

    } else if (keyCode === 38) { // up
      hoveredOptionIndex = hoveredOptionIndex < 0
        ? 0
        : hoveredOptionIndex - 1 < 0
          ? 0 : hoveredOptionIndex - 1;

      this.setState({
        hoveredOption: options[hoveredOptionIndex]
      });

      this.optionNodesRefs[hoveredOptionIndex].scrollIntoView({ behaviour: 'smooth' });

    } else if (keyCode === 13) { // enter
      this.onOptionSelected(hoveredOption);
    }
  }

  scrollTo(element, to, duration) {
    if (duration <= 0) {
      return;
    }

    const difference = to - element.scrollTop;
    const perTick = difference / duration * 10;

    requestAnimationFrame(() => {
      element.scrollTop = element.scrollTop + perTick;

      if (element.scrollTop === to) {
        return;
      }

      this.scrollTo(element, to, duration - 16);
    });
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

    if (this.props.filterable) {
      this.filterInput.focus();
    }

    this.setState({
      opened: true,
      editingInput: this.props.filterable
    });
  }

  closeSelect() {
    if (this.props.filterable) {
      this.filterInput.blur();
    }

    this.setState({
      editingInput: false,
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

  getDangerousHtml(rawHtml) {
    return {__html: rawHtml};
  }

  componentWillReceiveProps(nextProps) {
    this.setState(prevState => ({
      dataRendered: false,
      editingInput: nextProps.enabled && prevState.editingInput,
      opened: nextProps.enabled && prevState.opened,
      selectedOption: nextProps.enabled ? prevState.selectedOption : nextProps.options[0],
      hoveredOption: null
    }));
  }

  componentDidMount() {
    if (this.props.outsideClickToCloseEnabled) {
      window.addEventListener('click', this.onOutsideClick);
    }

    /* eslint-disable react/no-did-mount-set-state */
    this.setState({
      dataRendered: false
    });
    /* eslint-enable react/no-did-mount-set-state */
  }

  componentWillUnmount() {
    window.removeEventListener('click', this.onOutsideClick);
  }

  componentDidUpdate(prevProps) {
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

    const {dataRendered, editingInput, opened, selectedOption, hoveredOption} = this.state;
    const {enabled, filterable, filterValue, id, label, loading, options, required} = this.props;
    const
      formSelectClassName = `form-select
        ${(opened && enabled) ? ' form-select--opened' : ''}
        ${loading ? ' form-select--loading' : ''}
        ${!enabled ? ' form-select--disabled' : ''}
        ${filterable && editingInput ? ' form-select--editing-input' : ''}`,
      selectLabel = selectedOption !== undefined && selectedOption !== null
        ? this.getDangerousHtml(selectedOption.label) : this.getDangerousHtml(options[0].label),
      optionsContainerHeight = (opened && !dataRendered) ? this.getOptionsContainerHeight() : 0,
      needsOverflow = this.getOptionsContainerNeedsOverflow(optionsContainerHeight),
      optionsContainerClassName = `form-select__options-container${!needsOverflow
        ? ' form-select__options-container--no-overflow' : ''}`;

    return (
      <div className={formSelectClassName}
        onClick={this.onClick}
        onKeyDown={this.onKeyDown}>
        {filterable && <input className="form-select__select"
          id={id}
          name={id}
          required={required}
          type="hidden"
          value={selectedOption !== undefined && selectedOption !== null ? selectedOption.value : ''}/>}
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
            type="text" value={filterValue}/>
        </div>}
        <div className="form-select__label"
          dangerouslySetInnerHTML={selectLabel}
          onClick={this.onLabelClick}></div>
        <div className={optionsContainerClassName} style={{height: optionsContainerHeight}}>
          <div className="form-select__options">
            {options && options.map((option, index) => {
              const
                formOptionClassName = `form-select__option${option === selectedOption
                    ? ' form-select__option--active' : ''}${option === hoveredOption
                    ? ' form-select__option--hover' : ''}`,
                labelHtml = this.getDangerousHtml(option.label);
              return <div className={formOptionClassName}
                dangerouslySetInnerHTML={labelHtml}
                key={`form-select-view-${index}`}
                onClick={this.onOptionSelected.bind(this, option)}
                onMouseOver={this.onOptionMouseOver.bind(this, option)}
                ref={optionNode => {
                  this.optionNodesRefs[index] = optionNode;
                }}>
              </div>;
            })}
          </div>
        </div>
      </div>
    );
    /* eslint-enable react/no-danger */
  }
}

export default FormSelect;
