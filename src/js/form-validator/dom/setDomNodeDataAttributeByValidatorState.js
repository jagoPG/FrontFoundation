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

import {STATE_DATA_ATTRIBUTE_VALUE} from './../core/FormValidatorState';

export default (domNode, validatorState) => {
  domNode.dataset.validationState = STATE_DATA_ATTRIBUTE_VALUE[validatorState];
};
