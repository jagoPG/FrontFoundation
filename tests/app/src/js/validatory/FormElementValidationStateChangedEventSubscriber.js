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

import {EventSubscriber} from 'lin3s-event-bus';
import {Dom} from 'lin3s-front-foundation';
import FormElementValidationStateChangedEvent from './FormElementValidationStateChangedEvent';

class FormElementValidationStateChangedEventSubscriber extends EventSubscriber {

  constructor(domNode, aCallback, aPriority) {
    super(aCallback, aPriority);

    this.domNode = domNode;
  }

  isSubscribedTo(anEvent) {
    const event = new FormElementValidationStateChangedEvent();

    return anEvent.getName() === event.getName()
      && (this.domNode === anEvent.formElementValidatorInstance.formElementDomNode ||
        Dom.isDomNodeDescendantOfDomNode(anEvent.formElementValidatorInstance.formElementDomNode, this.domNode));
  }
}

export default FormElementValidationStateChangedEventSubscriber;
