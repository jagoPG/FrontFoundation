<?php

/* node_modules/core-js/fn/string/small.js */
class __TwigTemplate_36c229ca90482b15702f2714ab44d70086f5acadae9347d5dc5467cd6af29e40 extends Twig_Template
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
        $__internal_34da7044e7c1609bf5eafe4fb65129a5be089b09b95faac512cb0a776a329d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34da7044e7c1609bf5eafe4fb65129a5be089b09b95faac512cb0a776a329d74->enter($__internal_34da7044e7c1609bf5eafe4fb65129a5be089b09b95faac512cb0a776a329d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/small.js"));

        // line 1
        echo "require('../../modules/es6.string.small');
module.exports = require('../../modules/_core').String.small;
";
        
        $__internal_34da7044e7c1609bf5eafe4fb65129a5be089b09b95faac512cb0a776a329d74->leave($__internal_34da7044e7c1609bf5eafe4fb65129a5be089b09b95faac512cb0a776a329d74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/small.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.small');
module.exports = require('../../modules/_core').String.small;
", "node_modules/core-js/fn/string/small.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/small.js");
    }
}
