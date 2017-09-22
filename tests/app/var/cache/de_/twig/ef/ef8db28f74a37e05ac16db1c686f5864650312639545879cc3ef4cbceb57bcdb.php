<?php

/* node_modules/lodash/isWeakSet.js */
class __TwigTemplate_75a858e42de98e6bf27a4b8c6efbe00fd611a693adec7f28fe41fe5da27a8fe8 extends Twig_Template
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
        $__internal_bd5df23d3b96e6430364d6c828d30d457eb5ac8313aa13379ea02f232db75526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5df23d3b96e6430364d6c828d30d457eb5ac8313aa13379ea02f232db75526->enter($__internal_bd5df23d3b96e6430364d6c828d30d457eb5ac8313aa13379ea02f232db75526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isWeakSet.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var weakSetTag = '[object WeakSet]';

/**
 * Checks if `value` is classified as a `WeakSet` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a weak set, else `false`.
 * @example
 *
 * _.isWeakSet(new WeakSet);
 * // => true
 *
 * _.isWeakSet(new Set);
 * // => false
 */
function isWeakSet(value) {
  return isObjectLike(value) && baseGetTag(value) == weakSetTag;
}

module.exports = isWeakSet;
";
        
        $__internal_bd5df23d3b96e6430364d6c828d30d457eb5ac8313aa13379ea02f232db75526->leave($__internal_bd5df23d3b96e6430364d6c828d30d457eb5ac8313aa13379ea02f232db75526_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isWeakSet.js";
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
var weakSetTag = '[object WeakSet]';

/**
 * Checks if `value` is classified as a `WeakSet` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a weak set, else `false`.
 * @example
 *
 * _.isWeakSet(new WeakSet);
 * // => true
 *
 * _.isWeakSet(new Set);
 * // => false
 */
function isWeakSet(value) {
  return isObjectLike(value) && baseGetTag(value) == weakSetTag;
}

module.exports = isWeakSet;
", "node_modules/lodash/isWeakSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isWeakSet.js");
    }
}
