<?php

/* node_modules/lodash/rearg.js */
class __TwigTemplate_7f9ef0773c6c7da898415bfee8616858023ecb95ea896835200d0e085e3923b3 extends Twig_Template
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
        $__internal_c1519809b52b351647dceaba2aa459bc41ba821dfec13bf80f71f066e1d4500e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1519809b52b351647dceaba2aa459bc41ba821dfec13bf80f71f066e1d4500e->enter($__internal_c1519809b52b351647dceaba2aa459bc41ba821dfec13bf80f71f066e1d4500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/rearg.js"));

        // line 1
        echo "var createWrap = require('./_createWrap'),
    flatRest = require('./_flatRest');

/** Used to compose bitmasks for function metadata. */
var WRAP_REARG_FLAG = 256;

/**
 * Creates a function that invokes `func` with arguments arranged according
 * to the specified `indexes` where the argument value at the first index is
 * provided as the first argument, the argument value at the second index is
 * provided as the second argument, and so on.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Function
 * @param {Function} func The function to rearrange arguments for.
 * @param {...(number|number[])} indexes The arranged argument indexes.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var rearged = _.rearg(function(a, b, c) {
 *   return [a, b, c];
 * }, [2, 0, 1]);
 *
 * rearged('b', 'c', 'a')
 * // => ['a', 'b', 'c']
 */
var rearg = flatRest(function(func, indexes) {
  return createWrap(func, WRAP_REARG_FLAG, undefined, undefined, undefined, indexes);
});

module.exports = rearg;
";
        
        $__internal_c1519809b52b351647dceaba2aa459bc41ba821dfec13bf80f71f066e1d4500e->leave($__internal_c1519809b52b351647dceaba2aa459bc41ba821dfec13bf80f71f066e1d4500e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/rearg.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var createWrap = require('./_createWrap'),
    flatRest = require('./_flatRest');

/** Used to compose bitmasks for function metadata. */
var WRAP_REARG_FLAG = 256;

/**
 * Creates a function that invokes `func` with arguments arranged according
 * to the specified `indexes` where the argument value at the first index is
 * provided as the first argument, the argument value at the second index is
 * provided as the second argument, and so on.
 *
 * @static
 * @memberOf _
 * @since 3.0.0
 * @category Function
 * @param {Function} func The function to rearrange arguments for.
 * @param {...(number|number[])} indexes The arranged argument indexes.
 * @returns {Function} Returns the new function.
 * @example
 *
 * var rearged = _.rearg(function(a, b, c) {
 *   return [a, b, c];
 * }, [2, 0, 1]);
 *
 * rearged('b', 'c', 'a')
 * // => ['a', 'b', 'c']
 */
var rearg = flatRest(function(func, indexes) {
  return createWrap(func, WRAP_REARG_FLAG, undefined, undefined, undefined, indexes);
});

module.exports = rearg;
", "node_modules/lodash/rearg.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/rearg.js");
    }
}
