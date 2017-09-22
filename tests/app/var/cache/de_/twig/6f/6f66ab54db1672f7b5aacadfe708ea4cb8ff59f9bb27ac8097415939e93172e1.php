<?php

/* node_modules/core-js/fn/set/from.js */
class __TwigTemplate_cf17371870be2bb2a30c0a6f52ed9a4e60d0d450f9d4a1a739540495fdca32cc extends Twig_Template
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
        $__internal_b5be89cd9b48ce85218a9085d92dbdf7ec369993d02387b98ca711bc52268310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5be89cd9b48ce85218a9085d92dbdf7ec369993d02387b98ca711bc52268310->enter($__internal_b5be89cd9b48ce85218a9085d92dbdf7ec369993d02387b98ca711bc52268310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/fn/set/from.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.from');
var \$Set = require('../../modules/_core').Set;
var \$from = \$Set.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Set, source, mapFn, thisArg);
};
";
        
        $__internal_b5be89cd9b48ce85218a9085d92dbdf7ec369993d02387b98ca711bc52268310->leave($__internal_b5be89cd9b48ce85218a9085d92dbdf7ec369993d02387b98ca711bc52268310_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/fn/set/from.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.set');
require('../../modules/es7.set.from');
var \$Set = require('../../modules/_core').Set;
var \$from = \$Set.from;
module.exports = function from(source, mapFn, thisArg) {
  return \$from.call(typeof this === 'function' ? this : \$Set, source, mapFn, thisArg);
};
", "node_modules/core-js/fn/set/from.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/fn/set/from.js");
    }
}
