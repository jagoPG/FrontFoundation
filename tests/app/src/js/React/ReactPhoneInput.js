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
import isDomNodeDescendantOfDomNode from '../../../../../src/js/dom/isDomNodeDescendantOfDomNode';

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
    const parsleyValidateParentForm = Array.from(document.querySelectorAll('form[data-parsley-validate]')).find(
      form => isDomNodeDescendantOfDomNode(this.props.domNode, form)
    );

    return <Ui.React.FormGroupInput
      id="react-form-group-input-phone"
      label="Phone:"
      parsleyValidationEnabled={true}
      parsleyValidationForm={parsleyValidateParentForm}
      parsleyValidationPhoneMessages={notValidPhoneMessages}
      required={true}
      type="tel"/>;
  }
}

export default ReactFormInput;
