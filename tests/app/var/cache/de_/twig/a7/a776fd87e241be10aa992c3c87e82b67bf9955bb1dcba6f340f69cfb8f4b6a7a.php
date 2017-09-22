<?php

/* node_modules/babel-runtime/helpers/defineProperty.js */
class __TwigTemplate_5edf301b431b688d3a249b244f848dff6f667eaf478c4bee830c8ef2cb8c67fa extends Twig_Template
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
        $__internal_f6151d453ce497e90f18ef8a617fd8d2396fe25d9b72433fa24965bc16ea2e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6151d453ce497e90f18ef8a617fd8d2396fe25d9b72433fa24965bc16ea2e43->enter($__internal_f6151d453ce497e90f18ef8a617fd8d2396fe25d9b72433fa24965bc16ea2e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/defineProperty.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (obj, key, value) {
  if (key in obj) {
    (0, _defineProperty2.default)(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
};";
        
        $__internal_f6151d453ce497e90f18ef8a617fd8d2396fe25d9b72433fa24965bc16ea2e43->leave($__internal_f6151d453ce497e90f18ef8a617fd8d2396fe25d9b72433fa24965bc16ea2e43_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/defineProperty.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _defineProperty = require(\"../core-js/object/define-property\");

var _defineProperty2 = _interopRequireDefault(_defineProperty);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (obj, key, value) {
  if (key in obj) {
    (0, _defineProperty2.default)(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
};", "node_modules/babel-runtime/helpers/defineProperty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/defineProperty.js");
    }
}
