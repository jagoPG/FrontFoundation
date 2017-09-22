<?php

/* node_modules/lodash/_basePropertyOf.js */
class __TwigTemplate_e5820702ea145771cd50c1a6aeb75e8b38aadc9810aa058b472814559f97ffe0 extends Twig_Template
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
        $__internal_cb0ac62ad722e6aadf4a78fb52c6a643ca232165f54236746c6ec7ef65520057 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0ac62ad722e6aadf4a78fb52c6a643ca232165f54236746c6ec7ef65520057->enter($__internal_cb0ac62ad722e6aadf4a78fb52c6a643ca232165f54236746c6ec7ef65520057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_basePropertyOf.js"));

        // line 1
        echo "/**
 * The base implementation of `_.propertyOf` without support for deep paths.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Function} Returns the new accessor function.
 */
function basePropertyOf(object) {
  return function(key) {
    return object == null ? undefined : object[key];
  };
}

module.exports = basePropertyOf;
";
        
        $__internal_cb0ac62ad722e6aadf4a78fb52c6a643ca232165f54236746c6ec7ef65520057->leave($__internal_cb0ac62ad722e6aadf4a78fb52c6a643ca232165f54236746c6ec7ef65520057_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_basePropertyOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of `_.propertyOf` without support for deep paths.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Function} Returns the new accessor function.
 */
function basePropertyOf(object) {
  return function(key) {
    return object == null ? undefined : object[key];
  };
}

module.exports = basePropertyOf;
", "node_modules/lodash/_basePropertyOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_basePropertyOf.js");
    }
}
