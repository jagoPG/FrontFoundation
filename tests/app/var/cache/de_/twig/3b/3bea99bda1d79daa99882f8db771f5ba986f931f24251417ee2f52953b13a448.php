<?php

/* node_modules/core-js/library/fn/reflect/has.js */
class __TwigTemplate_6b0eb33012a9bcbcdcb464439ea2fa9fe8954c11dcab72e3773d5ddd2406abc6 extends Twig_Template
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
        $__internal_9a56eb6f8f9329da9bf6e3a173447ccaedfbe01949920fe44b3811ddb3fdac50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a56eb6f8f9329da9bf6e3a173447ccaedfbe01949920fe44b3811ddb3fdac50->enter($__internal_9a56eb6f8f9329da9bf6e3a173447ccaedfbe01949920fe44b3811ddb3fdac50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/reflect/has.js"));

        // line 1
        echo "require('../../modules/es6.reflect.has');
module.exports = require('../../modules/_core').Reflect.has;
";
        
        $__internal_9a56eb6f8f9329da9bf6e3a173447ccaedfbe01949920fe44b3811ddb3fdac50->leave($__internal_9a56eb6f8f9329da9bf6e3a173447ccaedfbe01949920fe44b3811ddb3fdac50_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/reflect/has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.has');
module.exports = require('../../modules/_core').Reflect.has;
", "node_modules/core-js/library/fn/reflect/has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/reflect/has.js");
    }
}
