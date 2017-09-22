<?php

/* node_modules/lodash/_baseForOwn.js */
class __TwigTemplate_824296669cbc11b3b6d1bb2eff697fe66f0d4139b0991de7ec9a5710674a1439 extends Twig_Template
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
        $__internal_77fc29e6500fb3fb0adb19a3caaba51a2c1416a4919588c71adba4c03d2fb0ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fc29e6500fb3fb0adb19a3caaba51a2c1416a4919588c71adba4c03d2fb0ad->enter($__internal_77fc29e6500fb3fb0adb19a3caaba51a2c1416a4919588c71adba4c03d2fb0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseForOwn.js"));

        // line 1
        echo "var baseFor = require('./_baseFor'),
    keys = require('./keys');

/**
 * The base implementation of `_.forOwn` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Object} Returns `object`.
 */
function baseForOwn(object, iteratee) {
  return object && baseFor(object, iteratee, keys);
}

module.exports = baseForOwn;
";
        
        $__internal_77fc29e6500fb3fb0adb19a3caaba51a2c1416a4919588c71adba4c03d2fb0ad->leave($__internal_77fc29e6500fb3fb0adb19a3caaba51a2c1416a4919588c71adba4c03d2fb0ad_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseForOwn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseFor = require('./_baseFor'),
    keys = require('./keys');

/**
 * The base implementation of `_.forOwn` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The object to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Object} Returns `object`.
 */
function baseForOwn(object, iteratee) {
  return object && baseFor(object, iteratee, keys);
}

module.exports = baseForOwn;
", "node_modules/lodash/_baseForOwn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseForOwn.js");
    }
}
