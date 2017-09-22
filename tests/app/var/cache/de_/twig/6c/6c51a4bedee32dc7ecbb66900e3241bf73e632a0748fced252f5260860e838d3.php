<?php

/* node_modules/lodash/isSymbol.js */
class __TwigTemplate_73257164f83f736d0dc2637660d1fffba4502c33f529dd52382d3aad049d9d88 extends Twig_Template
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
        $__internal_2258ddc1fa72de1d93008429e5fd327aee28e0b46c8e03c02270fad8bf985fb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2258ddc1fa72de1d93008429e5fd327aee28e0b46c8e03c02270fad8bf985fb5->enter($__internal_2258ddc1fa72de1d93008429e5fd327aee28e0b46c8e03c02270fad8bf985fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isSymbol.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (isObjectLike(value) && baseGetTag(value) == symbolTag);
}

module.exports = isSymbol;
";
        
        $__internal_2258ddc1fa72de1d93008429e5fd327aee28e0b46c8e03c02270fad8bf985fb5->leave($__internal_2258ddc1fa72de1d93008429e5fd327aee28e0b46c8e03c02270fad8bf985fb5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isSymbol.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var symbolTag = '[object Symbol]';

/**
 * Checks if `value` is classified as a `Symbol` primitive or object.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a symbol, else `false`.
 * @example
 *
 * _.isSymbol(Symbol.iterator);
 * // => true
 *
 * _.isSymbol('abc');
 * // => false
 */
function isSymbol(value) {
  return typeof value == 'symbol' ||
    (isObjectLike(value) && baseGetTag(value) == symbolTag);
}

module.exports = isSymbol;
", "node_modules/lodash/isSymbol.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isSymbol.js");
    }
}
