<?php

/* node_modules/fsevents/node_modules/form-data/lib/browser.js */
class __TwigTemplate_b1c0ccde6a8f78d6a5df8b5716ab9e503e9255c71bf3624f441beed11ecc3342 extends Twig_Template
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
        $__internal_dbb2393ea949c2d3f33af94d99bcfdaa02c18442eebf519a75c4a6ff14d0f2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb2393ea949c2d3f33af94d99bcfdaa02c18442eebf519a75c4a6ff14d0f2d8->enter($__internal_dbb2393ea949c2d3f33af94d99bcfdaa02c18442eebf519a75c4a6ff14d0f2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/form-data/lib/browser.js"));

        // line 1
        echo "/* eslint-env browser */
module.exports = typeof self == 'object' ? self.FormData : window.FormData;
";
        
        $__internal_dbb2393ea949c2d3f33af94d99bcfdaa02c18442eebf519a75c4a6ff14d0f2d8->leave($__internal_dbb2393ea949c2d3f33af94d99bcfdaa02c18442eebf519a75c4a6ff14d0f2d8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/form-data/lib/browser.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint-env browser */
module.exports = typeof self == 'object' ? self.FormData : window.FormData;
", "node_modules/fsevents/node_modules/form-data/lib/browser.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/form-data/lib/browser.js");
    }
}
