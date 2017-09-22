<?php

/* node_modules/lodash/_createMathOperation.js */
class __TwigTemplate_e5e2bae347ef408c60603cdb7a73d28f8214729f8664ae2f10a4f8c2d352d5df extends Twig_Template
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
        $__internal_dea84abb40bd3c57b4d4ce75da8984596cf0fd69a3c1f56d693b5b1c915ade59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea84abb40bd3c57b4d4ce75da8984596cf0fd69a3c1f56d693b5b1c915ade59->enter($__internal_dea84abb40bd3c57b4d4ce75da8984596cf0fd69a3c1f56d693b5b1c915ade59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createMathOperation.js"));

        // line 1
        echo "var baseToNumber = require('./_baseToNumber'),
    baseToString = require('./_baseToString');

/**
 * Creates a function that performs a mathematical operation on two values.
 *
 * @private
 * @param {Function} operator The function to perform the operation.
 * @param {number} [defaultValue] The value used for `undefined` arguments.
 * @returns {Function} Returns the new mathematical operation function.
 */
function createMathOperation(operator, defaultValue) {
  return function(value, other) {
    var result;
    if (value === undefined && other === undefined) {
      return defaultValue;
    }
    if (value !== undefined) {
      result = value;
    }
    if (other !== undefined) {
      if (result === undefined) {
        return other;
      }
      if (typeof value == 'string' || typeof other == 'string') {
        value = baseToString(value);
        other = baseToString(other);
      } else {
        value = baseToNumber(value);
        other = baseToNumber(other);
      }
      result = operator(value, other);
    }
    return result;
  };
}

module.exports = createMathOperation;
";
        
        $__internal_dea84abb40bd3c57b4d4ce75da8984596cf0fd69a3c1f56d693b5b1c915ade59->leave($__internal_dea84abb40bd3c57b4d4ce75da8984596cf0fd69a3c1f56d693b5b1c915ade59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createMathOperation.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseToNumber = require('./_baseToNumber'),
    baseToString = require('./_baseToString');

/**
 * Creates a function that performs a mathematical operation on two values.
 *
 * @private
 * @param {Function} operator The function to perform the operation.
 * @param {number} [defaultValue] The value used for `undefined` arguments.
 * @returns {Function} Returns the new mathematical operation function.
 */
function createMathOperation(operator, defaultValue) {
  return function(value, other) {
    var result;
    if (value === undefined && other === undefined) {
      return defaultValue;
    }
    if (value !== undefined) {
      result = value;
    }
    if (other !== undefined) {
      if (result === undefined) {
        return other;
      }
      if (typeof value == 'string' || typeof other == 'string') {
        value = baseToString(value);
        other = baseToString(other);
      } else {
        value = baseToNumber(value);
        other = baseToNumber(other);
      }
      result = operator(value, other);
    }
    return result;
  };
}

module.exports = createMathOperation;
", "node_modules/lodash/_createMathOperation.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createMathOperation.js");
    }
}
