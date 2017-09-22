<?php

/* node_modules/core-js/library/fn/object/get-own-property-symbols.js */
class __TwigTemplate_d66d4918182bb9e0c4cb445dc6ebe77449ed2efe4bf987c5cd6f464eb2189c6f extends Twig_Template
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
        $__internal_1461630105a43168e819cb6851582f0afaccc13d7c7807fb6280c53f7a234242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1461630105a43168e819cb6851582f0afaccc13d7c7807fb6280c53f7a234242->enter($__internal_1461630105a43168e819cb6851582f0afaccc13d7c7807fb6280c53f7a234242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/object/get-own-property-symbols.js"));

        // line 1
        echo "require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Object.getOwnPropertySymbols;
";
        
        $__internal_1461630105a43168e819cb6851582f0afaccc13d7c7807fb6280c53f7a234242->leave($__internal_1461630105a43168e819cb6851582f0afaccc13d7c7807fb6280c53f7a234242_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/object/get-own-property-symbols.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.symbol');
module.exports = require('../../modules/_core').Object.getOwnPropertySymbols;
", "node_modules/core-js/library/fn/object/get-own-property-symbols.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/object/get-own-property-symbols.js");
    }
}
