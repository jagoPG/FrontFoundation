<?php

/* node_modules/core-js/modules/_iter-call.js */
class __TwigTemplate_105d7bd723b68bc1c2b6b4e5ac2c6288110105bda278b62cdb411760724910df extends Twig_Template
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
        $__internal_df7c2a8247eb37389bc5067269acc1aa64740fce9e4f2648e3e08bfb20f2dece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7c2a8247eb37389bc5067269acc1aa64740fce9e4f2648e3e08bfb20f2dece->enter($__internal_df7c2a8247eb37389bc5067269acc1aa64740fce9e4f2648e3e08bfb20f2dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/_iter-call.js"));

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
        
        $__internal_df7c2a8247eb37389bc5067269acc1aa64740fce9e4f2648e3e08bfb20f2dece->leave($__internal_df7c2a8247eb37389bc5067269acc1aa64740fce9e4f2648e3e08bfb20f2dece_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/_iter-call.js";
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
", "node_modules/core-js/modules/_iter-call.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/_iter-call.js");
    }
}
