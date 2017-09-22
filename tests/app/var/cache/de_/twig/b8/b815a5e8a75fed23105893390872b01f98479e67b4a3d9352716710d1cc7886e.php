<?php

/* node_modules/lodash/isSet.js */
class __TwigTemplate_e200f47073c8ba37d8bb4eb5f52b6d55cc3e9bb3001b36da98aa4b50d830adaa extends Twig_Template
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
        $__internal_85a7c18c1eb5a3789d63eabaf79aa87c4e9d517259655cef8cb5a8a9fd9741a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a7c18c1eb5a3789d63eabaf79aa87c4e9d517259655cef8cb5a8a9fd9741a5->enter($__internal_85a7c18c1eb5a3789d63eabaf79aa87c4e9d517259655cef8cb5a8a9fd9741a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/isSet.js"));

        // line 1
        echo "var baseIsSet = require('./_baseIsSet'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsSet = nodeUtil && nodeUtil.isSet;

/**
 * Checks if `value` is classified as a `Set` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a set, else `false`.
 * @example
 *
 * _.isSet(new Set);
 * // => true
 *
 * _.isSet(new WeakSet);
 * // => false
 */
var isSet = nodeIsSet ? baseUnary(nodeIsSet) : baseIsSet;

module.exports = isSet;
";
        
        $__internal_85a7c18c1eb5a3789d63eabaf79aa87c4e9d517259655cef8cb5a8a9fd9741a5->leave($__internal_85a7c18c1eb5a3789d63eabaf79aa87c4e9d517259655cef8cb5a8a9fd9741a5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/isSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIsSet = require('./_baseIsSet'),
    baseUnary = require('./_baseUnary'),
    nodeUtil = require('./_nodeUtil');

/* Node.js helper references. */
var nodeIsSet = nodeUtil && nodeUtil.isSet;

/**
 * Checks if `value` is classified as a `Set` object.
 *
 * @static
 * @memberOf _
 * @since 4.3.0
 * @category Lang
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a set, else `false`.
 * @example
 *
 * _.isSet(new Set);
 * // => true
 *
 * _.isSet(new WeakSet);
 * // => false
 */
var isSet = nodeIsSet ? baseUnary(nodeIsSet) : baseIsSet;

module.exports = isSet;
", "node_modules/lodash/isSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/isSet.js");
    }
}
