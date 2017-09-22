<?php

/* node_modules/form-data/lib/browser.js */
class __TwigTemplate_8e4f25353c4f646d8f9ed65c5b9e29a2b8e958e6c8306551c4746c5e221d3131 extends Twig_Template
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
        $__internal_22ff308593f51232683db7f81c1850f664dc9220d6bfe758d51a9b135456097d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ff308593f51232683db7f81c1850f664dc9220d6bfe758d51a9b135456097d->enter($__internal_22ff308593f51232683db7f81c1850f664dc9220d6bfe758d51a9b135456097d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/form-data/lib/browser.js"));

        // line 1
        echo "/* eslint-env browser */
module.exports = typeof self == 'object' ? self.FormData : window.FormData;
";
        
        $__internal_22ff308593f51232683db7f81c1850f664dc9220d6bfe758d51a9b135456097d->leave($__internal_22ff308593f51232683db7f81c1850f664dc9220d6bfe758d51a9b135456097d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/form-data/lib/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-env browser */
module.exports = typeof self == 'object' ? self.FormData : window.FormData;
", "node_modules/form-data/lib/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/form-data/lib/browser.js");
    }
}
