<?php

/* node_modules/core-js/modules/es6.map.js */
class __TwigTemplate_413923a2634180ea5a9adac4af09bf968112894e3aba7598000283cde03c1fd0 extends Twig_Template
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
        $__internal_647a2d0e347d56d9a29c3c6969dd0550b6ede5f5f0ea15cc7f2b664fd31f1bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_647a2d0e347d56d9a29c3c6969dd0550b6ede5f5f0ea15cc7f2b664fd31f1bf4->enter($__internal_647a2d0e347d56d9a29c3c6969dd0550b6ede5f5f0ea15cc7f2b664fd31f1bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/modules/es6.map.js"));

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
        
        $__internal_647a2d0e347d56d9a29c3c6969dd0550b6ede5f5f0ea15cc7f2b664fd31f1bf4->leave($__internal_647a2d0e347d56d9a29c3c6969dd0550b6ede5f5f0ea15cc7f2b664fd31f1bf4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/modules/es6.map.js";
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
", "node_modules/core-js/modules/es6.map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/modules/es6.map.js");
    }
}
