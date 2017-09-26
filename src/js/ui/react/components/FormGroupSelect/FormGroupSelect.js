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
    required: PropTypes.bool
  };

  static defaultProps = {
    enabled: true,
    filterValue: '',
    filterable: false,
    loading: false,
    outsideClickToCloseEnabled: true,
    required: false
  };

  constructor(props) {
    super(props);
  }

  render() {
    const {label, id, required} = this.props;

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
      </div>
    );
  }
}

export default FormGroupSelect;
