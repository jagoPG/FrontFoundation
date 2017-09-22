<?php

/* node_modules/es5-ext/number/to-pos-integer.js */
class __TwigTemplate_606485cda083661f05fab5e560ae887909e36e63cbe46e28938b01b088178017 extends Twig_Template
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
        $__internal_5b42586d03528949b1fbc2e99aaf5eaab638d6f9d969eea6b4f36814a83c13ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b42586d03528949b1fbc2e99aaf5eaab638d6f9d969eea6b4f36814a83c13ca->enter($__internal_5b42586d03528949b1fbc2e99aaf5eaab638d6f9d969eea6b4f36814a83c13ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es5-ext/number/to-pos-integer.js"));

        // line 1
        echo "\"use strict\";

var toInteger = require(\"./to-integer\")

  , max = Math.max;

module.exports = function (value) {
 return max(0, toInteger(value));
};
";
        
        $__internal_5b42586d03528949b1fbc2e99aaf5eaab638d6f9d969eea6b4f36814a83c13ca->leave($__internal_5b42586d03528949b1fbc2e99aaf5eaab638d6f9d969eea6b4f36814a83c13ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es5-ext/number/to-pos-integer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\";

var toInteger = require(\"./to-integer\")

  , max = Math.max;

module.exports = function (value) {
 return max(0, toInteger(value));
};
", "node_modules/es5-ext/number/to-pos-integer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es5-ext/number/to-pos-integer.js");
    }
}
