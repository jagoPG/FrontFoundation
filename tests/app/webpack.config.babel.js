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

import {Webpack} from 'lin3s-distribution';

const options = {
  entry: {
    'app': ['./app.js'],
  },
  input: {
    base: '',
    scss: `scss`,
    includedNodeModules: ['lin3s-front-foundation', 'validatory', 'foes-scrollproxy', 'lin3s-event-bus']
  },
  output: {
    jsPath: './dist',
    jsPublicPath: '/',
    jsFilename: '[name].js',
    jsFilenameProduction: '[name].js',
    cssPath: '',
    cssPublicPath: '/',
    cssFilename: '[name].css',
    cssFilenameProduction: '[name].css'
  },
  postcss: {
    autoprefixer: {
      browsers: ['last 2 versions']
    }
  }
};

export default Webpack(options);
