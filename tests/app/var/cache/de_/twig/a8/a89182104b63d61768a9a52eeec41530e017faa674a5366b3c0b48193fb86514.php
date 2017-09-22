<?php

/* node_modules/lodash/_baseInverter.js */
class __TwigTemplate_3b06006a31bec26a0e4ecf8154380451502f8c444296211c0c021a134d304bc4 extends Twig_Template
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
        $__internal_b0762a60049996719f53dc1a70ec703af6faa71b3e56fcf4e0f430282eb3305e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0762a60049996719f53dc1a70ec703af6faa71b3e56fcf4e0f430282eb3305e->enter($__internal_b0762a60049996719f53dc1a70ec703af6faa71b3e56fcf4e0f430282eb3305e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseInverter.js"));

        // line 1
        echo "var baseForOwn = require('./_baseForOwn');

/**
 * The base implementation of `_.invert` and `_.invertBy` which inverts
 * `object` with values transformed by `iteratee` and set by `setter`.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform values.
 * @param {Object} accumulator The initial inverted object.
 * @returns {Function} Returns `accumulator`.
 */
function baseInverter(object, setter, iteratee, accumulator) {
  baseForOwn(object, function(value, key, object) {
    setter(accumulator, iteratee(value), key, object);
  });
  return accumulator;
}

module.exports = baseInverter;
";
        
        $__internal_b0762a60049996719f53dc1a70ec703af6faa71b3e56fcf4e0f430282eb3305e->leave($__internal_b0762a60049996719f53dc1a70ec703af6faa71b3e56fcf4e0f430282eb3305e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseInverter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForOwn = require('./_baseForOwn');

/**
 * The base implementation of `_.invert` and `_.invertBy` which inverts
 * `object` with values transformed by `iteratee` and set by `setter`.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform values.
 * @param {Object} accumulator The initial inverted object.
 * @returns {Function} Returns `accumulator`.
 */
function baseInverter(object, setter, iteratee, accumulator) {
  baseForOwn(object, function(value, key, object) {
    setter(accumulator, iteratee(value), key, object);
  });
  return accumulator;
}

module.exports = baseInverter;
", "node_modules/lodash/_baseInverter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseInverter.js");
    }
}
