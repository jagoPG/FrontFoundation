<?php

/* node_modules/core-js/fn/_.js */
class __TwigTemplate_4faba758850123c2fc46ebf96fd5c66ee999631e6d6e9e0c780fd74876311cd2 extends Twig_Template
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
        $__internal_73d25a13d72b32050845fe97fd3592165fd1d6e303c569a27db2f400ea31ce85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d25a13d72b32050845fe97fd3592165fd1d6e303c569a27db2f400ea31ce85->enter($__internal_73d25a13d72b32050845fe97fd3592165fd1d6e303c569a27db2f400ea31ce85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/_.js"));

        // line 1
        echo "require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
";
        
        $__internal_73d25a13d72b32050845fe97fd3592165fd1d6e303c569a27db2f400ea31ce85->leave($__internal_73d25a13d72b32050845fe97fd3592165fd1d6e303c569a27db2f400ea31ce85_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/_.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../modules/core.function.part');
module.exports = require('../modules/_core')._;
", "node_modules/core-js/fn/_.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/_.js");
    }
}
