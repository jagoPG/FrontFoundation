<?php

/* node_modules/lodash/zipWith.js */
class __TwigTemplate_b5207cbedd743469dbbfd489e534ebd484baca01dd466ac803e8eebf008484eb extends Twig_Template
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
        $__internal_d0953f6a5b08654217605c487056c43d8d756f9afb0a2894c3484f28162dee35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0953f6a5b08654217605c487056c43d8d756f9afb0a2894c3484f28162dee35->enter($__internal_d0953f6a5b08654217605c487056c43d8d756f9afb0a2894c3484f28162dee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/zipWith.js"));

        // line 1
        echo "var baseRest = require('./_baseRest'),
    unzipWith = require('./unzipWith');

/**
 * This method is like `_.zip` except that it accepts `iteratee` to specify
 * how grouped values should be combined. The iteratee is invoked with the
 * elements of each group: (...group).
 *
 * @static
 * @memberOf _
 * @since 3.8.0
 * @category Array
 * @param {...Array} [arrays] The arrays to process.
 * @param {Function} [iteratee=_.identity] The function to combine
 *  grouped values.
 * @returns {Array} Returns the new array of grouped elements.
 * @example
 *
 * _.zipWith([1, 2], [10, 20], [100, 200], function(a, b, c) {
 *   return a + b + c;
 * });
 * // => [111, 222]
 */
var zipWith = baseRest(function(arrays) {
  var length = arrays.length,
      iteratee = length > 1 ? arrays[length - 1] : undefined;

  iteratee = typeof iteratee == 'function' ? (arrays.pop(), iteratee) : undefined;
  return unzipWith(arrays, iteratee);
});

module.exports = zipWith;
";
        
        $__internal_d0953f6a5b08654217605c487056c43d8d756f9afb0a2894c3484f28162dee35->leave($__internal_d0953f6a5b08654217605c487056c43d8d756f9afb0a2894c3484f28162dee35_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/zipWith.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRest = require('./_baseRest'),
    unzipWith = require('./unzipWith');

/**
 * This method is like `_.zip` except that it accepts `iteratee` to specify
 * how grouped values should be combined. The iteratee is invoked with the
 * elements of each group: (...group).
 *
 * @static
 * @memberOf _
 * @since 3.8.0
 * @category Array
 * @param {...Array} [arrays] The arrays to process.
 * @param {Function} [iteratee=_.identity] The function to combine
 *  grouped values.
 * @returns {Array} Returns the new array of grouped elements.
 * @example
 *
 * _.zipWith([1, 2], [10, 20], [100, 200], function(a, b, c) {
 *   return a + b + c;
 * });
 * // => [111, 222]
 */
var zipWith = baseRest(function(arrays) {
  var length = arrays.length,
      iteratee = length > 1 ? arrays[length - 1] : undefined;

  iteratee = typeof iteratee == 'function' ? (arrays.pop(), iteratee) : undefined;
  return unzipWith(arrays, iteratee);
});

module.exports = zipWith;
", "node_modules/lodash/zipWith.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/zipWith.js");
    }
}
