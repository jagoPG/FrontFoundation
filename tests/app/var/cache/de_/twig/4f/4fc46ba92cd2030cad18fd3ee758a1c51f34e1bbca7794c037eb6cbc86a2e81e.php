<?php

/* node_modules/core-js/library/modules/_to-length.js */
class __TwigTemplate_058def9b80728e85618b153b4dd1b50766c74b8ac0dcb95f156f680114bfbe81 extends Twig_Template
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
        $__internal_5110e820d8b7c8b8acc2279f0d16f98b01416107faccd656df661cbaa4212d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5110e820d8b7c8b8acc2279f0d16f98b01416107faccd656df661cbaa4212d20->enter($__internal_5110e820d8b7c8b8acc2279f0d16f98b01416107faccd656df661cbaa4212d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-length.js"));

        // line 1
        echo "// 7.1.15 ToLength
var toInteger = require('./_to-integer');
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
};
";
        
        $__internal_5110e820d8b7c8b8acc2279f0d16f98b01416107faccd656df661cbaa4212d20->leave($__internal_5110e820d8b7c8b8acc2279f0d16f98b01416107faccd656df661cbaa4212d20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-length.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.1.15 ToLength
var toInteger = require('./_to-integer');
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
};
", "node_modules/core-js/library/modules/_to-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-length.js");
    }
}
