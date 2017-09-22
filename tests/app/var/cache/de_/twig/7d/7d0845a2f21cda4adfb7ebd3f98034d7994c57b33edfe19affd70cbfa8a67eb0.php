<?php

/* node_modules/lodash/_baseFor.js */
class __TwigTemplate_ff8062cf0a0a82e65a4014b7cb753741bf435c0e014fbb34f22441166937e562 extends Twig_Template
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
        $__internal_fcfeab5a1aa10b126cd273e3c8194a43b6d889b24e0195b2d05731b2c4ceb8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcfeab5a1aa10b126cd273e3c8194a43b6d889b24e0195b2d05731b2c4ceb8aa->enter($__internal_fcfeab5a1aa10b126cd273e3c8194a43b6d889b24e0195b2d05731b2c4ceb8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFor.js"));

        // line 1
        echo "var createBaseFor = require('./_createBaseFor');

/**
 * The base implementation of `baseForOwn` which iterates over `object`
 * properties returned by `keysFunc` and invokes `iteratee` for each property.
 * Iteratee functions may exit iteration early by explicitly returning `false`.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @returns {Object} Returns `object`.
 */
var baseFor = createBaseFor();

module.exports = baseFor;
";
        
        $__internal_fcfeab5a1aa10b126cd273e3c8194a43b6d889b24e0195b2d05731b2c4ceb8aa->leave($__internal_fcfeab5a1aa10b126cd273e3c8194a43b6d889b24e0195b2d05731b2c4ceb8aa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFor.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createBaseFor = require('./_createBaseFor');

/**
 * The base implementation of `baseForOwn` which iterates over `object`
 * properties returned by `keysFunc` and invokes `iteratee` for each property.
 * Iteratee functions may exit iteration early by explicitly returning `false`.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @param {Function} keysFunc The function to get the keys of `object`.
 * @returns {Object} Returns `object`.
 */
var baseFor = createBaseFor();

module.exports = baseFor;
", "node_modules/lodash/_baseFor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFor.js");
    }
}
