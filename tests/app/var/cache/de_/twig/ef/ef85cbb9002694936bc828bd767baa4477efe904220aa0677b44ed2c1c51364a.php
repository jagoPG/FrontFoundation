<?php

/* node_modules/lodash/_createSet.js */
class __TwigTemplate_7f15258607873d9f66b9c44f5a6d036628c58361db07d175fa907706c81ded30 extends Twig_Template
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
        $__internal_a8548b1ee9762b5c91d4c88b5dc73e6944b8a32c3684fe6bcbd8130305219fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8548b1ee9762b5c91d4c88b5dc73e6944b8a32c3684fe6bcbd8130305219fde->enter($__internal_a8548b1ee9762b5c91d4c88b5dc73e6944b8a32c3684fe6bcbd8130305219fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createSet.js"));

        // line 1
        echo "var Set = require('./_Set'),
    noop = require('./noop'),
    setToArray = require('./_setToArray');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Creates a set object of `values`.
 *
 * @private
 * @param {Array} values The values to add to the set.
 * @returns {Object} Returns the new set.
 */
var createSet = !(Set && (1 / setToArray(new Set([,-0]))[1]) == INFINITY) ? noop : function(values) {
  return new Set(values);
};

module.exports = createSet;
";
        
        $__internal_a8548b1ee9762b5c91d4c88b5dc73e6944b8a32c3684fe6bcbd8130305219fde->leave($__internal_a8548b1ee9762b5c91d4c88b5dc73e6944b8a32c3684fe6bcbd8130305219fde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createSet.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Set = require('./_Set'),
    noop = require('./noop'),
    setToArray = require('./_setToArray');

/** Used as references for various `Number` constants. */
var INFINITY = 1 / 0;

/**
 * Creates a set object of `values`.
 *
 * @private
 * @param {Array} values The values to add to the set.
 * @returns {Object} Returns the new set.
 */
var createSet = !(Set && (1 / setToArray(new Set([,-0]))[1]) == INFINITY) ? noop : function(values) {
  return new Set(values);
};

module.exports = createSet;
", "node_modules/lodash/_createSet.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createSet.js");
    }
}
