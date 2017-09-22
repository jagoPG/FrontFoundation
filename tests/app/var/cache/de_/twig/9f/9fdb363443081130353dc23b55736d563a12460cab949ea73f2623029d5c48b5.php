<?php

/* node_modules/core-js/fn/map/from.js */
class __TwigTemplate_b2a9eaf91487e125f04af6026dcb4a79a22f07ad756332765c980beb8e7d4387 extends Twig_Template
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
        $__internal_a0ae93abb3d19f57c86614e60b72c6caab3d39137871f4b3a7e48684a0924124 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ae93abb3d19f57c86614e60b72c6caab3d39137871f4b3a7e48684a0924124->enter($__internal_a0ae93abb3d19f57c86614e60b72c6caab3d39137871f4b3a7e48684a0924124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/map/from.js"));

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
        
        $__internal_a0ae93abb3d19f57c86614e60b72c6caab3d39137871f4b3a7e48684a0924124->leave($__internal_a0ae93abb3d19f57c86614e60b72c6caab3d39137871f4b3a7e48684a0924124_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/map/from.js";
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
", "node_modules/core-js/fn/map/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/map/from.js");
    }
}
