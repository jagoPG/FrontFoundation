<?php

/* node_modules/core-js/fn/json/stringify.js */
class __TwigTemplate_f47abd65fe4f94cba62207d9f23c3807cddb655c8b2e25cdc16dfe29f69231cb extends Twig_Template
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
        $__internal_65ce1b2440a1f270f2ef649a48c73464c15723b646eff8ccd4214184917a781b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ce1b2440a1f270f2ef649a48c73464c15723b646eff8ccd4214184917a781b->enter($__internal_65ce1b2440a1f270f2ef649a48c73464c15723b646eff8ccd4214184917a781b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/json/stringify.js"));

        // line 1
        echo "var core = require('../../modules/_core');
var \$JSON = core.JSON || (core.JSON = { stringify: JSON.stringify });
module.exports = function stringify(it) { // eslint-disable-line no-unused-vars
  return \$JSON.stringify.apply(\$JSON, arguments);
};
";
        
        $__internal_65ce1b2440a1f270f2ef649a48c73464c15723b646eff8ccd4214184917a781b->leave($__internal_65ce1b2440a1f270f2ef649a48c73464c15723b646eff8ccd4214184917a781b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/json/stringify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('../../modules/_core');
var \$JSON = core.JSON || (core.JSON = { stringify: JSON.stringify });
module.exports = function stringify(it) { // eslint-disable-line no-unused-vars
  return \$JSON.stringify.apply(\$JSON, arguments);
};
", "node_modules/core-js/fn/json/stringify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/json/stringify.js");
    }
}
