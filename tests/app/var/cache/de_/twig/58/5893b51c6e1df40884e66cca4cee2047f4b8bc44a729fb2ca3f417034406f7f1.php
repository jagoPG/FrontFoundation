<?php

/* node_modules/lodash/isArrayLike.js */
class __TwigTemplate_d0ce1615a93ec320f1c102f2835ca14202a4980266082a19c2779a2edb2e0b2a extends Twig_Template
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
        $__internal_60a937932bcefcc7e648f9417968007f2691bb1143554f0a02c84663cc15cfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a937932bcefcc7e648f9417968007f2691bb1143554f0a02c84663cc15cfa8->enter($__internal_60a937932bcefcc7e648f9417968007f2691bb1143554f0a02c84663cc15cfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isArrayLike.js"));

        // line 1
        echo "var isFunction = require('./isFunction'),
    isLength = require('./isLength');

/**
 * Checks if `value` is array-like. A value is considered array-like if it's
 * not a function and has a `value.length` that's an integer greater than or
 * equal to `0` and less than or equal to `Number.MAX_SAFE_INTEGER`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is array-like, else `false`.
 * @example
 *
 * _.isArrayLike([1, 2, 3]);
 * // => true
 *
 * _.isArrayLike(document.body.children);
 * // => true
 *
 * _.isArrayLike('abc');
 * // => true
 *
 * _.isArrayLike(_.noop);
 * // => false
 */
function isArrayLike(value) {
  return value != null && isLength(value.length) && !isFunction(value);
}

module.exports = isArrayLike;
";
        
        $__internal_60a937932bcefcc7e648f9417968007f2691bb1143554f0a02c84663cc15cfa8->leave($__internal_60a937932bcefcc7e648f9417968007f2691bb1143554f0a02c84663cc15cfa8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isArrayLike.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isFunction = require('./isFunction'),
    isLength = require('./isLength');

/**
 * Checks if `value` is array-like. A value is considered array-like if it's
 * not a function and has a `value.length` that's an integer greater than or
 * equal to `0` and less than or equal to `Number.MAX_SAFE_INTEGER`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is array-like, else `false`.
 * @example
 *
 * _.isArrayLike([1, 2, 3]);
 * // => true
 *
 * _.isArrayLike(document.body.children);
 * // => true
 *
 * _.isArrayLike('abc');
 * // => true
 *
 * _.isArrayLike(_.noop);
 * // => false
 */
function isArrayLike(value) {
  return value != null && isLength(value.length) && !isFunction(value);
}

module.exports = isArrayLike;
", "node_modules/lodash/isArrayLike.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isArrayLike.js");
    }
}
