<?php

/* node_modules/lodash/_baseFilter.js */
class __TwigTemplate_6d4178189f7a233a7d15279fada83af4052962d7cc49c79d9e8b70de91ecccc6 extends Twig_Template
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
        $__internal_7cccd25d7498b2cb39fdafc8f9718a8afd01096090d8bf1ed189cd87ef37b26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cccd25d7498b2cb39fdafc8f9718a8afd01096090d8bf1ed189cd87ef37b26a->enter($__internal_7cccd25d7498b2cb39fdafc8f9718a8afd01096090d8bf1ed189cd87ef37b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFilter.js"));

        // line 1
        echo "var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.filter` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {Array} Returns the new filtered array.
 */
function baseFilter(collection, predicate) {
  var result = [];
  baseEach(collection, function(value, index, collection) {
    if (predicate(value, index, collection)) {
      result.push(value);
    }
  });
  return result;
}

module.exports = baseFilter;
";
        
        $__internal_7cccd25d7498b2cb39fdafc8f9718a8afd01096090d8bf1ed189cd87ef37b26a->leave($__internal_7cccd25d7498b2cb39fdafc8f9718a8afd01096090d8bf1ed189cd87ef37b26a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFilter.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.filter` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {Array} Returns the new filtered array.
 */
function baseFilter(collection, predicate) {
  var result = [];
  baseEach(collection, function(value, index, collection) {
    if (predicate(value, index, collection)) {
      result.push(value);
    }
  });
  return result;
}

module.exports = baseFilter;
", "node_modules/lodash/_baseFilter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFilter.js");
    }
}
