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

import {LifeTimeEventPublisher, Priority} from 'lin3s-event-bus';
import FormValidationStateChangedEventSubscriber from './FormValidationStateChangedEventSubscriber';
import FormElementValidationStateChangedEventSubscriber from './FormElementValidationStateChangedEventSubscriber';

const
  onFormValidationStateChanged = (domNode, onFormValidationStateChangedCallback, priority) => {
    const formValidationStateChangedSubscriber = new FormValidationStateChangedEventSubscriber(
      domNode,
      onFormValidationStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formValidationStateChangedSubscriber);

    return formValidationStateChangedSubscriber;
  },
  onFormElementValidationStateChanged = (domNode, onFormElementValidationStateChangedCallback, priority) => {
    const formElementValidationStateChangedSubscriber = new FormElementValidationStateChangedEventSubscriber(
      domNode,
      onFormElementValidationStateChangedCallback,
      new Priority(priority)
    );

    LifeTimeEventPublisher.subscribe(formElementValidationStateChangedSubscriber);

    return formElementValidationStateChangedSubscriber;
  };

export {
  onFormValidationStateChanged,
  onFormElementValidationStateChanged
};
