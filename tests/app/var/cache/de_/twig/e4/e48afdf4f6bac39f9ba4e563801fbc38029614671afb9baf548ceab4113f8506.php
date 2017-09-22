<?php

/* node_modules/lodash/xor.js */
class __TwigTemplate_e5916c3c60be3f594fbd9e76d4783ff390cde1e7ee41cd58afc5709c2c626923 extends Twig_Template
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
        $__internal_87c0b0b9b9bfada6d1d6784f034fbfbfebc5aa99acb223aacf0c524b12e92254 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c0b0b9b9bfada6d1d6784f034fbfbfebc5aa99acb223aacf0c524b12e92254->enter($__internal_87c0b0b9b9bfada6d1d6784f034fbfbfebc5aa99acb223aacf0c524b12e92254_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/xor.js"));

        // line 1
        echo "var arrayFilter = require('./_arrayFilter'),
    baseRest = require('./_baseRest'),
    baseXor = require('./_baseXor'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array of unique values that is the
 * [symmetric difference](https://en.wikipedia.org/wiki/Symmetric_difference)
 * of the given arrays. The order of result values is determined by the order
 * they occur in the arrays.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of filtered values.
 * @see _.difference, _.without
 * @example
 *
 * _.xor([2, 1], [2, 3]);
 * // => [1, 3]
 */
var xor = baseRest(function(arrays) {
  return baseXor(arrayFilter(arrays, isArrayLikeObject));
});

module.exports = xor;
";
        
        $__internal_87c0b0b9b9bfada6d1d6784f034fbfbfebc5aa99acb223aacf0c524b12e92254->leave($__internal_87c0b0b9b9bfada6d1d6784f034fbfbfebc5aa99acb223aacf0c524b12e92254_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/xor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayFilter = require('./_arrayFilter'),
    baseRest = require('./_baseRest'),
    baseXor = require('./_baseXor'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array of unique values that is the
 * [symmetric difference](https://en.wikipedia.org/wiki/Symmetric_difference)
 * of the given arrays. The order of result values is determined by the order
 * they occur in the arrays.
 *
 * @static
 * @memberOf _
 * @since 2.4.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of filtered values.
 * @see _.difference, _.without
 * @example
 *
 * _.xor([2, 1], [2, 3]);
 * // => [1, 3]
 */
var xor = baseRest(function(arrays) {
  return baseXor(arrayFilter(arrays, isArrayLikeObject));
});

module.exports = xor;
", "node_modules/lodash/xor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/xor.js");
    }
}
