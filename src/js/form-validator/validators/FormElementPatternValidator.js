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

import AbstractFormElementValidator from './../core/AbstractFormElementValidator';

class FormElementPatternValidator extends AbstractFormElementValidator {

  constructor({
    formElementDomNode,
    onFormElementStateChangedCallback = () => {}
  }) {
    super({formElementDomNode, onFormElementStateChangedCallback});

    this.validationRegExp = new RegExp(this.formElementDomNode.dataset.validationPattern.trim());
  }

  validateValue(value) {
    return this.validationRegExp.test(value);
  }
}

export default FormElementPatternValidator;
