/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Mikel Tuesta <mikel@gmail.com>
 */

import React from 'react';
import PropTypes from 'prop-types';

class FormGroup extends React.PureComponent {

  static propTypes = {
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    onChanged: PropTypes.func,
    validationEnabled: PropTypes.bool,
    validationPattern: PropTypes.string,
    validationMessageRequired: PropTypes.string,
    validationMessageNotValid: PropTypes.string,
    required: PropTypes.bool,
    type: PropTypes.string,
  };

  static defaultProps = {
    onChanged: () => {},
    required: false,
    type: 'text',
    validationEnabled: false,
    validationMessageRequired: '',
    validationMessageNotValid: '',
    validationPattern: '',
  };

  constructor(props) {
    super(props);

    // bre-bind method's context
    this.onInputChange = this.onInputChange.bind(this);
  }

  onInputChange(event) {
    event.persist();
    this.props.onChanged(event.target.value);
  }

  shouldComponentUpdate(nextProps) {
    const {id,
      label,
      required,
      type,
      validationEnabled,
      validationPattern,
      validationMessageRequired,
      validationMessageNotValid
    } = this.props;

    return id !== nextProps.id ||
      label !== nextProps.label ||
      required !== nextProps.required ||
      type !== nextProps.type ||
      validationEnabled !== nextProps.validationEnabled ||
      validationPattern !== nextProps.validationPattern ||
      validationMessageRequired !== nextProps.validationMessageRequired ||
      validationMessageNotValid !== nextProps.validationMessageNotValid;
  }

  render() {
    const {
      id,
      label,
      required,
      type,
      validationEnabled,
      validationPattern,
      validationMessageRequired,
      validationMessageNotValid
    } = this.props;

    return (<div className="form-group-input">
      <div className="form-group-input__label">
        <label className="form-label" htmlFor={id}>
          {required && <span className="form-label__required">*</span>}
          {label}
        </label>
      </div>
      <input
        autoComplete="off"
        className="form-input"
        data-validate={validationEnabled ? true : null}
        data-validate-pattern={validationEnabled ? validationPattern : null}
        id={id}
        name={id}
        onChange={this.onInputChange}
        placeholder={label}
        ref={input => {
          this.input = input;
        }}
        required={required}
        type={type} />
      <div className="form-group-input__errors">
        <p className="form-error form-error--not-filled">{validationMessageRequired}</p>
        <p className="form-error form-error--not-valid">{validationMessageNotValid}</p>
      </div>
    </div>);
  }

}

export default FormGroup;
