<?php

/* node_modules/lodash/_baseExtremum.js */
class __TwigTemplate_3530c329d39f75cac2cdc84cc76572cf5d49e040e96f41133a6884278e65fc94 extends Twig_Template
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
        $__internal_71e12f117df0bb887e989dcd0f25d03e958dcd89a289bfd5cecde0e8de85b11c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e12f117df0bb887e989dcd0f25d03e958dcd89a289bfd5cecde0e8de85b11c->enter($__internal_71e12f117df0bb887e989dcd0f25d03e958dcd89a289bfd5cecde0e8de85b11c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseExtremum.js"));

        // line 1
        echo "var isSymbol = require('./isSymbol');

/**
 * The base implementation of methods like `_.max` and `_.min` which accepts a
 * `comparator` to determine the extremum value.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The iteratee invoked per iteration.
 * @param {Function} comparator The comparator used to compare values.
 * @returns {*} Returns the extremum value.
 */
function baseExtremum(array, iteratee, comparator) {
  var index = -1,
      length = array.length;

  while (++index < length) {
    var value = array[index],
        current = iteratee(value);

    if (current != null && (computed === undefined
          ? (current === current && !isSymbol(current))
          : comparator(current, computed)
        )) {
      var computed = current,
          result = value;
    }
  }
  return result;
}

module.exports = baseExtremum;
";
        
        $__internal_71e12f117df0bb887e989dcd0f25d03e958dcd89a289bfd5cecde0e8de85b11c->leave($__internal_71e12f117df0bb887e989dcd0f25d03e958dcd89a289bfd5cecde0e8de85b11c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseExtremum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isSymbol = require('./isSymbol');

/**
 * The base implementation of methods like `_.max` and `_.min` which accepts a
 * `comparator` to determine the extremum value.
 *
 * @private
 * @param {Array} array The array to iterate over.
 * @param {Function} iteratee The iteratee invoked per iteration.
 * @param {Function} comparator The comparator used to compare values.
 * @returns {*} Returns the extremum value.
 */
function baseExtremum(array, iteratee, comparator) {
  var index = -1,
      length = array.length;

  while (++index < length) {
    var value = array[index],
        current = iteratee(value);

    if (current != null && (computed === undefined
          ? (current === current && !isSymbol(current))
          : comparator(current, computed)
        )) {
      var computed = current,
          result = value;
    }
  }
  return result;
}

module.exports = baseExtremum;
", "node_modules/lodash/_baseExtremum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseExtremum.js");
    }
}
