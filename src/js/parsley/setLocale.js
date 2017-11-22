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

import getHtmlLang from './../dom/getHtmlLang';

/* eslint-disable no-undef */
if (typeof WEBPACK_ENV_LOCALE !== 'undefined') {
  require(`parsleyjs/dist/i18n/${WEBPACK_ENV_LOCALE}.js`);
}
/* eslint-enable no-undef */

const getLang = (lang) => {
  if (null !== lang) {
    return lang;
  }

  return getHtmlLang();
};

export default (lang = null) => {
  const dividedLang = getLang(lang).split('_');

  let locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  window.Parsley.setLocale(locale);
};
