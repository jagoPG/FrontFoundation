<?php

/* node_modules/babel-runtime/helpers/_create-class.js */
class __TwigTemplate_07e0c09b321c31bcb85d22a0713876414d1989832109dea4fe7f166c870bb570 extends Twig_Template
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
        $__internal_1620acf5f436acae30fdb9ccbbc782c37afb851b07114747189bfbaeb833b5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1620acf5f436acae30fdb9ccbbc782c37afb851b07114747189bfbaeb833b5f3->enter($__internal_1620acf5f436acae30fdb9ccbbc782c37afb851b07114747189bfbaeb833b5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/helpers/_create-class.js"));

        // line 1
        echo "module.exports = require(\"./createClass.js\");";
        
        $__internal_1620acf5f436acae30fdb9ccbbc782c37afb851b07114747189bfbaeb833b5f3->leave($__internal_1620acf5f436acae30fdb9ccbbc782c37afb851b07114747189bfbaeb833b5f3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/helpers/_create-class.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require(\"./createClass.js\");", "node_modules/babel-runtime/helpers/_create-class.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/helpers/_create-class.js");
    }
}
