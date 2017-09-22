<?php

/* node_modules/core-js/fn/reflect/construct.js */
class __TwigTemplate_43c367e86b7b07ec061b693966a63c56c9b8c2f0ead200c003a81de987033b81 extends Twig_Template
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
        $__internal_48903627910ce15ae6afec096e1572e0ca34a24b9cc7b7e1313a5717c98b729d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48903627910ce15ae6afec096e1572e0ca34a24b9cc7b7e1313a5717c98b729d->enter($__internal_48903627910ce15ae6afec096e1572e0ca34a24b9cc7b7e1313a5717c98b729d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/reflect/construct.js"));

        // line 1
        echo "require('../../modules/es6.reflect.construct');
module.exports = require('../../modules/_core').Reflect.construct;
";
        
        $__internal_48903627910ce15ae6afec096e1572e0ca34a24b9cc7b7e1313a5717c98b729d->leave($__internal_48903627910ce15ae6afec096e1572e0ca34a24b9cc7b7e1313a5717c98b729d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/reflect/construct.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.reflect.construct');
module.exports = require('../../modules/_core').Reflect.construct;
", "node_modules/core-js/fn/reflect/construct.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/reflect/construct.js");
    }
}
