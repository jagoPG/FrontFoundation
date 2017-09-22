<?php

/* node_modules/sntp/index.js */
class __TwigTemplate_a0bc26ff7f76dd8c0eceba9391f8d0a30bfa43ddc4c3b30fc6191087fb2d6a8e extends Twig_Template
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
        $__internal_be683b6e529f5218077012ebe9fc1f9a3183aff06d8480f0785dd5e05e64cceb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be683b6e529f5218077012ebe9fc1f9a3183aff06d8480f0785dd5e05e64cceb->enter($__internal_be683b6e529f5218077012ebe9fc1f9a3183aff06d8480f0785dd5e05e64cceb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sntp/index.js"));

        // line 1
        echo "module.exports = require('./lib');";
        
        $__internal_be683b6e529f5218077012ebe9fc1f9a3183aff06d8480f0785dd5e05e64cceb->leave($__internal_be683b6e529f5218077012ebe9fc1f9a3183aff06d8480f0785dd5e05e64cceb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sntp/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = require('./lib');", "node_modules/sntp/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sntp/index.js");
    }
}
