<?php

/* node_modules/lodash/pullAt.js */
class __TwigTemplate_0e4d4a5c9881200ae8da87eae4904a117fb2dabef467e372ce83da9c2bd3dbf9 extends Twig_Template
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
        $__internal_fb4a12b17ec9318fda8fa458b70ef6532566678508ffdee7467a323adaf15c8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb4a12b17ec9318fda8fa458b70ef6532566678508ffdee7467a323adaf15c8c->enter($__internal_fb4a12b17ec9318fda8fa458b70ef6532566678508ffdee7467a323adaf15c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/pullAt.js"));

        // line 1
        echo "var arrayMap = require('./_arrayMap'),
    baseAt = require('./_baseAt'),
    basePullAt = require('./_basePullAt'),
    compareAscending = require('./_compareAscending'),
    flatRest = require('./_flatRest'),
    isIndex = require('./_isIndex');

/**
 * Removes elements from `array` corresponding to `indexes` and returns an
 * array of removed elements.
 *
 * **Note:** Unlike `_.at`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {...(number|number[])} [indexes] The indexes of elements to remove.
 * @returns {Array} Returns the new array of removed elements.
 * @example
 *
 * var array = ['a', 'b', 'c', 'd'];
 * var pulled = _.pullAt(array, [1, 3]);
 *
 * console.log(array);
 * // => ['a', 'c']
 *
 * console.log(pulled);
 * // => ['b', 'd']
 */
var pullAt = flatRest(function(array, indexes) {
  var length = array == null ? 0 : array.length,
      result = baseAt(array, indexes);

  basePullAt(array, arrayMap(indexes, function(index) {
    return isIndex(index, length) ? +index : index;
  }).sort(compareAscending));

  return result;
});

module.exports = pullAt;
";
        
        $__internal_fb4a12b17ec9318fda8fa458b70ef6532566678508ffdee7467a323adaf15c8c->leave($__internal_fb4a12b17ec9318fda8fa458b70ef6532566678508ffdee7467a323adaf15c8c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/pullAt.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayMap = require('./_arrayMap'),
    baseAt = require('./_baseAt'),
    basePullAt = require('./_basePullAt'),
    compareAscending = require('./_compareAscending'),
    flatRest = require('./_flatRest'),
    isIndex = require('./_isIndex');

/**
 * Removes elements from `array` corresponding to `indexes` and returns an
 * array of removed elements.
 *
 * **Note:** Unlike `_.at`, this method mutates `array`.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Array
 * @param {Array} array The array to modify.
 * @param {...(number|number[])} [indexes] The indexes of elements to remove.
 * @returns {Array} Returns the new array of removed elements.
 * @example
 *
 * var array = ['a', 'b', 'c', 'd'];
 * var pulled = _.pullAt(array, [1, 3]);
 *
 * console.log(array);
 * // => ['a', 'c']
 *
 * console.log(pulled);
 * // => ['b', 'd']
 */
var pullAt = flatRest(function(array, indexes) {
  var length = array == null ? 0 : array.length,
      result = baseAt(array, indexes);

  basePullAt(array, arrayMap(indexes, function(index) {
    return isIndex(index, length) ? +index : index;
  }).sort(compareAscending));

  return result;
});

module.exports = pullAt;
", "node_modules/lodash/pullAt.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/pullAt.js");
    }
}
