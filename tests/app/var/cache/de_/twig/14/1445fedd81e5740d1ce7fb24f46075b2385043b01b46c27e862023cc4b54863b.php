<?php

/* node_modules/core-js/library/fn/string/includes.js */
class __TwigTemplate_2478d2d8ef93ab02e0a85605b8366d64f133806cc1bd4c6c0c629ce7061aa474 extends Twig_Template
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
        $__internal_ec49c86ae1cccb626396115358a00b84384ab377d6706ab75aea4db3ae957075 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec49c86ae1cccb626396115358a00b84384ab377d6706ab75aea4db3ae957075->enter($__internal_ec49c86ae1cccb626396115358a00b84384ab377d6706ab75aea4db3ae957075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/includes.js"));

        // line 1
        echo "require('../../modules/es6.string.includes');
module.exports = require('../../modules/_core').String.includes;
";
        
        $__internal_ec49c86ae1cccb626396115358a00b84384ab377d6706ab75aea4db3ae957075->leave($__internal_ec49c86ae1cccb626396115358a00b84384ab377d6706ab75aea4db3ae957075_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/includes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.includes');
module.exports = require('../../modules/_core').String.includes;
", "node_modules/core-js/library/fn/string/includes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/includes.js");
    }
}
