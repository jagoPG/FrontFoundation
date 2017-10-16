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

const getLang = (lang) => {
  if (null !== lang) {
    return lang;
  }

  return getHtmlLang();
};

export default (locales = [], lang = null) => {
  locales.forEach(locale => {
    require(`parsleyjs/dist/i18n/${locale}.js`);
  });

  const dividedLang = getLang(lang).split('_');

  let locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  window.Parsley.setLocale(locale);
};
