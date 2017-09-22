<?php

/* node_modules/webpack/hot/emitter.js */
class __TwigTemplate_e193a87a8603dfcbd8849ae85f4c44206cd4cc1a1bd3d1790aada766bb1c2500 extends Twig_Template
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
        $__internal_6b85399824c9c32f3aa0d0bea9332b673024cc3ba03280443b53ba6d770de77c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b85399824c9c32f3aa0d0bea9332b673024cc3ba03280443b53ba6d770de77c->enter($__internal_6b85399824c9c32f3aa0d0bea9332b673024cc3ba03280443b53ba6d770de77c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/webpack/hot/emitter.js"));

        // line 1
        echo "var EventEmitter = require(\"events\");
module.exports = new EventEmitter();
";
        
        $__internal_6b85399824c9c32f3aa0d0bea9332b673024cc3ba03280443b53ba6d770de77c->leave($__internal_6b85399824c9c32f3aa0d0bea9332b673024cc3ba03280443b53ba6d770de77c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/webpack/hot/emitter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var EventEmitter = require(\"events\");
module.exports = new EventEmitter();
", "node_modules/webpack/hot/emitter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/webpack/hot/emitter.js");
    }
}
