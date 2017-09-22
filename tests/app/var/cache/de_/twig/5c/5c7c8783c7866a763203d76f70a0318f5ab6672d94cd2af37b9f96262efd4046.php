<?php

/* node_modules/core-js/library/modules/_iter-detect.js */
class __TwigTemplate_9bf7e816f26841564eea0f6036fc8ee8104d333b77967e9fd67a8ab24272bd79 extends Twig_Template
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
        $__internal_9b484c09770d0b34c509a7e7e0c891dd03274f31c9fcc68a0352774afd07bfc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b484c09770d0b34c509a7e7e0c891dd03274f31c9fcc68a0352774afd07bfc5->enter($__internal_9b484c09770d0b34c509a7e7e0c891dd03274f31c9fcc68a0352774afd07bfc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iter-detect.js"));

        // line 1
        echo "var ITERATOR = require('./_wks')('iterator');
var SAFE_CLOSING = false;

try {
  var riter = [7][ITERATOR]();
  riter['return'] = function () { SAFE_CLOSING = true; };
  // eslint-disable-next-line no-throw-literal
  Array.from(riter, function () { throw 2; });
} catch (e) { /* empty */ }

module.exports = function (exec, skipClosing) {
  if (!skipClosing && !SAFE_CLOSING) return false;
  var safe = false;
  try {
    var arr = [7];
    var iter = arr[ITERATOR]();
    iter.next = function () { return { done: safe = true }; };
    arr[ITERATOR] = function () { return iter; };
    exec(arr);
  } catch (e) { /* empty */ }
  return safe;
};
";
        
        $__internal_9b484c09770d0b34c509a7e7e0c891dd03274f31c9fcc68a0352774afd07bfc5->leave($__internal_9b484c09770d0b34c509a7e7e0c891dd03274f31c9fcc68a0352774afd07bfc5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iter-detect.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ITERATOR = require('./_wks')('iterator');
var SAFE_CLOSING = false;

try {
  var riter = [7][ITERATOR]();
  riter['return'] = function () { SAFE_CLOSING = true; };
  // eslint-disable-next-line no-throw-literal
  Array.from(riter, function () { throw 2; });
} catch (e) { /* empty */ }

module.exports = function (exec, skipClosing) {
  if (!skipClosing && !SAFE_CLOSING) return false;
  var safe = false;
  try {
    var arr = [7];
    var iter = arr[ITERATOR]();
    iter.next = function () { return { done: safe = true }; };
    arr[ITERATOR] = function () { return iter; };
    exec(arr);
  } catch (e) { /* empty */ }
  return safe;
};
", "node_modules/core-js/library/modules/_iter-detect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iter-detect.js");
    }
}
