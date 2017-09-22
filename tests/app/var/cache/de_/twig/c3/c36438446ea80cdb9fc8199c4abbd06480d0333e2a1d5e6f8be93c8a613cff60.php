<?php

/* node_modules/lodash/toInteger.js */
class __TwigTemplate_4aa867b2c8e37f5a21e22fc0af3d6fe09c66bfee6320ac6d23bf80f06fe0951c extends Twig_Template
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
        $__internal_534587110d989de48affb3752cc7c5051eb410477adab5afcff53acbd118dcea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_534587110d989de48affb3752cc7c5051eb410477adab5afcff53acbd118dcea->enter($__internal_534587110d989de48affb3752cc7c5051eb410477adab5afcff53acbd118dcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/toInteger.js"));

        // line 1
        echo "var toFinite = require('./toFinite');

/**
 * Converts `value` to an integer.
 *
 * **Note:** This method is loosely based on
 * [`ToInteger`](http://www.ecma-international.org/ecma-262/7.0/#sec-tointeger).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toInteger(3.2);
 * // => 3
 *
 * _.toInteger(Number.MIN_VALUE);
 * // => 0
 *
 * _.toInteger(Infinity);
 * // => 1.7976931348623157e+308
 *
 * _.toInteger('3.2');
 * // => 3
 */
function toInteger(value) {
  var result = toFinite(value),
      remainder = result % 1;

  return result === result ? (remainder ? result - remainder : result) : 0;
}

module.exports = toInteger;
";
        
        $__internal_534587110d989de48affb3752cc7c5051eb410477adab5afcff53acbd118dcea->leave($__internal_534587110d989de48affb3752cc7c5051eb410477adab5afcff53acbd118dcea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/toInteger.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toFinite = require('./toFinite');

/**
 * Converts `value` to an integer.
 *
 * **Note:** This method is loosely based on
 * [`ToInteger`](http://www.ecma-international.org/ecma-262/7.0/#sec-tointeger).
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Lang
 * @param {*} value The value to convert.
 * @returns {number} Returns the converted integer.
 * @example
 *
 * _.toInteger(3.2);
 * // => 3
 *
 * _.toInteger(Number.MIN_VALUE);
 * // => 0
 *
 * _.toInteger(Infinity);
 * // => 1.7976931348623157e+308
 *
 * _.toInteger('3.2');
 * // => 3
 */
function toInteger(value) {
  var result = toFinite(value),
      remainder = result % 1;

  return result === result ? (remainder ? result - remainder : result) : 0;
}

module.exports = toInteger;
", "node_modules/lodash/toInteger.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/toInteger.js");
    }
}
