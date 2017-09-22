<?php

/* node_modules/core-js/library/modules/_string-context.js */
class __TwigTemplate_ef349b5d5123f130381338206704746eb14752022fa1ad1c0bd4bfe79b33e0a6 extends Twig_Template
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
        $__internal_198e5662b86a8dd850facea09726040ad9c8b999b922416caacb8ae88a36cc8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_198e5662b86a8dd850facea09726040ad9c8b999b922416caacb8ae88a36cc8a->enter($__internal_198e5662b86a8dd850facea09726040ad9c8b999b922416caacb8ae88a36cc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_string-context.js"));

        // line 1
        echo "// helper for String#{startsWith, endsWith, includes}
var isRegExp = require('./_is-regexp');
var defined = require('./_defined');

module.exports = function (that, searchString, NAME) {
  if (isRegExp(searchString)) throw TypeError('String#' + NAME + \" doesn't accept regex!\");
  return String(defined(that));
};
";
        
        $__internal_198e5662b86a8dd850facea09726040ad9c8b999b922416caacb8ae88a36cc8a->leave($__internal_198e5662b86a8dd850facea09726040ad9c8b999b922416caacb8ae88a36cc8a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_string-context.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// helper for String#{startsWith, endsWith, includes}
var isRegExp = require('./_is-regexp');
var defined = require('./_defined');

module.exports = function (that, searchString, NAME) {
  if (isRegExp(searchString)) throw TypeError('String#' + NAME + \" doesn't accept regex!\");
  return String(defined(that));
};
", "node_modules/core-js/library/modules/_string-context.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_string-context.js");
    }
}
