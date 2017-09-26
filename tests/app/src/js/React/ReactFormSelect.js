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
import {Ui} from 'lin3s-front-foundation';

const FormGroupSelect = Ui.React.FormGroupSelect;

class ReactFormSelect extends React.Component {

  static propTypes = {
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
    console.log(selectedOption);
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

    return <div>
      <FormGroupSelect
        enabled={true}
        filterValue={filterValue}
        filterable={true}
        id="react-form-group-select"
        label="This is the (react) form-group-select's label"
        loading={false}
        onInputChanged={this.onFormSelectInputChanged}
        onOptionSelected={this.onFormSelectOptionSelected}
        options={filteredOptions}
        outsideClickToCloseEnabled={true}
        renderFormInput={true}
        required={true}/>
    </div>;
  }
}

export default ReactFormSelect;
