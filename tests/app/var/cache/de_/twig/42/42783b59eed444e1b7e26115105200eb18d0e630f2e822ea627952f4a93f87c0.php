<?php

/* node_modules/es6-map/test/implement.js */
class __TwigTemplate_5005ec00e4f5b50ecfe7b3a44f16c9ee589ce3aa1ecc2e8e17ca686e48434d22 extends Twig_Template
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
        $__internal_71e7299eed858649cad313d91b4bf60fe27d3e094a5f915ccd29cdc30560cf87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e7299eed858649cad313d91b4bf60fe27d3e094a5f915ccd29cdc30560cf87->enter($__internal_71e7299eed858649cad313d91b4bf60fe27d3e094a5f915ccd29cdc30560cf87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-map/test/implement.js"));

        // line 1
        echo "'use strict';

module.exports = function (t, a) { a(typeof Map, 'function'); };
";
        
        $__internal_71e7299eed858649cad313d91b4bf60fe27d3e094a5f915ccd29cdc30560cf87->leave($__internal_71e7299eed858649cad313d91b4bf60fe27d3e094a5f915ccd29cdc30560cf87_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-map/test/implement.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

module.exports = function (t, a) { a(typeof Map, 'function'); };
", "node_modules/es6-map/test/implement.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-map/test/implement.js");
    }
}
