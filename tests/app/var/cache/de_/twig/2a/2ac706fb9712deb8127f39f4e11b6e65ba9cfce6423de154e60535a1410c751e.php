<?php

/* node_modules/lodash/_baseEach.js */
class __TwigTemplate_9ae326a7cf13ec8ae98121a94cc246e8d4166970695c24d4b1549c2126cc2afa extends Twig_Template
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
        $__internal_ee96727f8587a84faf680bc9b38f670e44744dfcf087ecc02f64749aeef8ce83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee96727f8587a84faf680bc9b38f670e44744dfcf087ecc02f64749aeef8ce83->enter($__internal_ee96727f8587a84faf680bc9b38f670e44744dfcf087ecc02f64749aeef8ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseEach.js"));

        // line 1
        echo "var baseForOwn = require('./_baseForOwn'),
    createBaseEach = require('./_createBaseEach');

/**
 * The base implementation of `_.forEach` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 */
var baseEach = createBaseEach(baseForOwn);

module.exports = baseEach;
";
        
        $__internal_ee96727f8587a84faf680bc9b38f670e44744dfcf087ecc02f64749aeef8ce83->leave($__internal_ee96727f8587a84faf680bc9b38f670e44744dfcf087ecc02f64749aeef8ce83_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseEach.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseForOwn = require('./_baseForOwn'),
    createBaseEach = require('./_createBaseEach');

/**
 * The base implementation of `_.forEach` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array|Object} Returns `collection`.
 */
var baseEach = createBaseEach(baseForOwn);

module.exports = baseEach;
", "node_modules/lodash/_baseEach.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseEach.js");
    }
}
