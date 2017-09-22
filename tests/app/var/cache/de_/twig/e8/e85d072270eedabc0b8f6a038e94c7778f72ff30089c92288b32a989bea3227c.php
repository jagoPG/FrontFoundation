<?php

/* node_modules/core-js/library/modules/_iter-call.js */
class __TwigTemplate_30a36dbd76f169f584292ab8463fa9fe75bb7047c80bca3e81ece549ac582b83 extends Twig_Template
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
        $__internal_6f154d00b850bf146d5da8b71780e6bcdcc765170ec62c010ebb1f5eb9fbafb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f154d00b850bf146d5da8b71780e6bcdcc765170ec62c010ebb1f5eb9fbafb7->enter($__internal_6f154d00b850bf146d5da8b71780e6bcdcc765170ec62c010ebb1f5eb9fbafb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/_iter-call.js"));

        // line 1
        echo "// call something on iterator step with safe closing on error
var anObject = require('./_an-object');
module.exports = function (iterator, fn, value, entries) {
  try {
    return entries ? fn(anObject(value)[0], value[1]) : fn(value);
  // 7.4.6 IteratorClose(iterator, completion)
  } catch (e) {
    var ret = iterator['return'];
    if (ret !== undefined) anObject(ret.call(iterator));
    throw e;
  }
};
";
        
        $__internal_6f154d00b850bf146d5da8b71780e6bcdcc765170ec62c010ebb1f5eb9fbafb7->leave($__internal_6f154d00b850bf146d5da8b71780e6bcdcc765170ec62c010ebb1f5eb9fbafb7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/_iter-call.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// call something on iterator step with safe closing on error
var anObject = require('./_an-object');
module.exports = function (iterator, fn, value, entries) {
  try {
    return entries ? fn(anObject(value)[0], value[1]) : fn(value);
  // 7.4.6 IteratorClose(iterator, completion)
  } catch (e) {
    var ret = iterator['return'];
    if (ret !== undefined) anObject(ret.call(iterator));
    throw e;
  }
};
", "node_modules/core-js/library/modules/_iter-call.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/_iter-call.js");
    }
}
