<?php

/* node_modules/lodash/flattenDeep.js */
class __TwigTemplate_95db9b23ce5d92296bd4e6a24228c980fb516f450b1289e516b2faa040b89fc9 extends Twig_Template
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
        $__internal_166b696c6c55f69fcecf965c88424e87fe3720db6fe9657da95c1135a6d77219 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_166b696c6c55f69fcecf965c88424e87fe3720db6fe9657da95c1135a6d77219->enter($__internal_166b696c6c55f69fcecf965c88424e87fe3720db6fe9657da95c1135a6d77219_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flattenDeep.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Recursively flattens `array`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * _.flattenDeep([1, [2, [3, [4]], 5]]);
 * // => [1, 2, 3, 4, 5]
 */
function flattenDeep(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseFlatten(array, INFINITY) : [];
}

module.exports = flattenDeep;
";
        
        $__internal_166b696c6c55f69fcecf965c88424e87fe3720db6fe9657da95c1135a6d77219->leave($__internal_166b696c6c55f69fcecf965c88424e87fe3720db6fe9657da95c1135a6d77219_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flattenDeep.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Recursively flattens `array`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * _.flattenDeep([1, [2, [3, [4]], 5]]);
 * // => [1, 2, 3, 4, 5]
 */
function flattenDeep(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseFlatten(array, INFINITY) : [];
}

module.exports = flattenDeep;
", "node_modules/lodash/flattenDeep.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flattenDeep.js");
    }
}
