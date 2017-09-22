<?php

/* node_modules/lodash/add.js */
class __TwigTemplate_639239002a5eb0b1903e3115462886e7638a936d542188716c91e8842644e218 extends Twig_Template
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
        $__internal_ae4ffd1dc293b25b7d3e20c5388462894aefa3a4d8b0630c60fdb418cd8e70e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4ffd1dc293b25b7d3e20c5388462894aefa3a4d8b0630c60fdb418cd8e70e5->enter($__internal_ae4ffd1dc293b25b7d3e20c5388462894aefa3a4d8b0630c60fdb418cd8e70e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/add.js"));

        // line 1
        echo "var createMathOperation = require('./_createMathOperation');

/**
 * Adds two numbers.
 *
 * @static
 * @memberOf _
 * @since 3.4.0
 * @category Math
 * @param {number} augend The first number in an addition.
 * @param {number} addend The second number in an addition.
 * @returns {number} Returns the total.
 * @example
 *
 * _.add(6, 4);
 * // => 10
 */
var add = createMathOperation(function(augend, addend) {
  return augend + addend;
}, 0);

module.exports = add;
";
        
        $__internal_ae4ffd1dc293b25b7d3e20c5388462894aefa3a4d8b0630c60fdb418cd8e70e5->leave($__internal_ae4ffd1dc293b25b7d3e20c5388462894aefa3a4d8b0630c60fdb418cd8e70e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/add.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createMathOperation = require('./_createMathOperation');

/**
 * Adds two numbers.
 *
 * @static
 * @memberOf _
 * @since 3.4.0
 * @category Math
 * @param {number} augend The first number in an addition.
 * @param {number} addend The second number in an addition.
 * @returns {number} Returns the total.
 * @example
 *
 * _.add(6, 4);
 * // => 10
 */
var add = createMathOperation(function(augend, addend) {
  return augend + addend;
}, 0);

module.exports = add;
", "node_modules/lodash/add.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/add.js");
    }
}
