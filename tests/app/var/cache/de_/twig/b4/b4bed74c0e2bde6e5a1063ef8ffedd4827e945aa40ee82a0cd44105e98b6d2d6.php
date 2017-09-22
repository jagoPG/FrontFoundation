<?php

/* node_modules/lodash/_baseIsRegExp.js */
class __TwigTemplate_44fb135ffdd32a3a14fbf343f295dec36b9295f6e90e883c7129a210e729c967 extends Twig_Template
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
        $__internal_7274c437c06ff299da3e529246c0496d3cec1ca86401420cba7a343287d09f22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7274c437c06ff299da3e529246c0496d3cec1ca86401420cba7a343287d09f22->enter($__internal_7274c437c06ff299da3e529246c0496d3cec1ca86401420cba7a343287d09f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsRegExp.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var regexpTag = '[object RegExp]';

/**
 * The base implementation of `_.isRegExp` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a regexp, else `false`.
 */
function baseIsRegExp(value) {
  return isObjectLike(value) && baseGetTag(value) == regexpTag;
}

module.exports = baseIsRegExp;
";
        
        $__internal_7274c437c06ff299da3e529246c0496d3cec1ca86401420cba7a343287d09f22->leave($__internal_7274c437c06ff299da3e529246c0496d3cec1ca86401420cba7a343287d09f22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsRegExp.js";
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
var regexpTag = '[object RegExp]';

/**
 * The base implementation of `_.isRegExp` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a regexp, else `false`.
 */
function baseIsRegExp(value) {
  return isObjectLike(value) && baseGetTag(value) == regexpTag;
}

module.exports = baseIsRegExp;
", "node_modules/lodash/_baseIsRegExp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsRegExp.js");
    }
}
