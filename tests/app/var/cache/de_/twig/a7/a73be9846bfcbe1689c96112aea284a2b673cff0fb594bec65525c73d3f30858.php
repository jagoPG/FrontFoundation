<?php

/* node_modules/lodash/isRegExp.js */
class __TwigTemplate_b902cfcf26957f7e9c496e44f632cdeba6e9b7da3b16283dddf9ec88da60cf67 extends Twig_Template
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
        $__internal_d35c30f3b67ab6af8913075e17c57b40cda77095144b85044a0386f8f9519f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35c30f3b67ab6af8913075e17c57b40cda77095144b85044a0386f8f9519f8d->enter($__internal_d35c30f3b67ab6af8913075e17c57b40cda77095144b85044a0386f8f9519f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isRegExp.js"));

        // line 1
        echo "var baseIsRegExp = require('./_baseIsRegExp'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsRegExp = nodeUtil && nodeUtil.isRegExp;

/**
 * Checks if `value` is classified as a `RegExp` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a regexp, else `false`.
 * @example
 *
 * _.isRegExp(/abc/);
 * // => true
 *
 * _.isRegExp('/abc/');
 * // => false
 */
var isRegExp = nodeIsRegExp ? baseUnary(nodeIsRegExp) : baseIsRegExp;

module.exports = isRegExp;
";
        
        $__internal_d35c30f3b67ab6af8913075e17c57b40cda77095144b85044a0386f8f9519f8d->leave($__internal_d35c30f3b67ab6af8913075e17c57b40cda77095144b85044a0386f8f9519f8d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isRegExp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsRegExp = require('./_baseIsRegExp'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsRegExp = nodeUtil && nodeUtil.isRegExp;

/**
 * Checks if `value` is classified as a `RegExp` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a regexp, else `false`.
 * @example
 *
 * _.isRegExp(/abc/);
 * // => true
 *
 * _.isRegExp('/abc/');
 * // => false
 */
var isRegExp = nodeIsRegExp ? baseUnary(nodeIsRegExp) : baseIsRegExp;

module.exports = isRegExp;
", "node_modules/lodash/isRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isRegExp.js");
    }
}
