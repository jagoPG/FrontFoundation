<?php

/* node_modules/core-js/fn/string/virtual/fontcolor.js */
class __TwigTemplate_9c5b9957010c08fe005d49073dfa08a9ad07b2140fd0b93668c71d55fca7e0e2 extends Twig_Template
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
        $__internal_b5116169d2375337bf38bb80d804a8518b7d2aed267df325f137105c124ce965 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5116169d2375337bf38bb80d804a8518b7d2aed267df325f137105c124ce965->enter($__internal_b5116169d2375337bf38bb80d804a8518b7d2aed267df325f137105c124ce965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/fontcolor.js"));

        // line 1
        echo "require('../../../modules/es6.string.fontcolor');
module.exports = require('../../../modules/_entry-virtual')('String').fontcolor;
";
        
        $__internal_b5116169d2375337bf38bb80d804a8518b7d2aed267df325f137105c124ce965->leave($__internal_b5116169d2375337bf38bb80d804a8518b7d2aed267df325f137105c124ce965_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/fontcolor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.fontcolor');
module.exports = require('../../../modules/_entry-virtual')('String').fontcolor;
", "node_modules/core-js/fn/string/virtual/fontcolor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/fontcolor.js");
    }
}
