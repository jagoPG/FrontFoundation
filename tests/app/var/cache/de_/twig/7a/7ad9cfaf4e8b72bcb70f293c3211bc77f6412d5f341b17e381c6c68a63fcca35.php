<?php

/* node_modules/lodash/gte.js */
class __TwigTemplate_2728858721a6d09b3e1f6ef6654933e3a7e50898d9f53f4bcfb4a50f9338f1f3 extends Twig_Template
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
        $__internal_9ef8866d75c8fd846fd3e47a41a5a846e98d7bbb7fc72c6db7d575bf71e4b4d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ef8866d75c8fd846fd3e47a41a5a846e98d7bbb7fc72c6db7d575bf71e4b4d4->enter($__internal_9ef8866d75c8fd846fd3e47a41a5a846e98d7bbb7fc72c6db7d575bf71e4b4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/gte.js"));

        // line 1
        echo "var createRelationalOperation = require('./_createRelationalOperation');

/**
 * Checks if `value` is greater than or equal to `other`.
 *
 * @static
 * @memberOf _
 * @since 3.9.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than or equal to
 *  `other`, else `false`.
 * @see _.lte
 * @example
 *
 * _.gte(3, 1);
 * // => true
 *
 * _.gte(3, 3);
 * // => true
 *
 * _.gte(1, 3);
 * // => false
 */
var gte = createRelationalOperation(function(value, other) {
  return value >= other;
});

module.exports = gte;
";
        
        $__internal_9ef8866d75c8fd846fd3e47a41a5a846e98d7bbb7fc72c6db7d575bf71e4b4d4->leave($__internal_9ef8866d75c8fd846fd3e47a41a5a846e98d7bbb7fc72c6db7d575bf71e4b4d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/gte.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createRelationalOperation = require('./_createRelationalOperation');

/**
 * Checks if `value` is greater than or equal to `other`.
 *
 * @static
 * @memberOf _
 * @since 3.9.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if `value` is greater than or equal to
 *  `other`, else `false`.
 * @see _.lte
 * @example
 *
 * _.gte(3, 1);
 * // => true
 *
 * _.gte(3, 3);
 * // => true
 *
 * _.gte(1, 3);
 * // => false
 */
var gte = createRelationalOperation(function(value, other) {
  return value >= other;
});

module.exports = gte;
", "node_modules/lodash/gte.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/gte.js");
    }
}
