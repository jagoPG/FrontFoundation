<?php

/* node_modules/core-js/modules/_iter-detect.js */
class __TwigTemplate_632de1d9a30d43816191e8012fc052113816a7a9262c73c101e48dd0bc05c35b extends Twig_Template
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
        $__internal_af497a9d71d87176886ae0928042085b3aa05b09b995c0a0a505fe15de71eb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af497a9d71d87176886ae0928042085b3aa05b09b995c0a0a505fe15de71eb3f->enter($__internal_af497a9d71d87176886ae0928042085b3aa05b09b995c0a0a505fe15de71eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_iter-detect.js"));

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
        
        $__internal_af497a9d71d87176886ae0928042085b3aa05b09b995c0a0a505fe15de71eb3f->leave($__internal_af497a9d71d87176886ae0928042085b3aa05b09b995c0a0a505fe15de71eb3f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_iter-detect.js";
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
", "node_modules/core-js/modules/_iter-detect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_iter-detect.js");
    }
}
