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
import {Patterns} from 'validatory';

class ReactEmailInput extends React.PureComponent {

  static propTypes = {
    domNode: PropTypes.any.isRequired
  };

  render() {
    return <Ui.React.FormGroupInput
      id="react-form-group-input-email"
      label="Email:"
      required={true}
      type="email"
      validationEnabled={true}
      validationMessageNotValid="The entered email is not valid"
      validationMessageRequired="This field is required"
      validationPattern={Patterns.email}/>;
  }
}

export default ReactEmailInput;
