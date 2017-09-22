<?php

/* node_modules/core-js/modules/_ctx.js */
class __TwigTemplate_a52533c6c86ccc5cb6ef3e7436485d423a1e69cc113b87dc34868b41a4248eeb extends Twig_Template
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
        $__internal_557cdf085e30aa2765f658b64f27ce672de5fcbd8882971b2c9dc3128cbe1630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_557cdf085e30aa2765f658b64f27ce672de5fcbd8882971b2c9dc3128cbe1630->enter($__internal_557cdf085e30aa2765f658b64f27ce672de5fcbd8882971b2c9dc3128cbe1630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_ctx.js"));

        // line 1
        echo "// optional / simple context binding
var aFunction = require('./_a-function');
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};
";
        
        $__internal_557cdf085e30aa2765f658b64f27ce672de5fcbd8882971b2c9dc3128cbe1630->leave($__internal_557cdf085e30aa2765f658b64f27ce672de5fcbd8882971b2c9dc3128cbe1630_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_ctx.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// optional / simple context binding
var aFunction = require('./_a-function');
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};
", "node_modules/core-js/modules/_ctx.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_ctx.js");
    }
}
