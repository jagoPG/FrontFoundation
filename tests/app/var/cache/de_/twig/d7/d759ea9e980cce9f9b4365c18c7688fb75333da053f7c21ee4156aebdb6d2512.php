<?php

/* node_modules/core-js/library/fn/weak-set/of.js */
class __TwigTemplate_78e0b472c09869966c58213e0a66e23dc800eb97ca414d74cc6471f510787629 extends Twig_Template
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
        $__internal_940d979a333c41528d35ed43a378267eb3125a49d805be9a15e3a54bf5894bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940d979a333c41528d35ed43a378267eb3125a49d805be9a15e3a54bf5894bda->enter($__internal_940d979a333c41528d35ed43a378267eb3125a49d805be9a15e3a54bf5894bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/core-js/library/fn/weak-set/of.js"));

        // line 1
        echo "'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$of = \$WeakSet.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakSet, arguments);
};
";
        
        $__internal_940d979a333c41528d35ed43a378267eb3125a49d805be9a15e3a54bf5894bda->leave($__internal_940d979a333c41528d35ed43a378267eb3125a49d805be9a15e3a54bf5894bda_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/core-js/library/fn/weak-set/of.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
require('../../modules/es6.weak-set');
require('../../modules/es7.weak-set.of');
var \$WeakSet = require('../../modules/_core').WeakSet;
var \$of = \$WeakSet.of;
module.exports = function of() {
  return \$of.apply(typeof this === 'function' ? this : \$WeakSet, arguments);
};
", "node_modules/core-js/library/fn/weak-set/of.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/core-js/library/fn/weak-set/of.js");
    }
}
