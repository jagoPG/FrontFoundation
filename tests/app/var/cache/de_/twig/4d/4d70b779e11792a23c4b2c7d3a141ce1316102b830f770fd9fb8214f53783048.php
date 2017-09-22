<?php

/* node_modules/core-js/fn/dict.js */
class __TwigTemplate_a6a9351b1bafb21736b4a289a7ba572d040f032d5c3453825cbdc235fb34d240 extends Twig_Template
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
        $__internal_d90e0f5ef5355beca37ab6ff7887ae6b9af286c04226cbd19d13a4384c01c0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90e0f5ef5355beca37ab6ff7887ae6b9af286c04226cbd19d13a4384c01c0f4->enter($__internal_d90e0f5ef5355beca37ab6ff7887ae6b9af286c04226cbd19d13a4384c01c0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/dict.js"));

        // line 1
        echo "require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
";
        
        $__internal_d90e0f5ef5355beca37ab6ff7887ae6b9af286c04226cbd19d13a4384c01c0f4->leave($__internal_d90e0f5ef5355beca37ab6ff7887ae6b9af286c04226cbd19d13a4384c01c0f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/dict.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.dict');
module.exports = require('../modules/_core').Dict;
", "node_modules/core-js/fn/dict.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/dict.js");
    }
}
