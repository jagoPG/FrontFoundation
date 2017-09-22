<?php

/* node_modules/lodash/_arraySample.js */
class __TwigTemplate_fececaeb049314da52eb261524014a3167898995f308b4982fa2d0c663190954 extends Twig_Template
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
        $__internal_4930f7fc9c59100bcd0d9a551dfc9140b3117e27578ae63aa6a3cf67bab79279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4930f7fc9c59100bcd0d9a551dfc9140b3117e27578ae63aa6a3cf67bab79279->enter($__internal_4930f7fc9c59100bcd0d9a551dfc9140b3117e27578ae63aa6a3cf67bab79279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arraySample.js"));

        // line 1
        echo "var baseRandom = require('./_baseRandom');

/**
 * A specialized version of `_.sample` for arrays.
 *
 * @private
 * @param {Array} array The array to sample.
 * @returns {*} Returns the random element.
 */
function arraySample(array) {
  var length = array.length;
  return length ? array[baseRandom(0, length - 1)] : undefined;
}

module.exports = arraySample;
";
        
        $__internal_4930f7fc9c59100bcd0d9a551dfc9140b3117e27578ae63aa6a3cf67bab79279->leave($__internal_4930f7fc9c59100bcd0d9a551dfc9140b3117e27578ae63aa6a3cf67bab79279_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arraySample.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseRandom = require('./_baseRandom');

/**
 * A specialized version of `_.sample` for arrays.
 *
 * @private
 * @param {Array} array The array to sample.
 * @returns {*} Returns the random element.
 */
function arraySample(array) {
  var length = array.length;
  return length ? array[baseRandom(0, length - 1)] : undefined;
}

module.exports = arraySample;
", "node_modules/lodash/_arraySample.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arraySample.js");
    }
}
