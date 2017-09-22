<?php

/* node_modules/parsleyjs/src/parsley/main.js */
class __TwigTemplate_479bf68bb1ddf8f316a4e218f8fc1ff09a87a6de1c7fa1c4d0dcb3529e9eb53d extends Twig_Template
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
        $__internal_7a8916c0183c9c03a876a0928ef6b08366ff4fadd82f598f28b5afed2aebc11f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a8916c0183c9c03a876a0928ef6b08366ff4fadd82f598f28b5afed2aebc11f->enter($__internal_7a8916c0183c9c03a876a0928ef6b08366ff4fadd82f598f28b5afed2aebc11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/src/parsley/main.js"));

        // line 1
        echo "import \$ from 'jquery';
import Utils from './utils';
import Defaults from './defaults';
import Base from './base';
import ValidatorRegistry from './validator_registry';
import UI from './ui';
import Form from './form';
import Field from './field';
import Multiple from './multiple';
import Factory from './factory';

var vernums = \$.fn.jquery.split('.');
if (parseInt(vernums[0]) <= 1 && parseInt(vernums[1]) < 8) {
  throw \"The loaded version of jQuery is too old. Please upgrade to 1.8.x or better.\";
}
if (!vernums.forEach) {
  Utils.warn('Parsley requires ES5 to run properly. Please include https://github.com/es-shims/es5-shim');
}
// Inherit `on`, `off` & `trigger` to Parsley:
var Parsley = Object.assign(new Base(), {
    element: document,
    \$element: \$(document),
    actualizeOptions: null,
    _resetOptions: null,
    Factory: Factory,
    version: '@@version'
  });

// Supplement Field and Form with Base
// This way, the constructors will have access to those methods
Object.assign(Field.prototype, UI.Field, Base.prototype);
Object.assign(Form.prototype, UI.Form, Base.prototype);
// Inherit actualizeOptions and _resetOptions:
Object.assign(Factory.prototype, Base.prototype);

// ### jQuery API
// `\$('.elem').parsley(options)` or `\$('.elem').psly(options)`
\$.fn.parsley = \$.fn.psly = function (options) {
  if (this.length > 1) {
    var instances = [];

    this.each(function () {
      instances.push(\$(this).parsley(options));
    });

    return instances;
  }

  // Return undefined if applied to non existing DOM element
  if (!\$(this).length) {
    Utils.warn('You must bind Parsley on an existing element.');

    return;
  }

  return new Factory(this[0], options);
};

// ### Field and Form extension
// Ensure the extension is now defined if it wasn't previously
if ('undefined' === typeof window.ParsleyExtend)
  window.ParsleyExtend = {};

// ### Parsley config
// Inherit from ParsleyDefault, and copy over any existing values
Parsley.options = Object.assign(Utils.objectCreate(Defaults), window.ParsleyConfig);
window.ParsleyConfig = Parsley.options; // Old way of accessing global options

// ### Globals
window.Parsley = window.psly = Parsley;
Parsley.Utils = Utils;
window.ParsleyUtils = {};
\$.each(Utils, (key, value) => {
  if ('function' === typeof value) {
    window.ParsleyUtils[key] = (...args) => {
      Utils.warnOnce('Accessing `window.ParsleyUtils` is deprecated. Use `window.Parsley.Utils` instead.');
      return Utils[key](...args);
    };
  }
});

// ### Define methods that forward to the registry, and deprecate all access except through window.Parsley
var registry = window.Parsley._validatorRegistry = new ValidatorRegistry(window.ParsleyConfig.validators, window.ParsleyConfig.i18n);
window.ParsleyValidator = {};
\$.each('setLocale addCatalog addMessage addMessages getErrorMessage formatMessage addValidator updateValidator removeValidator'.split(' '), function (i, method) {
  window.Parsley[method] = (...args) => registry[method](...args);
  window.ParsleyValidator[method] = function () {
    Utils.warnOnce(`Accessing the method '\${method}' through Validator is deprecated. Simply call 'window.Parsley.\${method}(...)'`);
    return window.Parsley[method](...arguments);
  };
});

// ### UI
// Deprecated global object
window.Parsley.UI = UI;
window.ParsleyUI = {
  removeError: function (instance, name, doNotUpdateClass) {
    var updateClass = true !== doNotUpdateClass;
    Utils.warnOnce(`Accessing UI is deprecated. Call 'removeError' on the instance directly. Please comment in issue 1073 as to your need to call this method.`);
    return instance.removeError(name, {updateClass});
  },
  getErrorsMessages: function (instance) {
    Utils.warnOnce(`Accessing UI is deprecated. Call 'getErrorsMessages' on the instance directly.`);
    return instance.getErrorsMessages();
  }
};
\$.each('addError updateError'.split(' '), function (i, method) {
  window.ParsleyUI[method] = function (instance, name, message, assert, doNotUpdateClass) {
    var updateClass = true !== doNotUpdateClass;
    Utils.warnOnce(`Accessing UI is deprecated. Call '\${method}' on the instance directly. Please comment in issue 1073 as to your need to call this method.`);
    return instance[method](name, {message, assert, updateClass});
  };
});

// ### PARSLEY auto-binding
// Prevent it by setting `ParsleyConfig.autoBind` to `false`
if (false !== window.ParsleyConfig.autoBind) {
  \$(function () {
    // Works only on `data-parsley-validate`.
    if (\$('[data-parsley-validate]').length)
      \$('[data-parsley-validate]').parsley();
  });
}

export default Parsley;
";
        
        $__internal_7a8916c0183c9c03a876a0928ef6b08366ff4fadd82f598f28b5afed2aebc11f->leave($__internal_7a8916c0183c9c03a876a0928ef6b08366ff4fadd82f598f28b5afed2aebc11f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/src/parsley/main.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("import \$ from 'jquery';
import Utils from './utils';
import Defaults from './defaults';
import Base from './base';
import ValidatorRegistry from './validator_registry';
import UI from './ui';
import Form from './form';
import Field from './field';
import Multiple from './multiple';
import Factory from './factory';

var vernums = \$.fn.jquery.split('.');
if (parseInt(vernums[0]) <= 1 && parseInt(vernums[1]) < 8) {
  throw \"The loaded version of jQuery is too old. Please upgrade to 1.8.x or better.\";
}
if (!vernums.forEach) {
  Utils.warn('Parsley requires ES5 to run properly. Please include https://github.com/es-shims/es5-shim');
}
// Inherit `on`, `off` & `trigger` to Parsley:
var Parsley = Object.assign(new Base(), {
    element: document,
    \$element: \$(document),
    actualizeOptions: null,
    _resetOptions: null,
    Factory: Factory,
    version: '@@version'
  });

// Supplement Field and Form with Base
// This way, the constructors will have access to those methods
Object.assign(Field.prototype, UI.Field, Base.prototype);
Object.assign(Form.prototype, UI.Form, Base.prototype);
// Inherit actualizeOptions and _resetOptions:
Object.assign(Factory.prototype, Base.prototype);

// ### jQuery API
// `\$('.elem').parsley(options)` or `\$('.elem').psly(options)`
\$.fn.parsley = \$.fn.psly = function (options) {
  if (this.length > 1) {
    var instances = [];

    this.each(function () {
      instances.push(\$(this).parsley(options));
    });

    return instances;
  }

  // Return undefined if applied to non existing DOM element
  if (!\$(this).length) {
    Utils.warn('You must bind Parsley on an existing element.');

    return;
  }

  return new Factory(this[0], options);
};

// ### Field and Form extension
// Ensure the extension is now defined if it wasn't previously
if ('undefined' === typeof window.ParsleyExtend)
  window.ParsleyExtend = {};

// ### Parsley config
// Inherit from ParsleyDefault, and copy over any existing values
Parsley.options = Object.assign(Utils.objectCreate(Defaults), window.ParsleyConfig);
window.ParsleyConfig = Parsley.options; // Old way of accessing global options

// ### Globals
window.Parsley = window.psly = Parsley;
Parsley.Utils = Utils;
window.ParsleyUtils = {};
\$.each(Utils, (key, value) => {
  if ('function' === typeof value) {
    window.ParsleyUtils[key] = (...args) => {
      Utils.warnOnce('Accessing `window.ParsleyUtils` is deprecated. Use `window.Parsley.Utils` instead.');
      return Utils[key](...args);
    };
  }
});

// ### Define methods that forward to the registry, and deprecate all access except through window.Parsley
var registry = window.Parsley._validatorRegistry = new ValidatorRegistry(window.ParsleyConfig.validators, window.ParsleyConfig.i18n);
window.ParsleyValidator = {};
\$.each('setLocale addCatalog addMessage addMessages getErrorMessage formatMessage addValidator updateValidator removeValidator'.split(' '), function (i, method) {
  window.Parsley[method] = (...args) => registry[method](...args);
  window.ParsleyValidator[method] = function () {
    Utils.warnOnce(`Accessing the method '\${method}' through Validator is deprecated. Simply call 'window.Parsley.\${method}(...)'`);
    return window.Parsley[method](...arguments);
  };
});

// ### UI
// Deprecated global object
window.Parsley.UI = UI;
window.ParsleyUI = {
  removeError: function (instance, name, doNotUpdateClass) {
    var updateClass = true !== doNotUpdateClass;
    Utils.warnOnce(`Accessing UI is deprecated. Call 'removeError' on the instance directly. Please comment in issue 1073 as to your need to call this method.`);
    return instance.removeError(name, {updateClass});
  },
  getErrorsMessages: function (instance) {
    Utils.warnOnce(`Accessing UI is deprecated. Call 'getErrorsMessages' on the instance directly.`);
    return instance.getErrorsMessages();
  }
};
\$.each('addError updateError'.split(' '), function (i, method) {
  window.ParsleyUI[method] = function (instance, name, message, assert, doNotUpdateClass) {
    var updateClass = true !== doNotUpdateClass;
    Utils.warnOnce(`Accessing UI is deprecated. Call '\${method}' on the instance directly. Please comment in issue 1073 as to your need to call this method.`);
    return instance[method](name, {message, assert, updateClass});
  };
});

// ### PARSLEY auto-binding
// Prevent it by setting `ParsleyConfig.autoBind` to `false`
if (false !== window.ParsleyConfig.autoBind) {
  \$(function () {
    // Works only on `data-parsley-validate`.
    if (\$('[data-parsley-validate]').length)
      \$('[data-parsley-validate]').parsley();
  });
}

export default Parsley;
", "node_modules/parsleyjs/src/parsley/main.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/src/parsley/main.js");
    }
}
