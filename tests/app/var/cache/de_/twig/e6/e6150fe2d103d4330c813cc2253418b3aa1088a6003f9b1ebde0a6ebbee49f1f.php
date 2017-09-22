<?php

/* node_modules/core-js/fn/string/trim.js */
class __TwigTemplate_cbda42cd78cc0552726b2797438ba509903be58d1910aea06a3967e515a9339a extends Twig_Template
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
        $__internal_23a0af2ddcc8a935b28714910966f41f8a30215aad9b3fb1c87616ff2f21b145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23a0af2ddcc8a935b28714910966f41f8a30215aad9b3fb1c87616ff2f21b145->enter($__internal_23a0af2ddcc8a935b28714910966f41f8a30215aad9b3fb1c87616ff2f21b145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/trim.js"));

        // line 1
        echo "require('../../modules/es6.string.trim');
module.exports = require('../../modules/_core').String.trim;
";
        
        $__internal_23a0af2ddcc8a935b28714910966f41f8a30215aad9b3fb1c87616ff2f21b145->leave($__internal_23a0af2ddcc8a935b28714910966f41f8a30215aad9b3fb1c87616ff2f21b145_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/trim.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.trim');
module.exports = require('../../modules/_core').String.trim;
", "node_modules/core-js/fn/string/trim.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/trim.js");
    }
}
