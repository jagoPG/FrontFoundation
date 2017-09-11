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

import Parsley from './Parsley';

export default (inputsSelector) => {
  Parsley.options.excluded = Parsley.options.excluded.concat(', ').concat(inputsSelector);
};
