<?php

/* node_modules/lodash/pull.js */
class __TwigTemplate_238865f50bbd1887b7c04b24dcf5cd9e384b833249ebf3bd10ba98dc7d8cc9e1 extends Twig_Template
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
        $__internal_549befbe1692425863b18f8cc7607d640f5d9ec8a3f893b9d261fad8cfb5dff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549befbe1692425863b18f8cc7607d640f5d9ec8a3f893b9d261fad8cfb5dff3->enter($__internal_549befbe1692425863b18f8cc7607d640f5d9ec8a3f893b9d261fad8cfb5dff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pull.js"));

        // line 1
        echo "var baseRest = require('./_baseRest'),
    pullAll = require('./pullAll');

/**
 * Removes all given values from `array` using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * **Note:** Unlike `_.without`, this method mutates `array`. Use `_.remove`
 * to remove elements from an array by predicate.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {...*} [values] The values to remove.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'a', 'b', 'c'];
 *
 * _.pull(array, 'a', 'c');
 * console.log(array);
 * // => ['b', 'b']
 */
var pull = baseRest(pullAll);

module.exports = pull;
";
        
        $__internal_549befbe1692425863b18f8cc7607d640f5d9ec8a3f893b9d261fad8cfb5dff3->leave($__internal_549befbe1692425863b18f8cc7607d640f5d9ec8a3f893b9d261fad8cfb5dff3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pull.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRest = require('./_baseRest'),
    pullAll = require('./pullAll');

/**
 * Removes all given values from `array` using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * **Note:** Unlike `_.without`, this method mutates `array`. Use `_.remove`
 * to remove elements from an array by predicate.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {...*} [values] The values to remove.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'a', 'b', 'c'];
 *
 * _.pull(array, 'a', 'c');
 * console.log(array);
 * // => ['b', 'b']
 */
var pull = baseRest(pullAll);

module.exports = pull;
", "node_modules/lodash/pull.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pull.js");
    }
}
