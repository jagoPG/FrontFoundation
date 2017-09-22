<?php

/* node_modules/core-js/library/fn/regexp/escape.js */
class __TwigTemplate_98c3d03742a3c70319bab3c10d04b9efee7425a0f2138fd607b8d5d48ed9e447 extends Twig_Template
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
        $__internal_b016419fd9ee52bf4c9fdee70aaddbffc38ca74911f90c37091da2d81261b8f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b016419fd9ee52bf4c9fdee70aaddbffc38ca74911f90c37091da2d81261b8f5->enter($__internal_b016419fd9ee52bf4c9fdee70aaddbffc38ca74911f90c37091da2d81261b8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/regexp/escape.js"));

        // line 1
        echo "require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp.escape;
";
        
        $__internal_b016419fd9ee52bf4c9fdee70aaddbffc38ca74911f90c37091da2d81261b8f5->leave($__internal_b016419fd9ee52bf4c9fdee70aaddbffc38ca74911f90c37091da2d81261b8f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/regexp/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp.escape;
", "node_modules/core-js/library/fn/regexp/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/regexp/escape.js");
    }
}
