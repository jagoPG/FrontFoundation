<?php

/* node_modules/lodash/_arraySampleSize.js */
class __TwigTemplate_889aa949810621af08946e1ea477b4b83f1b5f650febc260f4732a477cdb1931 extends Twig_Template
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
        $__internal_1c4e8d7d85228a95d5b44aa346c771eb5d989b9e5f4368369626249692c0c578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4e8d7d85228a95d5b44aa346c771eb5d989b9e5f4368369626249692c0c578->enter($__internal_1c4e8d7d85228a95d5b44aa346c771eb5d989b9e5f4368369626249692c0c578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arraySampleSize.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    copyArray = require('./_copyArray'),
    shuffleSelf = require('./_shuffleSelf');

/**
 * A specialized version of `_.sampleSize` for arrays.
 *
 * @private
 * @param {Array} array The array to sample.
 * @param {number} n The number of elements to sample.
 * @returns {Array} Returns the random elements.
 */
function arraySampleSize(array, n) {
  return shuffleSelf(copyArray(array), baseClamp(n, 0, array.length));
}

module.exports = arraySampleSize;
";
        
        $__internal_1c4e8d7d85228a95d5b44aa346c771eb5d989b9e5f4368369626249692c0c578->leave($__internal_1c4e8d7d85228a95d5b44aa346c771eb5d989b9e5f4368369626249692c0c578_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arraySampleSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    copyArray = require('./_copyArray'),
    shuffleSelf = require('./_shuffleSelf');

/**
 * A specialized version of `_.sampleSize` for arrays.
 *
 * @private
 * @param {Array} array The array to sample.
 * @param {number} n The number of elements to sample.
 * @returns {Array} Returns the random elements.
 */
function arraySampleSize(array, n) {
  return shuffleSelf(copyArray(array), baseClamp(n, 0, array.length));
}

module.exports = arraySampleSize;
", "node_modules/lodash/_arraySampleSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arraySampleSize.js");
    }
}
