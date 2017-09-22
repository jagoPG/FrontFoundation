<?php

/* node_modules/core-js/fn/object/is-extensible.js */
class __TwigTemplate_c557f58bf83d056e877ceeaa07ed043bf90b0f0e45bd057ef9c779549e3a6a84 extends Twig_Template
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
        $__internal_f913a62d5ea0e03d9c74817fb633d75a8de8f7ce3cdaf7ca2b4806c2e39dd381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f913a62d5ea0e03d9c74817fb633d75a8de8f7ce3cdaf7ca2b4806c2e39dd381->enter($__internal_f913a62d5ea0e03d9c74817fb633d75a8de8f7ce3cdaf7ca2b4806c2e39dd381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/object/is-extensible.js"));

        // line 1
        echo "require('../../modules/es6.object.is-extensible');
module.exports = require('../../modules/_core').Object.isExtensible;
";
        
        $__internal_f913a62d5ea0e03d9c74817fb633d75a8de8f7ce3cdaf7ca2b4806c2e39dd381->leave($__internal_f913a62d5ea0e03d9c74817fb633d75a8de8f7ce3cdaf7ca2b4806c2e39dd381_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/object/is-extensible.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.object.is-extensible');
module.exports = require('../../modules/_core').Object.isExtensible;
", "node_modules/core-js/fn/object/is-extensible.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/object/is-extensible.js");
    }
}
