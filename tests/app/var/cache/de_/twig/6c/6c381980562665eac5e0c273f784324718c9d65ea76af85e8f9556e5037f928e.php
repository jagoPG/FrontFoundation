<?php

/* node_modules/lodash/_castRest.js */
class __TwigTemplate_08b3797eedfef00c5508145da47b2c0e0f4fc312e318d5d3c6f55e1e15f5782e extends Twig_Template
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
        $__internal_7ea72d2e6f20e4c714e44798b50aebf8680cef7b5cbe3734cafe5230d28a2c99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea72d2e6f20e4c714e44798b50aebf8680cef7b5cbe3734cafe5230d28a2c99->enter($__internal_7ea72d2e6f20e4c714e44798b50aebf8680cef7b5cbe3734cafe5230d28a2c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_castRest.js"));

        // line 1
        echo "var baseRest = require('./_baseRest');

/**
 * A `baseRest` alias which can be replaced with `identity` by module
 * replacement plugins.
 *
 * @private
 * @type {Function}
 * @param {Function} func The function to apply a rest parameter to.
 * @returns {Function} Returns the new function.
 */
var castRest = baseRest;

module.exports = castRest;
";
        
        $__internal_7ea72d2e6f20e4c714e44798b50aebf8680cef7b5cbe3734cafe5230d28a2c99->leave($__internal_7ea72d2e6f20e4c714e44798b50aebf8680cef7b5cbe3734cafe5230d28a2c99_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_castRest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRest = require('./_baseRest');

/**
 * A `baseRest` alias which can be replaced with `identity` by module
 * replacement plugins.
 *
 * @private
 * @type {Function}
 * @param {Function} func The function to apply a rest parameter to.
 * @returns {Function} Returns the new function.
 */
var castRest = baseRest;

module.exports = castRest;
", "node_modules/lodash/_castRest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_castRest.js");
    }
}
