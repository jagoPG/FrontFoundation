<?php

/* node_modules/core-js/library/modules/_redefine.js */
class __TwigTemplate_3bc728fa61020b286eec8f5c9a50d95d1cb1c88423a9d2772e367c2bf61f3796 extends Twig_Template
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
        $__internal_187ac84439c54f1ec160d4b96411d4e8e0709e0da6ae29e36ef4b7159a3ec7d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187ac84439c54f1ec160d4b96411d4e8e0709e0da6ae29e36ef4b7159a3ec7d7->enter($__internal_187ac84439c54f1ec160d4b96411d4e8e0709e0da6ae29e36ef4b7159a3ec7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_redefine.js"));

        // line 1
        echo "module.exports = require('./_hide');
";
        
        $__internal_187ac84439c54f1ec160d4b96411d4e8e0709e0da6ae29e36ef4b7159a3ec7d7->leave($__internal_187ac84439c54f1ec160d4b96411d4e8e0709e0da6ae29e36ef4b7159a3ec7d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_redefine.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./_hide');
", "node_modules/core-js/library/modules/_redefine.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_redefine.js");
    }
}
