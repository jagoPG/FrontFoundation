<?php

/* node_modules/babel-runtime/core-js/asap.js */
class __TwigTemplate_d90cfc090b54a0135b25b47a6b6ecf63a21b6554ea68b28453f6f39cfd5f99bf extends Twig_Template
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
        $__internal_fcfdcceb8980dda6552480ec1009d79c16061ff46d86d2bac73378b7c6e04884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfdcceb8980dda6552480ec1009d79c16061ff46d86d2bac73378b7c6e04884->enter($__internal_fcfdcceb8980dda6552480ec1009d79c16061ff46d86d2bac73378b7c6e04884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-runtime/core-js/asap.js"));

        // line 1
        echo "module.exports = { \"default\": require(\"core-js/library/fn/asap\"), __esModule: true };";
        
        $__internal_fcfdcceb8980dda6552480ec1009d79c16061ff46d86d2bac73378b7c6e04884->leave($__internal_fcfdcceb8980dda6552480ec1009d79c16061ff46d86d2bac73378b7c6e04884_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-runtime/core-js/asap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = { \"default\": require(\"core-js/library/fn/asap\"), __esModule: true };", "node_modules/babel-runtime/core-js/asap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-runtime/core-js/asap.js");
    }
}
