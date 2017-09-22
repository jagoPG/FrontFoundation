<?php

/* node_modules/lodash/_baseRest.js */
class __TwigTemplate_0ae9ac4395e44e039b1876594ce63adfc73cba6fcc8ed5bf858f9a1859548e8d extends Twig_Template
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
        $__internal_2a6ac122406fc797c8a8d3851cfada7f5dbd3cae5dfdbd607bb5bbb2c676807e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a6ac122406fc797c8a8d3851cfada7f5dbd3cae5dfdbd607bb5bbb2c676807e->enter($__internal_2a6ac122406fc797c8a8d3851cfada7f5dbd3cae5dfdbd607bb5bbb2c676807e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseRest.js"));

        // line 1
        echo "var identity = require('./identity'),
    overRest = require('./_overRest'),
    setToString = require('./_setToString');

/**
 * The base implementation of `_.rest` which doesn't validate or coerce arguments.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @param {number} [start=func.length-1] The start position of the rest parameter.
 * @returns {Function} Returns the new function.
 */
function baseRest(func, start) {
  return setToString(overRest(func, start, identity), func + '');
}

module.exports = baseRest;
";
        
        $__internal_2a6ac122406fc797c8a8d3851cfada7f5dbd3cae5dfdbd607bb5bbb2c676807e->leave($__internal_2a6ac122406fc797c8a8d3851cfada7f5dbd3cae5dfdbd607bb5bbb2c676807e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseRest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var identity = require('./identity'),
    overRest = require('./_overRest'),
    setToString = require('./_setToString');

/**
 * The base implementation of `_.rest` which doesn't validate or coerce arguments.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @param {number} [start=func.length-1] The start position of the rest parameter.
 * @returns {Function} Returns the new function.
 */
function baseRest(func, start) {
  return setToString(overRest(func, start, identity), func + '');
}

module.exports = baseRest;
", "node_modules/lodash/_baseRest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseRest.js");
    }
}
