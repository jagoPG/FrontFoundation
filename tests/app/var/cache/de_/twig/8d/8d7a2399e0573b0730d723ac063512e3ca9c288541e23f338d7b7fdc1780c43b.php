<?php

/* node_modules/core-js/fn/number/constructor.js */
class __TwigTemplate_9538210e834de1abda6738a02e91aba5e0203a7018d0dd3f1e5405d377c91d0a extends Twig_Template
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
        $__internal_8228761f97520699edb9d3e2677b151504ce9360bed46479549b7db419e71527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8228761f97520699edb9d3e2677b151504ce9360bed46479549b7db419e71527->enter($__internal_8228761f97520699edb9d3e2677b151504ce9360bed46479549b7db419e71527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/number/constructor.js"));

        // line 1
        echo "require('../../modules/es6.number.constructor');
module.exports = Number;
";
        
        $__internal_8228761f97520699edb9d3e2677b151504ce9360bed46479549b7db419e71527->leave($__internal_8228761f97520699edb9d3e2677b151504ce9360bed46479549b7db419e71527_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/number/constructor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.number.constructor');
module.exports = Number;
", "node_modules/core-js/fn/number/constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/number/constructor.js");
    }
}
