/*
 * This file is part of the BenGorCookies library.
 *
 * (c) Beñat Espiña <benatespina@gmail.com>
 * (c) Gorka Laucirica <gorka.lauzirika@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

import {join} from 'path';

const include = join(__dirname);

export default () => {
  return {
    entry: './app.js',
    output: {
      path: join(__dirname, 'dist'),
      libraryTarget: 'umd',
    },
    devtool: 'source-map',
    module: {
      loaders: [
        {
          test: /\.js$/,
          loader: 'babel-loader',
          include
        }
      ]
    }
  }
};
