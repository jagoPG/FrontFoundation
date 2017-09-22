<?php

/* node_modules/lodash/flatMap.js */
class __TwigTemplate_7db2d8d9f6dcad2901b7a3ae97e4530a7fd9039aeb27f2136b882f18440bcb40 extends Twig_Template
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
        $__internal_7c3f4317de3d0278e6f6c323f53742d3e2b16c8cb6c4bdc464709f9452dc9475 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3f4317de3d0278e6f6c323f53742d3e2b16c8cb6c4bdc464709f9452dc9475->enter($__internal_7c3f4317de3d0278e6f6c323f53742d3e2b16c8cb6c4bdc464709f9452dc9475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flatMap.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten'),
    map = require('./map');

/**
 * Creates a flattened array of values by running each element in `collection`
 * thru `iteratee` and flattening the mapped results. The iteratee is invoked
 * with three arguments: (value, index|key, collection).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [n, n];
 * }
 *
 * _.flatMap([1, 2], duplicate);
 * // => [1, 1, 2, 2]
 */
function flatMap(collection, iteratee) {
  return baseFlatten(map(collection, iteratee), 1);
}

module.exports = flatMap;
";
        
        $__internal_7c3f4317de3d0278e6f6c323f53742d3e2b16c8cb6c4bdc464709f9452dc9475->leave($__internal_7c3f4317de3d0278e6f6c323f53742d3e2b16c8cb6c4bdc464709f9452dc9475_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flatMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten'),
    map = require('./map');

/**
 * Creates a flattened array of values by running each element in `collection`
 * thru `iteratee` and flattening the mapped results. The iteratee is invoked
 * with three arguments: (value, index|key, collection).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [n, n];
 * }
 *
 * _.flatMap([1, 2], duplicate);
 * // => [1, 1, 2, 2]
 */
function flatMap(collection, iteratee) {
  return baseFlatten(map(collection, iteratee), 1);
}

module.exports = flatMap;
", "node_modules/lodash/flatMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flatMap.js");
    }
}
