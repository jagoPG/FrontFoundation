<?php

/* node_modules/lodash/_stackSet.js */
class __TwigTemplate_203e61f4d28ed9cd96c03c6b1e133f55a20222b75d2fee9662f8586873dd4e75 extends Twig_Template
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
        $__internal_50ae6bf2a8a3fe320eeb65bf435ab33db6e4ebb3bf0614bd17b39dc5f22a5c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50ae6bf2a8a3fe320eeb65bf435ab33db6e4ebb3bf0614bd17b39dc5f22a5c70->enter($__internal_50ae6bf2a8a3fe320eeb65bf435ab33db6e4ebb3bf0614bd17b39dc5f22a5c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_stackSet.js"));

        // line 1
        echo "var ListCache = require('./_ListCache'),
    Map = require('./_Map'),
    MapCache = require('./_MapCache');

/** Used as the size to enable large array optimizations. */
var LARGE_ARRAY_SIZE = 200;

/**
 * Sets the stack `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf Stack
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the stack cache instance.
 */
function stackSet(key, value) {
  var data = this.__data__;
  if (data instanceof ListCache) {
    var pairs = data.__data__;
    if (!Map || (pairs.length < LARGE_ARRAY_SIZE - 1)) {
      pairs.push([key, value]);
      this.size = ++data.size;
      return this;
    }
    data = this.__data__ = new MapCache(pairs);
  }
  data.set(key, value);
  this.size = data.size;
  return this;
}

module.exports = stackSet;
";
        
        $__internal_50ae6bf2a8a3fe320eeb65bf435ab33db6e4ebb3bf0614bd17b39dc5f22a5c70->leave($__internal_50ae6bf2a8a3fe320eeb65bf435ab33db6e4ebb3bf0614bd17b39dc5f22a5c70_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_stackSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ListCache = require('./_ListCache'),
    Map = require('./_Map'),
    MapCache = require('./_MapCache');

/** Used as the size to enable large array optimizations. */
var LARGE_ARRAY_SIZE = 200;

/**
 * Sets the stack `key` to `value`.
 *
 * @private
 * @name set
 * @memberOf Stack
 * @param {string} key The key of the value to set.
 * @param {*} value The value to set.
 * @returns {Object} Returns the stack cache instance.
 */
function stackSet(key, value) {
  var data = this.__data__;
  if (data instanceof ListCache) {
    var pairs = data.__data__;
    if (!Map || (pairs.length < LARGE_ARRAY_SIZE - 1)) {
      pairs.push([key, value]);
      this.size = ++data.size;
      return this;
    }
    data = this.__data__ = new MapCache(pairs);
  }
  data.set(key, value);
  this.size = data.size;
  return this;
}

module.exports = stackSet;
", "node_modules/lodash/_stackSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_stackSet.js");
    }
}
