<?php

/* node_modules/lodash/_getMapData.js */
class __TwigTemplate_d1de1ab1c5892714f0aeee6f83d4dfaf10c9896ce4bcad575e0013d6e4285836 extends Twig_Template
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
        $__internal_2040f8ba065fe59e046119751b2e2090ceb2a8ad3a13c9fac02a45736824b85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2040f8ba065fe59e046119751b2e2090ceb2a8ad3a13c9fac02a45736824b85a->enter($__internal_2040f8ba065fe59e046119751b2e2090ceb2a8ad3a13c9fac02a45736824b85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getMapData.js"));

        // line 1
        echo "var isKeyable = require('./_isKeyable');

/**
 * Gets the data for `map`.
 *
 * @private
 * @param {Object} map The map to query.
 * @param {string} key The reference key.
 * @returns {*} Returns the map data.
 */
function getMapData(map, key) {
  var data = map.__data__;
  return isKeyable(key)
    ? data[typeof key == 'string' ? 'string' : 'hash']
    : data.map;
}

module.exports = getMapData;
";
        
        $__internal_2040f8ba065fe59e046119751b2e2090ceb2a8ad3a13c9fac02a45736824b85a->leave($__internal_2040f8ba065fe59e046119751b2e2090ceb2a8ad3a13c9fac02a45736824b85a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getMapData.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isKeyable = require('./_isKeyable');

/**
 * Gets the data for `map`.
 *
 * @private
 * @param {Object} map The map to query.
 * @param {string} key The reference key.
 * @returns {*} Returns the map data.
 */
function getMapData(map, key) {
  var data = map.__data__;
  return isKeyable(key)
    ? data[typeof key == 'string' ? 'string' : 'hash']
    : data.map;
}

module.exports = getMapData;
", "node_modules/lodash/_getMapData.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getMapData.js");
    }
}
