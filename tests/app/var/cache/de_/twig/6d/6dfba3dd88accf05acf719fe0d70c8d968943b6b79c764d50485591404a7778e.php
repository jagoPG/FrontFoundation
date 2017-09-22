<?php

/* node_modules/lodash/round.js */
class __TwigTemplate_9198163452fcb5e3e8c2a7a25b14773f76f1897e03b1ef2417b8b420bc58c8f3 extends Twig_Template
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
        $__internal_8ab065c346a87958d3653fc732d01794a1ef345c3c76a2fc138972c825cb44c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab065c346a87958d3653fc732d01794a1ef345c3c76a2fc138972c825cb44c9->enter($__internal_8ab065c346a87958d3653fc732d01794a1ef345c3c76a2fc138972c825cb44c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/round.js"));

        // line 1
        echo "var createRound = require('./_createRound');

/**
 * Computes `number` rounded to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round.
 * @param {number} [precision=0] The precision to round to.
 * @returns {number} Returns the rounded number.
 * @example
 *
 * _.round(4.006);
 * // => 4
 *
 * _.round(4.006, 2);
 * // => 4.01
 *
 * _.round(4060, -2);
 * // => 4100
 */
var round = createRound('round');

module.exports = round;
";
        
        $__internal_8ab065c346a87958d3653fc732d01794a1ef345c3c76a2fc138972c825cb44c9->leave($__internal_8ab065c346a87958d3653fc732d01794a1ef345c3c76a2fc138972c825cb44c9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/round.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createRound = require('./_createRound');

/**
 * Computes `number` rounded to `precision`.
 *
 * @static
 * @memberOf _
 * @since 3.10.0
 * @category Math
 * @param {number} number The number to round.
 * @param {number} [precision=0] The precision to round to.
 * @returns {number} Returns the rounded number.
 * @example
 *
 * _.round(4.006);
 * // => 4
 *
 * _.round(4.006, 2);
 * // => 4.01
 *
 * _.round(4060, -2);
 * // => 4100
 */
var round = createRound('round');

module.exports = round;
", "node_modules/lodash/round.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/round.js");
    }
}
