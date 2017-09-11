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

import Parsley from 'parsleyjs';
import 'parsleyjs/dist/i18n/en';
import 'parsleyjs/dist/i18n/es';

const getLang = (lang) => {
  if (null !== lang) {
    return lang;
  }

  return document.getElementsByTagName('html')[0].getAttribute('lang');
};

const initParsley = (lang = null) => {
  const dividedLang = getLang(lang).split('_');

  let locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  Parsley.setLocale(locale);
};

const excludeFormFieldsFromParsley = (inputsSelector) => {
  Parsley.options.excluded = Parsley.options.excluded.concat(', ').concat(inputsSelector);
};

export {
  Parsley,
  initParsley,
  excludeFormFieldsFromParsley
};
