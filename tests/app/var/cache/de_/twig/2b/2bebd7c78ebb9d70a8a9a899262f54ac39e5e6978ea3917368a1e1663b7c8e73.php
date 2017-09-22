<?php

/* node_modules/has/src/index.js */
class __TwigTemplate_3b4056fe23c557c834093ebe12e53dd07686012724cbd1325f6f7824c93c4bfd extends Twig_Template
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
        $__internal_73234994870d31a82b86ed571b10341f41f0e6273963b61cc6d9b5b9e9fe8533 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73234994870d31a82b86ed571b10341f41f0e6273963b61cc6d9b5b9e9fe8533->enter($__internal_73234994870d31a82b86ed571b10341f41f0e6273963b61cc6d9b5b9e9fe8533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has/src/index.js"));

        // line 1
        echo "var bind = require('function-bind');

module.exports = bind.call(Function.call, Object.prototype.hasOwnProperty);
";
        
        $__internal_73234994870d31a82b86ed571b10341f41f0e6273963b61cc6d9b5b9e9fe8533->leave($__internal_73234994870d31a82b86ed571b10341f41f0e6273963b61cc6d9b5b9e9fe8533_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has/src/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var bind = require('function-bind');

module.exports = bind.call(Function.call, Object.prototype.hasOwnProperty);
", "node_modules/has/src/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has/src/index.js");
    }
}
