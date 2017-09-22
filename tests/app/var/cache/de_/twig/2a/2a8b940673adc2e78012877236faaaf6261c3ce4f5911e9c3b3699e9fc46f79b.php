<?php

/* node_modules/core-js/fn/string/virtual/strike.js */
class __TwigTemplate_709b862429b5ec3a9021c3c0da987d8e1df562b4e1fbc264b7bdec83e9a601b7 extends Twig_Template
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
        $__internal_1d9ccdd1cb0b3f6282cc55614ea4474fd8c1bdcbb77e66832d76f4d62be801a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9ccdd1cb0b3f6282cc55614ea4474fd8c1bdcbb77e66832d76f4d62be801a0->enter($__internal_1d9ccdd1cb0b3f6282cc55614ea4474fd8c1bdcbb77e66832d76f4d62be801a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/strike.js"));

        // line 1
        echo "require('../../../modules/es6.string.strike');
module.exports = require('../../../modules/_entry-virtual')('String').strike;
";
        
        $__internal_1d9ccdd1cb0b3f6282cc55614ea4474fd8c1bdcbb77e66832d76f4d62be801a0->leave($__internal_1d9ccdd1cb0b3f6282cc55614ea4474fd8c1bdcbb77e66832d76f4d62be801a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/strike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.strike');
module.exports = require('../../../modules/_entry-virtual')('String').strike;
", "node_modules/core-js/fn/string/virtual/strike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/strike.js");
    }
}
