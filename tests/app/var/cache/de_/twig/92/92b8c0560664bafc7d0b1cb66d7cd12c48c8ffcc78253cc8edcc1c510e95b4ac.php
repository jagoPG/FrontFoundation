<?php

/* node_modules/core-js/fn/regexp/split.js */
class __TwigTemplate_bf876ca238790d61ee14c32ca781172cf1ccef38b740944ac0a40f96b5c049c0 extends Twig_Template
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
        $__internal_4f578577a39ec7b537b688c44ff5587d9417293004bcfb54d8279844ea15a876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f578577a39ec7b537b688c44ff5587d9417293004bcfb54d8279844ea15a876->enter($__internal_4f578577a39ec7b537b688c44ff5587d9417293004bcfb54d8279844ea15a876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/split.js"));

        // line 1
        echo "require('../../modules/es6.regexp.split');
var SPLIT = require('../../modules/_wks')('split');
module.exports = function (it, str, limit) {
  return RegExp.prototype[SPLIT].call(it, str, limit);
};
";
        
        $__internal_4f578577a39ec7b537b688c44ff5587d9417293004bcfb54d8279844ea15a876->leave($__internal_4f578577a39ec7b537b688c44ff5587d9417293004bcfb54d8279844ea15a876_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/split.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.split');
var SPLIT = require('../../modules/_wks')('split');
module.exports = function (it, str, limit) {
  return RegExp.prototype[SPLIT].call(it, str, limit);
};
", "node_modules/core-js/fn/regexp/split.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/split.js");
    }
}
