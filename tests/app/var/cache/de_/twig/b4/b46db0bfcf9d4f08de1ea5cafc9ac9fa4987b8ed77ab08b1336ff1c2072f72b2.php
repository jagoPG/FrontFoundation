<?php

/* node_modules/lodash/_baseMap.js */
class __TwigTemplate_a60cbe05d7954213194a58d38c4a3aa0fe25f07d213233351584dee98d70a819 extends Twig_Template
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
        $__internal_2b9983537cd993cc5c20f08904d38dd51aae748631418ddefaa089f6c939d763 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9983537cd993cc5c20f08904d38dd51aae748631418ddefaa089f6c939d763->enter($__internal_2b9983537cd993cc5c20f08904d38dd51aae748631418ddefaa089f6c939d763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseMap.js"));

        // line 1
        echo "var baseEach = require('./_baseEach'),
    isArrayLike = require('./isArrayLike');

/**
 * The base implementation of `_.map` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the new mapped array.
 */
function baseMap(collection, iteratee) {
  var index = -1,
      result = isArrayLike(collection) ? Array(collection.length) : [];

  baseEach(collection, function(value, key, collection) {
    result[++index] = iteratee(value, key, collection);
  });
  return result;
}

module.exports = baseMap;
";
        
        $__internal_2b9983537cd993cc5c20f08904d38dd51aae748631418ddefaa089f6c939d763->leave($__internal_2b9983537cd993cc5c20f08904d38dd51aae748631418ddefaa089f6c939d763_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseEach = require('./_baseEach'),
    isArrayLike = require('./isArrayLike');

/**
 * The base implementation of `_.map` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} iteratee The function invoked per iteration.
 * @returns {Array} Returns the new mapped array.
 */
function baseMap(collection, iteratee) {
  var index = -1,
      result = isArrayLike(collection) ? Array(collection.length) : [];

  baseEach(collection, function(value, key, collection) {
    result[++index] = iteratee(value, key, collection);
  });
  return result;
}

module.exports = baseMap;
", "node_modules/lodash/_baseMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseMap.js");
    }
}
