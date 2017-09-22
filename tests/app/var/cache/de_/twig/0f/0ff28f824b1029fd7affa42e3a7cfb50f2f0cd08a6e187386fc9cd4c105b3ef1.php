<?php

/* node_modules/lodash/_baseAggregator.js */
class __TwigTemplate_15dda49a25b832c12b0617ef652a198adb777d59227dd83a039e692b5b4580ec extends Twig_Template
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
        $__internal_c7b711e3fa20513561659dafb6689b64d74061b1ae7208576493b0ebc18f25cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b711e3fa20513561659dafb6689b64d74061b1ae7208576493b0ebc18f25cd->enter($__internal_c7b711e3fa20513561659dafb6689b64d74061b1ae7208576493b0ebc18f25cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseAggregator.js"));

        // line 1
        echo "var baseEach = require('./_baseEach');

/**
 * Aggregates elements of `collection` on `accumulator` with keys transformed
 * by `iteratee` and values set by `setter`.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform keys.
 * @param {Object} accumulator The initial aggregated object.
 * @returns {Function} Returns `accumulator`.
 */
function baseAggregator(collection, setter, iteratee, accumulator) {
  baseEach(collection, function(value, key, collection) {
    setter(accumulator, value, iteratee(value), collection);
  });
  return accumulator;
}

module.exports = baseAggregator;
";
        
        $__internal_c7b711e3fa20513561659dafb6689b64d74061b1ae7208576493b0ebc18f25cd->leave($__internal_c7b711e3fa20513561659dafb6689b64d74061b1ae7208576493b0ebc18f25cd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseAggregator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseEach = require('./_baseEach');

/**
 * Aggregates elements of `collection` on `accumulator` with keys transformed
 * by `iteratee` and values set by `setter`.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform keys.
 * @param {Object} accumulator The initial aggregated object.
 * @returns {Function} Returns `accumulator`.
 */
function baseAggregator(collection, setter, iteratee, accumulator) {
  baseEach(collection, function(value, key, collection) {
    setter(accumulator, value, iteratee(value), collection);
  });
  return accumulator;
}

module.exports = baseAggregator;
", "node_modules/lodash/_baseAggregator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseAggregator.js");
    }
}
