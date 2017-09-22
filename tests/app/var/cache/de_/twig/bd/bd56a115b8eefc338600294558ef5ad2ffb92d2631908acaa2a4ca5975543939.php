<?php

/* node_modules/lodash/nth.js */
class __TwigTemplate_ae9138df83a7c80f3eb35d958b977ba1b4d73e10970a86a45012d448f5415515 extends Twig_Template
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
        $__internal_3633568efab58c395e895d883edfc4851b8a3e50deb52bbc2b8e60d6fc37f936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3633568efab58c395e895d883edfc4851b8a3e50deb52bbc2b8e60d6fc37f936->enter($__internal_3633568efab58c395e895d883edfc4851b8a3e50deb52bbc2b8e60d6fc37f936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/nth.js"));

        // line 1
        echo "var baseNth = require('./_baseNth'),
    toInteger = require('./toInteger');

/**
 * Gets the element at index `n` of `array`. If `n` is negative, the nth
 * element from the end is returned.
 *
 * @static
 * @memberOf _
 * @since 4.11.0
 * @category Array
 * @param {Array} array The array to query.
 * @param {number} [n=0] The index of the element to return.
 * @returns {*} Returns the nth element of `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'd'];
 *
 * _.nth(array, 1);
 * // => 'b'
 *
 * _.nth(array, -2);
 * // => 'c';
 */
function nth(array, n) {
  return (array && array.length) ? baseNth(array, toInteger(n)) : undefined;
}

module.exports = nth;
";
        
        $__internal_3633568efab58c395e895d883edfc4851b8a3e50deb52bbc2b8e60d6fc37f936->leave($__internal_3633568efab58c395e895d883edfc4851b8a3e50deb52bbc2b8e60d6fc37f936_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/nth.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseNth = require('./_baseNth'),
    toInteger = require('./toInteger');

/**
 * Gets the element at index `n` of `array`. If `n` is negative, the nth
 * element from the end is returned.
 *
 * @static
 * @memberOf _
 * @since 4.11.0
 * @category Array
 * @param {Array} array The array to query.
 * @param {number} [n=0] The index of the element to return.
 * @returns {*} Returns the nth element of `array`.
 * @example
 *
 * var array = ['a', 'b', 'c', 'd'];
 *
 * _.nth(array, 1);
 * // => 'b'
 *
 * _.nth(array, -2);
 * // => 'c';
 */
function nth(array, n) {
  return (array && array.length) ? baseNth(array, toInteger(n)) : undefined;
}

module.exports = nth;
", "node_modules/lodash/nth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/nth.js");
    }
}
