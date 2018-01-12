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

import './classListToggle';
import './closest';
import './find';
import './findIndex';
import './from';
import './includes';

if (typeof Promise === 'undefined') {
  require('promise/lib/rejection-tracking').enable(); // eslint-disable-line no-undef
  window.Promise = require('promise/lib/es6-extensions.js'); // eslint-disable-line no-undef
}
