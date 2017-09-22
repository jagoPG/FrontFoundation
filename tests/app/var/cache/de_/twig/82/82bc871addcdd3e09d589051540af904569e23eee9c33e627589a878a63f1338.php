<?php

/* node_modules/lodash/uniqWith.js */
class __TwigTemplate_b3046410c1f7b74bd4ae373c4faf4de354e9cee7b774e2126cd3c71d229bc51b extends Twig_Template
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
        $__internal_3676fca80079699a82e7a6e9386de3bac452bef956766b611a66b8a17d6f6e70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3676fca80079699a82e7a6e9386de3bac452bef956766b611a66b8a17d6f6e70->enter($__internal_3676fca80079699a82e7a6e9386de3bac452bef956766b611a66b8a17d6f6e70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/uniqWith.js"));

        // line 1
        echo "var baseUniq = require('./_baseUniq');

/**
 * This method is like `_.uniq` except that it accepts `comparator` which
 * is invoked to compare elements of `array`. The order of result values is
 * determined by the order they occur in the array.The comparator is invoked
 * with two arguments: (arrVal, othVal).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {Function} [comparator] The comparator invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * var objects = [{ 'x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }, { 'x': 1, 'y': 2 }];
 *
 * _.uniqWith(objects, _.isEqual);
 * // => [{ 'x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }]
 */
function uniqWith(array, comparator) {
  comparator = typeof comparator == 'function' ? comparator : undefined;
  return (array && array.length) ? baseUniq(array, undefined, comparator) : [];
}

module.exports = uniqWith;
";
        
        $__internal_3676fca80079699a82e7a6e9386de3bac452bef956766b611a66b8a17d6f6e70->leave($__internal_3676fca80079699a82e7a6e9386de3bac452bef956766b611a66b8a17d6f6e70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/uniqWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseUniq = require('./_baseUniq');

/**
 * This method is like `_.uniq` except that it accepts `comparator` which
 * is invoked to compare elements of `array`. The order of result values is
 * determined by the order they occur in the array.The comparator is invoked
 * with two arguments: (arrVal, othVal).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {Function} [comparator] The comparator invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 * @example
 *
 * var objects = [{ 'x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }, { 'x': 1, 'y': 2 }];
 *
 * _.uniqWith(objects, _.isEqual);
 * // => [{ 'x': 1, 'y': 2 }, { 'x': 2, 'y': 1 }]
 */
function uniqWith(array, comparator) {
  comparator = typeof comparator == 'function' ? comparator : undefined;
  return (array && array.length) ? baseUniq(array, undefined, comparator) : [];
}

module.exports = uniqWith;
", "node_modules/lodash/uniqWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/uniqWith.js");
    }
}
