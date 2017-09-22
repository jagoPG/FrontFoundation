<?php

/* node_modules/core-js/fn/weak-map/from.js */
class __TwigTemplate_862ef1942d1226e8428b6a71459c04dfb18100d02833e5f0e351ab0635a29366 extends Twig_Template
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
        $__internal_e410d6f9714f1a2010bbb49f1db5e701872ed2318ef691e634f6dfe5b21b0e5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e410d6f9714f1a2010bbb49f1db5e701872ed2318ef691e634f6dfe5b21b0e5e->enter($__internal_e410d6f9714f1a2010bbb49f1db5e701872ed2318ef691e634f6dfe5b21b0e5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-map/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.from');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$from = \$WeakMap.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakMap, source, mapFn, thisArg);
};
";
        
        $__internal_e410d6f9714f1a2010bbb49f1db5e701872ed2318ef691e634f6dfe5b21b0e5e->leave($__internal_e410d6f9714f1a2010bbb49f1db5e701872ed2318ef691e634f6dfe5b21b0e5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-map/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.from');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$from = \$WeakMap.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$WeakMap, source, mapFn, thisArg);
};
", "node_modules/core-js/fn/weak-map/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-map/from.js");
    }
}
