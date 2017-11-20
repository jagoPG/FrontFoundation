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

const notValidPhoneMessages = {
  en: 'Entered phone is not valid.',
  es: 'El teléfono introducido no es válido.',
  eu: 'Sartutako telefonoa ez du balio'
};

class ReactFormInput extends React.PureComponent {

  static propTypes = {
    domNode: PropTypes.any.isRequired
  };

  render() {
    const parentForms = $(this.props.domNode).parents('form[data-parsley-validate]');

    return <Ui.React.FormGroupInput
      id="react-form-group-input-phone"
      label="Phone:"
      parsleyValidationEnabled={true}
      parsleyValidationForm={parentForms[0]}
      parsleyValidationPhoneMessages={notValidPhoneMessages}
      required={true}
      type="tel"/>;
  }
}

export default ReactFormInput;
