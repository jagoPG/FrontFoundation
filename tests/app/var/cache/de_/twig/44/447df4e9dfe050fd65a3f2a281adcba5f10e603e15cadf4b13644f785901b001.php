<?php

/* node_modules/core-js/fn/regexp/escape.js */
class __TwigTemplate_679d87ebc91f5b6cefdeea5e25f46254d2f819e82b11a4e8a85f75bac18f8b28 extends Twig_Template
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
        $__internal_beb3b902a4b3caf69481bba380d1429061d053c206c13dc7ee9e9521a4cf4106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beb3b902a4b3caf69481bba380d1429061d053c206c13dc7ee9e9521a4cf4106->enter($__internal_beb3b902a4b3caf69481bba380d1429061d053c206c13dc7ee9e9521a4cf4106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/regexp/escape.js"));

        // line 1
        echo "require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp.escape;
";
        
        $__internal_beb3b902a4b3caf69481bba380d1429061d053c206c13dc7ee9e9521a4cf4106->leave($__internal_beb3b902a4b3caf69481bba380d1429061d053c206c13dc7ee9e9521a4cf4106_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/regexp/escape.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("require('../../modules/core.regexp.escape');
module.exports = require('../../modules/_core').RegExp.escape;
", "node_modules/core-js/fn/regexp/escape.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/regexp/escape.js");
    }
}
