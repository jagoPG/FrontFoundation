<?php

/* node_modules/core-js/library/modules/_to-index.js */
class __TwigTemplate_51e72ba1294551fc95a73f2f4371f4f7a19fbead2f0cf5a6cd7f482f55da1565 extends Twig_Template
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
        $__internal_6420b1bddc2d7d403e3697c3eb2cc3bf789331ebe9847dfa1bef0ff54ad44d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6420b1bddc2d7d403e3697c3eb2cc3bf789331ebe9847dfa1bef0ff54ad44d9a->enter($__internal_6420b1bddc2d7d403e3697c3eb2cc3bf789331ebe9847dfa1bef0ff54ad44d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-index.js"));

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
        
        $__internal_6420b1bddc2d7d403e3697c3eb2cc3bf789331ebe9847dfa1bef0ff54ad44d9a->leave($__internal_6420b1bddc2d7d403e3697c3eb2cc3bf789331ebe9847dfa1bef0ff54ad44d9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-index.js";
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
", "node_modules/core-js/library/modules/_to-index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-index.js");
    }
}
