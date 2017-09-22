<?php

/* node_modules/es5-ext/object/ensure-natural-number-value.js */
class __TwigTemplate_2eb6d42af979f85b58f2894e931d471a4a5d7b8ba4d1667bd2535bac580ca749 extends Twig_Template
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
        $__internal_90b805ed0d0c7ac85c61f59156f10c5cd8d4ac063b2f9d18cf71f2fde70883c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b805ed0d0c7ac85c61f59156f10c5cd8d4ac063b2f9d18cf71f2fde70883c2->enter($__internal_90b805ed0d0c7ac85c61f59156f10c5cd8d4ac063b2f9d18cf71f2fde70883c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/object/ensure-natural-number-value.js"));

        // line 1
        echo "\"use strict\";

var ensure  = require(\"./ensure-natural-number\")
  , isValue = require(\"./is-value\");

module.exports = function (arg) {
\tif (!isValue(arg)) throw new TypeError(arg + \" is not a natural number\");
\treturn ensure(arg);
};
";
        
        $__internal_90b805ed0d0c7ac85c61f59156f10c5cd8d4ac063b2f9d18cf71f2fde70883c2->leave($__internal_90b805ed0d0c7ac85c61f59156f10c5cd8d4ac063b2f9d18cf71f2fde70883c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/object/ensure-natural-number-value.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var ensure  = require(\"./ensure-natural-number\")
  , isValue = require(\"./is-value\");

module.exports = function (arg) {
\tif (!isValue(arg)) throw new TypeError(arg + \" is not a natural number\");
\treturn ensure(arg);
};
", "node_modules/es5-ext/object/ensure-natural-number-value.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/object/ensure-natural-number-value.js");
    }
}
