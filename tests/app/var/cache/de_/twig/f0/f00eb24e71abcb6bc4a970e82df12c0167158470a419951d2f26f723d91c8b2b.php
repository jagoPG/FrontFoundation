<?php

/* node_modules/core-js/library/core/regexp.js */
class __TwigTemplate_317704d733c51f8cdf84e4195f9519d18663fb54d385b586edeb20e061abf868 extends Twig_Template
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
        $__internal_70071168a6856348d17efeca69d4f6c95f8ee18669b03b4dfaba447d34ca8587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70071168a6856348d17efeca69d4f6c95f8ee18669b03b4dfaba447d34ca8587->enter($__internal_70071168a6856348d17efeca69d4f6c95f8ee18669b03b4dfaba447d34ca8587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/core/regexp.js"));

        // line 1
        echo "require('../modules/core.regexp.escape');
module.exports = require('../modules/_core').RegExp;
";
        
        $__internal_70071168a6856348d17efeca69d4f6c95f8ee18669b03b4dfaba447d34ca8587->leave($__internal_70071168a6856348d17efeca69d4f6c95f8ee18669b03b4dfaba447d34ca8587_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/core/regexp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.regexp.escape');
module.exports = require('../modules/_core').RegExp;
", "node_modules/core-js/library/core/regexp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/core/regexp.js");
    }
}
