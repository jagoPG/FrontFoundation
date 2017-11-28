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

import {onDomReady, onNodeAdded, LifeTimeEventPublisher} from 'lin3s-event-bus';
import isDomNodeDescendantOfDomNode from '../../dom/isDomNodeDescendantOfDomNode';
import FormElementPatternValidator from './FormElementPatternValidator';
import {STATE} from './FormValidatorState';
import setDomNodeDataAttributeByValidatorState from '../dom/setDomNodeDataAttributeByValidatorState';
import {
  preProcessFormElementValidationPattern,
  getFormElementValidatorType,
  VALIDATOR_TYPE
} from './FormElementValidatorTypes';

class FormValidator {

  constructor({
    formDomNode,
    formElementSelector
  }) {
    this.formDomNode = formDomNode;
    this.formElementSelector = formElementSelector;
    this.formElements = [];

    this.onDomReady = this.onDomReady.bind(this);
    this.onNodeAdded = this.onNodeAdded.bind(this);
    this.onFormSubmit = this.onFormSubmit.bind(this);
    this.initFormElement = this.initFormElement.bind(this);
    this.validateOnFormElementStateChanged = this.validateOnFormElementStateChanged.bind(this);

    this.bindListeners();

    this.setState(STATE.NOT_VALIDATED);
  }

  bindListeners() {
    onDomReady(this.onDomReady);
    onNodeAdded(this.formElementSelector, this.onNodeAdded);
    this.formDomNode.addEventListener('submit', this.onFormSubmit);
  }

  onDomReady() {
    Array.from(this.formDomNode.querySelectorAll(this.formElementSelector)).forEach(this.initFormElement);
  }

  onNodeAdded(onNodeAddedEvent) {
    Array.from(onNodeAddedEvent.nodes)
      .filter(node => isDomNodeDescendantOfDomNode(node, this.formDomNode))
      .forEach(formElementNode => this.initFormElement);
  }

  initFormElement(formElementDomNode) {
    preProcessFormElementValidationPattern(formElementDomNode);

    const validator = this.getFormElementValidatorInstance(formElementDomNode);

    if (validator === null) {
      return;
    }

    this.formElements.push(validator);

    this.setState(STATE.NOT_VALIDATED);
  }

  onFormSubmit(event) {
    if (this.validate()) {
      return;
    }

    event.preventDefault();
  }

  setState(newState) {
    this.state = newState;

    setDomNodeDataAttributeByValidatorState(this.formDomNode, this.state);
  }

  validate() {
    const isValid = this.formElements.every(formElement => formElement.validate());

    this.setState(isValid ? STATE.VALID : STATE.NOT_VALID);

    return isValid;
  }

  validateOnFormElementStateChanged() {
    const isValid = this.formElements.every(formElement => formElement.state === STATE.VALID);

    this.setState(isValid ? STATE.VALID : STATE.NOT_VALID);
  }

  getFormElementValidatorInstance(formElementDomNode) {
    const formElementValidatorType = getFormElementValidatorType(formElementDomNode);

    switch (formElementValidatorType) {
      case VALIDATOR_TYPE.PATTERN:
        return new FormElementPatternValidator({
          formElementDomNode,
          onFormElementStateChangedCallback: this.validateOnFormElementStateChanged
        });
    }

    return null;
  }
}

export default FormValidator;
