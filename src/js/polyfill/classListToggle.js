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

const
  nativeToggle = DOMTokenList.prototype.toggle,
  isClassListToggleSupported = () => {
    if (typeof window.DOMTokenList === 'undefined') {
      return false;
    }

    const element = document.createElement('div');

    let toggleRet = element.classList.toggle('t', true);
    if (toggleRet !== true || !element.classList.contains('t')) {
      return false;
    }

    element.classList.add('o');
    toggleRet = element.classList.toggle('o', false);
    if (toggleRet !== false || element.classList.contains('o')) {
      return false;
    }

    toggleRet = element.classList.toggle('p', false);
    if (toggleRet !== false || element.classList.contains('p')) {
      return false;
    }

    return true;
  },
  classListToggle = function (className, force) { // eslint-disable-line func-style
    if (arguments.length > 0 && this.contains(className) === force) {
      return force;
    }

    return nativeToggle.call(this, className); // eslint-disable-line prefer-reflect
  };

if (!isClassListToggleSupported()) {
  DOMTokenList.prototype.toggle = classListToggle;
}
