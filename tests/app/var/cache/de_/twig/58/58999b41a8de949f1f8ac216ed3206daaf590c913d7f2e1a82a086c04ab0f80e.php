<?php

/* node_modules/lodash/defaultTo.js */
class __TwigTemplate_db30e126e2f503b0f0fc7e4c41af450b428e946f016a624fd0ed4c59faed5412 extends Twig_Template
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
        $__internal_2ce4db4d4a6d3a629c4c97bed78554443d4df35d43c57c4437e924c3c1285e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce4db4d4a6d3a629c4c97bed78554443d4df35d43c57c4437e924c3c1285e5d->enter($__internal_2ce4db4d4a6d3a629c4c97bed78554443d4df35d43c57c4437e924c3c1285e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/defaultTo.js"));

        // line 1
        echo "/**
 * Checks `value` to determine whether a default value should be returned in
 * its place. The `defaultValue` is returned if `value` is `NaN`, `null`,
 * or `undefined`.
 *
 * @static
 * @memberOf _
 * @since 4.14.0
 * @category Util
 * @param {*} value The value to check.
 * @param {*} defaultValue The default value.
 * @returns {*} Returns the resolved value.
 * @example
 *
 * _.defaultTo(1, 10);
 * // => 1
 *
 * _.defaultTo(undefined, 10);
 * // => 10
 */
function defaultTo(value, defaultValue) {
  return (value == null || value !== value) ? defaultValue : value;
}

module.exports = defaultTo;
";
        
        $__internal_2ce4db4d4a6d3a629c4c97bed78554443d4df35d43c57c4437e924c3c1285e5d->leave($__internal_2ce4db4d4a6d3a629c4c97bed78554443d4df35d43c57c4437e924c3c1285e5d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/defaultTo.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Checks `value` to determine whether a default value should be returned in
 * its place. The `defaultValue` is returned if `value` is `NaN`, `null`,
 * or `undefined`.
 *
 * @static
 * @memberOf _
 * @since 4.14.0
 * @category Util
 * @param {*} value The value to check.
 * @param {*} defaultValue The default value.
 * @returns {*} Returns the resolved value.
 * @example
 *
 * _.defaultTo(1, 10);
 * // => 1
 *
 * _.defaultTo(undefined, 10);
 * // => 10
 */
function defaultTo(value, defaultValue) {
  return (value == null || value !== value) ? defaultValue : value;
}

module.exports = defaultTo;
", "node_modules/lodash/defaultTo.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/defaultTo.js");
    }
}
