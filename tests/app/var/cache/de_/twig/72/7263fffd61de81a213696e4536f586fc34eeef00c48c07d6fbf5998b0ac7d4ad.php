<?php

/* node_modules/core-js/library/fn/date/to-primitive.js */
class __TwigTemplate_811323c1d80f9ffb15ce93100e4f05b71bafb994b8764c42d15e786fa67124ae extends Twig_Template
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
        $__internal_752b9abdb695a24a745bba9f97039803dae11b477962b66e8aee149cd0a00390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752b9abdb695a24a745bba9f97039803dae11b477962b66e8aee149cd0a00390->enter($__internal_752b9abdb695a24a745bba9f97039803dae11b477962b66e8aee149cd0a00390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/date/to-primitive.js"));

        // line 1
        echo "require('../../modules/es6.date.to-primitive');
var toPrimitive = require('../../modules/_date-to-primitive');
module.exports = function (it, hint) {
  return toPrimitive.call(it, hint);
};
";
        
        $__internal_752b9abdb695a24a745bba9f97039803dae11b477962b66e8aee149cd0a00390->leave($__internal_752b9abdb695a24a745bba9f97039803dae11b477962b66e8aee149cd0a00390_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/date/to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.date.to-primitive');
var toPrimitive = require('../../modules/_date-to-primitive');
module.exports = function (it, hint) {
  return toPrimitive.call(it, hint);
};
", "node_modules/core-js/library/fn/date/to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/date/to-primitive.js");
    }
}
