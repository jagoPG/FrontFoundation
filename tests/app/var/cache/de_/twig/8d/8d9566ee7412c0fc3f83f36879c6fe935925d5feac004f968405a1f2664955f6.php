<?php

/* node_modules/core-js/modules/_redefine-all.js */
class __TwigTemplate_b9f82b70133a1f14d82f4b254572f8c973e9b5892aed51556d929505beb47b7d extends Twig_Template
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
        $__internal_23912fc4d9200dc9231d0cad66c87fb2f2a71c911a5897cd6f69e2d7db69f219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23912fc4d9200dc9231d0cad66c87fb2f2a71c911a5897cd6f69e2d7db69f219->enter($__internal_23912fc4d9200dc9231d0cad66c87fb2f2a71c911a5897cd6f69e2d7db69f219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_redefine-all.js"));

        // line 1
        echo "var redefine = require('./_redefine');
module.exports = function (target, src, safe) {
  for (var key in src) redefine(target, key, src[key], safe);
  return target;
};
";
        
        $__internal_23912fc4d9200dc9231d0cad66c87fb2f2a71c911a5897cd6f69e2d7db69f219->leave($__internal_23912fc4d9200dc9231d0cad66c87fb2f2a71c911a5897cd6f69e2d7db69f219_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_redefine-all.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var redefine = require('./_redefine');
module.exports = function (target, src, safe) {
  for (var key in src) redefine(target, key, src[key], safe);
  return target;
};
", "node_modules/core-js/modules/_redefine-all.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_redefine-all.js");
    }
}
