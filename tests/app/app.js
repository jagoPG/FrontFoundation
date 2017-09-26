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

import 'parsleyjs';
import {
  Parsley,
  Async,
  Browser,
  Dom
} from 'lin3s-front-foundation';
import {onDomReady} from 'lin3s-event-bus';

import './src/js/GMapGeocoder';
import './src/js/React/init';

import './app.scss';

const testParsleySetLocale = () => {
  console.log('Testing Parsley.setLocale');
  Parsley.setLocale();
};

const testAsyncCancelablePromise = () => {
  console.log('Testing Promise.cancelablePromise');

  const myPromise = new Promise(resolve => {
    setTimeout(() => {
      resolve('Promise inner process ended');
    }, 1000);
  });

  const myCancelablePromise = Async.cancelablePromise(myPromise);

  myCancelablePromise.promise.then(resolvedObject => {
    console.log('myCancelablePromise has been resolved', resolvedObject);
  }, rejectedObject => {
    console.log('myCancelablePromise has been rejected', rejectedObject);
  });

  myCancelablePromise.cancel();
};

const testBrowserIsIE11 = () => {
  console.log('Testing Browser.testIsIE11');

  const isIE11 = Browser.isIE11();

  console.log('Is IE11?', isIE11);
};

const testDomLoadScript = () => {
  console.log('Testing Dom.loadScript');

  const scriptPath = 'https://code.jquery.com/jquery-3.2.1.slim.min.js';
  const scriptLoadPromise = Dom.loadScript(scriptPath);

  scriptLoadPromise.then(resolvedObject => {
    console.log('scriptLoadPromise has been resolved. We can safely use the loaded script.', resolvedObject);
  }, rejectedObject => {
    console.log('scriptLoadPromise has been rejected', rejectedObject);
  });
};

const testDomWaitImagesLoadInDomNode = () => {
  const imagesCollection = document.querySelector('.images__collection');
  const imagesLoadPromise = Dom.waitImagesLoadInDomNode(imagesCollection);

  imagesLoadPromise.then(resolvedObject => {
    console.log('imagesLoadPromise has been resolved. We know for sure that our images has been loaded.',
      resolvedObject);
  }, rejectedObject => {
    console.log('imagesLoadPromise has been rejected', rejectedObject);
  });
};

const onReady = () => {
  testParsleySetLocale();
  testAsyncCancelablePromise();
  testBrowserIsIE11();
  testDomLoadScript();
  testDomWaitImagesLoadInDomNode();
};

onDomReady(onReady);
