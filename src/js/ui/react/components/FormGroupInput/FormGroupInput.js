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

import React from 'react';
import PropTypes from 'prop-types';

class FormGroup extends React.Component {

  static propTypes = {
    id: PropTypes.string.isRequired,
    label: PropTypes.string.isRequired,
    onChanged: PropTypes.func,
    required: PropTypes.bool
  };

  static defaultProps = {
    onChanged: () => {},
    required: false
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

  render() {
    const {id, label, required} = this.props;

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
        id={id}
        name={id}
        onChange={this.onInputChange}
        placeholder={label}
        type="text" />
    </div>);
  }

}

export default FormGroup;
