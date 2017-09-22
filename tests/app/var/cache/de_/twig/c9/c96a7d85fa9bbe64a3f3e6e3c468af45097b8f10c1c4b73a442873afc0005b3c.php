<?php

/* node_modules/lodash/mean.js */
class __TwigTemplate_2d2bef972297e3d561f867202758527f8e5648a29e9896c7e42522080d3f6b01 extends Twig_Template
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
        $__internal_c2565cedd634311ccc87548a0bce2a5a8a409912a83cd47f8bcad1fc0805a369 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2565cedd634311ccc87548a0bce2a5a8a409912a83cd47f8bcad1fc0805a369->enter($__internal_c2565cedd634311ccc87548a0bce2a5a8a409912a83cd47f8bcad1fc0805a369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/mean.js"));

        // line 1
        echo "var baseMean = require('./_baseMean'),
    identity = require('./identity');

/**
 * Computes the mean of the values in `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {number} Returns the mean.
 * @example
 *
 * _.mean([4, 2, 8, 6]);
 * // => 5
 */
function mean(array) {
  return baseMean(array, identity);
}

module.exports = mean;
";
        
        $__internal_c2565cedd634311ccc87548a0bce2a5a8a409912a83cd47f8bcad1fc0805a369->leave($__internal_c2565cedd634311ccc87548a0bce2a5a8a409912a83cd47f8bcad1fc0805a369_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/mean.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseMean = require('./_baseMean'),
    identity = require('./identity');

/**
 * Computes the mean of the values in `array`.
 *
 * @static
 * @memberOf _
 * @since 4.0.0
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {number} Returns the mean.
 * @example
 *
 * _.mean([4, 2, 8, 6]);
 * // => 5
 */
function mean(array) {
  return baseMean(array, identity);
}

module.exports = mean;
", "node_modules/lodash/mean.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/mean.js");
    }
}
