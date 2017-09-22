<?php

/* node_modules/core-js/library/modules/_string-repeat.js */
class __TwigTemplate_98313ec6e27dbc1a118c2c7ac62a96affdd71df32c553225f3b5f63b2082b03a extends Twig_Template
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
        $__internal_c60fb24bd654064c07299fb618f46f95c8340b9f91979322233e258aed696245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60fb24bd654064c07299fb618f46f95c8340b9f91979322233e258aed696245->enter($__internal_c60fb24bd654064c07299fb618f46f95c8340b9f91979322233e258aed696245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_string-repeat.js"));

        // line 1
        echo "'use strict';
var toInteger = require('./_to-integer');
var defined = require('./_defined');

module.exports = function repeat(count) {
  var str = String(defined(this));
  var res = '';
  var n = toInteger(count);
  if (n < 0 || n == Infinity) throw RangeError(\"Count can't be negative\");
  for (;n > 0; (n >>>= 1) && (str += str)) if (n & 1) res += str;
  return res;
};
";
        
        $__internal_c60fb24bd654064c07299fb618f46f95c8340b9f91979322233e258aed696245->leave($__internal_c60fb24bd654064c07299fb618f46f95c8340b9f91979322233e258aed696245_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_string-repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var toInteger = require('./_to-integer');
var defined = require('./_defined');

module.exports = function repeat(count) {
  var str = String(defined(this));
  var res = '';
  var n = toInteger(count);
  if (n < 0 || n == Infinity) throw RangeError(\"Count can't be negative\");
  for (;n > 0; (n >>>= 1) && (str += str)) if (n & 1) res += str;
  return res;
};
", "node_modules/core-js/library/modules/_string-repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_string-repeat.js");
    }
}
