<?php

/* node_modules/lodash/isDate.js */
class __TwigTemplate_b4b73bd08f9f4f818bcce82ad9dff4d87820d199cd6f38c7f1667d19d07a97e9 extends Twig_Template
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
        $__internal_8f54f6edef79f608e67ace62e51856ff7e5f9381c2318864304399c665d38daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f54f6edef79f608e67ace62e51856ff7e5f9381c2318864304399c665d38daa->enter($__internal_8f54f6edef79f608e67ace62e51856ff7e5f9381c2318864304399c665d38daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isDate.js"));

        // line 1
        echo "var baseIsDate = require('./_baseIsDate'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsDate = nodeUtil && nodeUtil.isDate;

/**
 * Checks if `value` is classified as a `Date` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a date object, else `false`.
 * @example
 *
 * _.isDate(new Date);
 * // => true
 *
 * _.isDate('Mon April 23 2012');
 * // => false
 */
var isDate = nodeIsDate ? baseUnary(nodeIsDate) : baseIsDate;

module.exports = isDate;
";
        
        $__internal_8f54f6edef79f608e67ace62e51856ff7e5f9381c2318864304399c665d38daa->leave($__internal_8f54f6edef79f608e67ace62e51856ff7e5f9381c2318864304399c665d38daa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isDate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsDate = require('./_baseIsDate'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsDate = nodeUtil && nodeUtil.isDate;

/**
 * Checks if `value` is classified as a `Date` object.
 *
 * @static
 * @memberOf _
 * @since 0.1.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a date object, else `false`.
 * @example
 *
 * _.isDate(new Date);
 * // => true
 *
 * _.isDate('Mon April 23 2012');
 * // => false
 */
var isDate = nodeIsDate ? baseUnary(nodeIsDate) : baseIsDate;

module.exports = isDate;
", "node_modules/lodash/isDate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isDate.js");
    }
}
