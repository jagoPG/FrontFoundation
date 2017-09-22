<?php

/* node_modules/lodash/flatMapDepth.js */
class __TwigTemplate_ec312e7387a861335ca0017f6d61184c8e189580ce27d88cd061c609f49881c7 extends Twig_Template
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
        $__internal_8de777cb7373553ddceaee6608dca642fbc927a5630ba3b34963fe28ecc47200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8de777cb7373553ddceaee6608dca642fbc927a5630ba3b34963fe28ecc47200->enter($__internal_8de777cb7373553ddceaee6608dca642fbc927a5630ba3b34963fe28ecc47200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flatMapDepth.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten'),
    map = require('./map'),
    toInteger = require('./toInteger');

/**
 * This method is like `_.flatMap` except that it recursively flattens the
 * mapped results up to `depth` times.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @param {number} [depth=1] The maximum recursion depth.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [[[n, n]]];
 * }
 *
 * _.flatMapDepth([1, 2], duplicate, 2);
 * // => [[1, 1], [2, 2]]
 */
function flatMapDepth(collection, iteratee, depth) {
  depth = depth === undefined ? 1 : toInteger(depth);
  return baseFlatten(map(collection, iteratee), depth);
}

module.exports = flatMapDepth;
";
        
        $__internal_8de777cb7373553ddceaee6608dca642fbc927a5630ba3b34963fe28ecc47200->leave($__internal_8de777cb7373553ddceaee6608dca642fbc927a5630ba3b34963fe28ecc47200_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flatMapDepth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten'),
    map = require('./map'),
    toInteger = require('./toInteger');

/**
 * This method is like `_.flatMap` except that it recursively flattens the
 * mapped results up to `depth` times.
 *
 * @static
 * @memberOf _
 * @since 4.7.0
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @param {number} [depth=1] The maximum recursion depth.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * function duplicate(n) {
 *   return [[[n, n]]];
 * }
 *
 * _.flatMapDepth([1, 2], duplicate, 2);
 * // => [[1, 1], [2, 2]]
 */
function flatMapDepth(collection, iteratee, depth) {
  depth = depth === undefined ? 1 : toInteger(depth);
  return baseFlatten(map(collection, iteratee), depth);
}

module.exports = flatMapDepth;
", "node_modules/lodash/flatMapDepth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flatMapDepth.js");
    }
}
