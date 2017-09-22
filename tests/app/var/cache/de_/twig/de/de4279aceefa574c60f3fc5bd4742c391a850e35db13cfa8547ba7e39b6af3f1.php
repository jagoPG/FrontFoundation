<?php

/* node_modules/core-js/modules/_string-repeat.js */
class __TwigTemplate_6097228d4328579ad15345dd5370c9313cbe5b641fb26dec14d6f40707f3399a extends Twig_Template
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
        $__internal_f33672d96ac05a38fcbe4eae0fb0d1adb276e9a890b9bed830391257efbf3836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f33672d96ac05a38fcbe4eae0fb0d1adb276e9a890b9bed830391257efbf3836->enter($__internal_f33672d96ac05a38fcbe4eae0fb0d1adb276e9a890b9bed830391257efbf3836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_string-repeat.js"));

        // line 1
        echo "'use strict';
var toInteger = require('./_to-integer');
var defined = require('./_defined');

module.exports = function repeat(count) {
  var str = String(defined(this));
  var res = '';
  var n = toInteger(count);
  if (n < 0 || n == Infinity) throw RangeError(\"Count can't be negative\");
  for (;n > 0; (n >>>= 1) && (str += str)) if (n & 1) res += str;
  return res;
};
";
        
        $__internal_f33672d96ac05a38fcbe4eae0fb0d1adb276e9a890b9bed830391257efbf3836->leave($__internal_f33672d96ac05a38fcbe4eae0fb0d1adb276e9a890b9bed830391257efbf3836_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_string-repeat.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var toInteger = require('./_to-integer');
var defined = require('./_defined');

module.exports = function repeat(count) {
  var str = String(defined(this));
  var res = '';
  var n = toInteger(count);
  if (n < 0 || n == Infinity) throw RangeError(\"Count can't be negative\");
  for (;n > 0; (n >>>= 1) && (str += str)) if (n & 1) res += str;
  return res;
};
", "node_modules/core-js/modules/_string-repeat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_string-repeat.js");
    }
}
