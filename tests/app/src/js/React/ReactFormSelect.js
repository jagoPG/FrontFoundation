/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikeltuesta@gmail.com>
 */

import $ from 'jquery';
import React from 'react';
import PropTypes from 'prop-types';
import {Ui} from 'lin3s-front-foundation';

const defaultValueMessages = {
  en: 'The selected option is the default one',
  es: 'La opción seleccionada es la opción por defecto',
  eu: 'Hautatutako aukera lehenetsiko aukera da'
};

class ReactFormSelect extends React.Component {

  static propTypes = {
    domNode: PropTypes.any.isRequired,
    options: PropTypes.arrayOf(PropTypes.shape({
      label: PropTypes.string,
      value: PropTypes.string
    }))
  };

  constructor(props) {
    super(props);

    this.state = {
      filterValue: '',
      filteredOptions: this.props.options
    };

    this.onFormSelectInputChanged = this.onFormSelectInputChanged.bind(this);
    this.onFormSelectOptionSelected = this.onFormSelectOptionSelected.bind(this);
  }

  onFormSelectOptionSelected(selectedOption) {
    console.log('This is the selected value:', selectedOption);
  }

  onFormSelectInputChanged(inputValue) {
    this.setState({
      filterValue: inputValue,
      filteredOptions: this.getFilteredOptions(inputValue)
    });
  }

  getFilteredOptions(filterValue) {
    const {options} = this.props;

    return options.filter(option =>
      option.label.toLowerCase().includes(filterValue.toLowerCase()) || filterValue === ''
    );
  }

  render() {
    const {filterValue, filteredOptions} = this.state;
    const {domNode} = this.props;

    const parentForms = $(domNode).parents('form[data-parsley-validate]');

    return <Ui.React.FormGroupSelect
      enabled={true}
      filterValue={filterValue}
      filterable={true}
      id="react-form-group-select"
      label="Month:"
      loading={false}
      onInputChanged={this.onFormSelectInputChanged}
      onOptionSelected={this.onFormSelectOptionSelected}
      options={filteredOptions}
      outsideClickToCloseEnabled={true}
      parsleyValidationDefaultValueMessages={defaultValueMessages}
      parsleyValidationEnabled={true}
      parsleyValidationForm={parentForms[0]}
      parsleyValidationNotValidValue="--"
      renderFormInput={true}
      required={true}/>;
  }
}

export default ReactFormSelect;
