<?php

/* node_modules/core-js/fn/string/starts-with.js */
class __TwigTemplate_7a69c1a1ecdef5f7af3d7215a2aa883b07139e72517871320eb7dd58d5b5ad58 extends Twig_Template
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
        $__internal_5a01dceb8e04f70819279f54fcd83aeafc983a67ad2864914a174511c940931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a01dceb8e04f70819279f54fcd83aeafc983a67ad2864914a174511c940931a->enter($__internal_5a01dceb8e04f70819279f54fcd83aeafc983a67ad2864914a174511c940931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/starts-with.js"));

        // line 1
        echo "require('../../modules/es6.string.starts-with');
module.exports = require('../../modules/_core').String.startsWith;
";
        
        $__internal_5a01dceb8e04f70819279f54fcd83aeafc983a67ad2864914a174511c940931a->leave($__internal_5a01dceb8e04f70819279f54fcd83aeafc983a67ad2864914a174511c940931a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/starts-with.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/es6.string.starts-with');
module.exports = require('../../modules/_core').String.startsWith;
", "node_modules/core-js/fn/string/starts-with.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/starts-with.js");
    }
}
