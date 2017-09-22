<?php

/* node_modules/core-js/fn/json/index.js */
class __TwigTemplate_146ded73992158b43763bec022dc33670f5fe7b62e4f280566201a46c47d1cc6 extends Twig_Template
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
        $__internal_0462f1f951eccb9a1f09e3af2227e20c03c38386c9956739ceae911042bf8ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0462f1f951eccb9a1f09e3af2227e20c03c38386c9956739ceae911042bf8ed5->enter($__internal_0462f1f951eccb9a1f09e3af2227e20c03c38386c9956739ceae911042bf8ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/json/index.js"));

        // line 1
        echo "var core = require('../../modules/_core');
module.exports = core.JSON || (core.JSON = { stringify: JSON.stringify });
";
        
        $__internal_0462f1f951eccb9a1f09e3af2227e20c03c38386c9956739ceae911042bf8ed5->leave($__internal_0462f1f951eccb9a1f09e3af2227e20c03c38386c9956739ceae911042bf8ed5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/json/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('../../modules/_core');
module.exports = core.JSON || (core.JSON = { stringify: JSON.stringify });
", "node_modules/core-js/fn/json/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/json/index.js");
    }
}
