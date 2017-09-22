<?php

/* node_modules/core-js/library/modules/_strict-method.js */
class __TwigTemplate_2be765d01dd32e33167e7d3803179d4fb578a31632dbca86df4aaeb5f17f31ea extends Twig_Template
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
        $__internal_4049b0f71a2643acad524e9924698b170dd8d0ad7826ce3c7c17cc412e39b878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4049b0f71a2643acad524e9924698b170dd8d0ad7826ce3c7c17cc412e39b878->enter($__internal_4049b0f71a2643acad524e9924698b170dd8d0ad7826ce3c7c17cc412e39b878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_strict-method.js"));

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
        
        $__internal_4049b0f71a2643acad524e9924698b170dd8d0ad7826ce3c7c17cc412e39b878->leave($__internal_4049b0f71a2643acad524e9924698b170dd8d0ad7826ce3c7c17cc412e39b878_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_strict-method.js";
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
", "node_modules/core-js/library/modules/_strict-method.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_strict-method.js");
    }
}
