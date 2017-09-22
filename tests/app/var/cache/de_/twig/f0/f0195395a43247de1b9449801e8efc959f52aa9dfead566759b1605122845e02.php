<?php

/* node_modules/lodash/_WeakMap.js */
class __TwigTemplate_ec1c9c72ed949329892e4c12f8c28ea1b28192a52f12f848a852b1555f6815b8 extends Twig_Template
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
        $__internal_a81083f90d6588188cd717adf417a43f2ee0c455def5b118b3b8b96535a469f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81083f90d6588188cd717adf417a43f2ee0c455def5b118b3b8b96535a469f3->enter($__internal_a81083f90d6588188cd717adf417a43f2ee0c455def5b118b3b8b96535a469f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_WeakMap.js"));

        // line 1
        echo "var getNative = require('./_getNative'),
    root = require('./_root');

/* Built-in method references that are verified to be native. */
var WeakMap = getNative(root, 'WeakMap');

module.exports = WeakMap;
";
        
        $__internal_a81083f90d6588188cd717adf417a43f2ee0c455def5b118b3b8b96535a469f3->leave($__internal_a81083f90d6588188cd717adf417a43f2ee0c455def5b118b3b8b96535a469f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_WeakMap.js";
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
var WeakMap = getNative(root, 'WeakMap');

module.exports = WeakMap;
", "node_modules/lodash/_WeakMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_WeakMap.js");
    }
}
