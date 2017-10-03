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

import Webpack from 'webpack';

/* eslint-disable no-useless-escape */

const getParsleyLocalesRegExp = locales => {
  if (locales === undefined || !Array.isArray(locales)) {
    return null;
  }

  let parsleyLocales = '';

  if (locales.length > 0) {
    locales.forEach((locale, index) => {
      parsleyLocales += `${index !== 0 ? '|' : ''}${locale}`;
    });

    return new RegExp(`(${parsleyLocales})\.js`);
  }

  return null;
};

const parsleyWebpackContextReplacementPlugin = (locales) => new Webpack.ContextReplacementPlugin(
  /parsleyjs[\/\\]dist[\/\\]i18n/,
  getParsleyLocalesRegExp(locales)
);

/* eslint-enable no-useless-escape */

export default parsleyWebpackContextReplacementPlugin;
