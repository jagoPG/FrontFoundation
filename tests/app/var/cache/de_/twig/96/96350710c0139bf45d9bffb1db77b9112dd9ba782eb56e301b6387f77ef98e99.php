<?php

/* node_modules/core-js/fn/string/virtual/big.js */
class __TwigTemplate_ecfec08b0f6980033671e15f42758bd39182199fa0d53d2d7d8d93ee15c29a9c extends Twig_Template
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
        $__internal_4276c9a5c5f44d2106e1c60254aa3afcf25a99962b1729daeedd72adc8cf1b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4276c9a5c5f44d2106e1c60254aa3afcf25a99962b1729daeedd72adc8cf1b9a->enter($__internal_4276c9a5c5f44d2106e1c60254aa3afcf25a99962b1729daeedd72adc8cf1b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/string/virtual/big.js"));

        // line 1
        echo "require('../../../modules/es6.string.big');
module.exports = require('../../../modules/_entry-virtual')('String').big;
";
        
        $__internal_4276c9a5c5f44d2106e1c60254aa3afcf25a99962b1729daeedd72adc8cf1b9a->leave($__internal_4276c9a5c5f44d2106e1c60254aa3afcf25a99962b1729daeedd72adc8cf1b9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/string/virtual/big.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../../modules/es6.string.big');
module.exports = require('../../../modules/_entry-virtual')('String').big;
", "node_modules/core-js/fn/string/virtual/big.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/string/virtual/big.js");
    }
}
