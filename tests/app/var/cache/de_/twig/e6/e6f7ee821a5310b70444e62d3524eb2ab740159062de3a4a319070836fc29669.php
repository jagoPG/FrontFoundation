<?php

/* node_modules/lodash/max.js */
class __TwigTemplate_6febb86060193d94d632c732fb44af75a3bfaea8f30d9c8c306b91538a15ba8c extends Twig_Template
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
        $__internal_d6c1572493acc8784666986538e2dd5c392d516762fe086076fb7e78687d0644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c1572493acc8784666986538e2dd5c392d516762fe086076fb7e78687d0644->enter($__internal_d6c1572493acc8784666986538e2dd5c392d516762fe086076fb7e78687d0644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/max.js"));

        // line 1
        echo "var baseExtremum = require('./_baseExtremum'),
    baseGt = require('./_baseGt'),
    identity = require('./identity');

/**
 * Computes the maximum value of `array`. If `array` is empty or falsey,
 * `undefined` is returned.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {*} Returns the maximum value.
 * @example
 *
 * _.max([4, 2, 8, 6]);
 * // => 8
 *
 * _.max([]);
 * // => undefined
 */
function max(array) {
  return (array && array.length)
    ? baseExtremum(array, identity, baseGt)
    : undefined;
}

module.exports = max;
";
        
        $__internal_d6c1572493acc8784666986538e2dd5c392d516762fe086076fb7e78687d0644->leave($__internal_d6c1572493acc8784666986538e2dd5c392d516762fe086076fb7e78687d0644_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/max.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseExtremum = require('./_baseExtremum'),
    baseGt = require('./_baseGt'),
    identity = require('./identity');

/**
 * Computes the maximum value of `array`. If `array` is empty or falsey,
 * `undefined` is returned.
 *
 * @static
 * @since 0.1.0
 * @memberOf _
 * @category Math
 * @param {Array} array The array to iterate over.
 * @returns {*} Returns the maximum value.
 * @example
 *
 * _.max([4, 2, 8, 6]);
 * // => 8
 *
 * _.max([]);
 * // => undefined
 */
function max(array) {
  return (array && array.length)
    ? baseExtremum(array, identity, baseGt)
    : undefined;
}

module.exports = max;
", "node_modules/lodash/max.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/max.js");
    }
}
