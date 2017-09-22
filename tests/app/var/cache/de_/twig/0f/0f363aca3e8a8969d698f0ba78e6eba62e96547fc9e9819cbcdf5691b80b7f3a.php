<?php

/* node_modules/core-js/modules/_is-regexp.js */
class __TwigTemplate_a0ead715841552bb00ab2a483e3e6c4cf13f1b24a5d2c72d4b399b98ee115b62 extends Twig_Template
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
        $__internal_eaadc8a23571e691a6eabb97cc54b75daf7f0adef7d18fb7dd105a6255271997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaadc8a23571e691a6eabb97cc54b75daf7f0adef7d18fb7dd105a6255271997->enter($__internal_eaadc8a23571e691a6eabb97cc54b75daf7f0adef7d18fb7dd105a6255271997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_is-regexp.js"));

        // line 1
        echo "// 7.2.8 IsRegExp(argument)
var isObject = require('./_is-object');
var cof = require('./_cof');
var MATCH = require('./_wks')('match');
module.exports = function (it) {
  var isRegExp;
  return isObject(it) && ((isRegExp = it[MATCH]) !== undefined ? !!isRegExp : cof(it) == 'RegExp');
};
";
        
        $__internal_eaadc8a23571e691a6eabb97cc54b75daf7f0adef7d18fb7dd105a6255271997->leave($__internal_eaadc8a23571e691a6eabb97cc54b75daf7f0adef7d18fb7dd105a6255271997_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_is-regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.2.8 IsRegExp(argument)
var isObject = require('./_is-object');
var cof = require('./_cof');
var MATCH = require('./_wks')('match');
module.exports = function (it) {
  var isRegExp;
  return isObject(it) && ((isRegExp = it[MATCH]) !== undefined ? !!isRegExp : cof(it) == 'RegExp');
};
", "node_modules/core-js/modules/_is-regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_is-regexp.js");
    }
}
