<?php

/* node_modules/util-deprecate/node.js */
class __TwigTemplate_70469d5f84cb3d7eaa31e5f3e73c88de1b8c4520426e818775391bdafcf14b48 extends Twig_Template
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
        $__internal_7ad1ad6be5dad25fe1dcb3060d2863fcc4c864aae5e8c57d05911311f07329e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad1ad6be5dad25fe1dcb3060d2863fcc4c864aae5e8c57d05911311f07329e3->enter($__internal_7ad1ad6be5dad25fe1dcb3060d2863fcc4c864aae5e8c57d05911311f07329e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util-deprecate/node.js"));

        // line 1
        echo "
/**
 * For Node.js, simply re-export the core `util.deprecate` function.
 */

module.exports = require('util').deprecate;
";
        
        $__internal_7ad1ad6be5dad25fe1dcb3060d2863fcc4c864aae5e8c57d05911311f07329e3->leave($__internal_7ad1ad6be5dad25fe1dcb3060d2863fcc4c864aae5e8c57d05911311f07329e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util-deprecate/node.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
/**
 * For Node.js, simply re-export the core `util.deprecate` function.
 */

module.exports = require('util').deprecate;
", "node_modules/util-deprecate/node.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util-deprecate/node.js");
    }
}
