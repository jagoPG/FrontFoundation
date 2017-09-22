<?php

/* node_modules/lodash/min.js */
class __TwigTemplate_6393f287cc28c33098c6a4abc015d245be5e127e7a49dc4f145f0c1f0b5aff89 extends Twig_Template
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
        $__internal_24808e76b6082c896f2633b8a1c54d35bf4b8df2218c8d6b90d6393d5dbb56dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24808e76b6082c896f2633b8a1c54d35bf4b8df2218c8d6b90d6393d5dbb56dc->enter($__internal_24808e76b6082c896f2633b8a1c54d35bf4b8df2218c8d6b90d6393d5dbb56dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/min.js"));

        // line 1
        echo "var baseExtremum = require('./_baseExtremum'),
    baseLt = require('./_baseLt'),
    identity = require('./identity');

/**
 * Computes the minimum value of `array`. If `array` is empty or falsey,
 * `undefined` is returned.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {*} Returns the minimum value.
 * @example
 *
 * _.min([4, 2, 8, 6]);
 * // => 2
 *
 * _.min([]);
 * // => undefined
 */
function min(array) {
  return (array && array.length)
    ? baseExtremum(array, identity, baseLt)
    : undefined;
}

module.exports = min;
";
        
        $__internal_24808e76b6082c896f2633b8a1c54d35bf4b8df2218c8d6b90d6393d5dbb56dc->leave($__internal_24808e76b6082c896f2633b8a1c54d35bf4b8df2218c8d6b90d6393d5dbb56dc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/min.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseExtremum = require('./_baseExtremum'),
    baseLt = require('./_baseLt'),
    identity = require('./identity');

/**
 * Computes the minimum value of `array`. If `array` is empty or falsey,
 * `undefined` is returned.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {*} Returns the minimum value.
 * @example
 *
 * _.min([4, 2, 8, 6]);
 * // => 2
 *
 * _.min([]);
 * // => undefined
 */
function min(array) {
  return (array && array.length)
    ? baseExtremum(array, identity, baseLt)
    : undefined;
}

module.exports = min;
", "node_modules/lodash/min.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/min.js");
    }
}
