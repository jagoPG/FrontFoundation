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

import {onDomReady, onNodeAdded} from 'lin3s-event-bus';
import FormValidator from './FormValidator';
import getDomNodeValidatorSelector from '../dom/getDomNodeValidatorSelector';

class FormValidators {

  constructor({
    formSelector,
    formElementSelector,
    formValidatorStateBaseClassName,
    formElementValidatorStateBaseClassName
  }) {
    this.formSelector = getDomNodeValidatorSelector(formSelector);
    this.formElementSelector = getDomNodeValidatorSelector(formElementSelector);
    this.formValidatorStateBaseClassName = formValidatorStateBaseClassName;
    this.formElementValidatorStateBaseClassName = formElementValidatorStateBaseClassName;

    this.onDomReady = this.onDomReady.bind(this);
    this.onNodeAdded = this.onNodeAdded.bind(this);
    this.initFormValidator = this.initFormValidator.bind(this);

    this.bindListeners();
  }

  bindListeners() {
    onDomReady(this.onDomReady);
  }

  onDomReady() {
    Array.from(document.querySelectorAll(this.formSelector)).forEach(this.initFormValidator);

    onNodeAdded(this.formSelector, this.onNodeAdded);
  }

  onNodeAdded(nodeAddedEvent) {
    nodeAddedEvent.nodes.forEach(this.initFormValidator);
  }

  initFormValidator(formDomNode) {
    new FormValidator({
      formDomNode,
      formElementSelector: this.formElementSelector,
      formValidatorStateBaseClassName: this.formValidatorStateBaseClassName,
      formElementValidatorStateBaseClassName: this.formElementValidatorStateBaseClassName
    });
  }
}

export default ({
  formSelector,
  formElementSelector,
  formValidatorStateBaseClassName = 'form',
  formElementValidatorStateBaseClassName = 'form-element'
}) => new FormValidators({
  formSelector,
  formElementSelector,
  formValidatorStateBaseClassName,
  formElementValidatorStateBaseClassName
});
