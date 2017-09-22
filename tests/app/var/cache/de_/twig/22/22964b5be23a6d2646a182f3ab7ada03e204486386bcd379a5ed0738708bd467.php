<?php

/* node_modules/core-js/fn/function/has-instance.js */
class __TwigTemplate_3ebb6fd991c15fd595339de59e53eafa53dff570eff18fe3081cc424f2e5d7b0 extends Twig_Template
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
        $__internal_93c05e8a3a74ab724b91a6ed38ac7863ffb5cb4b59b5704f54c9920212a0bf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c05e8a3a74ab724b91a6ed38ac7863ffb5cb4b59b5704f54c9920212a0bf57->enter($__internal_93c05e8a3a74ab724b91a6ed38ac7863ffb5cb4b59b5704f54c9920212a0bf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/function/has-instance.js"));

        // line 1
        echo "require('../../modules/es6.function.has-instance');
module.exports = Function[require('../../modules/_wks')('hasInstance')];
";
        
        $__internal_93c05e8a3a74ab724b91a6ed38ac7863ffb5cb4b59b5704f54c9920212a0bf57->leave($__internal_93c05e8a3a74ab724b91a6ed38ac7863ffb5cb4b59b5704f54c9920212a0bf57_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/function/has-instance.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.function.has-instance');
module.exports = Function[require('../../modules/_wks')('hasInstance')];
", "node_modules/core-js/fn/function/has-instance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/function/has-instance.js");
    }
}
