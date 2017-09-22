<?php

/* node_modules/lodash/_Promise.js */
class __TwigTemplate_6b4c62a0d524857f0866892a082e533790c74036e8a7ace8e6e4308940898075 extends Twig_Template
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
        $__internal_cc6e0319108449237d645ca3bff4b6a95a6359840088b2089e82221d345d0b47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc6e0319108449237d645ca3bff4b6a95a6359840088b2089e82221d345d0b47->enter($__internal_cc6e0319108449237d645ca3bff4b6a95a6359840088b2089e82221d345d0b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_Promise.js"));

        // line 1
        echo "var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Promise = getNative(root, 'Promise');

module.exports = Promise;
";
        
        $__internal_cc6e0319108449237d645ca3bff4b6a95a6359840088b2089e82221d345d0b47->leave($__internal_cc6e0319108449237d645ca3bff4b6a95a6359840088b2089e82221d345d0b47_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_Promise.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var Promise = getNative(root, 'Promise');

module.exports = Promise;
", "node_modules/lodash/_Promise.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_Promise.js");
    }
}
