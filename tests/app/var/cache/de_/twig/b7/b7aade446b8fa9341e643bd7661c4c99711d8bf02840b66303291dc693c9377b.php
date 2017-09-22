<?php

/* node_modules/core-js/library/fn/map/from.js */
class __TwigTemplate_f32e2b439807461171b99f96fee972601e8c49b4ded6b57cf1f0c65b6815d89f extends Twig_Template
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
        $__internal_cc0fb036183cd0f6e42057d6f247c8840f36126c3c566f3e8d4617b0ab361705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc0fb036183cd0f6e42057d6f247c8840f36126c3c566f3e8d4617b0ab361705->enter($__internal_cc0fb036183cd0f6e42057d6f247c8840f36126c3c566f3e8d4617b0ab361705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/map/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.map');
require('../../modules/es7.map.from');
var \$Map = require('../../modules/_core').Map;
var \$from = \$Map.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Map, source, mapFn, thisArg);
};
";
        
        $__internal_cc0fb036183cd0f6e42057d6f247c8840f36126c3c566f3e8d4617b0ab361705->leave($__internal_cc0fb036183cd0f6e42057d6f247c8840f36126c3c566f3e8d4617b0ab361705_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/map/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.map');
require('../../modules/es7.map.from');
var \$Map = require('../../modules/_core').Map;
var \$from = \$Map.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Map, source, mapFn, thisArg);
};
", "node_modules/core-js/library/fn/map/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/map/from.js");
    }
}
