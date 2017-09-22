<?php

/* node_modules/lodash/eq.js */
class __TwigTemplate_86bc043ca403f55f738b7b3187ae09c26b9af6b96fe22b6f75b184763b2c96a5 extends Twig_Template
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
        $__internal_a79c19e65a2c87559c288987a4dadd3ccffa1ea076fb81c3e9dbd4e73f051913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a79c19e65a2c87559c288987a4dadd3ccffa1ea076fb81c3e9dbd4e73f051913->enter($__internal_a79c19e65a2c87559c288987a4dadd3ccffa1ea076fb81c3e9dbd4e73f051913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/eq.js"));

        // line 1
        echo "/**
 * Performs a
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * comparison between two values to determine if they are equivalent.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
 * @example
 *
 * var object = { 'a': 1 };
 * var other = { 'a': 1 };
 *
 * _.eq(object, object);
 * // => true
 *
 * _.eq(object, other);
 * // => false
 *
 * _.eq('a', 'a');
 * // => true
 *
 * _.eq('a', Object('a'));
 * // => false
 *
 * _.eq(NaN, NaN);
 * // => true
 */
function eq(value, other) {
  return value === other || (value !== value && other !== other);
}

module.exports = eq;
";
        
        $__internal_a79c19e65a2c87559c288987a4dadd3ccffa1ea076fb81c3e9dbd4e73f051913->leave($__internal_a79c19e65a2c87559c288987a4dadd3ccffa1ea076fb81c3e9dbd4e73f051913_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/eq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * Performs a
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * comparison between two values to determine if they are equivalent.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
 * @example
 *
 * var object = { 'a': 1 };
 * var other = { 'a': 1 };
 *
 * _.eq(object, object);
 * // => true
 *
 * _.eq(object, other);
 * // => false
 *
 * _.eq('a', 'a');
 * // => true
 *
 * _.eq('a', Object('a'));
 * // => false
 *
 * _.eq(NaN, NaN);
 * // => true
 */
function eq(value, other) {
  return value === other || (value !== value && other !== other);
}

module.exports = eq;
", "node_modules/lodash/eq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/eq.js");
    }
}
