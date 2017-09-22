<?php

/* node_modules/core-js/es7/error.js */
class __TwigTemplate_34c78d1a9b3573e8581e89df3a61a9646ae81ee6e5cba527e2be4bf44a40f386 extends Twig_Template
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
        $__internal_2b94808fa34c75d60ab2be957c9b1e618b241c30979ac71fb3a8ef7bd8252f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b94808fa34c75d60ab2be957c9b1e618b241c30979ac71fb3a8ef7bd8252f79->enter($__internal_2b94808fa34c75d60ab2be957c9b1e618b241c30979ac71fb3a8ef7bd8252f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/es7/error.js"));

        // line 1
        echo "require('../modules/es7.error.is-error');
module.exports = require('../modules/_core').Error;
";
        
        $__internal_2b94808fa34c75d60ab2be957c9b1e618b241c30979ac71fb3a8ef7bd8252f79->leave($__internal_2b94808fa34c75d60ab2be957c9b1e618b241c30979ac71fb3a8ef7bd8252f79_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/es7/error.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/es7.error.is-error');
module.exports = require('../modules/_core').Error;
", "node_modules/core-js/es7/error.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/es7/error.js");
    }
}
