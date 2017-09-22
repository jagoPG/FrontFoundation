<?php

/* node_modules/lodash/fill.js */
class __TwigTemplate_5a90bbf3148da9485171d00c05a3870ff3aca875d112f0f15273cf801e86a317 extends Twig_Template
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
        $__internal_d555d1fcbcada6e8b268a47ffc17cd68afde02a3a88a7120c5c9043fae97d3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d555d1fcbcada6e8b268a47ffc17cd68afde02a3a88a7120c5c9043fae97d3c4->enter($__internal_d555d1fcbcada6e8b268a47ffc17cd68afde02a3a88a7120c5c9043fae97d3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/fill.js"));

        // line 1
        echo "var baseFill = require('./_baseFill'),
    isIterateeCall = require('./_isIterateeCall');

/**
 * Fills elements of `array` with `value` from `start` up to, but not
 * including, `end`.
 *
 * **Note:** This method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 3.2.0
 * @category Array
 * @param {Array} array The array to fill.
 * @param {*} value The value to fill `array` with.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _.fill(array, 'a');
 * console.log(array);
 * // => ['a', 'a', 'a']
 *
 * _.fill(Array(3), 2);
 * // => [2, 2, 2]
 *
 * _.fill([4, 6, 8, 10], '*', 1, 3);
 * // => [4, '*', '*', 10]
 */
function fill(array, value, start, end) {
  var length = array == null ? 0 : array.length;
  if (!length) {
    return [];
  }
  if (start && typeof start != 'number' && isIterateeCall(array, value, start)) {
    start = 0;
    end = length;
  }
  return baseFill(array, value, start, end);
}

module.exports = fill;
";
        
        $__internal_d555d1fcbcada6e8b268a47ffc17cd68afde02a3a88a7120c5c9043fae97d3c4->leave($__internal_d555d1fcbcada6e8b268a47ffc17cd68afde02a3a88a7120c5c9043fae97d3c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/fill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFill = require('./_baseFill'),
    isIterateeCall = require('./_isIterateeCall');

/**
 * Fills elements of `array` with `value` from `start` up to, but not
 * including, `end`.
 *
 * **Note:** This method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 3.2.0
 * @category Array
 * @param {Array} array The array to fill.
 * @param {*} value The value to fill `array` with.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns `array`.
 * @example
 *
 * var array = [1, 2, 3];
 *
 * _.fill(array, 'a');
 * console.log(array);
 * // => ['a', 'a', 'a']
 *
 * _.fill(Array(3), 2);
 * // => [2, 2, 2]
 *
 * _.fill([4, 6, 8, 10], '*', 1, 3);
 * // => [4, '*', '*', 10]
 */
function fill(array, value, start, end) {
  var length = array == null ? 0 : array.length;
  if (!length) {
    return [];
  }
  if (start && typeof start != 'number' && isIterateeCall(array, value, start)) {
    start = 0;
    end = length;
  }
  return baseFill(array, value, start, end);
}

module.exports = fill;
", "node_modules/lodash/fill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/fill.js");
    }
}
