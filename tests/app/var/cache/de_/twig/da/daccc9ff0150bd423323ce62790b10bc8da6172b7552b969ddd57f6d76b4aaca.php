<?php

/* node_modules/lodash/clamp.js */
class __TwigTemplate_455b4e56c9f468fa6efcfe0b61a1ad30ca4891f7e62876909c53762b1f7ed3cc extends Twig_Template
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
        $__internal_a2f5c0e1f0ad087af8aff3c9316dbb6d732665857f795b945eef85eb7e0c3032 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f5c0e1f0ad087af8aff3c9316dbb6d732665857f795b945eef85eb7e0c3032->enter($__internal_a2f5c0e1f0ad087af8aff3c9316dbb6d732665857f795b945eef85eb7e0c3032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/clamp.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    toNumber = require('./toNumber');

/**
 * Clamps `number` within the inclusive `lower` and `upper` bounds.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Number
 * @param {number} number The number to clamp.
 * @param {number} [lower] The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the clamped number.
 * @example
 *
 * _.clamp(-10, -5, 5);
 * // => -5
 *
 * _.clamp(10, -5, 5);
 * // => 5
 */
function clamp(number, lower, upper) {
  if (upper === undefined) {
    upper = lower;
    lower = undefined;
  }
  if (upper !== undefined) {
    upper = toNumber(upper);
    upper = upper === upper ? upper : 0;
  }
  if (lower !== undefined) {
    lower = toNumber(lower);
    lower = lower === lower ? lower : 0;
  }
  return baseClamp(toNumber(number), lower, upper);
}

module.exports = clamp;
";
        
        $__internal_a2f5c0e1f0ad087af8aff3c9316dbb6d732665857f795b945eef85eb7e0c3032->leave($__internal_a2f5c0e1f0ad087af8aff3c9316dbb6d732665857f795b945eef85eb7e0c3032_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/clamp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    toNumber = require('./toNumber');

/**
 * Clamps `number` within the inclusive `lower` and `upper` bounds.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Number
 * @param {number} number The number to clamp.
 * @param {number} [lower] The lower bound.
 * @param {number} upper The upper bound.
 * @returns {number} Returns the clamped number.
 * @example
 *
 * _.clamp(-10, -5, 5);
 * // => -5
 *
 * _.clamp(10, -5, 5);
 * // => 5
 */
function clamp(number, lower, upper) {
  if (upper === undefined) {
    upper = lower;
    lower = undefined;
  }
  if (upper !== undefined) {
    upper = toNumber(upper);
    upper = upper === upper ? upper : 0;
  }
  if (lower !== undefined) {
    lower = toNumber(lower);
    lower = lower === lower ? lower : 0;
  }
  return baseClamp(toNumber(number), lower, upper);
}

module.exports = clamp;
", "node_modules/lodash/clamp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/clamp.js");
    }
}
