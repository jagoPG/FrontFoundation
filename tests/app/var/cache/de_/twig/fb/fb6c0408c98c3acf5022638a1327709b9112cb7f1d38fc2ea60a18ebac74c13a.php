<?php

/* node_modules/lodash/_baseAssignIn.js */
class __TwigTemplate_5632286ce85c453744d5549ab98660ad0d5bd0696c7bf05b1562e1fa9660376a extends Twig_Template
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
        $__internal_c416adbf24ab1efaf87782a8e15b24e88d592214b7e91500b7a90d522766ebdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c416adbf24ab1efaf87782a8e15b24e88d592214b7e91500b7a90d522766ebdb->enter($__internal_c416adbf24ab1efaf87782a8e15b24e88d592214b7e91500b7a90d522766ebdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseAssignIn.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    keysIn = require('./keysIn');

/**
 * The base implementation of `_.assignIn` without support for multiple sources
 * or `customizer` functions.
 *
 * @private
 * @param {Object} object The destination object.
 * @param {Object} source The source object.
 * @returns {Object} Returns `object`.
 */
function baseAssignIn(object, source) {
  return object && copyObject(source, keysIn(source), object);
}

module.exports = baseAssignIn;
";
        
        $__internal_c416adbf24ab1efaf87782a8e15b24e88d592214b7e91500b7a90d522766ebdb->leave($__internal_c416adbf24ab1efaf87782a8e15b24e88d592214b7e91500b7a90d522766ebdb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseAssignIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    keysIn = require('./keysIn');

/**
 * The base implementation of `_.assignIn` without support for multiple sources
 * or `customizer` functions.
 *
 * @private
 * @param {Object} object The destination object.
 * @param {Object} source The source object.
 * @returns {Object} Returns `object`.
 */
function baseAssignIn(object, source) {
  return object && copyObject(source, keysIn(source), object);
}

module.exports = baseAssignIn;
", "node_modules/lodash/_baseAssignIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseAssignIn.js");
    }
}
