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

class FormCheckbox {

  domNode;

  constructor(domNode) {
    this.domNode = domNode;
    this.checkboxNode = this.domNode.querySelector('.form-checkbox__check');

    this.domNode.addEventListener('keydown', this.onKeyDown.bind(this));
  }

  onKeyDown(event) {
    const keyCode = event.which;

    if (keyCode !== 13) {
      return;
    }

    this.checkboxNode.checked = !this.checkboxNode.checked;
  }
}

export default FormCheckbox;
