<?php

/* node_modules/lodash/_baseSortedUniq.js */
class __TwigTemplate_cc5be73ef35fb6fd831556c79b5d6adca892fb393f3839a1835dcf10da7fd3f9 extends Twig_Template
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
        $__internal_d1f96755f2731f1781417615cbc9a0a6fed1f1ce117c40a1649a4fc8708c131f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1f96755f2731f1781417615cbc9a0a6fed1f1ce117c40a1649a4fc8708c131f->enter($__internal_d1f96755f2731f1781417615cbc9a0a6fed1f1ce117c40a1649a4fc8708c131f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSortedUniq.js"));

        // line 1
        echo "var eq = require('./eq');

/**
 * The base implementation of `_.sortedUniq` and `_.sortedUniqBy` without
 * support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {Function} [iteratee] The iteratee invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 */
function baseSortedUniq(array, iteratee) {
  var index = -1,
      length = array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index],
        computed = iteratee ? iteratee(value) : value;

    if (!index || !eq(computed, seen)) {
      var seen = computed;
      result[resIndex++] = value === 0 ? 0 : value;
    }
  }
  return result;
}

module.exports = baseSortedUniq;
";
        
        $__internal_d1f96755f2731f1781417615cbc9a0a6fed1f1ce117c40a1649a4fc8708c131f->leave($__internal_d1f96755f2731f1781417615cbc9a0a6fed1f1ce117c40a1649a4fc8708c131f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSortedUniq.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var eq = require('./eq');

/**
 * The base implementation of `_.sortedUniq` and `_.sortedUniqBy` without
 * support for iteratee shorthands.
 *
 * @private
 * @param {Array} array The array to inspect.
 * @param {Function} [iteratee] The iteratee invoked per element.
 * @returns {Array} Returns the new duplicate free array.
 */
function baseSortedUniq(array, iteratee) {
  var index = -1,
      length = array.length,
      resIndex = 0,
      result = [];

  while (++index < length) {
    var value = array[index],
        computed = iteratee ? iteratee(value) : value;

    if (!index || !eq(computed, seen)) {
      var seen = computed;
      result[resIndex++] = value === 0 ? 0 : value;
    }
  }
  return result;
}

module.exports = baseSortedUniq;
", "node_modules/lodash/_baseSortedUniq.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSortedUniq.js");
    }
}
