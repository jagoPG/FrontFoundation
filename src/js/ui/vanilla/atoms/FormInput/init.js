/*
 * This file is part of the Front Foundation package.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */

import {onDomReady} from 'lin3s-event-bus';
import $ from 'jquery';
import FormInput from './FormInput';

const initFormInputs = () => {
  const $formInputs = $('.js-form-input');

  Array.from($formInputs).forEach(formInput => new FormInput(formInput));
};

onDomReady(initFormInputs, -1);
