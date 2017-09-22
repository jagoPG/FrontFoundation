<?php

/* node_modules/core-js/library/es7/asap.js */
class __TwigTemplate_0412138b1fb8386dc244286d8f068e9e46bd37a96171992429f7892fe8ff2301 extends Twig_Template
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
        $__internal_50c8f7161aae91e1333fbf36fc7d004874553045bfaa7db1febed61ac59081e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50c8f7161aae91e1333fbf36fc7d004874553045bfaa7db1febed61ac59081e7->enter($__internal_50c8f7161aae91e1333fbf36fc7d004874553045bfaa7db1febed61ac59081e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/es7/asap.js"));

        // line 1
        echo "require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
";
        
        $__internal_50c8f7161aae91e1333fbf36fc7d004874553045bfaa7db1febed61ac59081e7->leave($__internal_50c8f7161aae91e1333fbf36fc7d004874553045bfaa7db1febed61ac59081e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/es7/asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.asap');
module.exports = require('../modules/_core').asap;
", "node_modules/core-js/library/es7/asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/es7/asap.js");
    }
}
