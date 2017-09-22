<?php

/* node_modules/ajv/lib/cache.js */
class __TwigTemplate_fa09a7eca6aed6e884c78cb191cc564ccad93962a5cd21871f8018fb57cdecf2 extends Twig_Template
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
        $__internal_84e7e27ebfc7e86ad7b39be48999cd4ee63f48c0f0185c5e013b194e20d6e13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84e7e27ebfc7e86ad7b39be48999cd4ee63f48c0f0185c5e013b194e20d6e13a->enter($__internal_84e7e27ebfc7e86ad7b39be48999cd4ee63f48c0f0185c5e013b194e20d6e13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ajv/lib/cache.js"));

        // line 1
        echo "'use strict';


var Cache = module.exports = function Cache() {
  this._cache = {};
};


Cache.prototype.put = function Cache_put(key, value) {
  this._cache[key] = value;
};


Cache.prototype.get = function Cache_get(key) {
  return this._cache[key];
};


Cache.prototype.del = function Cache_del(key) {
  delete this._cache[key];
};


Cache.prototype.clear = function Cache_clear() {
  this._cache = {};
};
";
        
        $__internal_84e7e27ebfc7e86ad7b39be48999cd4ee63f48c0f0185c5e013b194e20d6e13a->leave($__internal_84e7e27ebfc7e86ad7b39be48999cd4ee63f48c0f0185c5e013b194e20d6e13a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ajv/lib/cache.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';


var Cache = module.exports = function Cache() {
  this._cache = {};
};


Cache.prototype.put = function Cache_put(key, value) {
  this._cache[key] = value;
};


Cache.prototype.get = function Cache_get(key) {
  return this._cache[key];
};


Cache.prototype.del = function Cache_del(key) {
  delete this._cache[key];
};


Cache.prototype.clear = function Cache_clear() {
  this._cache = {};
};
", "node_modules/ajv/lib/cache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ajv/lib/cache.js");
    }
}
