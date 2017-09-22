<?php

/* node_modules/babel-runtime/helpers/asyncGeneratorDelegate.js */
class __TwigTemplate_49cc3f33bcb1a509c75b823115c62d68e4ce49d4b62766353f8c376643305e4e extends Twig_Template
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
        $__internal_0c0e17ec80274716a1e96d40346b55dcea3678291c0532ebf1331fe29f420577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0e17ec80274716a1e96d40346b55dcea3678291c0532ebf1331fe29f420577->enter($__internal_0c0e17ec80274716a1e96d40346b55dcea3678291c0532ebf1331fe29f420577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/asyncGeneratorDelegate.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (inner, awaitWrap) {
  var iter = {},
      waiting = false;

  function pump(key, value) {
    waiting = true;
    value = new _promise2.default(function (resolve) {
      resolve(inner[key](value));
    });
    return {
      done: false,
      value: awaitWrap(value)
    };
  }

  ;

  if (typeof _symbol2.default === \"function\" && _iterator2.default) {
    iter[_iterator2.default] = function () {
      return this;
    };
  }

  iter.next = function (value) {
    if (waiting) {
      waiting = false;
      return value;
    }

    return pump(\"next\", value);
  };

  if (typeof inner.throw === \"function\") {
    iter.throw = function (value) {
      if (waiting) {
        waiting = false;
        throw value;
      }

      return pump(\"throw\", value);
    };
  }

  if (typeof inner.return === \"function\") {
    iter.return = function (value) {
      return pump(\"return\", value);
    };
  }

  return iter;
};";
        
        $__internal_0c0e17ec80274716a1e96d40346b55dcea3678291c0532ebf1331fe29f420577->leave($__internal_0c0e17ec80274716a1e96d40346b55dcea3678291c0532ebf1331fe29f420577_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/asyncGeneratorDelegate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _iterator = require(\"../core-js/symbol/iterator\");

var _iterator2 = _interopRequireDefault(_iterator);

var _symbol = require(\"../core-js/symbol\");

var _symbol2 = _interopRequireDefault(_symbol);

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (inner, awaitWrap) {
  var iter = {},
      waiting = false;

  function pump(key, value) {
    waiting = true;
    value = new _promise2.default(function (resolve) {
      resolve(inner[key](value));
    });
    return {
      done: false,
      value: awaitWrap(value)
    };
  }

  ;

  if (typeof _symbol2.default === \"function\" && _iterator2.default) {
    iter[_iterator2.default] = function () {
      return this;
    };
  }

  iter.next = function (value) {
    if (waiting) {
      waiting = false;
      return value;
    }

    return pump(\"next\", value);
  };

  if (typeof inner.throw === \"function\") {
    iter.throw = function (value) {
      if (waiting) {
        waiting = false;
        throw value;
      }

      return pump(\"throw\", value);
    };
  }

  if (typeof inner.return === \"function\") {
    iter.return = function (value) {
      return pump(\"return\", value);
    };
  }

  return iter;
};", "node_modules/babel-runtime/helpers/asyncGeneratorDelegate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/asyncGeneratorDelegate.js");
    }
}
