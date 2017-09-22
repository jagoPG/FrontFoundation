<?php

/* node_modules/core-js/fn/number/is-nan.js */
class __TwigTemplate_e36ff2b3d9fb939a08d703c513f9a268ccc54a1b032a9bcfdf116eefa41f3c5a extends Twig_Template
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
        $__internal_a8c39689b41c6a1d363c38d2297e71a66b2ce12b9e5b65fae86bae9c15a9c1e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c39689b41c6a1d363c38d2297e71a66b2ce12b9e5b65fae86bae9c15a9c1e0->enter($__internal_a8c39689b41c6a1d363c38d2297e71a66b2ce12b9e5b65fae86bae9c15a9c1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/is-nan.js"));

        // line 1
        echo "require('../../modules/es6.number.is-nan');
module.exports = require('../../modules/_core').Number.isNaN;
";
        
        $__internal_a8c39689b41c6a1d363c38d2297e71a66b2ce12b9e5b65fae86bae9c15a9c1e0->leave($__internal_a8c39689b41c6a1d363c38d2297e71a66b2ce12b9e5b65fae86bae9c15a9c1e0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/is-nan.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.is-nan');
module.exports = require('../../modules/_core').Number.isNaN;
", "node_modules/core-js/fn/number/is-nan.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/is-nan.js");
    }
}
