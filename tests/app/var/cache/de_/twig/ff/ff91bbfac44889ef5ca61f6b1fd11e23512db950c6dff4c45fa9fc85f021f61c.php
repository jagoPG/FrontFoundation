<?php

/* node_modules/core-js/library/core/_.js */
class __TwigTemplate_733f503ea4cc94d558de846b1aed9ee881222d0eadddfa1fa45a4ec7d66a936f extends Twig_Template
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
        $__internal_ee73f68414c09b9150bdf2aed9f2e23831d513abb7f5f755904908fc8709d73b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee73f68414c09b9150bdf2aed9f2e23831d513abb7f5f755904908fc8709d73b->enter($__internal_ee73f68414c09b9150bdf2aed9f2e23831d513abb7f5f755904908fc8709d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/_.js"));

        // line 1
        echo "require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
";
        
        $__internal_ee73f68414c09b9150bdf2aed9f2e23831d513abb7f5f755904908fc8709d73b->leave($__internal_ee73f68414c09b9150bdf2aed9f2e23831d513abb7f5f755904908fc8709d73b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/_.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
", "node_modules/core-js/library/core/_.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/_.js");
    }
}
