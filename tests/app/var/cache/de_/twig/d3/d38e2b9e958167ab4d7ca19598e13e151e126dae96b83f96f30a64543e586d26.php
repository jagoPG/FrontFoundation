<?php

/* node_modules/lodash/_baseIndexOf.js */
class __TwigTemplate_fda6e70411f407b79ede8000ce066db2999baff57cd9910fccafdcb94211a44d extends Twig_Template
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
        $__internal_98e4b00f4ff66bb62b3915d8b141724354a85cec812d6a4b0ce0ad82dbc69366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e4b00f4ff66bb62b3915d8b141724354a85cec812d6a4b0ce0ad82dbc69366->enter($__internal_98e4b00f4ff66bb62b3915d8b141724354a85cec812d6a4b0ce0ad82dbc69366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIndexOf.js"));

        // line 1
        echo "var baseFindIndex = require('./_baseFindIndex'),
    baseIsNaN = require('./_baseIsNaN'),
    strictIndexOf = require('./_strictIndexOf');

/**
 * The base implementation of `_.indexOf` without `fromIndex` bounds checks.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseIndexOf(array, value, fromIndex) {
  return value === value
    ? strictIndexOf(array, value, fromIndex)
    : baseFindIndex(array, baseIsNaN, fromIndex);
}

module.exports = baseIndexOf;
";
        
        $__internal_98e4b00f4ff66bb62b3915d8b141724354a85cec812d6a4b0ce0ad82dbc69366->leave($__internal_98e4b00f4ff66bb62b3915d8b141724354a85cec812d6a4b0ce0ad82dbc69366_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIndexOf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFindIndex = require('./_baseFindIndex'),
    baseIsNaN = require('./_baseIsNaN'),
    strictIndexOf = require('./_strictIndexOf');

/**
 * The base implementation of `_.indexOf` without `fromIndex` bounds checks.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {*} value The value to search for.
 * @param {number} fromIndex The index to search from.
 * @returns {number} Returns the index of the matched value, else `-1`.
 */
function baseIndexOf(array, value, fromIndex) {
  return value === value
    ? strictIndexOf(array, value, fromIndex)
    : baseFindIndex(array, baseIsNaN, fromIndex);
}

module.exports = baseIndexOf;
", "node_modules/lodash/_baseIndexOf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIndexOf.js");
    }
}
