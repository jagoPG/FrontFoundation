<?php

/* node_modules/lodash/_createAggregator.js */
class __TwigTemplate_796d3d62fb5bdc960884472edb3e446023e225c96bc72c70e1223e3030b04503 extends Twig_Template
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
        $__internal_bd48ccd6d981e7427c235f17a74474a120c26e0392189b26e3f84c2445417d36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd48ccd6d981e7427c235f17a74474a120c26e0392189b26e3f84c2445417d36->enter($__internal_bd48ccd6d981e7427c235f17a74474a120c26e0392189b26e3f84c2445417d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createAggregator.js"));

        // line 1
        echo "var arrayAggregator = require('./_arrayAggregator'),
    baseAggregator = require('./_baseAggregator'),
    baseIteratee = require('./_baseIteratee'),
    isArray = require('./isArray');

/**
 * Creates a function like `_.groupBy`.
 *
 * @private
 * @param {Function} setter The function to set accumulator values.
 * @param {Function} [initializer] The accumulator object initializer.
 * @returns {Function} Returns the new aggregator function.
 */
function createAggregator(setter, initializer) {
  return function(collection, iteratee) {
    var func = isArray(collection) ? arrayAggregator : baseAggregator,
        accumulator = initializer ? initializer() : {};

    return func(collection, setter, baseIteratee(iteratee, 2), accumulator);
  };
}

module.exports = createAggregator;
";
        
        $__internal_bd48ccd6d981e7427c235f17a74474a120c26e0392189b26e3f84c2445417d36->leave($__internal_bd48ccd6d981e7427c235f17a74474a120c26e0392189b26e3f84c2445417d36_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createAggregator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayAggregator = require('./_arrayAggregator'),
    baseAggregator = require('./_baseAggregator'),
    baseIteratee = require('./_baseIteratee'),
    isArray = require('./isArray');

/**
 * Creates a function like `_.groupBy`.
 *
 * @private
 * @param {Function} setter The function to set accumulator values.
 * @param {Function} [initializer] The accumulator object initializer.
 * @returns {Function} Returns the new aggregator function.
 */
function createAggregator(setter, initializer) {
  return function(collection, iteratee) {
    var func = isArray(collection) ? arrayAggregator : baseAggregator,
        accumulator = initializer ? initializer() : {};

    return func(collection, setter, baseIteratee(iteratee, 2), accumulator);
  };
}

module.exports = createAggregator;
", "node_modules/lodash/_createAggregator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createAggregator.js");
    }
}
