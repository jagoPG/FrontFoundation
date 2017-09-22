<?php

/* node_modules/babel-runtime/helpers/asyncToGenerator.js */
class __TwigTemplate_e60d306f750ade26b0972c8a639d43ffc46413262e355cd969e96e13bfd7ea61 extends Twig_Template
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
        $__internal_2550bd368ec427a33897502faeeafefe0fa375bd78b78969d2bba81b2f1e09db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2550bd368ec427a33897502faeeafefe0fa375bd78b78969d2bba81b2f1e09db->enter($__internal_2550bd368ec427a33897502faeeafefe0fa375bd78b78969d2bba81b2f1e09db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/asyncToGenerator.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (fn) {
  return function () {
    var gen = fn.apply(this, arguments);
    return new _promise2.default(function (resolve, reject) {
      function step(key, arg) {
        try {
          var info = gen[key](arg);
          var value = info.value;
        } catch (error) {
          reject(error);
          return;
        }

        if (info.done) {
          resolve(value);
        } else {
          return _promise2.default.resolve(value).then(function (value) {
            step(\"next\", value);
          }, function (err) {
            step(\"throw\", err);
          });
        }
      }

      return step(\"next\");
    });
  };
};";
        
        $__internal_2550bd368ec427a33897502faeeafefe0fa375bd78b78969d2bba81b2f1e09db->leave($__internal_2550bd368ec427a33897502faeeafefe0fa375bd78b78969d2bba81b2f1e09db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/asyncToGenerator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _promise = require(\"../core-js/promise\");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (fn) {
  return function () {
    var gen = fn.apply(this, arguments);
    return new _promise2.default(function (resolve, reject) {
      function step(key, arg) {
        try {
          var info = gen[key](arg);
          var value = info.value;
        } catch (error) {
          reject(error);
          return;
        }

        if (info.done) {
          resolve(value);
        } else {
          return _promise2.default.resolve(value).then(function (value) {
            step(\"next\", value);
          }, function (err) {
            step(\"throw\", err);
          });
        }
      }

      return step(\"next\");
    });
  };
};", "node_modules/babel-runtime/helpers/asyncToGenerator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/asyncToGenerator.js");
    }
}
