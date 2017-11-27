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
import FormSelect from './../../atoms/FormSelect/FormSelect';
import ResizeAware from './../../hoc/ResizeAware';

class FormGroupSelect extends React.Component {

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
    required: PropTypes.bool,
    validationEnabled: PropTypes.bool,
    validationPattern: PropTypes.string,
    validationMessageRequired: PropTypes.string,
    validationMessageNotValid: PropTypes.string
  };

  static defaultProps = {
    enabled: true,
    filterValue: '',
    filterable: false,
    loading: false,
    outsideClickToCloseEnabled: true,
    required: false,
    validationEnabled: false,
    validationMessageRequired: '',
    validationMessageNotValid: '',
    validationPattern: ''
  };

  constructor(props) {
    super(props);
  }

  render() {
    const {label, id, required, validationMessageRequired, validationMessageNotValid} = this.props;

    return (
      <div className="form-group-select">
        <div className="form-group-select__label">
          <label className="form-label" htmlFor={id}>
            {required &&
              <span className="form-label__required">*</span>}
            {label}
          </label>
        </div>
        <ResizeAware render={(props) =>
          <FormSelect windowHeight={props.windowHeight} windowWidth={props.windowWidth} {...this.props} />
        } />
        <div className="form-group-input__errors">
          <p className="form-error form-error--not-filled">{validationMessageRequired}</p>
          <p className="form-error form-error--not-valid">{validationMessageNotValid}</p>
        </div>
      </div>
    );
  }
}

export default FormGroupSelect;
