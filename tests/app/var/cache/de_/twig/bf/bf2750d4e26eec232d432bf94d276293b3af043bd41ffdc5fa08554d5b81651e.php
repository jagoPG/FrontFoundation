<?php

/* node_modules/lodash/_ListCache.js */
class __TwigTemplate_ca54ff80a9f57957a4d1b2394d5547cab7f305eb0c80fc7a2c0d0cbe9faa9871 extends Twig_Template
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
        $__internal_e8f9b06dd94b2c2ce25b83b6d06fcd6d12a5e9ddee26357c327573bcdd89a6de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f9b06dd94b2c2ce25b83b6d06fcd6d12a5e9ddee26357c327573bcdd89a6de->enter($__internal_e8f9b06dd94b2c2ce25b83b6d06fcd6d12a5e9ddee26357c327573bcdd89a6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_ListCache.js"));

        // line 1
        echo "var listCacheClear = require('./_listCacheClear'),
    listCacheDelete = require('./_listCacheDelete'),
    listCacheGet = require('./_listCacheGet'),
    listCacheHas = require('./_listCacheHas'),
    listCacheSet = require('./_listCacheSet');

/**
 * Creates an list cache object.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function ListCache(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `ListCache`.
ListCache.prototype.clear = listCacheClear;
ListCache.prototype['delete'] = listCacheDelete;
ListCache.prototype.get = listCacheGet;
ListCache.prototype.has = listCacheHas;
ListCache.prototype.set = listCacheSet;

module.exports = ListCache;
";
        
        $__internal_e8f9b06dd94b2c2ce25b83b6d06fcd6d12a5e9ddee26357c327573bcdd89a6de->leave($__internal_e8f9b06dd94b2c2ce25b83b6d06fcd6d12a5e9ddee26357c327573bcdd89a6de_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_ListCache.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var listCacheClear = require('./_listCacheClear'),
    listCacheDelete = require('./_listCacheDelete'),
    listCacheGet = require('./_listCacheGet'),
    listCacheHas = require('./_listCacheHas'),
    listCacheSet = require('./_listCacheSet');

/**
 * Creates an list cache object.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function ListCache(entries) {
  var index = -1,
      length = entries == null ? 0 : entries.length;

  this.clear();
  while (++index < length) {
    var entry = entries[index];
    this.set(entry[0], entry[1]);
  }
}

// Add methods to `ListCache`.
ListCache.prototype.clear = listCacheClear;
ListCache.prototype['delete'] = listCacheDelete;
ListCache.prototype.get = listCacheGet;
ListCache.prototype.has = listCacheHas;
ListCache.prototype.set = listCacheSet;

module.exports = ListCache;
", "node_modules/lodash/_ListCache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_ListCache.js");
    }
}
