<?php

/* app.js */
class __TwigTemplate_f1bac3160d4ae2970ebabfeba3bd9c95dfe412742ff8450f0b249be1b7b1e6c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af928c535067665c88339174b3ec6dadd74f9c4a02078cb64ed015fa1990228e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af928c535067665c88339174b3ec6dadd74f9c4a02078cb64ed015fa1990228e->enter($__internal_af928c535067665c88339174b3ec6dadd74f9c4a02078cb64ed015fa1990228e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "app.js"));

        // line 1
        echo "/*
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
    console.log('imagesLoadPromise has been resolved. We know for sure that our images has been loaded.', resolvedObject);
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
";
        
        $__internal_af928c535067665c88339174b3ec6dadd74f9c4a02078cb64ed015fa1990228e->leave($__internal_af928c535067665c88339174b3ec6dadd74f9c4a02078cb64ed015fa1990228e_prof);

    }

    public function getTemplateName()
    {
        return "app.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
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
    console.log('imagesLoadPromise has been resolved. We know for sure that our images has been loaded.', resolvedObject);
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
", "app.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/app.js");
    }
}
