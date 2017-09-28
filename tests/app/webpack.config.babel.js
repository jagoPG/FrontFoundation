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
import webpack from 'webpack';
import {BundleAnalyzerPlugin} from 'webpack-bundle-analyzer';
import autoprefixer from 'autoprefixer';
import ExtractTextPlugin from 'extract-text-webpack-plugin';
import StyleLintPlugin from 'stylelint-webpack-plugin';
import Webpack from 'webpack';

const include = join(__dirname);

const parseLocalesFromEnvOptions = options => {
  if (options === undefined || typeof options.locales !== 'string') {
    return null;
  }

  const splittedLocales = options.locales !== null ? options.locales.split(',') : [];

  let parsleyLocales = '';

  if (splittedLocales.length > 0) {
    splittedLocales.forEach((locale, index) => parsleyLocales += `${index !== 0 ? '|' : ''}${locale}`);
    return new RegExp(`(${parsleyLocales})\.js`);
  }

  return null;
};

const getPlugins = options => {
  const esLintDefaultOptions = {
      configFile: join(__dirname, '.eslintrc.js')
    },
    styleLintDefaultOptions = {
      configFile: join(__dirname, '.stylelintrc.js'),
      files: ['src/**/*.scss', 'app.scss'],
      syntax: 'scss'
    };

  const plugins = [
    new StyleLintPlugin(styleLintDefaultOptions),
    new ExtractTextPlugin('[name].css'),
    new Webpack.LoaderOptionsPlugin({
      options: {
        sassLoader: {
          includePaths: [join(__dirname, 'src/scss')]
        },
        eslint: esLintDefaultOptions
      }
    }),
    new webpack.ContextReplacementPlugin(
      /parsleyjs[\/\\]dist[\/\\]i18n/,
      parseLocalesFromEnvOptions(options)
    )
  ];

  if (options.analyze) {
    plugins.push(new BundleAnalyzerPlugin());
  }

  return plugins;
};

export default options => {
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
          use: [{
            loader: 'babel-loader',
            options: {
              presets: ['react', 'es2015', 'stage-2'],
              plugins: ['transform-class-properties'],
              compact: false
            }
          }],
          include,
          exclude: /(node_modules)/,
        }, {
          test: /\.(s?css)$/,
          use: ExtractTextPlugin.extract({
            publicPath: '/',
            fallback: 'style-loader',
            use: [{
              loader: 'css-loader',
            }, {
              loader: 'postcss-loader',
              options: {
                plugins: () => [
                  autoprefixer({browsers: ['last 2 versions']})
                ]
              }
            }, {
              loader: 'sass-loader'
            }]
          })
        }
      ]
    },
    plugins: getPlugins(options)
  }
};
