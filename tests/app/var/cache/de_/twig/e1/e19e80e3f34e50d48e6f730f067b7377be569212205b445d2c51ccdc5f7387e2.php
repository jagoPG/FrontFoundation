<?php

/* node_modules/core-js/library/fn/typed/float32-array.js */
class __TwigTemplate_1b7e2f3d8c245063344128a21891e7dc9182f1b2eb554e8810a5836bb411caec extends Twig_Template
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
        $__internal_dff75b08223b47a981ad8d681255866aad58b83e2f447c8af54e0bc6a0d8f930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dff75b08223b47a981ad8d681255866aad58b83e2f447c8af54e0bc6a0d8f930->enter($__internal_dff75b08223b47a981ad8d681255866aad58b83e2f447c8af54e0bc6a0d8f930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/typed/float32-array.js"));

        // line 1
        echo "require('../../modules/es6.typed.float32-array');
module.exports = require('../../modules/_core').Float32Array;
";
        
        $__internal_dff75b08223b47a981ad8d681255866aad58b83e2f447c8af54e0bc6a0d8f930->leave($__internal_dff75b08223b47a981ad8d681255866aad58b83e2f447c8af54e0bc6a0d8f930_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/typed/float32-array.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.typed.float32-array');
module.exports = require('../../modules/_core').Float32Array;
", "node_modules/core-js/library/fn/typed/float32-array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/typed/float32-array.js");
    }
}
