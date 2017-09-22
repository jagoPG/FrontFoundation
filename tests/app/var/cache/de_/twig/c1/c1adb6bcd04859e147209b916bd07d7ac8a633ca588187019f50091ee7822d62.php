<?php

/* node_modules/lodash/isEqual.js */
class __TwigTemplate_28a5bc0e6ff682fc8cf9d48fd3f86ac0bf155c20544997aef2ec80ac12c52518 extends Twig_Template
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
        $__internal_446c8a3d63ac4fa8ac70bd5218213bbb3ade7180de04cd4e05067d31a826fa5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446c8a3d63ac4fa8ac70bd5218213bbb3ade7180de04cd4e05067d31a826fa5e->enter($__internal_446c8a3d63ac4fa8ac70bd5218213bbb3ade7180de04cd4e05067d31a826fa5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isEqual.js"));

        // line 1
        echo "var baseIsEqual = require('./_baseIsEqual');

/**
 * Performs a deep comparison between two values to determine if they are
 * equivalent.
 *
 * **Note:** This method supports comparing arrays, array buffers, booleans,
 * date objects, error objects, maps, numbers, `Object` objects, regexes,
 * sets, strings, symbols, and typed arrays. `Object` objects are compared
 * by their own, not inherited, enumerable properties. Functions and DOM
 * nodes are compared by strict equality, i.e. `===`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
 * @example
 *
 * var object = { 'a': 1 };
 * var other = { 'a': 1 };
 *
 * _.isEqual(object, other);
 * // => true
 *
 * object === other;
 * // => false
 */
function isEqual(value, other) {
  return baseIsEqual(value, other);
}

module.exports = isEqual;
";
        
        $__internal_446c8a3d63ac4fa8ac70bd5218213bbb3ade7180de04cd4e05067d31a826fa5e->leave($__internal_446c8a3d63ac4fa8ac70bd5218213bbb3ade7180de04cd4e05067d31a826fa5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isEqual.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsEqual = require('./_baseIsEqual');

/**
 * Performs a deep comparison between two values to determine if they are
 * equivalent.
 *
 * **Note:** This method supports comparing arrays, array buffers, booleans,
 * date objects, error objects, maps, numbers, `Object` objects, regexes,
 * sets, strings, symbols, and typed arrays. `Object` objects are compared
 * by their own, not inherited, enumerable properties. Functions and DOM
 * nodes are compared by strict equality, i.e. `===`.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to compare.
 * @param {*} other The other value to compare.
 * @returns {boolean} Returns `true` if the values are equivalent, else `false`.
 * @example
 *
 * var object = { 'a': 1 };
 * var other = { 'a': 1 };
 *
 * _.isEqual(object, other);
 * // => true
 *
 * object === other;
 * // => false
 */
function isEqual(value, other) {
  return baseIsEqual(value, other);
}

module.exports = isEqual;
", "node_modules/lodash/isEqual.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isEqual.js");
    }
}
