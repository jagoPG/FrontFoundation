<?php

/* node_modules/core-js/fn/object/keys.js */
class __TwigTemplate_421848cb5d491d6159a78752343297c3ae404d692cd02031643123574c5cbddd extends Twig_Template
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
        $__internal_73d242f10f57161bd416860fc9dafe6124e26e1f4f60ab32726adfbd276904b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d242f10f57161bd416860fc9dafe6124e26e1f4f60ab32726adfbd276904b6->enter($__internal_73d242f10f57161bd416860fc9dafe6124e26e1f4f60ab32726adfbd276904b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/keys.js"));

        // line 1
        echo "require('../../modules/es6.object.keys');
module.exports = require('../../modules/_core').Object.keys;
";
        
        $__internal_73d242f10f57161bd416860fc9dafe6124e26e1f4f60ab32726adfbd276904b6->leave($__internal_73d242f10f57161bd416860fc9dafe6124e26e1f4f60ab32726adfbd276904b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/keys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.keys');
module.exports = require('../../modules/_core').Object.keys;
", "node_modules/core-js/fn/object/keys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/keys.js");
    }
}
