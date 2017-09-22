<?php

/* node_modules/lodash/flattenDepth.js */
class __TwigTemplate_f192ac8ee68ae32e64b79b34fff80c28afa1547bc3dea56632e4ec36a2303120 extends Twig_Template
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
        $__internal_69122aa6239938a7d958f1dbff79bd4b88834c516f8f79148d55687232693219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69122aa6239938a7d958f1dbff79bd4b88834c516f8f79148d55687232693219->enter($__internal_69122aa6239938a7d958f1dbff79bd4b88834c516f8f79148d55687232693219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flattenDepth.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten'),
    toInteger = require('./toInteger');

/**
 * Recursively flatten `array` up to `depth` times.
 *
 * @static
 * @memberOf _
 * @since 4.4.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @param {number} [depth=1] The maximum recursion depth.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * var array = [1, [2, [3, [4]], 5]];
 *
 * _.flattenDepth(array, 1);
 * // => [1, 2, [3, [4]], 5]
 *
 * _.flattenDepth(array, 2);
 * // => [1, 2, 3, [4], 5]
 */
function flattenDepth(array, depth) {
  var length = array == null ? 0 : array.length;
  if (!length) {
    return [];
  }
  depth = depth === undefined ? 1 : toInteger(depth);
  return baseFlatten(array, depth);
}

module.exports = flattenDepth;
";
        
        $__internal_69122aa6239938a7d958f1dbff79bd4b88834c516f8f79148d55687232693219->leave($__internal_69122aa6239938a7d958f1dbff79bd4b88834c516f8f79148d55687232693219_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flattenDepth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten'),
    toInteger = require('./toInteger');

/**
 * Recursively flatten `array` up to `depth` times.
 *
 * @static
 * @memberOf _
 * @since 4.4.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @param {number} [depth=1] The maximum recursion depth.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * var array = [1, [2, [3, [4]], 5]];
 *
 * _.flattenDepth(array, 1);
 * // => [1, 2, [3, [4]], 5]
 *
 * _.flattenDepth(array, 2);
 * // => [1, 2, 3, [4], 5]
 */
function flattenDepth(array, depth) {
  var length = array == null ? 0 : array.length;
  if (!length) {
    return [];
  }
  depth = depth === undefined ? 1 : toInteger(depth);
  return baseFlatten(array, depth);
}

module.exports = flattenDepth;
", "node_modules/lodash/flattenDepth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flattenDepth.js");
    }
}
