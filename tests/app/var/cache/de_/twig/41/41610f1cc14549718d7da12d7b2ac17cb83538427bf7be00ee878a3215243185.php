<?php

/* node_modules/lin3s-front-foundation/dist/js/parsley/setLocale.js */
class __TwigTemplate_daeb51dd3c35d10f2e303327f7e858d396bc8c7c72ce6a74b89119ebee39cda3 extends Twig_Template
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
        $__internal_0fbbc8353a8805f793a809a7f6ecf712b542cea394b9c63c11c0d9429def6c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbbc8353a8805f793a809a7f6ecf712b542cea394b9c63c11c0d9429def6c4d->enter($__internal_0fbbc8353a8805f793a809a7f6ecf712b542cea394b9c63c11c0d9429def6c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lin3s-front-foundation/dist/js/parsley/setLocale.js"));

        // line 1
        echo "'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
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
  require('parsleyjs/dist/i18n/' + WEBPACK_ENV_LOCALE + '.js');
}

var getLang = function getLang(lang) {
  if (null !== lang) {
    return lang;
  }

  return document.getElementsByTagName('html')[0].getAttribute('lang');
};

exports.default = function () {
  var lang = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

  var dividedLang = getLang(lang).split('_');

  var locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  window.Parsley.setLocale(locale);
};";
        
        $__internal_0fbbc8353a8805f793a809a7f6ecf712b542cea394b9c63c11c0d9429def6c4d->leave($__internal_0fbbc8353a8805f793a809a7f6ecf712b542cea394b9c63c11c0d9429def6c4d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lin3s-front-foundation/dist/js/parsley/setLocale.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
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
  require('parsleyjs/dist/i18n/' + WEBPACK_ENV_LOCALE + '.js');
}

var getLang = function getLang(lang) {
  if (null !== lang) {
    return lang;
  }

  return document.getElementsByTagName('html')[0].getAttribute('lang');
};

exports.default = function () {
  var lang = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

  var dividedLang = getLang(lang).split('_');

  var locale = lang;
  if (dividedLang.length > 0) {
    locale = dividedLang[0];
  }

  window.Parsley.setLocale(locale);
};", "node_modules/lin3s-front-foundation/dist/js/parsley/setLocale.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lin3s-front-foundation/dist/js/parsley/setLocale.js");
    }
}
