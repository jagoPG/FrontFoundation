<?php

/* node_modules/lodash/_listCacheGet.js */
class __TwigTemplate_32b9c373d758b6e638cb9f7e425f1f5dbfcdbe32c9739c7e2b753a46e6887c7e extends Twig_Template
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
        $__internal_ab5f77604d32a9f5ad472ace553a298d9107870d4222bbe5389515ab9df30e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab5f77604d32a9f5ad472ace553a298d9107870d4222bbe5389515ab9df30e39->enter($__internal_ab5f77604d32a9f5ad472ace553a298d9107870d4222bbe5389515ab9df30e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_listCacheGet.js"));

        // line 1
        echo "var assocIndexOf = require('./_assocIndexOf');

/**
 * Gets the list cache value for `key`.
 *
 * @private
 * @name get
 * @memberOf ListCache
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function listCacheGet(key) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  return index < 0 ? undefined : data[index][1];
}

module.exports = listCacheGet;
";
        
        $__internal_ab5f77604d32a9f5ad472ace553a298d9107870d4222bbe5389515ab9df30e39->leave($__internal_ab5f77604d32a9f5ad472ace553a298d9107870d4222bbe5389515ab9df30e39_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_listCacheGet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assocIndexOf = require('./_assocIndexOf');

/**
 * Gets the list cache value for `key`.
 *
 * @private
 * @name get
 * @memberOf ListCache
 * @param {string} key The key of the value to get.
 * @returns {*} Returns the entry value.
 */
function listCacheGet(key) {
  var data = this.__data__,
      index = assocIndexOf(data, key);

  return index < 0 ? undefined : data[index][1];
}

module.exports = listCacheGet;
", "node_modules/lodash/_listCacheGet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_listCacheGet.js");
    }
}
