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

import {onDomReady} from 'lin3s-event-bus';
import {EventBus} from 'lin3s-front-foundation';

class FormSelectDemo {

  domNode;
  formSelectInstance;

  constructor(domNode) {
    this.domNode = domNode;

    EventBus.onFormSelectInitialized(this.domNode, formSelectInitializedEvent => {
      this.formSelectInstance = formSelectInitializedEvent.formSelectInstance;
      this.init();
    });
  }

  init() {
    this.bindListeners();

    setTimeout(() => {
      this.formSelectInstance.open();
    }, 2000);

    setTimeout(() => {
      const options = [{label: 'one', value: 1}, {label: 'two', value: 2}, {label: 'three', value: 3}];
      this.formSelectInstance.update({options});
    }, 5000);
  }

  bindListeners() {
    EventBus.onFormSelectOptionSelected(this.domNode, formSelectOptionSelectedEvent => {
      console.log('FormSelect option selected: ', formSelectOptionSelectedEvent.optionValue);
    });

    EventBus.onFormSelectStateChanged(this.domNode, formSelectStateChangedEvent => {
      console.log('FormSelect state changed: ', formSelectStateChangedEvent.state);
    });
  }
}

const initFormSelectDemo = () => {
  const formSelect = document.querySelector('.form-select-demo');
  new FormSelectDemo(formSelect);
};

onDomReady(initFormSelectDemo);
