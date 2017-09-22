<?php

/* node_modules/core-js/library/stage/index.js */
class __TwigTemplate_b5e9bdc91afbcae0f1f024e609bf557218c09e68a97418a9925c04f833c10a4c extends Twig_Template
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
        $__internal_12222880fb602f01106cef230e3bebb6e82e045044d30a02342fc8d8e5674bc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12222880fb602f01106cef230e3bebb6e82e045044d30a02342fc8d8e5674bc0->enter($__internal_12222880fb602f01106cef230e3bebb6e82e045044d30a02342fc8d8e5674bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/stage/index.js"));

        // line 1
        echo "module.exports = require('./pre');
";
        
        $__internal_12222880fb602f01106cef230e3bebb6e82e045044d30a02342fc8d8e5674bc0->leave($__internal_12222880fb602f01106cef230e3bebb6e82e045044d30a02342fc8d8e5674bc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/stage/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./pre');
", "node_modules/core-js/library/stage/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/stage/index.js");
    }
}
