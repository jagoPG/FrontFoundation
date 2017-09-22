<?php

/* node_modules/lodash/_assignMergeValue.js */
class __TwigTemplate_cbd98bb5c8449d2ec31925c9e5835fe315979726933175f26c8d6289f8cf7931 extends Twig_Template
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
        $__internal_da2656e27e8e0576c6ef1e9fb512b86eb9e040aa50768db61f62d33c48d0de15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2656e27e8e0576c6ef1e9fb512b86eb9e040aa50768db61f62d33c48d0de15->enter($__internal_da2656e27e8e0576c6ef1e9fb512b86eb9e040aa50768db61f62d33c48d0de15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_assignMergeValue.js"));

        // line 1
        echo "var baseAssignValue = require('./_baseAssignValue'),
    eq = require('./eq');

/**
 * This function is like `assignValue` except that it doesn't assign
 * `undefined` values.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function assignMergeValue(object, key, value) {
  if ((value !== undefined && !eq(object[key], value)) ||
      (value === undefined && !(key in object))) {
    baseAssignValue(object, key, value);
  }
}

module.exports = assignMergeValue;
";
        
        $__internal_da2656e27e8e0576c6ef1e9fb512b86eb9e040aa50768db61f62d33c48d0de15->leave($__internal_da2656e27e8e0576c6ef1e9fb512b86eb9e040aa50768db61f62d33c48d0de15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_assignMergeValue.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseAssignValue = require('./_baseAssignValue'),
    eq = require('./eq');

/**
 * This function is like `assignValue` except that it doesn't assign
 * `undefined` values.
 *
 * @private
 * @param {Object} object The object to modify.
 * @param {string} key The key of the property to assign.
 * @param {*} value The value to assign.
 */
function assignMergeValue(object, key, value) {
  if ((value !== undefined && !eq(object[key], value)) ||
      (value === undefined && !(key in object))) {
    baseAssignValue(object, key, value);
  }
}

module.exports = assignMergeValue;
", "node_modules/lodash/_assignMergeValue.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_assignMergeValue.js");
    }
}
