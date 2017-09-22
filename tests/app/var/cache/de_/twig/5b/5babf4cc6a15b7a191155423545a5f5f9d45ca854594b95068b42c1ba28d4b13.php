<?php

/* node_modules/core-js/fn/array/concat.js */
class __TwigTemplate_34e2ee30a9bd8e32d3ffc68f90aac91ed4b13970cf534fea54c7f7fa93007f6f extends Twig_Template
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
        $__internal_cce7ec02c5c29b1383328f6d0dfbec0d3397eacee08474fa1639c94abcd8ac9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cce7ec02c5c29b1383328f6d0dfbec0d3397eacee08474fa1639c94abcd8ac9b->enter($__internal_cce7ec02c5c29b1383328f6d0dfbec0d3397eacee08474fa1639c94abcd8ac9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/array/concat.js"));

        // line 1
        echo "// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.concat, arguments);
};
";
        
        $__internal_cce7ec02c5c29b1383328f6d0dfbec0d3397eacee08474fa1639c94abcd8ac9b->leave($__internal_cce7ec02c5c29b1383328f6d0dfbec0d3397eacee08474fa1639c94abcd8ac9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/array/concat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// for a legacy code and future fixes
module.exports = function () {
  return Function.call.apply(Array.prototype.concat, arguments);
};
", "node_modules/core-js/fn/array/concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/array/concat.js");
    }
}
