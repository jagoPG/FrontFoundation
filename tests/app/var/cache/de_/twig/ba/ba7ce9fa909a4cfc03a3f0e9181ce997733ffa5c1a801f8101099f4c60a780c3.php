<?php

/* node_modules/lodash/_assignValue.js */
class __TwigTemplate_cc7e57ee89a94b58aac9df26cfec1924558198519f9a8061c88ec52c2ee17bc8 extends Twig_Template
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
        $__internal_de29f5da40cac47f2cca92f0216a6302fbedc2b397c43f5c78717d39a4ac9576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de29f5da40cac47f2cca92f0216a6302fbedc2b397c43f5c78717d39a4ac9576->enter($__internal_de29f5da40cac47f2cca92f0216a6302fbedc2b397c43f5c78717d39a4ac9576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_assignValue.js"));

        // line 1
        echo "var baseAssignValue = require('./_baseAssignValue'),
    eq = require('./eq');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Assigns `value` to `key` of `object` if the existing value is not equivalent
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function assignValue(object, key, value) {
  var objValue = object[key];
  if (!(hasOwnProperty.call(object, key) && eq(objValue, value)) ||
      (value === undefined && !(key in object))) {
    baseAssignValue(object, key, value);
  }
}

module.exports = assignValue;
";
        
        $__internal_de29f5da40cac47f2cca92f0216a6302fbedc2b397c43f5c78717d39a4ac9576->leave($__internal_de29f5da40cac47f2cca92f0216a6302fbedc2b397c43f5c78717d39a4ac9576_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_assignValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseAssignValue = require('./_baseAssignValue'),
    eq = require('./eq');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Assigns `value` to `key` of `object` if the existing value is not equivalent
 * using [`SameValueZero`](http://ecma-international.org/ecma-262/7.0/#sec-samevaluezero)
 * for equality comparisons.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function assignValue(object, key, value) {
  var objValue = object[key];
  if (!(hasOwnProperty.call(object, key) && eq(objValue, value)) ||
      (value === undefined && !(key in object))) {
    baseAssignValue(object, key, value);
  }
}

module.exports = assignValue;
", "node_modules/lodash/_assignValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_assignValue.js");
    }
}
