<?php

/* node_modules/lodash/without.js */
class __TwigTemplate_995f9b8be73f5603938098d76232a2add0d07715bbb894829157867cab02d846 extends Twig_Template
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
        $__internal_205e703fdab2962b10cfbc2ccdeee6fdaf817d0493f8d478edfa0cc00577d708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_205e703fdab2962b10cfbc2ccdeee6fdaf817d0493f8d478edfa0cc00577d708->enter($__internal_205e703fdab2962b10cfbc2ccdeee6fdaf817d0493f8d478edfa0cc00577d708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/without.js"));

        // line 1
        echo "var baseDifference = require('./_baseDifference'),
    baseRest = require('./_baseRest'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array excluding all given values using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * **Note:** Unlike `_.pull`, this method returns a new array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {...*} [values] The values to exclude.
 * @returns {Array} Returns the new array of filtered values.
 * @see _.difference, _.xor
 * @example
 *
 * _.without([2, 1, 2, 3], 1, 2);
 * // => [3]
 */
var without = baseRest(function(array, values) {
  return isArrayLikeObject(array)
    ? baseDifference(array, values)
    : [];
});

module.exports = without;
";
        
        $__internal_205e703fdab2962b10cfbc2ccdeee6fdaf817d0493f8d478edfa0cc00577d708->leave($__internal_205e703fdab2962b10cfbc2ccdeee6fdaf817d0493f8d478edfa0cc00577d708_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/without.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseDifference = require('./_baseDifference'),
    baseRest = require('./_baseRest'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array excluding all given values using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * **Note:** Unlike `_.pull`, this method returns a new array.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to inspect.
 * @param {...*} [values] The values to exclude.
 * @returns {Array} Returns the new array of filtered values.
 * @see _.difference, _.xor
 * @example
 *
 * _.without([2, 1, 2, 3], 1, 2);
 * // => [3]
 */
var without = baseRest(function(array, values) {
  return isArrayLikeObject(array)
    ? baseDifference(array, values)
    : [];
});

module.exports = without;
", "node_modules/lodash/without.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/without.js");
    }
}
