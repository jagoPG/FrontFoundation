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

/**
 *  In order to include the needed Parsley.js locale modules during compilation time, and prevent a ReferenceError during
 *  execution time, we must include the locales this way. By wrapping the require function with a conditional, we ensure
 *  that this error is not thrown and breaks the execution process.
 *
 *  We will provide the required locales by setting an env parameter in our project's package.json file.
 *
 *  More info: https://webpack.js.org/plugins/context-replacement-plugin/
 */
if (typeof WEBPACK_ENV_LOCALE !== 'undefined') {
  require(`parsleyjs/dist/i18n/${WEBPACK_ENV_LOCALE}.js`);
}

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
