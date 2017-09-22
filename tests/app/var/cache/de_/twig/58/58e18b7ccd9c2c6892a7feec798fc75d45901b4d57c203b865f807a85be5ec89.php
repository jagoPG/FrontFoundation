<?php

/* node_modules/lodash/isString.js */
class __TwigTemplate_ba94c6278270f61bf6b0b56c518424fce60a785c15a8d05d79a15787007e126f extends Twig_Template
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
        $__internal_664df21bd7d4684c4fd6bc9e62bea4a36d009169c6824228dc1b4e1a4e4a5176 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_664df21bd7d4684c4fd6bc9e62bea4a36d009169c6824228dc1b4e1a4e4a5176->enter($__internal_664df21bd7d4684c4fd6bc9e62bea4a36d009169c6824228dc1b4e1a4e4a5176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isString.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isArray = require('./isArray'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var stringTag = '[object String]';

/**
 * Checks if `value` is classified as a `String` primitive or object.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a string, else `false`.
 * @example
 *
 * _.isString('abc');
 * // => true
 *
 * _.isString(1);
 * // => false
 */
function isString(value) {
  return typeof value == 'string' ||
    (!isArray(value) && isObjectLike(value) && baseGetTag(value) == stringTag);
}

module.exports = isString;
";
        
        $__internal_664df21bd7d4684c4fd6bc9e62bea4a36d009169c6824228dc1b4e1a4e4a5176->leave($__internal_664df21bd7d4684c4fd6bc9e62bea4a36d009169c6824228dc1b4e1a4e4a5176_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isString.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGetTag = require('./_baseGetTag'),
    isArray = require('./isArray'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var stringTag = '[object String]';

/**
 * Checks if `value` is classified as a `String` primitive or object.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a string, else `false`.
 * @example
 *
 * _.isString('abc');
 * // => true
 *
 * _.isString(1);
 * // => false
 */
function isString(value) {
  return typeof value == 'string' ||
    (!isArray(value) && isObjectLike(value) && baseGetTag(value) == stringTag);
}

module.exports = isString;
", "node_modules/lodash/isString.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isString.js");
    }
}
