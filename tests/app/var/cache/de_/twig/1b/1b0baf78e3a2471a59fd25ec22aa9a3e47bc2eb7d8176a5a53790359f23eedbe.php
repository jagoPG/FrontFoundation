<?php

/* node_modules/lodash/sample.js */
class __TwigTemplate_b5c94e493ad78aec605d14e9d2a44e0775907b6259626af67b24c672eaebf34b extends Twig_Template
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
        $__internal_c90771fee5d4f43f48f81cdb9623e6871d24bacc849b7d337024a948e7652630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c90771fee5d4f43f48f81cdb9623e6871d24bacc849b7d337024a948e7652630->enter($__internal_c90771fee5d4f43f48f81cdb9623e6871d24bacc849b7d337024a948e7652630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/sample.js"));

        // line 1
        echo "var arraySample = require('./_arraySample'),
    baseSample = require('./_baseSample'),
    isArray = require('./isArray');

/**
 * Gets a random element from `collection`.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to sample.
 * @returns {*} Returns the random element.
 * @example
 *
 * _.sample([1, 2, 3, 4]);
 * // => 2
 */
function sample(collection) {
  var func = isArray(collection) ? arraySample : baseSample;
  return func(collection);
}

module.exports = sample;
";
        
        $__internal_c90771fee5d4f43f48f81cdb9623e6871d24bacc849b7d337024a948e7652630->leave($__internal_c90771fee5d4f43f48f81cdb9623e6871d24bacc849b7d337024a948e7652630_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/sample.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arraySample = require('./_arraySample'),
    baseSample = require('./_baseSample'),
    isArray = require('./isArray');

/**
 * Gets a random element from `collection`.
 *
 * @static
 * @memberOf _
 * @since 2.0.0
 * @category Collection
 * @param {Array|Object} collection The collection to sample.
 * @returns {*} Returns the random element.
 * @example
 *
 * _.sample([1, 2, 3, 4]);
 * // => 2
 */
function sample(collection) {
  var func = isArray(collection) ? arraySample : baseSample;
  return func(collection);
}

module.exports = sample;
", "node_modules/lodash/sample.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/sample.js");
    }
}
