<?php

/* node_modules/lodash/_baseSample.js */
class __TwigTemplate_b86cd2e884b2f53792d7435c2113eadaf35a1977391df4ff059702556d511f52 extends Twig_Template
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
        $__internal_338bef11077114dccc4a4f6a5c174377f175dd602499ad3d074e4dc5024f1d9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338bef11077114dccc4a4f6a5c174377f175dd602499ad3d074e4dc5024f1d9a->enter($__internal_338bef11077114dccc4a4f6a5c174377f175dd602499ad3d074e4dc5024f1d9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSample.js"));

        // line 1
        echo "var arraySample = require('./_arraySample'),
    values = require('./values');

/**
 * The base implementation of `_.sample`.
 *
 * @private
 * @param {Array|Object} collection The collection to sample.
 * @returns {*} Returns the random element.
 */
function baseSample(collection) {
  return arraySample(values(collection));
}

module.exports = baseSample;
";
        
        $__internal_338bef11077114dccc4a4f6a5c174377f175dd602499ad3d074e4dc5024f1d9a->leave($__internal_338bef11077114dccc4a4f6a5c174377f175dd602499ad3d074e4dc5024f1d9a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSample.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arraySample = require('./_arraySample'),
    values = require('./values');

/**
 * The base implementation of `_.sample`.
 *
 * @private
 * @param {Array|Object} collection The collection to sample.
 * @returns {*} Returns the random element.
 */
function baseSample(collection) {
  return arraySample(values(collection));
}

module.exports = baseSample;
", "node_modules/lodash/_baseSample.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSample.js");
    }
}
