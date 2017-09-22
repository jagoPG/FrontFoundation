<?php

/* node_modules/lodash/_mapCacheSet.js */
class __TwigTemplate_ea2521698bb378211518142a39310be3887d551a785348e4479e54085befd3c8 extends Twig_Template
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
        $__internal_5e111bc0a579804262709e2060b9834ba0ef99e26ee1d7dcf7e5f2fd408f2960 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e111bc0a579804262709e2060b9834ba0ef99e26ee1d7dcf7e5f2fd408f2960->enter($__internal_5e111bc0a579804262709e2060b9834ba0ef99e26ee1d7dcf7e5f2fd408f2960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapCacheSet.js"));

        // line 1
        echo "var getMapData = require('./_getMapData');

/**
 * Sets the map `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf MapCache
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the map cache instance.
 */
function mapCacheSet(key, value) {
  var data = getMapData(this, key),
      size = data.size;

  data.set(key, value);
  this.size += data.size == size ? 0 : 1;
  return this;
}

module.exports = mapCacheSet;
";
        
        $__internal_5e111bc0a579804262709e2060b9834ba0ef99e26ee1d7dcf7e5f2fd408f2960->leave($__internal_5e111bc0a579804262709e2060b9834ba0ef99e26ee1d7dcf7e5f2fd408f2960_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapCacheSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getMapData = require('./_getMapData');

/**
 * Sets the map `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf MapCache
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the map cache instance.
 */
function mapCacheSet(key, value) {
  var data = getMapData(this, key),
      size = data.size;

  data.set(key, value);
  this.size += data.size == size ? 0 : 1;
  return this;
}

module.exports = mapCacheSet;
", "node_modules/lodash/_mapCacheSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapCacheSet.js");
    }
}
