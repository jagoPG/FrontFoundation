<?php

/* node_modules/core-js/fn/set-immediate.js */
class __TwigTemplate_53a6be947f71f4a6f67a7ad61ca19e9990a48f0993dac2814f91465301d59ab4 extends Twig_Template
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
        $__internal_aaff5cb08274ec76579ee922faf01eab043f8c0b8416a851406751082ea79e17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaff5cb08274ec76579ee922faf01eab043f8c0b8416a851406751082ea79e17->enter($__internal_aaff5cb08274ec76579ee922faf01eab043f8c0b8416a851406751082ea79e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/set-immediate.js"));

        // line 1
        echo "require('../modules/web.immediate');
module.exports = require('../modules/_core').setImmediate;
";
        
        $__internal_aaff5cb08274ec76579ee922faf01eab043f8c0b8416a851406751082ea79e17->leave($__internal_aaff5cb08274ec76579ee922faf01eab043f8c0b8416a851406751082ea79e17_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/set-immediate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/web.immediate');
module.exports = require('../modules/_core').setImmediate;
", "node_modules/core-js/fn/set-immediate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/set-immediate.js");
    }
}
