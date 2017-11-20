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

import $ from 'jquery';

class FormInput {

  domNode;

  constructor(domNode) {
    this.$domNode = $(domNode);

    this.addPhoneValidator();
  }

  addPhoneValidator() {
    const messages = JSON.parse(this.$domNode.attr('data-parsley-phone-validation-messages'));

    if (!(this.$domNode.attr('type') === 'tel' && this.$domNode.attr('data-parsley-phone'))) {
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
      messages
    });
  }
}

export default FormInput;
