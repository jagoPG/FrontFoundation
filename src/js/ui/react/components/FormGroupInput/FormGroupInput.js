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

import $ from 'jquery';
import React from 'react';
import PropTypes from 'prop-types';

class FormGroup extends React.Component {

  static propTypes = {
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    onChanged: PropTypes.func,
    parsleyValidationEnabled: PropTypes.bool,
    parsleyValidationForm: PropTypes.any,
    parsleyValidationPhoneMessages: PropTypes.object,
    required: PropTypes.bool,
    type: PropTypes.string,
  };

  static defaultProps = {
    onChanged: () => {},
    parsleyValidationEnabled: false,
    parsleyValidationForm: undefined,
    parsleyValidationPhoneMessages: undefined,
    required: false,
    type: 'text'
  };

  constructor(props) {
    super(props);

    this.state = {
      touched: false
    };

    this.addParsleyValidator();

    // bre-bind method's context
    this.onInputChange = this.onInputChange.bind(this);
    this.onInputFocus = this.onInputFocus.bind(this);
  }

  addParsleyValidator() {
    if (!this.props.parsleyValidationEnabled || this.props.type !== 'tel') {
      return;
    }

    const PHONE_VALUE_VALIDATOR = 'phone';

    if (window.Parsley.hasValidator(PHONE_VALUE_VALIDATOR)) {
      return;
    }

    window.Parsley.addValidator(PHONE_VALUE_VALIDATOR, {
      validateString: value => {
        const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,6}$/im; // eslint-disable-line no-useless-escape
        return re.test(value);
      },
      messages: this.props.parsleyValidationPhoneMessages
    });
  }

  onInputChange(event) {
    event.persist();
    this.props.onChanged(event.target.value);
  }

  onInputFocus() {
    this.setState({
      touched: true
    });
  }

  validate() {
    return $(this.input).parsley().validate();
  }

  componentDidUpdate(prevProps) {
    if (this.state.touched) {
      this.validate();
    }
  }

  componentDidMount() {
    if (this.props.parsleyValidationForm !== undefined) {
      $(this.props.parsleyValidationForm).on('submit.form_input', event => {
        if (this.validate() !== true) {
          event.preventDefault();
        }
      });
    }
  }

  componentWillUnmount() {
    if (this.props.parsleyValidationForm !== undefined) {
      $(this.props.parsleyValidationForm).off('submit.form_input');
    }
  }

  render() {
    const {id, label, required, type, parsleyValidationEnabled} = this.props;

    const needsPhoneValidation = parsleyValidationEnabled && type === 'tel' ? true : null;

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
        data-parsley-phone={needsPhoneValidation}
        id={id}
        name={id}
        onChange={this.onInputChange}
        onFocus={this.onInputFocus}
        placeholder={label}
        ref={input => {
          this.input = input;
        }}
        required={required}
        type={type} />
    </div>);
  }

}

export default FormGroup;
