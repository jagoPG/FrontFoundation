<?php

/* node_modules/core-js/modules/_to-length.js */
class __TwigTemplate_4885ec7264ee23ef125ebe61a86eab1354976d28fade06333514e80404659ff7 extends Twig_Template
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
        $__internal_ba1291ba2aa259c1cb091b7d274d5ab78f8b738c6e5cc4fbbd547690279402c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba1291ba2aa259c1cb091b7d274d5ab78f8b738c6e5cc4fbbd547690279402c5->enter($__internal_ba1291ba2aa259c1cb091b7d274d5ab78f8b738c6e5cc4fbbd547690279402c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-length.js"));

        // line 1
        echo "// 7.1.15 ToLength
var toInteger = require('./_to-integer');
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
};
";
        
        $__internal_ba1291ba2aa259c1cb091b7d274d5ab78f8b738c6e5cc4fbbd547690279402c5->leave($__internal_ba1291ba2aa259c1cb091b7d274d5ab78f8b738c6e5cc4fbbd547690279402c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-length.js";
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
", "node_modules/core-js/modules/_to-length.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-length.js");
    }
}
