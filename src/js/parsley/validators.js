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
  defaultValueValidator = (defaultValue, messages) => ({
    validateString: value => value !== defaultValue,
    messages
  }),
  phoneValidator = messages => ({
    validateString: value => {
      const re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{3,6}$/im; // eslint-disable-line no-useless-escape
      return re.test(value);
    },
    messages
  });

export {
  defaultValueValidator,
  phoneValidator
};
