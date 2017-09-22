<?php

/* node_modules/utils-merge/index.js */
class __TwigTemplate_23641d4c7acba00c4aa44d422dc7ff8938cd395ffaf9d0c50fc6b02923093add extends Twig_Template
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
        $__internal_19c3f83387953d967e24d365e988f3762f85f8ea0b8cd3c498f00145647e97a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19c3f83387953d967e24d365e988f3762f85f8ea0b8cd3c498f00145647e97a4->enter($__internal_19c3f83387953d967e24d365e988f3762f85f8ea0b8cd3c498f00145647e97a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/utils-merge/index.js"));

        // line 1
        echo "/**
 * Merge object b with object a.
 *
 *     var a = { foo: 'bar' }
 *       , b = { bar: 'baz' };
 *
 *     merge(a, b);
 *     // => { foo: 'bar', bar: 'baz' }
 *
 * @param {Object} a
 * @param {Object} b
 * @return {Object}
 * @api public
 */

exports = module.exports = function(a, b){
  if (a && b) {
    for (var key in b) {
      a[key] = b[key];
    }
  }
  return a;
};
";
        
        $__internal_19c3f83387953d967e24d365e988f3762f85f8ea0b8cd3c498f00145647e97a4->leave($__internal_19c3f83387953d967e24d365e988f3762f85f8ea0b8cd3c498f00145647e97a4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/utils-merge/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Merge object b with object a.
 *
 *     var a = { foo: 'bar' }
 *       , b = { bar: 'baz' };
 *
 *     merge(a, b);
 *     // => { foo: 'bar', bar: 'baz' }
 *
 * @param {Object} a
 * @param {Object} b
 * @return {Object}
 * @api public
 */

exports = module.exports = function(a, b){
  if (a && b) {
    for (var key in b) {
      a[key] = b[key];
    }
  }
  return a;
};
", "node_modules/utils-merge/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/utils-merge/index.js");
    }
}
