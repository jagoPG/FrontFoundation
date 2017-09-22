<?php

/* node_modules/lodash/flatMapDeep.js */
class __TwigTemplate_18c1f8508fa83c20313cc659d9c01c087375f6144c9406612b12cb71fe00aaef extends Twig_Template
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
        $__internal_629aead7a5840ebafcf14200f16d186d1c1ac4b53cc6fa3b95f3a963528769c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_629aead7a5840ebafcf14200f16d186d1c1ac4b53cc6fa3b95f3a963528769c3->enter($__internal_629aead7a5840ebafcf14200f16d186d1c1ac4b53cc6fa3b95f3a963528769c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flatMapDeep.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten'),
    map = require('./map');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * This method is like `_.flatMap` except that it recursively flattens the
 * mapped results.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [[[n, n]]];
 * }
 *
 * _.flatMapDeep([1, 2], duplicate);
 * // => [1, 1, 2, 2]
 */
function flatMapDeep(collection, iteratee) {
  return baseFlatten(map(collection, iteratee), INFINITY);
}

module.exports = flatMapDeep;
";
        
        $__internal_629aead7a5840ebafcf14200f16d186d1c1ac4b53cc6fa3b95f3a963528769c3->leave($__internal_629aead7a5840ebafcf14200f16d186d1c1ac4b53cc6fa3b95f3a963528769c3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flatMapDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten'),
    map = require('./map');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * This method is like `_.flatMap` except that it recursively flattens the
 * mapped results.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [[[n, n]]];
 * }
 *
 * _.flatMapDeep([1, 2], duplicate);
 * // => [1, 1, 2, 2]
 */
function flatMapDeep(collection, iteratee) {
  return baseFlatten(map(collection, iteratee), INFINITY);
}

module.exports = flatMapDeep;
", "node_modules/lodash/flatMapDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flatMapDeep.js");
    }
}
