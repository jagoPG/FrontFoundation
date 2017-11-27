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

import {LifeTimeEventPublisher} from 'lin3s-event-bus';
import {STATE} from './FormValidatorState';
import setDomNodeDataAttributeByValidatorState from '../dom/setDomNodeDataAttributeByValidatorState';
import dispatchNativeEvent from '../../dom/dispatchNativeEvent';

class AbstractFormElementValidator {

  constructor({
    formElementDomNode,
    onFormElementStateChangedCallback = () => {}
  }) {
    this.formElementDomNode = formElementDomNode;
    this.required = this.formElementDomNode.hasAttribute('required');
    this.validationStateReferenceSelector = this.formElementDomNode.dataset.validationStateReferenceSelector;

    this.onFormElementStateChangedCallback = onFormElementStateChangedCallback;
    this.onFormElementInput = this.onFormElementInput.bind(this);

    this.bindListeners();
    this.setState(STATE.NOT_VALIDATED);
  }

  bindListeners() {
    this.formElementDomNode.addEventListener('input', this.onFormElementInput, true);
  }

  onFormElementInput() {
    this.validate({isOutsideCalled: false});
  }

  getValidationStateReferenceDomNode() {
    return this.validationStateReferenceSelector !== undefined
      ? this.formElementDomNode.closest(this.validationStateReferenceSelector)
      : this.formElementDomNode;
  }

  setState(newState) {
    this.state = newState;

    setDomNodeDataAttributeByValidatorState(this.getValidationStateReferenceDomNode(), this.state);

    this.onFormElementStateChangedCallback();
  }

  focusFormElement() {
    dispatchNativeEvent(this.getValidationStateReferenceDomNode(), 'focus');
  }

  validate({isOutsideCalled = true} = {}) {
    const
      isRequiredAndNotFilled = this.required ? this.formElementDomNode.value === '' : false,
      isValid = !isRequiredAndNotFilled && this.validateValue(this.formElementDomNode.value);

    this.setState(isRequiredAndNotFilled ? STATE.NOT_FILLED : isValid ? STATE.VALID : STATE.NOT_VALID);

    if (!isValid && isOutsideCalled) {
      this.focusFormElement();
    }

    return isValid;
  }

  validateValue(value) { // eslint-disable-line no-unused-vars
    throw new TypeError('In order to extend AbstractFormElementValidator class you must implement validateValue method.');
  }
}

export default AbstractFormElementValidator;
