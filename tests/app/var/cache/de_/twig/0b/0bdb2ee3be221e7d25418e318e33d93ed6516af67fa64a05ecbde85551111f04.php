<?php

/* node_modules/lodash/_baseFindKey.js */
class __TwigTemplate_a91d06fcb8a28ff93ffb929a6896431ae8943c410edabd0f5ac3900c010329db extends Twig_Template
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
        $__internal_6f77fe2c962923d66ee13447019af576daf0d7fe7ab8d2bc64bbf1ac16976e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f77fe2c962923d66ee13447019af576daf0d7fe7ab8d2bc64bbf1ac16976e15->enter($__internal_6f77fe2c962923d66ee13447019af576daf0d7fe7ab8d2bc64bbf1ac16976e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFindKey.js"));

        // line 1
        echo "/**
 * The base implementation of methods like `_.findKey` and `_.findLastKey`,
 * without support for iteratee shorthands, which iterates over `collection`
 * using `eachFunc`.
 *
 * @private
 * @param {Array|Object} collection The collection to inspect.
 * @param {Function} predicate The function invoked per iteration.
 * @param {Function} eachFunc The function to iterate over `collection`.
 * @returns {*} Returns the found element or its key, else `undefined`.
 */
function baseFindKey(collection, predicate, eachFunc) {
  var result;
  eachFunc(collection, function(value, key, collection) {
    if (predicate(value, key, collection)) {
      result = key;
      return false;
    }
  });
  return result;
}

module.exports = baseFindKey;
";
        
        $__internal_6f77fe2c962923d66ee13447019af576daf0d7fe7ab8d2bc64bbf1ac16976e15->leave($__internal_6f77fe2c962923d66ee13447019af576daf0d7fe7ab8d2bc64bbf1ac16976e15_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFindKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * The base implementation of methods like `_.findKey` and `_.findLastKey`,
 * without support for iteratee shorthands, which iterates over `collection`
 * using `eachFunc`.
 *
 * @private
 * @param {Array|Object} collection The collection to inspect.
 * @param {Function} predicate The function invoked per iteration.
 * @param {Function} eachFunc The function to iterate over `collection`.
 * @returns {*} Returns the found element or its key, else `undefined`.
 */
function baseFindKey(collection, predicate, eachFunc) {
  var result;
  eachFunc(collection, function(value, key, collection) {
    if (predicate(value, key, collection)) {
      result = key;
      return false;
    }
  });
  return result;
}

module.exports = baseFindKey;
", "node_modules/lodash/_baseFindKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFindKey.js");
    }
}
