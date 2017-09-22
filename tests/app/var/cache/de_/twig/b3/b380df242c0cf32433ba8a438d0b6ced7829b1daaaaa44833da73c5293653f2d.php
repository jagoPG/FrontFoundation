<?php

/* node_modules/core-js/fn/regexp/search.js */
class __TwigTemplate_da5afbbb736f3db790fd3d691fd46fce40b7510008a334b7ee3be767d298483a extends Twig_Template
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
        $__internal_f79e5f541ca124b711f321d1434c1283c8d7209b5a9a813071bbaaa0df6b3f62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f79e5f541ca124b711f321d1434c1283c8d7209b5a9a813071bbaaa0df6b3f62->enter($__internal_f79e5f541ca124b711f321d1434c1283c8d7209b5a9a813071bbaaa0df6b3f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/search.js"));

        // line 1
        echo "require('../../modules/es6.regexp.search');
var SEARCH = require('../../modules/_wks')('search');
module.exports = function (it, str) {
  return RegExp.prototype[SEARCH].call(it, str);
};
";
        
        $__internal_f79e5f541ca124b711f321d1434c1283c8d7209b5a9a813071bbaaa0df6b3f62->leave($__internal_f79e5f541ca124b711f321d1434c1283c8d7209b5a9a813071bbaaa0df6b3f62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/search.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.regexp.search');
var SEARCH = require('../../modules/_wks')('search');
module.exports = function (it, str) {
  return RegExp.prototype[SEARCH].call(it, str);
};
", "node_modules/core-js/fn/regexp/search.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/search.js");
    }
}
