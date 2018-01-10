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
import ModalStateChangedEvent from './../../../../event-bus/Modal/ModalStateChangedEvent';

class Modal {

  static OPENED_CSS_CLASS = 'modal--opened';

  static STATE = {
    OPENED: 'OPENED',
    CLOSED: 'CLOSED'
  };

  domNode;
  closeButton;
  state;

  constructor(domNode) {
    this.domNode = domNode;
    this.closeButton = this.domNode.querySelector('.modal__close-button');
    this.content = this.domNode.querySelector('.modal__content');
    this.state = Modal.STATE.CLOSED;

    this.open = this.open.bind(this);
    this.close = this.close.bind(this);
    this.onCloseButtonClick = this.onCloseButtonClick.bind(this);

    this.bindListeners();
  }

  bindListeners() {
    this.domNode.addEventListener('click', this.close);
    this.closeButton.addEventListener('click', this.onCloseButtonClick);
    this.content.addEventListener('click', event => event.stopPropagation());
  }

  onCloseButtonClick(event) {
    event.preventDefault();
    event.stopPropagation();

    this.close();
  }

  open() {
    this.domNode.classList.add(Modal.OPENED_CSS_CLASS);
    this.state = Modal.STATE.OPENED;

    this.publishModalStateChangedEvent();
  }

  close() {
    this.domNode.classList.remove(Modal.OPENED_CSS_CLASS);
    this.state = Modal.STATE.CLOSED;

    this.publishModalStateChangedEvent();
  }

  publishModalStateChangedEvent() {
    LifeTimeEventPublisher.publish(new ModalStateChangedEvent({
      open: this.open,
      close: this.close,
      domNode: this.domNode,
      state: this.state
    }));
  }
}

export default Modal;