<?php

/* node_modules/core-js/library/modules/es6.map.js */
class __TwigTemplate_b7566afc91260ffd7b7f929bd46ca9481f9491c507e1d493b49e83122730f93b extends Twig_Template
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
        $__internal_e278a67167dd4be373e8ed35a499f0d235afd1bd1f2184b81d31a0b35064cce4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e278a67167dd4be373e8ed35a499f0d235afd1bd1f2184b81d31a0b35064cce4->enter($__internal_e278a67167dd4be373e8ed35a499f0d235afd1bd1f2184b81d31a0b35064cce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/modules/es6.map.js"));

        // line 1
        echo "'use strict';
var strong = require('./_collection-strong');
var validate = require('./_validate-collection');
var MAP = 'Map';

// 23.1 Map Objects
module.exports = require('./_collection')(MAP, function (get) {
  return function Map() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.1.3.6 Map.prototype.get(key)
  get: function get(key) {
    var entry = strong.getEntry(validate(this, MAP), key);
    return entry && entry.v;
  },
  // 23.1.3.9 Map.prototype.set(key, value)
  set: function set(key, value) {
    return strong.def(validate(this, MAP), key === 0 ? 0 : key, value);
  }
}, strong, true);
";
        
        $__internal_e278a67167dd4be373e8ed35a499f0d235afd1bd1f2184b81d31a0b35064cce4->leave($__internal_e278a67167dd4be373e8ed35a499f0d235afd1bd1f2184b81d31a0b35064cce4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/modules/es6.map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var strong = require('./_collection-strong');
var validate = require('./_validate-collection');
var MAP = 'Map';

// 23.1 Map Objects
module.exports = require('./_collection')(MAP, function (get) {
  return function Map() { return get(this, arguments.length > 0 ? arguments[0] : undefined); };
}, {
  // 23.1.3.6 Map.prototype.get(key)
  get: function get(key) {
    var entry = strong.getEntry(validate(this, MAP), key);
    return entry && entry.v;
  },
  // 23.1.3.9 Map.prototype.set(key, value)
  set: function set(key, value) {
    return strong.def(validate(this, MAP), key === 0 ? 0 : key, value);
  }
}, strong, true);
", "node_modules/core-js/library/modules/es6.map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/modules/es6.map.js");
    }
}
