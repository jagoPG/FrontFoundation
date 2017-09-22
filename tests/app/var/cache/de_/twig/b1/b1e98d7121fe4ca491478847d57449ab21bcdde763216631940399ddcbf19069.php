<?php

/* node_modules/core-js/library/fn/array/slice.js */
class __TwigTemplate_1c1c3073535dba361d0c8c42ef5dfa3246eccbef8afb5aa179ea675bad45aa5f extends Twig_Template
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
        $__internal_60cf418872b5788bf2addf669622354a10c65f9e470e9f9c25e26f20e5a8a586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60cf418872b5788bf2addf669622354a10c65f9e470e9f9c25e26f20e5a8a586->enter($__internal_60cf418872b5788bf2addf669622354a10c65f9e470e9f9c25e26f20e5a8a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/array/slice.js"));

        // line 1
        echo "require('../../modules/es6.array.slice');
module.exports = require('../../modules/_core').Array.slice;
";
        
        $__internal_60cf418872b5788bf2addf669622354a10c65f9e470e9f9c25e26f20e5a8a586->leave($__internal_60cf418872b5788bf2addf669622354a10c65f9e470e9f9c25e26f20e5a8a586_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/array/slice.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.array.slice');
module.exports = require('../../modules/_core').Array.slice;
", "node_modules/core-js/library/fn/array/slice.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/array/slice.js");
    }
}
