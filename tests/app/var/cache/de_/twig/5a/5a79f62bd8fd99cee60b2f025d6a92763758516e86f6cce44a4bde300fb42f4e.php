<?php

/* node_modules/lodash/isArrayBuffer.js */
class __TwigTemplate_5c06ea4150ccfe0eeee7affab7d4f97e436a70b734a036d75c697ff79776d12a extends Twig_Template
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
        $__internal_e46459162561434e723d615f8661051218198792d415c6999d3c74df13ae10f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46459162561434e723d615f8661051218198792d415c6999d3c74df13ae10f6->enter($__internal_e46459162561434e723d615f8661051218198792d415c6999d3c74df13ae10f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isArrayBuffer.js"));

        // line 1
        echo "var baseIsArrayBuffer = require('./_baseIsArrayBuffer'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsArrayBuffer = nodeUtil && nodeUtil.isArrayBuffer;

/**
 * Checks if `value` is classified as an `ArrayBuffer` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array buffer, else `false`.
 * @example
 *
 * _.isArrayBuffer(new ArrayBuffer(2));
 * // => true
 *
 * _.isArrayBuffer(new Array(2));
 * // => false
 */
var isArrayBuffer = nodeIsArrayBuffer ? baseUnary(nodeIsArrayBuffer) : baseIsArrayBuffer;

module.exports = isArrayBuffer;
";
        
        $__internal_e46459162561434e723d615f8661051218198792d415c6999d3c74df13ae10f6->leave($__internal_e46459162561434e723d615f8661051218198792d415c6999d3c74df13ae10f6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isArrayBuffer.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsArrayBuffer = require('./_baseIsArrayBuffer'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsArrayBuffer = nodeUtil && nodeUtil.isArrayBuffer;

/**
 * Checks if `value` is classified as an `ArrayBuffer` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is an array buffer, else `false`.
 * @example
 *
 * _.isArrayBuffer(new ArrayBuffer(2));
 * // => true
 *
 * _.isArrayBuffer(new Array(2));
 * // => false
 */
var isArrayBuffer = nodeIsArrayBuffer ? baseUnary(nodeIsArrayBuffer) : baseIsArrayBuffer;

module.exports = isArrayBuffer;
", "node_modules/lodash/isArrayBuffer.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isArrayBuffer.js");
    }
}
