<?php

/* node_modules/lodash/_basePickBy.js */
class __TwigTemplate_4d003132253e4cc045d7a282857e05b16ea6da922eabca39697464aa7b963793 extends Twig_Template
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
        $__internal_75c9c748bd9bc18662d2fbbdae5602dd4a1d94c8b6ff39e503359df8c4dd5717 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c9c748bd9bc18662d2fbbdae5602dd4a1d94c8b6ff39e503359df8c4dd5717->enter($__internal_75c9c748bd9bc18662d2fbbdae5602dd4a1d94c8b6ff39e503359df8c4dd5717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_basePickBy.js"));

        // line 1
        echo "var baseGet = require('./_baseGet'),
    baseSet = require('./_baseSet'),
    castPath = require('./_castPath');

/**
 * The base implementation of  `_.pickBy` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The source object.
 * @param {string[]} paths The property paths to pick.
 * @param {Function} predicate The function invoked per property.
 * @returns {Object} Returns the new object.
 */
function basePickBy(object, paths, predicate) {
  var index = -1,
      length = paths.length,
      result = {};

  while (++index < length) {
    var path = paths[index],
        value = baseGet(object, path);

    if (predicate(value, path)) {
      baseSet(result, castPath(path, object), value);
    }
  }
  return result;
}

module.exports = basePickBy;
";
        
        $__internal_75c9c748bd9bc18662d2fbbdae5602dd4a1d94c8b6ff39e503359df8c4dd5717->leave($__internal_75c9c748bd9bc18662d2fbbdae5602dd4a1d94c8b6ff39e503359df8c4dd5717_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_basePickBy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseGet = require('./_baseGet'),
    baseSet = require('./_baseSet'),
    castPath = require('./_castPath');

/**
 * The base implementation of  `_.pickBy` without support for iteratee shorthands.
 *
 * @private
 * @param {Object} object The source object.
 * @param {string[]} paths The property paths to pick.
 * @param {Function} predicate The function invoked per property.
 * @returns {Object} Returns the new object.
 */
function basePickBy(object, paths, predicate) {
  var index = -1,
      length = paths.length,
      result = {};

  while (++index < length) {
    var path = paths[index],
        value = baseGet(object, path);

    if (predicate(value, path)) {
      baseSet(result, castPath(path, object), value);
    }
  }
  return result;
}

module.exports = basePickBy;
", "node_modules/lodash/_basePickBy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_basePickBy.js");
    }
}
