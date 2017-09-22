<?php

/* node_modules/core-js/modules/_object-gops.js */
class __TwigTemplate_b00f5a7ca659e39f0983b8171bf1f1f1178d9fbbc9167643270cfcdf86f014ed extends Twig_Template
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
        $__internal_bf6953f85be22838f2b3744fea48373f4e4a9471884f9c690931c84e27d5c85b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf6953f85be22838f2b3744fea48373f4e4a9471884f9c690931c84e27d5c85b->enter($__internal_bf6953f85be22838f2b3744fea48373f4e4a9471884f9c690931c84e27d5c85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_object-gops.js"));

        // line 1
        echo "exports.f = Object.getOwnPropertySymbols;
";
        
        $__internal_bf6953f85be22838f2b3744fea48373f4e4a9471884f9c690931c84e27d5c85b->leave($__internal_bf6953f85be22838f2b3744fea48373f4e4a9471884f9c690931c84e27d5c85b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_object-gops.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("exports.f = Object.getOwnPropertySymbols;
", "node_modules/core-js/modules/_object-gops.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_object-gops.js");
    }
}
