<?php

/* node_modules/core-js/modules/_html.js */
class __TwigTemplate_a42971057d07f69eb37e41af90472c00c0cf7a276e4ff3ad6e0f163f3aa2645a extends Twig_Template
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
        $__internal_3888ee0b05d01b470a9b88d8aae4d30ee6e95bd56fc0664b5aedcfa1a720ccc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3888ee0b05d01b470a9b88d8aae4d30ee6e95bd56fc0664b5aedcfa1a720ccc9->enter($__internal_3888ee0b05d01b470a9b88d8aae4d30ee6e95bd56fc0664b5aedcfa1a720ccc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_html.js"));

        // line 1
        echo "var document = require('./_global').document;
module.exports = document && document.documentElement;
";
        
        $__internal_3888ee0b05d01b470a9b88d8aae4d30ee6e95bd56fc0664b5aedcfa1a720ccc9->leave($__internal_3888ee0b05d01b470a9b88d8aae4d30ee6e95bd56fc0664b5aedcfa1a720ccc9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_html.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var document = require('./_global').document;
module.exports = document && document.documentElement;
", "node_modules/core-js/modules/_html.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_html.js");
    }
}
