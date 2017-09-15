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

import 'parsleyjs';
import {
  Parsley,
  Async
} from 'lin3s-front-foundation';
import {onDomReady} from 'lin3s-event-bus';

const testParsleySetLocale = () => {
  console.log('Testing Parsley.setLocale');
  Parsley.setLocale();
};

const testCancelablePromise = () => {
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

const onReady = () => {
  testParsleySetLocale();
  testCancelablePromise();
};

onDomReady(onReady);
