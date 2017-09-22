<?php

/* node_modules/lodash/_baseIsSet.js */
class __TwigTemplate_7916c50c5799dadc302d57c365ab9aef9dfc97c733bf2aed3041d1e8d91f3b0b extends Twig_Template
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
        $__internal_efd93ce986968bebc272adbfa14f47fb3ab1d923569b3e2d4d628a491fd38528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd93ce986968bebc272adbfa14f47fb3ab1d923569b3e2d4d628a491fd38528->enter($__internal_efd93ce986968bebc272adbfa14f47fb3ab1d923569b3e2d4d628a491fd38528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsSet.js"));

        // line 1
        echo "var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var setTag = '[object Set]';

/**
 * The base implementation of `_.isSet` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a set, else `false`.
 */
function baseIsSet(value) {
  return isObjectLike(value) && getTag(value) == setTag;
}

module.exports = baseIsSet;
";
        
        $__internal_efd93ce986968bebc272adbfa14f47fb3ab1d923569b3e2d4d628a491fd38528->leave($__internal_efd93ce986968bebc272adbfa14f47fb3ab1d923569b3e2d4d628a491fd38528_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var setTag = '[object Set]';

/**
 * The base implementation of `_.isSet` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a set, else `false`.
 */
function baseIsSet(value) {
  return isObjectLike(value) && getTag(value) == setTag;
}

module.exports = baseIsSet;
", "node_modules/lodash/_baseIsSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsSet.js");
    }
}
