<?php

/* node_modules/lodash/union.js */
class __TwigTemplate_10a50f90e91888deb523cce656cb57bd9a6b3c0a08dda74d73c5c27fc63e64ae extends Twig_Template
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
        $__internal_3893868a59bb68e764355788a752df083c02e160df33b7664bd48bd8aba1fc6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3893868a59bb68e764355788a752df083c02e160df33b7664bd48bd8aba1fc6d->enter($__internal_3893868a59bb68e764355788a752df083c02e160df33b7664bd48bd8aba1fc6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/union.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten'),
    baseRest = require('./_baseRest'),
    baseUniq = require('./_baseUniq'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array of unique values, in order, from all given arrays using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of combined values.
 * @example
 *
 * _.union([2], [1, 2]);
 * // => [2, 1]
 */
var union = baseRest(function(arrays) {
  return baseUniq(baseFlatten(arrays, 1, isArrayLikeObject, true));
});

module.exports = union;
";
        
        $__internal_3893868a59bb68e764355788a752df083c02e160df33b7664bd48bd8aba1fc6d->leave($__internal_3893868a59bb68e764355788a752df083c02e160df33b7664bd48bd8aba1fc6d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/union.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten'),
    baseRest = require('./_baseRest'),
    baseUniq = require('./_baseUniq'),
    isArrayLikeObject = require('./isArrayLikeObject');

/**
 * Creates an array of unique values, in order, from all given arrays using
 * [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {...Array} [arrays] The arrays to inspect.
 * @returns {Array} Returns the new array of combined values.
 * @example
 *
 * _.union([2], [1, 2]);
 * // => [2, 1]
 */
var union = baseRest(function(arrays) {
  return baseUniq(baseFlatten(arrays, 1, isArrayLikeObject, true));
});

module.exports = union;
", "node_modules/lodash/union.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/union.js");
    }
}
