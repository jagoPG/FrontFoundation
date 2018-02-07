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

import './src/js/polyfill/index';
import {
  Async,
  Browser,
  Cookies,
  EventBus,
  Dom
} from 'lin3s-front-foundation';
import {onDomReady, LifeTimeEventPublisher} from 'lin3s-event-bus';
import FormValidationStateChangedEvent from './src/js/validatory/FormValidationStateChangedEvent';
import FormElementValidationStateChangedEvent from './src/js/validatory/FormElementValidationStateChangedEvent';
import {onFormValidationStateChanged, onFormElementValidationStateChanged} from './src/js/validatory/Subscriptions';
import {init, STATE} from 'validatory';

import './src/js/GMapGeocoderDemo';
import './src/js/FormSelectDemo';
import './src/js/React/init';
import './src/scss/app.scss';

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

const testDomInjectScript = () => {
  console.log('Testing Dom.injectScript');

  const mainDomNode = document.querySelector('main');

  const
    testScriptA = `console.log('This is the injected script A');`,
    testScriptB = `console.log('This is the injected script B');`;

  Dom.injectScript(testScriptA);
  Dom.injectScript(testScriptB, mainDomNode);
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

const testValidatory = () => {
  const getStateString = stateValue => {
    switch (stateValue) {
      case STATE.VALID:
        return 'VALID';
      case STATE.NOT_VALID:
        return 'NOT VALID';
      case STATE.NOT_VALIDATED:
        return 'NOT VALIDATED';
      case STATE.NOT_FILLED:
        return 'NOT FILLED';
    }
  };

  const
    formValidationStateChangedCallback = instance => {
      LifeTimeEventPublisher.publish(new FormValidationStateChangedEvent(instance));
    },
    formElementValidationStateChangedCallback = instance => {
      LifeTimeEventPublisher.publish(new FormElementValidationStateChangedEvent(instance));
    };

  init({
    formSelector: '#validatory-form',
    formElementSelector: '#validatory-form input, #validatory-form select, #validatory-form textarea',
    onFormValidationStateChanged: formValidationStateChangedCallback,
    onFormElementValidationStateChanged: formElementValidationStateChangedCallback
  });

  init({
    formSelector: '#validatory-form-react',
    formElementSelector: '#validatory-form-react input, #validatory-form-react select, #validatory-form-react textarea'
  });

  onFormValidationStateChanged(
    document.getElementById('validatory-form'),
    formValidationStateChangedEvent => {
      console.log(`Form state changed to: [${getStateString(formValidationStateChangedEvent.formValidatorInstance.state)}]`); // eslint-disable-line max-len
    }
  );

  onFormElementValidationStateChanged(
    document.getElementById('validatory-form'),
    formElementValidationStateChangedEvent => {
      console.log(`Form element state changed to: [${getStateString(formElementValidationStateChangedEvent.formElementValidatorInstance.state)}]`); // eslint-disable-line max-len
    }
  );
};

const testCookies = () => {
  const nonExistentCookie = Cookies.read(`${(new Date()).getTime()}-random-name`);

  if (nonExistentCookie !== undefined) {
    console.error(`Cookies.read for non-existent cookie should return undefined and returns ${nonExistentCookie}`);
  } else {
    console.log('Cookies.read for non-existent cookie returns undefined');
  }

  const testCookieName = 'test-cookie-name',
    testCookieValue = `current time: ${(new Date()).getTime()}`;

  EventBus.Cookies.onWritten(({cookie}) => {
    console.log(`Cookies.write launches an event with name ${cookie.name} and value ${cookie.value}`);
  });

  Cookies.write({
    name: testCookieName,
    value: testCookieValue,
  });
  const myCookieValue = Cookies.read(testCookieName);

  if (myCookieValue !== testCookieValue) {
    console.error(`Cookies.read for existent cookie should return ${testCookieValue} and returns ${myCookieValue}`);
  } else {
    console.log(`Cookies.read for existent cookie returns correct value: ${myCookieValue}`);
  }
};

const scrollToWithMenuLinks = () => {
  const links = document.querySelectorAll('.menu__list .menu__link');

  const handleClick = event => Dom.scrollToElement(event.target.hash, {duration: 250, offset: 10});

  Array.from(links, link => {
    link.addEventListener('click', handleClick, false);
  });
};

const onReady = () => {
  testAsyncCancelablePromise();
  testBrowserIsIE11();
  testDomLoadScript();
  testDomInjectScript();
  testDomWaitImagesLoadInDomNode();
  testValidatory();
  testCookies();
  scrollToWithMenuLinks();
};

onDomReady(onReady);
