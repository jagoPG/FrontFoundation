<?php

/* node_modules/babel-runtime/helpers/toConsumableArray.js */
class __TwigTemplate_e12e78d46fdd7fe10fb797b579c99ca44ca4fb83a82f9a167571d90843eda887 extends Twig_Template
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
        $__internal_2e2a2d72a948f230b7edb84038d51dbe363b0ae42b1830f8e0536ecf27ac447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e2a2d72a948f230b7edb84038d51dbe363b0ae42b1830f8e0536ecf27ac447c->enter($__internal_2e2a2d72a948f230b7edb84038d51dbe363b0ae42b1830f8e0536ecf27ac447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/toConsumableArray.js"));

        // line 1
        echo "\"use strict\";

exports.__esModule = true;

var _from = require(\"../core-js/array/from\");

var _from2 = _interopRequireDefault(_from);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr) {
  if (Array.isArray(arr)) {
    for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
      arr2[i] = arr[i];
    }

    return arr2;
  } else {
    return (0, _from2.default)(arr);
  }
};";
        
        $__internal_2e2a2d72a948f230b7edb84038d51dbe363b0ae42b1830f8e0536ecf27ac447c->leave($__internal_2e2a2d72a948f230b7edb84038d51dbe363b0ae42b1830f8e0536ecf27ac447c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/toConsumableArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

exports.__esModule = true;

var _from = require(\"../core-js/array/from\");

var _from2 = _interopRequireDefault(_from);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (arr) {
  if (Array.isArray(arr)) {
    for (var i = 0, arr2 = Array(arr.length); i < arr.length; i++) {
      arr2[i] = arr[i];
    }

    return arr2;
  } else {
    return (0, _from2.default)(arr);
  }
};", "node_modules/babel-runtime/helpers/toConsumableArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/toConsumableArray.js");
    }
}
