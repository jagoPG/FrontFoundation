<?php

/* node_modules/core-js/modules/_entry-virtual.js */
class __TwigTemplate_14b93a78fa1925ab391845391ad4afafa1598eee2b50bdc87052b17d82a3156a extends Twig_Template
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
        $__internal_ec3c5401d5d15ae22884cc964d61e297ce5ba7c480767828f0d029442da81bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec3c5401d5d15ae22884cc964d61e297ce5ba7c480767828f0d029442da81bb3->enter($__internal_ec3c5401d5d15ae22884cc964d61e297ce5ba7c480767828f0d029442da81bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_entry-virtual.js"));

        // line 1
        echo "var core = require('./_core');
module.exports = function (CONSTRUCTOR) {
  var C = core[CONSTRUCTOR];
  return (C.virtual || C.prototype);
};
";
        
        $__internal_ec3c5401d5d15ae22884cc964d61e297ce5ba7c480767828f0d029442da81bb3->leave($__internal_ec3c5401d5d15ae22884cc964d61e297ce5ba7c480767828f0d029442da81bb3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_entry-virtual.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('./_core');
module.exports = function (CONSTRUCTOR) {
  var C = core[CONSTRUCTOR];
  return (C.virtual || C.prototype);
};
", "node_modules/core-js/modules/_entry-virtual.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_entry-virtual.js");
    }
}
