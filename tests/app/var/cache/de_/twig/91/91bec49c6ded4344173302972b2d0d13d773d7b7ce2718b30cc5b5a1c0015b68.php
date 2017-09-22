<?php

/* node_modules/lodash/_baseToNumber.js */
class __TwigTemplate_d098de67e4cdf6130a126a7599c2f3892aec7aa1db545ccc0bbafbe79d2c8086 extends Twig_Template
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
        $__internal_5c36d82e680cbdbfa9c885d5f0566f2369dde22bf12e64ac2438a6c99d43cc4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c36d82e680cbdbfa9c885d5f0566f2369dde22bf12e64ac2438a6c99d43cc4e->enter($__internal_5c36d82e680cbdbfa9c885d5f0566f2369dde22bf12e64ac2438a6c99d43cc4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseToNumber.js"));

        // line 1
        echo "var isSymbol = require('./isSymbol');

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/**
 * The base implementation of `_.toNumber` which doesn't ensure correct
 * conversions of binary, hexadecimal, or octal string values.
 *
 * @private
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 */
function baseToNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (isSymbol(value)) {
    return NAN;
  }
  return +value;
}

module.exports = baseToNumber;
";
        
        $__internal_5c36d82e680cbdbfa9c885d5f0566f2369dde22bf12e64ac2438a6c99d43cc4e->leave($__internal_5c36d82e680cbdbfa9c885d5f0566f2369dde22bf12e64ac2438a6c99d43cc4e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseToNumber.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isSymbol = require('./isSymbol');

/** Used as references for various `Number` constants. */
var NAN = 0 / 0;

/**
 * The base implementation of `_.toNumber` which doesn't ensure correct
 * conversions of binary, hexadecimal, or octal string values.
 *
 * @private
 * @param {*} value The value to process.
 * @returns {number} Returns the number.
 */
function baseToNumber(value) {
  if (typeof value == 'number') {
    return value;
  }
  if (isSymbol(value)) {
    return NAN;
  }
  return +value;
}

module.exports = baseToNumber;
", "node_modules/lodash/_baseToNumber.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseToNumber.js");
    }
}
