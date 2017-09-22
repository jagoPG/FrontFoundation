<?php

/* node_modules/core-js/modules/_a-number-value.js */
class __TwigTemplate_1fa954606d61a8ec472d74b56b8f56414b8ce7c88db420684b8709bab8f7a044 extends Twig_Template
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
        $__internal_0bb73a1b752d4b6c70a41c396c33e234f792d970866d7c072a800b1ad4b6cb6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bb73a1b752d4b6c70a41c396c33e234f792d970866d7c072a800b1ad4b6cb6d->enter($__internal_0bb73a1b752d4b6c70a41c396c33e234f792d970866d7c072a800b1ad4b6cb6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_a-number-value.js"));

        // line 1
        echo "var cof = require('./_cof');
module.exports = function (it, msg) {
  if (typeof it != 'number' && cof(it) != 'Number') throw TypeError(msg);
  return +it;
};
";
        
        $__internal_0bb73a1b752d4b6c70a41c396c33e234f792d970866d7c072a800b1ad4b6cb6d->leave($__internal_0bb73a1b752d4b6c70a41c396c33e234f792d970866d7c072a800b1ad4b6cb6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_a-number-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cof = require('./_cof');
module.exports = function (it, msg) {
  if (typeof it != 'number' && cof(it) != 'Number') throw TypeError(msg);
  return +it;
};
", "node_modules/core-js/modules/_a-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_a-number-value.js");
    }
}
