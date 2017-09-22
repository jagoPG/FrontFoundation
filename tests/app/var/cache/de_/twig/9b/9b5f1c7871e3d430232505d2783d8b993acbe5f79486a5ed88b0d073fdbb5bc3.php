<?php

/* node_modules/lodash/_createFind.js */
class __TwigTemplate_e1eed246c76811edec37bc5a785fd5a8dac5d679fcbb1d55f04feccbe9e07b49 extends Twig_Template
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
        $__internal_6de42ca2ac14612c19c93b5316e631952e1645540f75f3d9e951d374858f8b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6de42ca2ac14612c19c93b5316e631952e1645540f75f3d9e951d374858f8b1b->enter($__internal_6de42ca2ac14612c19c93b5316e631952e1645540f75f3d9e951d374858f8b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createFind.js"));

        // line 1
        echo "var baseIteratee = require('./_baseIteratee'),
    isArrayLike = require('./isArrayLike'),
    keys = require('./keys');

/**
 * Creates a `_.find` or `_.findLast` function.
 *
 * @private
 * @param {Function} findIndexFunc The function to find the collection index.
 * @returns {Function} Returns the new find function.
 */
function createFind(findIndexFunc) {
  return function(collection, predicate, fromIndex) {
    var iterable = Object(collection);
    if (!isArrayLike(collection)) {
      var iteratee = baseIteratee(predicate, 3);
      collection = keys(collection);
      predicate = function(key) { return iteratee(iterable[key], key, iterable); };
    }
    var index = findIndexFunc(collection, predicate, fromIndex);
    return index > -1 ? iterable[iteratee ? collection[index] : index] : undefined;
  };
}

module.exports = createFind;
";
        
        $__internal_6de42ca2ac14612c19c93b5316e631952e1645540f75f3d9e951d374858f8b1b->leave($__internal_6de42ca2ac14612c19c93b5316e631952e1645540f75f3d9e951d374858f8b1b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createFind.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseIteratee = require('./_baseIteratee'),
    isArrayLike = require('./isArrayLike'),
    keys = require('./keys');

/**
 * Creates a `_.find` or `_.findLast` function.
 *
 * @private
 * @param {Function} findIndexFunc The function to find the collection index.
 * @returns {Function} Returns the new find function.
 */
function createFind(findIndexFunc) {
  return function(collection, predicate, fromIndex) {
    var iterable = Object(collection);
    if (!isArrayLike(collection)) {
      var iteratee = baseIteratee(predicate, 3);
      collection = keys(collection);
      predicate = function(key) { return iteratee(iterable[key], key, iterable); };
    }
    var index = findIndexFunc(collection, predicate, fromIndex);
    return index > -1 ? iterable[iteratee ? collection[index] : index] : undefined;
  };
}

module.exports = createFind;
", "node_modules/lodash/_createFind.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createFind.js");
    }
}
