<?php

/* node_modules/core-js/library/fn/number/iterator.js */
class __TwigTemplate_16a33344ae5ab2e9a1f30f5566df72a8fcf3ddcaf2108502fdf34013148b18f9 extends Twig_Template
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
        $__internal_0c0e2ce55ec406b952c08d9d407e0d11ad748478e748f84065ce9a489da964e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c0e2ce55ec406b952c08d9d407e0d11ad748478e748f84065ce9a489da964e4->enter($__internal_0c0e2ce55ec406b952c08d9d407e0d11ad748478e748f84065ce9a489da964e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/number/iterator.js"));

        // line 1
        echo "require('../../modules/core.number.iterator');
var get = require('../../modules/_iterators').Number;
module.exports = function (it) {
  return get.call(it);
};
";
        
        $__internal_0c0e2ce55ec406b952c08d9d407e0d11ad748478e748f84065ce9a489da964e4->leave($__internal_0c0e2ce55ec406b952c08d9d407e0d11ad748478e748f84065ce9a489da964e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/number/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.number.iterator');
var get = require('../../modules/_iterators').Number;
module.exports = function (it) {
  return get.call(it);
};
", "node_modules/core-js/library/fn/number/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/number/iterator.js");
    }
}
