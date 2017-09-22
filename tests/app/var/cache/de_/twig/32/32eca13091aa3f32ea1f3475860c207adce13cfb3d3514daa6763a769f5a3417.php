<?php

/* node_modules/lodash/_baseEvery.js */
class __TwigTemplate_1a9b1a61014be95c279f2382c3994936a8c43c87c3bdfbd74508cf05943ebea1 extends Twig_Template
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
        $__internal_f8d2062b29bd8d53ff1c39ab225a274c5621281c4396514ba6d9010864752006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8d2062b29bd8d53ff1c39ab225a274c5621281c4396514ba6d9010864752006->enter($__internal_f8d2062b29bd8d53ff1c39ab225a274c5621281c4396514ba6d9010864752006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseEvery.js"));

        // line 1
        echo "var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.every` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if all elements pass the predicate check,
 *  else `false`
 */
function baseEvery(collection, predicate) {
  var result = true;
  baseEach(collection, function(value, index, collection) {
    result = !!predicate(value, index, collection);
    return result;
  });
  return result;
}

module.exports = baseEvery;
";
        
        $__internal_f8d2062b29bd8d53ff1c39ab225a274c5621281c4396514ba6d9010864752006->leave($__internal_f8d2062b29bd8d53ff1c39ab225a274c5621281c4396514ba6d9010864752006_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseEvery.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.every` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if all elements pass the predicate check,
 *  else `false`
 */
function baseEvery(collection, predicate) {
  var result = true;
  baseEach(collection, function(value, index, collection) {
    result = !!predicate(value, index, collection);
    return result;
  });
  return result;
}

module.exports = baseEvery;
", "node_modules/lodash/_baseEvery.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseEvery.js");
    }
}
