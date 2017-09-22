<?php

/* node_modules/babel-runtime/helpers/self-global.js */
class __TwigTemplate_a879ee62e81004cad1967828a1888cb012aa74368c5453b4e56ab2370c53b0b7 extends Twig_Template
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
        $__internal_6338c271266d853c805ccf511165018f4c786d2a7d609d5f94a1018b94df43e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6338c271266d853c805ccf511165018f4c786d2a7d609d5f94a1018b94df43e1->enter($__internal_6338c271266d853c805ccf511165018f4c786d2a7d609d5f94a1018b94df43e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/self-global.js"));

        // line 1
        echo "module.exports = require(\"./selfGlobal.js\");";
        
        $__internal_6338c271266d853c805ccf511165018f4c786d2a7d609d5f94a1018b94df43e1->leave($__internal_6338c271266d853c805ccf511165018f4c786d2a7d609d5f94a1018b94df43e1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/self-global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./selfGlobal.js\");", "node_modules/babel-runtime/helpers/self-global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/self-global.js");
    }
}
