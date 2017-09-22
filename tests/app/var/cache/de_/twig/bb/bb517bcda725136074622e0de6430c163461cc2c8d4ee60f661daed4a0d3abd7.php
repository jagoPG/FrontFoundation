<?php

/* node_modules/core-js/fn/weak-map/of.js */
class __TwigTemplate_fec5f3232bbf8e94322d18b47fcbfe5be57c05e7675a444e290ab38789eaba49 extends Twig_Template
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
        $__internal_65e4bd8226aff7d5330b171f2029c4ecdd4f50853557697240f40fe77e84fb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65e4bd8226aff7d5330b171f2029c4ecdd4f50853557697240f40fe77e84fb5e->enter($__internal_65e4bd8226aff7d5330b171f2029c4ecdd4f50853557697240f40fe77e84fb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/weak-map/of.js"));

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
        
        $__internal_65e4bd8226aff7d5330b171f2029c4ecdd4f50853557697240f40fe77e84fb5e->leave($__internal_65e4bd8226aff7d5330b171f2029c4ecdd4f50853557697240f40fe77e84fb5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/weak-map/of.js";
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
", "node_modules/core-js/fn/weak-map/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/weak-map/of.js");
    }
}
