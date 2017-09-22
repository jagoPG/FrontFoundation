<?php

/* node_modules/lodash/sampleSize.js */
class __TwigTemplate_15ee82c0fda7ff39bfbadd00a47e897d95e399987a13a616b1de5c96806f6efe extends Twig_Template
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
        $__internal_494415a3bca380d94065afae26b8963731cb379e69d126c993fd678eb1f66d5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_494415a3bca380d94065afae26b8963731cb379e69d126c993fd678eb1f66d5a->enter($__internal_494415a3bca380d94065afae26b8963731cb379e69d126c993fd678eb1f66d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sampleSize.js"));

        // line 1
        echo "var arraySampleSize = require('./_arraySampleSize'),
    baseSampleSize = require('./_baseSampleSize'),
    isArray = require('./isArray'),
    isIterateeCall = require('./_isIterateeCall'),
    toInteger = require('./toInteger');

/**
 * Gets `n` random elements at unique keys from `collection` up to the
 * size of `collection`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to sample.
 * @param {number} [n=1] The number of elements to sample.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Array} Returns the random elements.
 * @example
 *
 * _.sampleSize([1, 2, 3], 2);
 * // => [3, 1]
 *
 * _.sampleSize([1, 2, 3], 4);
 * // => [2, 3, 1]
 */
function sampleSize(collection, n, guard) {
  if ((guard ? isIterateeCall(collection, n, guard) : n === undefined)) {
    n = 1;
  } else {
    n = toInteger(n);
  }
  var func = isArray(collection) ? arraySampleSize : baseSampleSize;
  return func(collection, n);
}

module.exports = sampleSize;
";
        
        $__internal_494415a3bca380d94065afae26b8963731cb379e69d126c993fd678eb1f66d5a->leave($__internal_494415a3bca380d94065afae26b8963731cb379e69d126c993fd678eb1f66d5a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sampleSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arraySampleSize = require('./_arraySampleSize'),
    baseSampleSize = require('./_baseSampleSize'),
    isArray = require('./isArray'),
    isIterateeCall = require('./_isIterateeCall'),
    toInteger = require('./toInteger');

/**
 * Gets `n` random elements at unique keys from `collection` up to the
 * size of `collection`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to sample.
 * @param {number} [n=1] The number of elements to sample.
 * @param- {Object} [guard] Enables use as an iteratee for methods like `_.map`.
 * @returns {Array} Returns the random elements.
 * @example
 *
 * _.sampleSize([1, 2, 3], 2);
 * // => [3, 1]
 *
 * _.sampleSize([1, 2, 3], 4);
 * // => [2, 3, 1]
 */
function sampleSize(collection, n, guard) {
  if ((guard ? isIterateeCall(collection, n, guard) : n === undefined)) {
    n = 1;
  } else {
    n = toInteger(n);
  }
  var func = isArray(collection) ? arraySampleSize : baseSampleSize;
  return func(collection, n);
}

module.exports = sampleSize;
", "node_modules/lodash/sampleSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sampleSize.js");
    }
}
