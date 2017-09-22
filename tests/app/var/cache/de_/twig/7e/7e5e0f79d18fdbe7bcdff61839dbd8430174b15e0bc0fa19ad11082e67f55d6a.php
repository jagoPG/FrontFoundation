<?php

/* node_modules/es5-ext/array/of/index.js */
class __TwigTemplate_830dff21febdb40b48fe5eb61f9dcdb4557e9ceb35e82245086d633b8c26fcb8 extends Twig_Template
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
        $__internal_3d15ca92f194f267e9d9870105762ecab6f3cfb8afd5d8477b78b67c3565d05e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d15ca92f194f267e9d9870105762ecab6f3cfb8afd5d8477b78b67c3565d05e->enter($__internal_3d15ca92f194f267e9d9870105762ecab6f3cfb8afd5d8477b78b67c3565d05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/array/of/index.js"));

        // line 1
        echo "\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.of
\t: require(\"./shim\");
";
        
        $__internal_3d15ca92f194f267e9d9870105762ecab6f3cfb8afd5d8477b78b67c3565d05e->leave($__internal_3d15ca92f194f267e9d9870105762ecab6f3cfb8afd5d8477b78b67c3565d05e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/array/of/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

module.exports = require(\"./is-implemented\")()
\t? Array.of
\t: require(\"./shim\");
", "node_modules/es5-ext/array/of/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/array/of/index.js");
    }
}
