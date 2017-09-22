<?php

/* node_modules/lodash/isTypedArray.js */
class __TwigTemplate_9b189630a6a8749d60888d2aefbdd091e7691040a34ae00888d8fa257797e152 extends Twig_Template
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
        $__internal_2746219d0a1273339b111cda13c7ea6871471b0f7aeef4c36fd2e5fd6b77e52c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2746219d0a1273339b111cda13c7ea6871471b0f7aeef4c36fd2e5fd6b77e52c->enter($__internal_2746219d0a1273339b111cda13c7ea6871471b0f7aeef4c36fd2e5fd6b77e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isTypedArray.js"));

        // line 1
        echo "var baseIsTypedArray = require('./_baseIsTypedArray'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsTypedArray = nodeUtil && nodeUtil.isTypedArray;

/**
 * Checks if `value` is classified as a typed array.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a typed array, else `false`.
 * @example
 *
 * _.isTypedArray(new Uint8Array);
 * // => true
 *
 * _.isTypedArray([]);
 * // => false
 */
var isTypedArray = nodeIsTypedArray ? baseUnary(nodeIsTypedArray) : baseIsTypedArray;

module.exports = isTypedArray;
";
        
        $__internal_2746219d0a1273339b111cda13c7ea6871471b0f7aeef4c36fd2e5fd6b77e52c->leave($__internal_2746219d0a1273339b111cda13c7ea6871471b0f7aeef4c36fd2e5fd6b77e52c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isTypedArray.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsTypedArray = require('./_baseIsTypedArray'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsTypedArray = nodeUtil && nodeUtil.isTypedArray;

/**
 * Checks if `value` is classified as a typed array.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a typed array, else `false`.
 * @example
 *
 * _.isTypedArray(new Uint8Array);
 * // => true
 *
 * _.isTypedArray([]);
 * // => false
 */
var isTypedArray = nodeIsTypedArray ? baseUnary(nodeIsTypedArray) : baseIsTypedArray;

module.exports = isTypedArray;
", "node_modules/lodash/isTypedArray.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isTypedArray.js");
    }
}
