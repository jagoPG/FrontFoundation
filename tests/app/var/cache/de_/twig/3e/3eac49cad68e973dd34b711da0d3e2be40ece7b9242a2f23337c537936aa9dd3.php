<?php

/* node_modules/core-js/library/fn/string/ends-with.js */
class __TwigTemplate_09715ca052dd91f1787b873c6c56ee05768cf39f59029dcfa5055bf285b4de4c extends Twig_Template
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
        $__internal_08a3d292d453adb1b0668f0a276ff8a879d3204797604af8650a23d412d73566 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08a3d292d453adb1b0668f0a276ff8a879d3204797604af8650a23d412d73566->enter($__internal_08a3d292d453adb1b0668f0a276ff8a879d3204797604af8650a23d412d73566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/string/ends-with.js"));

        // line 1
        echo "require('../../modules/es6.string.ends-with');
module.exports = require('../../modules/_core').String.endsWith;
";
        
        $__internal_08a3d292d453adb1b0668f0a276ff8a879d3204797604af8650a23d412d73566->leave($__internal_08a3d292d453adb1b0668f0a276ff8a879d3204797604af8650a23d412d73566_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/string/ends-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.ends-with');
module.exports = require('../../modules/_core').String.endsWith;
", "node_modules/core-js/library/fn/string/ends-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/string/ends-with.js");
    }
}
