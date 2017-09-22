<?php

/* node_modules/core-js/library/fn/regexp/search.js */
class __TwigTemplate_05ee1d9b0036550d06e8fc4a64e8bd20998b4de6b68068a1ec532c924ede18cf extends Twig_Template
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
        $__internal_0b52f9767b32a262c4a28ca2a1570cc9998aa77e0b932bf0ada552bf50dea5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b52f9767b32a262c4a28ca2a1570cc9998aa77e0b932bf0ada552bf50dea5fd->enter($__internal_0b52f9767b32a262c4a28ca2a1570cc9998aa77e0b932bf0ada552bf50dea5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/search.js"));

        // line 1
        echo "require('../../modules/es6.regexp.search');
var SEARCH = require('../../modules/_wks')('search');
module.exports = function (it, str) {
  return RegExp.prototype[SEARCH].call(it, str);
};
";
        
        $__internal_0b52f9767b32a262c4a28ca2a1570cc9998aa77e0b932bf0ada552bf50dea5fd->leave($__internal_0b52f9767b32a262c4a28ca2a1570cc9998aa77e0b932bf0ada552bf50dea5fd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/search.js";
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
", "node_modules/core-js/library/fn/regexp/search.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/search.js");
    }
}
