<?php

/* node_modules/core-js/library/fn/json/index.js */
class __TwigTemplate_79fa87339d9eda0232769f4235dbf85c4c4aa5b1afc2decbf7331c86e03097a6 extends Twig_Template
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
        $__internal_ffd887dd2d09ed6e51177a4af7b75639e304f23da702d9d3cf987783b7d809e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffd887dd2d09ed6e51177a4af7b75639e304f23da702d9d3cf987783b7d809e3->enter($__internal_ffd887dd2d09ed6e51177a4af7b75639e304f23da702d9d3cf987783b7d809e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/json/index.js"));

        // line 1
        echo "var core = require('../../modules/_core');
module.exports = core.JSON || (core.JSON = { stringify: JSON.stringify });
";
        
        $__internal_ffd887dd2d09ed6e51177a4af7b75639e304f23da702d9d3cf987783b7d809e3->leave($__internal_ffd887dd2d09ed6e51177a4af7b75639e304f23da702d9d3cf987783b7d809e3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/json/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var core = require('../../modules/_core');
module.exports = core.JSON || (core.JSON = { stringify: JSON.stringify });
", "node_modules/core-js/library/fn/json/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/json/index.js");
    }
}
