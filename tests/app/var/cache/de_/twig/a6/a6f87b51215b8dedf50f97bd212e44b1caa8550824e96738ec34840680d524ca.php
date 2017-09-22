<?php

/* node_modules/lodash/sum.js */
class __TwigTemplate_23bd65523542a8f04a50b632f82c9b54939cb6d1c631aaf555e1e1c9ad1cb444 extends Twig_Template
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
        $__internal_57179d1acb83adf0afcb066ea67faaa507af40020ead75c5e0226ca9b194fd8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57179d1acb83adf0afcb066ea67faaa507af40020ead75c5e0226ca9b194fd8b->enter($__internal_57179d1acb83adf0afcb066ea67faaa507af40020ead75c5e0226ca9b194fd8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sum.js"));

        // line 1
        echo "var baseSum = require('./_baseSum'),
    identity = require('./identity');

/**
 * Computes the sum of the values in `array`.
 *
 * @static
 * @memberOf _
 * @since 3.4.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {number} Returns the sum.
 * @example
 *
 * _.sum([4, 2, 8, 6]);
 * // => 20
 */
function sum(array) {
  return (array && array.length)
    ? baseSum(array, identity)
    : 0;
}

module.exports = sum;
";
        
        $__internal_57179d1acb83adf0afcb066ea67faaa507af40020ead75c5e0226ca9b194fd8b->leave($__internal_57179d1acb83adf0afcb066ea67faaa507af40020ead75c5e0226ca9b194fd8b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sum.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseSum = require('./_baseSum'),
    identity = require('./identity');

/**
 * Computes the sum of the values in `array`.
 *
 * @static
 * @memberOf _
 * @since 3.4.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {number} Returns the sum.
 * @example
 *
 * _.sum([4, 2, 8, 6]);
 * // => 20
 */
function sum(array) {
  return (array && array.length)
    ? baseSum(array, identity)
    : 0;
}

module.exports = sum;
", "node_modules/lodash/sum.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sum.js");
    }
}
