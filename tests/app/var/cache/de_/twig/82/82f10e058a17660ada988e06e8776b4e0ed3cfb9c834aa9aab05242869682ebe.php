<?php

/* node_modules/core-js/fn/global.js */
class __TwigTemplate_f7264be164df65128fa00cc92b16f39cc8a6585e2f8b6003fdbdaa1c79e933a5 extends Twig_Template
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
        $__internal_633adb3c7bbd23f96eaaf07fef7c5d77602718ff1645c2eebe22cf2a47f9bc6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633adb3c7bbd23f96eaaf07fef7c5d77602718ff1645c2eebe22cf2a47f9bc6b->enter($__internal_633adb3c7bbd23f96eaaf07fef7c5d77602718ff1645c2eebe22cf2a47f9bc6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/global.js"));

        // line 1
        echo "require('../modules/es7.global');
module.exports = require('../modules/_core').global;
";
        
        $__internal_633adb3c7bbd23f96eaaf07fef7c5d77602718ff1645c2eebe22cf2a47f9bc6b->leave($__internal_633adb3c7bbd23f96eaaf07fef7c5d77602718ff1645c2eebe22cf2a47f9bc6b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/global.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.global');
module.exports = require('../modules/_core').global;
", "node_modules/core-js/fn/global.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/global.js");
    }
}
