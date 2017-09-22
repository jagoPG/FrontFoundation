<?php

/* node_modules/core-js/library/fn/weak-map/of.js */
class __TwigTemplate_d51841a5608923a0cfe3fbae820c4fd260611cfe09d155df33ef3f39226c79ef extends Twig_Template
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
        $__internal_1f5512a1549ffa6ff7f45c8466d5cff12c9dda446b3be3a70e8ea92efa93b8c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f5512a1549ffa6ff7f45c8466d5cff12c9dda446b3be3a70e8ea92efa93b8c7->enter($__internal_1f5512a1549ffa6ff7f45c8466d5cff12c9dda446b3be3a70e8ea92efa93b8c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-map/of.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$of = \$WeakMap.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakMap, arguments);
};
";
        
        $__internal_1f5512a1549ffa6ff7f45c8466d5cff12c9dda446b3be3a70e8ea92efa93b8c7->leave($__internal_1f5512a1549ffa6ff7f45c8466d5cff12c9dda446b3be3a70e8ea92efa93b8c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-map/of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-map');
require('../../modules/es7.weak-map.of');
var \$WeakMap = require('../../modules/_core').WeakMap;
var \$of = \$WeakMap.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakMap, arguments);
};
", "node_modules/core-js/library/fn/weak-map/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-map/of.js");
    }
}
