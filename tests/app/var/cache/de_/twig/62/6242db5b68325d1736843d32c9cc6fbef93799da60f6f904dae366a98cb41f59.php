<?php

/* node_modules/core-js/modules/_to-index.js */
class __TwigTemplate_9085bd5961645cadafb93b03d0aff9f2bc5fa152695775fd925b4b034a6db0f0 extends Twig_Template
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
        $__internal_7db5b7b2f48ea08fbcb3f82cac8843800055dbec9033bc020c257860bfbdb258 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7db5b7b2f48ea08fbcb3f82cac8843800055dbec9033bc020c257860bfbdb258->enter($__internal_7db5b7b2f48ea08fbcb3f82cac8843800055dbec9033bc020c257860bfbdb258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-index.js"));

        // line 1
        echo "// https://tc39.github.io/ecma262/#sec-toindex
var toInteger = require('./_to-integer');
var toLength = require('./_to-length');
module.exports = function (it) {
  if (it === undefined) return 0;
  var number = toInteger(it);
  var length = toLength(number);
  if (number !== length) throw RangeError('Wrong length!');
  return length;
};
";
        
        $__internal_7db5b7b2f48ea08fbcb3f82cac8843800055dbec9033bc020c257860bfbdb258->leave($__internal_7db5b7b2f48ea08fbcb3f82cac8843800055dbec9033bc020c257860bfbdb258_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// https://tc39.github.io/ecma262/#sec-toindex
var toInteger = require('./_to-integer');
var toLength = require('./_to-length');
module.exports = function (it) {
  if (it === undefined) return 0;
  var number = toInteger(it);
  var length = toLength(number);
  if (number !== length) throw RangeError('Wrong length!');
  return length;
};
", "node_modules/core-js/modules/_to-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-index.js");
    }
}
