<?php

/* node_modules/core-js/modules/_to-primitive.js */
class __TwigTemplate_71131aa04eb40f55c0b2266dabb4c9bd01f2e71c5974fafcaf459497db073801 extends Twig_Template
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
        $__internal_99cdeff273852fff3eb0a157f1c6997d332ae376cc2ac309cc9626d6a9f195b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99cdeff273852fff3eb0a157f1c6997d332ae376cc2ac309cc9626d6a9f195b4->enter($__internal_99cdeff273852fff3eb0a157f1c6997d332ae376cc2ac309cc9626d6a9f195b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_to-primitive.js"));

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
        
        $__internal_99cdeff273852fff3eb0a157f1c6997d332ae376cc2ac309cc9626d6a9f195b4->leave($__internal_99cdeff273852fff3eb0a157f1c6997d332ae376cc2ac309cc9626d6a9f195b4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_to-primitive.js";
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
", "node_modules/core-js/modules/_to-primitive.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_to-primitive.js");
    }
}
