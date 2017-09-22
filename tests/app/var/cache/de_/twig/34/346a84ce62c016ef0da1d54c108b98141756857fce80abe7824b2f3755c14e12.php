<?php

/* node_modules/har-validator/node_modules/ajv/lib/cache.js */
class __TwigTemplate_fdc8297b81e79c1f523b2f307ebaa4cbf6e83a0e71230c6dc89e43167df5da4d extends Twig_Template
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
        $__internal_6b55b8f7d7e7dda9523404d06a227d6bcaa0bd6221c80212e10b23dbe5c31da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b55b8f7d7e7dda9523404d06a227d6bcaa0bd6221c80212e10b23dbe5c31da2->enter($__internal_6b55b8f7d7e7dda9523404d06a227d6bcaa0bd6221c80212e10b23dbe5c31da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/har-validator/node_modules/ajv/lib/cache.js"));

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
        
        $__internal_6b55b8f7d7e7dda9523404d06a227d6bcaa0bd6221c80212e10b23dbe5c31da2->leave($__internal_6b55b8f7d7e7dda9523404d06a227d6bcaa0bd6221c80212e10b23dbe5c31da2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/har-validator/node_modules/ajv/lib/cache.js";
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
", "node_modules/har-validator/node_modules/ajv/lib/cache.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/har-validator/node_modules/ajv/lib/cache.js");
    }
}
