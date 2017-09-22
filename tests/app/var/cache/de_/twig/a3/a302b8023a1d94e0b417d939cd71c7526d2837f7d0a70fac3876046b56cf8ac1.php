<?php

/* node_modules/lodash/isMap.js */
class __TwigTemplate_08d5d0421b3009dce64b6e58dc9a64f672dc3f384d67f55b0f4a38bddc6ad8bf extends Twig_Template
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
        $__internal_7eef605026177375926cdb57e571f647a51f171be6f2578ba92eba1822014cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eef605026177375926cdb57e571f647a51f171be6f2578ba92eba1822014cdc->enter($__internal_7eef605026177375926cdb57e571f647a51f171be6f2578ba92eba1822014cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isMap.js"));

        // line 1
        echo "var baseIsMap = require('./_baseIsMap'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsMap = nodeUtil && nodeUtil.isMap;

/**
 * Checks if `value` is classified as a `Map` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a map, else `false`.
 * @example
 *
 * _.isMap(new Map);
 * // => true
 *
 * _.isMap(new WeakMap);
 * // => false
 */
var isMap = nodeIsMap ? baseUnary(nodeIsMap) : baseIsMap;

module.exports = isMap;
";
        
        $__internal_7eef605026177375926cdb57e571f647a51f171be6f2578ba92eba1822014cdc->leave($__internal_7eef605026177375926cdb57e571f647a51f171be6f2578ba92eba1822014cdc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsMap = require('./_baseIsMap'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsMap = nodeUtil && nodeUtil.isMap;

/**
 * Checks if `value` is classified as a `Map` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a map, else `false`.
 * @example
 *
 * _.isMap(new Map);
 * // => true
 *
 * _.isMap(new WeakMap);
 * // => false
 */
var isMap = nodeIsMap ? baseUnary(nodeIsMap) : baseIsMap;

module.exports = isMap;
", "node_modules/lodash/isMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isMap.js");
    }
}
