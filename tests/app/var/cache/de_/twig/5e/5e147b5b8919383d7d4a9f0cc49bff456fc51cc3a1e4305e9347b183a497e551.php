<?php

/* node_modules/es5-ext/test/math/sign/index.js */
class __TwigTemplate_8a6d3b9cc0da0f612a1370d2592d075d161f00723fe44d1adb674bbb6a626b8e extends Twig_Template
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
        $__internal_d53860646fd734e81a969b27525a7c00e739232490e530cf6c00bd5facae13c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d53860646fd734e81a969b27525a7c00e739232490e530cf6c00bd5facae13c3->enter($__internal_d53860646fd734e81a969b27525a7c00e739232490e530cf6c00bd5facae13c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/test/math/sign/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./shim\");
";
        
        $__internal_d53860646fd734e81a969b27525a7c00e739232490e530cf6c00bd5facae13c3->leave($__internal_d53860646fd734e81a969b27525a7c00e739232490e530cf6c00bd5facae13c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/test/math/sign/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./shim\");
", "node_modules/es5-ext/test/math/sign/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/test/math/sign/index.js");
    }
}
