<?php

/* node_modules/core-js/fn/number/is-finite.js */
class __TwigTemplate_57162934ee5c2d7b0b2da4e7b92038fb64ce41ef3739461ae2f5452e054c7bee extends Twig_Template
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
        $__internal_a700ec0d5f6dc2d3e7729c84ded927993d542123c5b653fc421a17d4a4f7e193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a700ec0d5f6dc2d3e7729c84ded927993d542123c5b653fc421a17d4a4f7e193->enter($__internal_a700ec0d5f6dc2d3e7729c84ded927993d542123c5b653fc421a17d4a4f7e193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/is-finite.js"));

        // line 1
        echo "require('../../modules/es6.number.is-finite');
module.exports = require('../../modules/_core').Number.isFinite;
";
        
        $__internal_a700ec0d5f6dc2d3e7729c84ded927993d542123c5b653fc421a17d4a4f7e193->leave($__internal_a700ec0d5f6dc2d3e7729c84ded927993d542123c5b653fc421a17d4a4f7e193_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/is-finite.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.is-finite');
module.exports = require('../../modules/_core').Number.isFinite;
", "node_modules/core-js/fn/number/is-finite.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/is-finite.js");
    }
}
