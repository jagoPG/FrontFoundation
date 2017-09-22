<?php

/* node_modules/core-js/modules/_string-context.js */
class __TwigTemplate_8ce786a603dbaa09af5ed4b1fea7ddf8a20a0e679a38eef2f1701ed2bdefdbc3 extends Twig_Template
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
        $__internal_143fa63a0afcedfece66ac003f3bedae1dc97a99c93682df312b776b9509c6bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143fa63a0afcedfece66ac003f3bedae1dc97a99c93682df312b776b9509c6bf->enter($__internal_143fa63a0afcedfece66ac003f3bedae1dc97a99c93682df312b776b9509c6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_string-context.js"));

        // line 1
        echo "// helper for String#{startsWith, endsWith, includes}
var isRegExp = require('./_is-regexp');
var defined = require('./_defined');

module.exports = function (that, searchString, NAME) {
  if (isRegExp(searchString)) throw TypeError('String#' + NAME + \" doesn't accept regex!\");
  return String(defined(that));
};
";
        
        $__internal_143fa63a0afcedfece66ac003f3bedae1dc97a99c93682df312b776b9509c6bf->leave($__internal_143fa63a0afcedfece66ac003f3bedae1dc97a99c93682df312b776b9509c6bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_string-context.js";
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
", "node_modules/core-js/modules/_string-context.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_string-context.js");
    }
}
