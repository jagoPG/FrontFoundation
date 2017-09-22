<?php

/* node_modules/core-js/Gruntfile.js */
class __TwigTemplate_30e641f484973f02bf960e5023ee95cdcb86b06adfccecfd5c983db7dcd2b876 extends Twig_Template
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
        $__internal_cfe2f833d5b594cc4b4355e4d0b086c322b53a81120f0c8fef5843ba90064c6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe2f833d5b594cc4b4355e4d0b086c322b53a81120f0c8fef5843ba90064c6f->enter($__internal_cfe2f833d5b594cc4b4355e4d0b086c322b53a81120f0c8fef5843ba90064c6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/Gruntfile.js"));

        // line 1
        echo "require('LiveScript');
// eslint-disable-next-line import/no-unresolved
module.exports = require('./build/Gruntfile');
";
        
        $__internal_cfe2f833d5b594cc4b4355e4d0b086c322b53a81120f0c8fef5843ba90064c6f->leave($__internal_cfe2f833d5b594cc4b4355e4d0b086c322b53a81120f0c8fef5843ba90064c6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/Gruntfile.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('LiveScript');
// eslint-disable-next-line import/no-unresolved
module.exports = require('./build/Gruntfile');
", "node_modules/core-js/Gruntfile.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/Gruntfile.js");
    }
}
