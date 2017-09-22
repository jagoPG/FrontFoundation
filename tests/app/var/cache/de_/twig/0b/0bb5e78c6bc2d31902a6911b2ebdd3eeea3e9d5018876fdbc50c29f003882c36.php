<?php

/* node_modules/es6-set/test/implement.js */
class __TwigTemplate_15cbfbf60e6a957dd37555d3f8132e27436c57a043034cbc9e142ed82f4c846f extends Twig_Template
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
        $__internal_adf9b3f263eea40dab32bcadc76b02fc0d0b4100ca80aaa140275d6468c30ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adf9b3f263eea40dab32bcadc76b02fc0d0b4100ca80aaa140275d6468c30ae7->enter($__internal_adf9b3f263eea40dab32bcadc76b02fc0d0b4100ca80aaa140275d6468c30ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/test/implement.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof Set, 'function'); };
";
        
        $__internal_adf9b3f263eea40dab32bcadc76b02fc0d0b4100ca80aaa140275d6468c30ae7->leave($__internal_adf9b3f263eea40dab32bcadc76b02fc0d0b4100ca80aaa140275d6468c30ae7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/test/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof Set, 'function'); };
", "node_modules/es6-set/test/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/test/implement.js");
    }
}
