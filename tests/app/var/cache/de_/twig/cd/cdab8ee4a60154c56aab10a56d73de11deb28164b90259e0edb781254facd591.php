<?php

/* node_modules/lodash/_MapCache.js */
class __TwigTemplate_a22675c72576b2775b11a26cc123a2fc0a3fd63c63ed8466a7dd52441b279720 extends Twig_Template
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
        $__internal_03662281a0de9f9164fbd68245fcfadcef5feb2960e49393a8deeb3e4ba87073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03662281a0de9f9164fbd68245fcfadcef5feb2960e49393a8deeb3e4ba87073->enter($__internal_03662281a0de9f9164fbd68245fcfadcef5feb2960e49393a8deeb3e4ba87073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_MapCache.js"));

        // line 1
        echo "var mapCacheClear = require('./_mapCacheClear'),
    mapCacheDelete = require('./_mapCacheDelete'),
    mapCacheGet = require('./_mapCacheGet'),
    mapCacheHas = require('./_mapCacheHas'),
    mapCacheSet = require('./_mapCacheSet');

/**
 * Creates a map cache object to store key-value pairs.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function MapCache(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `MapCache`.
MapCache.prototype.clear = mapCacheClear;
MapCache.prototype['delete'] = mapCacheDelete;
MapCache.prototype.get = mapCacheGet;
MapCache.prototype.has = mapCacheHas;
MapCache.prototype.set = mapCacheSet;

module.exports = MapCache;
";
        
        $__internal_03662281a0de9f9164fbd68245fcfadcef5feb2960e49393a8deeb3e4ba87073->leave($__internal_03662281a0de9f9164fbd68245fcfadcef5feb2960e49393a8deeb3e4ba87073_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_MapCache.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var mapCacheClear = require('./_mapCacheClear'),
    mapCacheDelete = require('./_mapCacheDelete'),
    mapCacheGet = require('./_mapCacheGet'),
    mapCacheHas = require('./_mapCacheHas'),
    mapCacheSet = require('./_mapCacheSet');

/**
 * Creates a map cache object to store key-value pairs.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function MapCache(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `MapCache`.
MapCache.prototype.clear = mapCacheClear;
MapCache.prototype['delete'] = mapCacheDelete;
MapCache.prototype.get = mapCacheGet;
MapCache.prototype.has = mapCacheHas;
MapCache.prototype.set = mapCacheSet;

module.exports = MapCache;
", "node_modules/lodash/_MapCache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_MapCache.js");
    }
}
