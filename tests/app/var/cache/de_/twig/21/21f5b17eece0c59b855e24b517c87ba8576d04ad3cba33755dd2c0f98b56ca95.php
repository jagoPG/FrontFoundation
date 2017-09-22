<?php

/* node_modules/lodash/_mapCacheGet.js */
class __TwigTemplate_0e237fcc6cd2a966b77474cbf5e12a24a4cc5c4a3f3539ce9bb387bdc6e1cd9d extends Twig_Template
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
        $__internal_8ad1c24e0883ab9675f631b7a3a7a79560c5021dcfb3faf4e5e981191330aa6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ad1c24e0883ab9675f631b7a3a7a79560c5021dcfb3faf4e5e981191330aa6e->enter($__internal_8ad1c24e0883ab9675f631b7a3a7a79560c5021dcfb3faf4e5e981191330aa6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_mapCacheGet.js"));

        // line 1
        echo "var getMapData = require('./_getMapData');

/**
 * Gets the map value for `key`.
 *
 * @private
 * @name get
 * @memberOf MapCache
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function mapCacheGet(key) {
  return getMapData(this, key).get(key);
}

module.exports = mapCacheGet;
";
        
        $__internal_8ad1c24e0883ab9675f631b7a3a7a79560c5021dcfb3faf4e5e981191330aa6e->leave($__internal_8ad1c24e0883ab9675f631b7a3a7a79560c5021dcfb3faf4e5e981191330aa6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_mapCacheGet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getMapData = require('./_getMapData');

/**
 * Gets the map value for `key`.
 *
 * @private
 * @name get
 * @memberOf MapCache
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function mapCacheGet(key) {
  return getMapData(this, key).get(key);
}

module.exports = mapCacheGet;
", "node_modules/lodash/_mapCacheGet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_mapCacheGet.js");
    }
}
