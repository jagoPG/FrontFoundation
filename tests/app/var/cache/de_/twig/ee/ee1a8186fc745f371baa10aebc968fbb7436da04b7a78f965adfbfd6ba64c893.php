<?php

/* node_modules/lodash/floor.js */
class __TwigTemplate_ba80014a146a4017a14eed9f32eea3155c9866713b2a78a0628e4ed3e292ddc5 extends Twig_Template
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
        $__internal_f27b7b65cc7a03291a7339f0dd5c9b1fe40a1db1d8c95a1a51d91a570d285135 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27b7b65cc7a03291a7339f0dd5c9b1fe40a1db1d8c95a1a51d91a570d285135->enter($__internal_f27b7b65cc7a03291a7339f0dd5c9b1fe40a1db1d8c95a1a51d91a570d285135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/floor.js"));

        // line 1
        echo "var createRound = require('./_createRound');

/**
 * Computes `number` rounded down to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round down.
 * @param {number} [precision=0] The precision to round down to.
 * @returns {number} Returns the rounded down number.
 * @example
 *
 * _.floor(4.006);
 * // => 4
 *
 * _.floor(0.046, 2);
 * // => 0.04
 *
 * _.floor(4060, -2);
 * // => 4000
 */
var floor = createRound('floor');

module.exports = floor;
";
        
        $__internal_f27b7b65cc7a03291a7339f0dd5c9b1fe40a1db1d8c95a1a51d91a570d285135->leave($__internal_f27b7b65cc7a03291a7339f0dd5c9b1fe40a1db1d8c95a1a51d91a570d285135_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/floor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createRound = require('./_createRound');

/**
 * Computes `number` rounded down to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round down.
 * @param {number} [precision=0] The precision to round down to.
 * @returns {number} Returns the rounded down number.
 * @example
 *
 * _.floor(4.006);
 * // => 4
 *
 * _.floor(0.046, 2);
 * // => 0.04
 *
 * _.floor(4060, -2);
 * // => 4000
 */
var floor = createRound('floor');

module.exports = floor;
", "node_modules/lodash/floor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/floor.js");
    }
}
