<?php

/* node_modules/lodash/flatten.js */
class __TwigTemplate_17b07ac5f364e4635a7dcbeb9d9f88295db0bd5acd6034a379206a9c080ba46a extends Twig_Template
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
        $__internal_21ce5dc4b746c3e88d9c4e5abb502faa6aa5031b7f5de227c397dac1fec680ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21ce5dc4b746c3e88d9c4e5abb502faa6aa5031b7f5de227c397dac1fec680ee->enter($__internal_21ce5dc4b746c3e88d9c4e5abb502faa6aa5031b7f5de227c397dac1fec680ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/flatten.js"));

        // line 1
        echo "var baseFlatten = require('./_baseFlatten');

/**
 * Flattens `array` a single level deep.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * _.flatten([1, [2, [3, [4]], 5]]);
 * // => [1, 2, [3, [4]], 5]
 */
function flatten(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseFlatten(array, 1) : [];
}

module.exports = flatten;
";
        
        $__internal_21ce5dc4b746c3e88d9c4e5abb502faa6aa5031b7f5de227c397dac1fec680ee->leave($__internal_21ce5dc4b746c3e88d9c4e5abb502faa6aa5031b7f5de227c397dac1fec680ee_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/flatten.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFlatten = require('./_baseFlatten');

/**
 * Flattens `array` a single level deep.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Array
 * @param {Array} array The array to flatten.
 * @returns {Array} Returns the new flattened array.
 * @example
 *
 * _.flatten([1, [2, [3, [4]], 5]]);
 * // => [1, 2, [3, [4]], 5]
 */
function flatten(array) {
  var length = array == null ? 0 : array.length;
  return length ? baseFlatten(array, 1) : [];
}

module.exports = flatten;
", "node_modules/lodash/flatten.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/flatten.js");
    }
}
