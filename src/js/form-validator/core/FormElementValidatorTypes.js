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

const VALIDATOR_TYPE = {
  PATTERN: 'PATTERN'
};

const getFormElementValidatorType = formElementDomNode => {
  if (formElementDomNode.hasAttribute('data-validation-pattern')) {
    return VALIDATOR_TYPE.PATTERN;
  }
};

export {
  VALIDATOR_TYPE,
  getFormElementValidatorType
};
