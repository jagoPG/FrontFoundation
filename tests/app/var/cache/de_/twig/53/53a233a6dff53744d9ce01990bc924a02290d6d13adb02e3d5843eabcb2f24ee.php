<?php

/* node_modules/lodash/_baseSampleSize.js */
class __TwigTemplate_05645272a4fbae33512621f0d941644ce98e4239a950b64b353a37bc425586dd extends Twig_Template
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
        $__internal_26d49b7bddb9c164eb3a448de70be76d8e3e26b1e35b219003857b231ae71473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d49b7bddb9c164eb3a448de70be76d8e3e26b1e35b219003857b231ae71473->enter($__internal_26d49b7bddb9c164eb3a448de70be76d8e3e26b1e35b219003857b231ae71473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSampleSize.js"));

        // line 1
        echo "var baseClamp = require('./_baseClamp'),
    shuffleSelf = require('./_shuffleSelf'),
    values = require('./values');

/**
 * The base implementation of `_.sampleSize` without param guards.
 *
 * @private
 * @param {Array|Object} collection The collection to sample.
 * @param {number} n The number of elements to sample.
 * @returns {Array} Returns the random elements.
 */
function baseSampleSize(collection, n) {
  var array = values(collection);
  return shuffleSelf(array, baseClamp(n, 0, array.length));
}

module.exports = baseSampleSize;
";
        
        $__internal_26d49b7bddb9c164eb3a448de70be76d8e3e26b1e35b219003857b231ae71473->leave($__internal_26d49b7bddb9c164eb3a448de70be76d8e3e26b1e35b219003857b231ae71473_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSampleSize.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseClamp = require('./_baseClamp'),
    shuffleSelf = require('./_shuffleSelf'),
    values = require('./values');

/**
 * The base implementation of `_.sampleSize` without param guards.
 *
 * @private
 * @param {Array|Object} collection The collection to sample.
 * @param {number} n The number of elements to sample.
 * @returns {Array} Returns the random elements.
 */
function baseSampleSize(collection, n) {
  var array = values(collection);
  return shuffleSelf(array, baseClamp(n, 0, array.length));
}

module.exports = baseSampleSize;
", "node_modules/lodash/_baseSampleSize.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSampleSize.js");
    }
}
