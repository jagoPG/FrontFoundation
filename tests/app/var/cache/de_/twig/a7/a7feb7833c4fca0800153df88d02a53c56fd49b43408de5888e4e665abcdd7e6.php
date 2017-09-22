<?php

/* node_modules/lodash/_baseIsDate.js */
class __TwigTemplate_05e45068aeed1a93de7944358f2e90891696dd0762d2c45248d1c584e9f9da23 extends Twig_Template
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
        $__internal_1f9c4df0ec2ca42616eda367e5622e38a7bc31658e733165c2e3bac9b846afd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f9c4df0ec2ca42616eda367e5622e38a7bc31658e733165c2e3bac9b846afd0->enter($__internal_1f9c4df0ec2ca42616eda367e5622e38a7bc31658e733165c2e3bac9b846afd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsDate.js"));

        // line 1
        echo "var baseGetTag = require('./_baseGetTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var dateTag = '[object Date]';

/**
 * The base implementation of `_.isDate` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a date object, else `false`.
 */
function baseIsDate(value) {
  return isObjectLike(value) && baseGetTag(value) == dateTag;
}

module.exports = baseIsDate;
";
        
        $__internal_1f9c4df0ec2ca42616eda367e5622e38a7bc31658e733165c2e3bac9b846afd0->leave($__internal_1f9c4df0ec2ca42616eda367e5622e38a7bc31658e733165c2e3bac9b846afd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsDate.js";
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
var dateTag = '[object Date]';

/**
 * The base implementation of `_.isDate` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a date object, else `false`.
 */
function baseIsDate(value) {
  return isObjectLike(value) && baseGetTag(value) == dateTag;
}

module.exports = baseIsDate;
", "node_modules/lodash/_baseIsDate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsDate.js");
    }
}
