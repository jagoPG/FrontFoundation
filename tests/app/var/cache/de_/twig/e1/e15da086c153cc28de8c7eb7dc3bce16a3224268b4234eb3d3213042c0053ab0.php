<?php

/* node_modules/lodash/_arrayAggregator.js */
class __TwigTemplate_f745ea2f332755db94acf17b4e28464a58adceadfdb357ad8910863f792141cb extends Twig_Template
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
        $__internal_1f275baf35192d0554883b63d5ade937f638328311763feda92e3b07f7d4cb95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f275baf35192d0554883b63d5ade937f638328311763feda92e3b07f7d4cb95->enter($__internal_1f275baf35192d0554883b63d5ade937f638328311763feda92e3b07f7d4cb95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_arrayAggregator.js"));

        // line 1
        echo "/**
 * A specialized version of `baseAggregator` for arrays.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform keys.
 * @param {Object} accumulator The initial aggregated object.
 * @returns {Function} Returns `accumulator`.
 */
function arrayAggregator(array, setter, iteratee, accumulator) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    var value = array[index];
    setter(accumulator, value, iteratee(value), array);
  }
  return accumulator;
}

module.exports = arrayAggregator;
";
        
        $__internal_1f275baf35192d0554883b63d5ade937f638328311763feda92e3b07f7d4cb95->leave($__internal_1f275baf35192d0554883b63d5ade937f638328311763feda92e3b07f7d4cb95_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_arrayAggregator.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/**
 * A specialized version of `baseAggregator` for arrays.
 *
 * @private
 * @param {Array} [array] The array to iterate over.
 * @param {Function} setter The function to set `accumulator` values.
 * @param {Function} iteratee The iteratee to transform keys.
 * @param {Object} accumulator The initial aggregated object.
 * @returns {Function} Returns `accumulator`.
 */
function arrayAggregator(array, setter, iteratee, accumulator) {
  var index = -1,
      length = array == null ? 0 : array.length;

  while (++index < length) {
    var value = array[index];
    setter(accumulator, value, iteratee(value), array);
  }
  return accumulator;
}

module.exports = arrayAggregator;
", "node_modules/lodash/_arrayAggregator.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_arrayAggregator.js");
    }
}
