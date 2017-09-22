<?php

/* node_modules/babel-runtime/helpers/get.js */
class __TwigTemplate_b5c4e0981c1d16ce473af682a67c791522d209c614d2da8efa1b6d1d49cc98dc extends Twig_Template
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
        $__internal_3b81da578a21dd10da6d5610c3d691921f83d6382e3d6e53a3ca154c1e2f6b82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b81da578a21dd10da6d5610c3d691921f83d6382e3d6e53a3ca154c1e2f6b82->enter($__internal_3b81da578a21dd10da6d5610c3d691921f83d6382e3d6e53a3ca154c1e2f6b82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/get.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _getPrototypeOf = require(\"../core-js/object/get-prototype-of\");

var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);

var _getOwnPropertyDescriptor = require(\"../core-js/object/get-own-property-descriptor\");

var _getOwnPropertyDescriptor2 = _interopRequireDefault(_getOwnPropertyDescriptor);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function get(object, property, receiver) {
  if (object === null) object = Function.prototype;
  var desc = (0, _getOwnPropertyDescriptor2.default)(object, property);

  if (desc === undefined) {
    var parent = (0, _getPrototypeOf2.default)(object);

    if (parent === null) {
      return undefined;
    } else {
      return get(parent, property, receiver);
    }
  } else if (\"value\" in desc) {
    return desc.value;
  } else {
    var getter = desc.get;

    if (getter === undefined) {
      return undefined;
    }

    return getter.call(receiver);
  }
};";
        
        $__internal_3b81da578a21dd10da6d5610c3d691921f83d6382e3d6e53a3ca154c1e2f6b82->leave($__internal_3b81da578a21dd10da6d5610c3d691921f83d6382e3d6e53a3ca154c1e2f6b82_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/get.js";
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

exports.default = function get(object, property, receiver) {
  if (object === null) object = Function.prototype;
  var desc = (0, _getOwnPropertyDescriptor2.default)(object, property);

  if (desc === undefined) {
    var parent = (0, _getPrototypeOf2.default)(object);

    if (parent === null) {
      return undefined;
    } else {
      return get(parent, property, receiver);
    }
  } else if (\"value\" in desc) {
    return desc.value;
  } else {
    var getter = desc.get;

    if (getter === undefined) {
      return undefined;
    }

    return getter.call(receiver);
  }
};", "node_modules/babel-runtime/helpers/get.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/get.js");
    }
}
