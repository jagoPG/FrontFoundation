<?php

/* node_modules/lodash/_overRest.js */
class __TwigTemplate_90bf1adcedd4f7bdd3f9634be1e4e0804b07439aff3c236567ecdf094efa7aa2 extends Twig_Template
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
        $__internal_528b68a5c8e1091f3061aa4e09ae81c1bf0d46edc02c0a7f291a9673c80bd99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528b68a5c8e1091f3061aa4e09ae81c1bf0d46edc02c0a7f291a9673c80bd99c->enter($__internal_528b68a5c8e1091f3061aa4e09ae81c1bf0d46edc02c0a7f291a9673c80bd99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_overRest.js"));

        // line 1
        echo "var apply = require('./_apply');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max;

/**
 * A specialized version of `baseRest` which transforms the rest array.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @param {number} [start=func.length-1] The start position of the rest parameter.
 * @param {Function} transform The rest array transform.
 * @returns {Function} Returns the new function.
 */
function overRest(func, start, transform) {
  start = nativeMax(start === undefined ? (func.length - 1) : start, 0);
  return function() {
    var args = arguments,
        index = -1,
        length = nativeMax(args.length - start, 0),
        array = Array(length);

    while (++index < length) {
      array[index] = args[start + index];
    }
    index = -1;
    var otherArgs = Array(start + 1);
    while (++index < start) {
      otherArgs[index] = args[index];
    }
    otherArgs[start] = transform(array);
    return apply(func, this, otherArgs);
  };
}

module.exports = overRest;
";
        
        $__internal_528b68a5c8e1091f3061aa4e09ae81c1bf0d46edc02c0a7f291a9673c80bd99c->leave($__internal_528b68a5c8e1091f3061aa4e09ae81c1bf0d46edc02c0a7f291a9673c80bd99c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_overRest.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeMax = Math.max;

/**
 * A specialized version of `baseRest` which transforms the rest array.
 *
 * @private
 * @param {Function} func The function to apply a rest parameter to.
 * @param {number} [start=func.length-1] The start position of the rest parameter.
 * @param {Function} transform The rest array transform.
 * @returns {Function} Returns the new function.
 */
function overRest(func, start, transform) {
  start = nativeMax(start === undefined ? (func.length - 1) : start, 0);
  return function() {
    var args = arguments,
        index = -1,
        length = nativeMax(args.length - start, 0),
        array = Array(length);

    while (++index < length) {
      array[index] = args[start + index];
    }
    index = -1;
    var otherArgs = Array(start + 1);
    while (++index < start) {
      otherArgs[index] = args[index];
    }
    otherArgs[start] = transform(array);
    return apply(func, this, otherArgs);
  };
}

module.exports = overRest;
", "node_modules/lodash/_overRest.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_overRest.js");
    }
}
