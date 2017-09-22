<?php

/* node_modules/lodash/_baseIsMap.js */
class __TwigTemplate_0d13e7ccac242fedaea38cc535d9bc41f29b0dd8602737c0fdaee63671583f62 extends Twig_Template
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
        $__internal_6fd6068f7114750511866949a34660b1f2ebf2858887323c976e3bd94bd157fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd6068f7114750511866949a34660b1f2ebf2858887323c976e3bd94bd157fe->enter($__internal_6fd6068f7114750511866949a34660b1f2ebf2858887323c976e3bd94bd157fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIsMap.js"));

        // line 1
        echo "var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var mapTag = '[object Map]';

/**
 * The base implementation of `_.isMap` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a map, else `false`.
 */
function baseIsMap(value) {
  return isObjectLike(value) && getTag(value) == mapTag;
}

module.exports = baseIsMap;
";
        
        $__internal_6fd6068f7114750511866949a34660b1f2ebf2858887323c976e3bd94bd157fe->leave($__internal_6fd6068f7114750511866949a34660b1f2ebf2858887323c976e3bd94bd157fe_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIsMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var getTag = require('./_getTag'),
    isObjectLike = require('./isObjectLike');

/** `Object#toString` result references. */
var mapTag = '[object Map]';

/**
 * The base implementation of `_.isMap` without Node.js optimizations.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a map, else `false`.
 */
function baseIsMap(value) {
  return isObjectLike(value) && getTag(value) == mapTag;
}

module.exports = baseIsMap;
", "node_modules/lodash/_baseIsMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIsMap.js");
    }
}
