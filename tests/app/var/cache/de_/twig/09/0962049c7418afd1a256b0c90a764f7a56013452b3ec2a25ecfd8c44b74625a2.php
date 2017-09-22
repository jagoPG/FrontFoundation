<?php

/* node_modules/fsevents/node_modules/ajv/lib/cache.js */
class __TwigTemplate_572938cba7da0f41ca79b342554151b5ec86a1ca1f22dcdada946c82ebb9bfcd extends Twig_Template
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
        $__internal_5d4220efc3fb6f4518eeb15b7934277c7c82cb59c7cdf60202ce40db0bcf74da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d4220efc3fb6f4518eeb15b7934277c7c82cb59c7cdf60202ce40db0bcf74da->enter($__internal_5d4220efc3fb6f4518eeb15b7934277c7c82cb59c7cdf60202ce40db0bcf74da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ajv/lib/cache.js"));

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
        
        $__internal_5d4220efc3fb6f4518eeb15b7934277c7c82cb59c7cdf60202ce40db0bcf74da->leave($__internal_5d4220efc3fb6f4518eeb15b7934277c7c82cb59c7cdf60202ce40db0bcf74da_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ajv/lib/cache.js";
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
", "node_modules/fsevents/node_modules/ajv/lib/cache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ajv/lib/cache.js");
    }
}
