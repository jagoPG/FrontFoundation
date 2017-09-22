<?php

/* node_modules/core-js/modules/_strict-method.js */
class __TwigTemplate_8ef108743ad674b70a7410d7548c78449a990a3fe9c68de404a36d56b87d7079 extends Twig_Template
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
        $__internal_2c62df1969fcda6266851bfeb9415ac86ac3d589397b277d4212cb7b3d10a2ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c62df1969fcda6266851bfeb9415ac86ac3d589397b277d4212cb7b3d10a2ee->enter($__internal_2c62df1969fcda6266851bfeb9415ac86ac3d589397b277d4212cb7b3d10a2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_strict-method.js"));

        // line 1
        echo "'use strict';
var fails = require('./_fails');

module.exports = function (method, arg) {
  return !!method && fails(function () {
    // eslint-disable-next-line no-useless-call
    arg ? method.call(null, function () { /* empty */ }, 1) : method.call(null);
  });
};
";
        
        $__internal_2c62df1969fcda6266851bfeb9415ac86ac3d589397b277d4212cb7b3d10a2ee->leave($__internal_2c62df1969fcda6266851bfeb9415ac86ac3d589397b277d4212cb7b3d10a2ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_strict-method.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var fails = require('./_fails');

module.exports = function (method, arg) {
  return !!method && fails(function () {
    // eslint-disable-next-line no-useless-call
    arg ? method.call(null, function () { /* empty */ }, 1) : method.call(null);
  });
};
", "node_modules/core-js/modules/_strict-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_strict-method.js");
    }
}
