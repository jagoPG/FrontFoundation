<?php

/* node_modules/lodash/forEachRight.js */
class __TwigTemplate_c5ff1cc3720fa16ae859ca6b3dd88e8ec3ff58660120ed69a1064509326dd5ec extends Twig_Template
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
        $__internal_93c3d48b486bcaefb87d93a7a0ec1092b61a827f5eb66b82816ecdeb71beee08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c3d48b486bcaefb87d93a7a0ec1092b61a827f5eb66b82816ecdeb71beee08->enter($__internal_93c3d48b486bcaefb87d93a7a0ec1092b61a827f5eb66b82816ecdeb71beee08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/forEachRight.js"));

        // line 1
        echo "var arrayEachRight = require('./_arrayEachRight'),
    baseEachRight = require('./_baseEachRight'),
    castFunction = require('./_castFunction'),
    isArray = require('./isArray');

/**
 * This method is like `_.forEach` except that it iterates over elements of
 * `collection` from right to left.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @alias eachRight
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 * @see _.forEach
 * @example
 *
 * _.forEachRight([1, 2], function(value) {
 *   console.log(value);
 * });
 * // => Logs `2` then `1`.
 */
function forEachRight(collection, iteratee) {
  var func = isArray(collection) ? arrayEachRight : baseEachRight;
  return func(collection, castFunction(iteratee));
}

module.exports = forEachRight;
";
        
        $__internal_93c3d48b486bcaefb87d93a7a0ec1092b61a827f5eb66b82816ecdeb71beee08->leave($__internal_93c3d48b486bcaefb87d93a7a0ec1092b61a827f5eb66b82816ecdeb71beee08_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/forEachRight.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayEachRight = require('./_arrayEachRight'),
    baseEachRight = require('./_baseEachRight'),
    castFunction = require('./_castFunction'),
    isArray = require('./isArray');

/**
 * This method is like `_.forEach` except that it iterates over elements of
 * `collection` from right to left.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @alias eachRight
 * @category Collection
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} [iteratee=_.identity] The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 * @see _.forEach
 * @example
 *
 * _.forEachRight([1, 2], function(value) {
 *   console.log(value);
 * });
 * // => Logs `2` then `1`.
 */
function forEachRight(collection, iteratee) {
  var func = isArray(collection) ? arrayEachRight : baseEachRight;
  return func(collection, castFunction(iteratee));
}

module.exports = forEachRight;
", "node_modules/lodash/forEachRight.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/forEachRight.js");
    }
}
