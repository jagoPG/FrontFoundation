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

import React from 'react';
import PropTypes from 'prop-types';
import {Ui, FormValidator} from 'lin3s-front-foundation';

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
      renderFormInput={true}
      required={true}
      validationEnabled={true}
      validationMessageNotValid="Selected option is not valid"
      validationMessageRequired="This field is required"
      validationPattern={FormValidator.Patterns.notValue('--')}/>;
  }
}

export default ReactFormSelect;
