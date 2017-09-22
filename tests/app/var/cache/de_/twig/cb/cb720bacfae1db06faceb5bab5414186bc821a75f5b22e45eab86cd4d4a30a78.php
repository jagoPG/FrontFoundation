<?php

/* node_modules/babel-runtime/helpers/extends.js */
class __TwigTemplate_3e56c7531aa8b5c080b72ba8c23be02b7efd11066d93ae199f77023b216448ad extends Twig_Template
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
        $__internal_de34d4e4f3405d9937dfe70c82aa2d7d2656d62703fbc1c22f07a2d9bfa52f18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de34d4e4f3405d9937dfe70c82aa2d7d2656d62703fbc1c22f07a2d9bfa52f18->enter($__internal_de34d4e4f3405d9937dfe70c82aa2d7d2656d62703fbc1c22f07a2d9bfa52f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/extends.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _assign = require(\"../core-js/object/assign\");

var _assign2 = _interopRequireDefault(_assign);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _assign2.default || function (target) {
  for (var i = 1; i < arguments.length; i++) {
    var source = arguments[i];

    for (var key in source) {
      if (Object.prototype.hasOwnProperty.call(source, key)) {
        target[key] = source[key];
      }
    }
  }

  return target;
};";
        
        $__internal_de34d4e4f3405d9937dfe70c82aa2d7d2656d62703fbc1c22f07a2d9bfa52f18->leave($__internal_de34d4e4f3405d9937dfe70c82aa2d7d2656d62703fbc1c22f07a2d9bfa52f18_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/extends.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _assign = require(\"../core-js/object/assign\");

var _assign2 = _interopRequireDefault(_assign);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = _assign2.default || function (target) {
  for (var i = 1; i < arguments.length; i++) {
    var source = arguments[i];

    for (var key in source) {
      if (Object.prototype.hasOwnProperty.call(source, key)) {
        target[key] = source[key];
      }
    }
  }

  return target;
};", "node_modules/babel-runtime/helpers/extends.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/extends.js");
    }
}
