<?php

/* node_modules/core-js/library/modules/_to-primitive.js */
class __TwigTemplate_d225c0a39c3673e961521c09f855dead2ce70acbebcda5f496592aa0cabee242 extends Twig_Template
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
        $__internal_2b57810a5f50bd8d8521e63ab94a6b21e322f3065b3f910d98030b8d4405df7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b57810a5f50bd8d8521e63ab94a6b21e322f3065b3f910d98030b8d4405df7b->enter($__internal_2b57810a5f50bd8d8521e63ab94a6b21e322f3065b3f910d98030b8d4405df7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_to-primitive.js"));

        // line 1
        echo "// 7.1.1 ToPrimitive(input [, PreferredType])
var isObject = require('./_is-object');
// instead of the ES6 spec version, we didn't implement @@toPrimitive case
// and the second argument - flag - preferred type is a string
module.exports = function (it, S) {
  if (!isObject(it)) return it;
  var fn, val;
  if (S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  if (typeof (fn = it.valueOf) == 'function' && !isObject(val = fn.call(it))) return val;
  if (!S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  throw TypeError(\"Can't convert object to primitive value\");
};
";
        
        $__internal_2b57810a5f50bd8d8521e63ab94a6b21e322f3065b3f910d98030b8d4405df7b->leave($__internal_2b57810a5f50bd8d8521e63ab94a6b21e322f3065b3f910d98030b8d4405df7b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_to-primitive.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// 7.1.1 ToPrimitive(input [, PreferredType])
var isObject = require('./_is-object');
// instead of the ES6 spec version, we didn't implement @@toPrimitive case
// and the second argument - flag - preferred type is a string
module.exports = function (it, S) {
  if (!isObject(it)) return it;
  var fn, val;
  if (S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  if (typeof (fn = it.valueOf) == 'function' && !isObject(val = fn.call(it))) return val;
  if (!S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  throw TypeError(\"Can't convert object to primitive value\");
};
", "node_modules/core-js/library/modules/_to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_to-primitive.js");
    }
}
