<?php

/* node_modules/core-js/fn/string/iterator.js */
class __TwigTemplate_d3ba2df28fdb45e5a7477b554c25a62594efbb8f384a342ca8fd0f5c74b89ac7 extends Twig_Template
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
        $__internal_9ff841fba04529d630a16253a5ca91ec43b34abe843865e1c4ca83013fc7e1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ff841fba04529d630a16253a5ca91ec43b34abe843865e1c4ca83013fc7e1d0->enter($__internal_9ff841fba04529d630a16253a5ca91ec43b34abe843865e1c4ca83013fc7e1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/iterator.js"));

        // line 1
        echo "require('../../modules/es6.string.iterator');
var get = require('../../modules/_iterators').String;
module.exports = function (it) {
  return get.call(it);
};
";
        
        $__internal_9ff841fba04529d630a16253a5ca91ec43b34abe843865e1c4ca83013fc7e1d0->leave($__internal_9ff841fba04529d630a16253a5ca91ec43b34abe843865e1c4ca83013fc7e1d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/iterator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.iterator');
var get = require('../../modules/_iterators').String;
module.exports = function (it) {
  return get.call(it);
};
", "node_modules/core-js/fn/string/iterator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/iterator.js");
    }
}
