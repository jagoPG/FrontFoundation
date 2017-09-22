<?php

/* node_modules/babel-runtime/helpers/set.js */
class __TwigTemplate_03c05e984cdde3e9e5792587c296171c02abc7e4ad22ffe348a46f9f8fbd9f74 extends Twig_Template
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
        $__internal_5f9149ff2f8ff0f355e962dc82bb40137ca4e35930f15b0e0eb4ab9b9e1f3d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f9149ff2f8ff0f355e962dc82bb40137ca4e35930f15b0e0eb4ab9b9e1f3d53->enter($__internal_5f9149ff2f8ff0f355e962dc82bb40137ca4e35930f15b0e0eb4ab9b9e1f3d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/set.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getPrototypeOf = require(\"../core-js/object/get-prototype-of\");

var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);

var _getOwnPropertyDescriptor = require(\"../core-js/object/get-own-property-descriptor\");

var _getOwnPropertyDescriptor2 = _interopRequireDefault(_getOwnPropertyDescriptor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function set(object, property, value, receiver) {
  var desc = (0, _getOwnPropertyDescriptor2.default)(object, property);

  if (desc === undefined) {
    var parent = (0, _getPrototypeOf2.default)(object);

    if (parent !== null) {
      set(parent, property, value, receiver);
    }
  } else if (\"value\" in desc && desc.writable) {
    desc.value = value;
  } else {
    var setter = desc.set;

    if (setter !== undefined) {
      setter.call(receiver, value);
    }
  }

  return value;
};";
        
        $__internal_5f9149ff2f8ff0f355e962dc82bb40137ca4e35930f15b0e0eb4ab9b9e1f3d53->leave($__internal_5f9149ff2f8ff0f355e962dc82bb40137ca4e35930f15b0e0eb4ab9b9e1f3d53_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/set.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _getPrototypeOf = require(\"../core-js/object/get-prototype-of\");

var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);

var _getOwnPropertyDescriptor = require(\"../core-js/object/get-own-property-descriptor\");

var _getOwnPropertyDescriptor2 = _interopRequireDefault(_getOwnPropertyDescriptor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function set(object, property, value, receiver) {
  var desc = (0, _getOwnPropertyDescriptor2.default)(object, property);

  if (desc === undefined) {
    var parent = (0, _getPrototypeOf2.default)(object);

    if (parent !== null) {
      set(parent, property, value, receiver);
    }
  } else if (\"value\" in desc && desc.writable) {
    desc.value = value;
  } else {
    var setter = desc.set;

    if (setter !== undefined) {
      setter.call(receiver, value);
    }
  }

  return value;
};", "node_modules/babel-runtime/helpers/set.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/set.js");
    }
}
