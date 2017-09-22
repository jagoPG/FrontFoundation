<?php

/* node_modules/lodash/_baseGetTag.js */
class __TwigTemplate_193fcb0da18ce5b9dbdd853e9e0de1be5af6c7b44ee4b57584965b0fb753d029 extends Twig_Template
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
        $__internal_cd98a5682dac373447eadba43c6655f0dda5510f5d1096ada272d9cd7686e151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd98a5682dac373447eadba43c6655f0dda5510f5d1096ada272d9cd7686e151->enter($__internal_cd98a5682dac373447eadba43c6655f0dda5510f5d1096ada272d9cd7686e151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseGetTag.js"));

        // line 1
        echo "var Symbol = require('./_Symbol'),
    getRawTag = require('./_getRawTag'),
    objectToString = require('./_objectToString');

/** `Object#toString` result references. */
var nullTag = '[object Null]',
    undefinedTag = '[object Undefined]';

/** Built-in value references. */
var symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
 * The base implementation of `getTag` without fallbacks for buggy environments.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the `toStringTag`.
 */
function baseGetTag(value) {
  if (value == null) {
    return value === undefined ? undefinedTag : nullTag;
  }
  return (symToStringTag && symToStringTag in Object(value))
    ? getRawTag(value)
    : objectToString(value);
}

module.exports = baseGetTag;
";
        
        $__internal_cd98a5682dac373447eadba43c6655f0dda5510f5d1096ada272d9cd7686e151->leave($__internal_cd98a5682dac373447eadba43c6655f0dda5510f5d1096ada272d9cd7686e151_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseGetTag.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Symbol = require('./_Symbol'),
    getRawTag = require('./_getRawTag'),
    objectToString = require('./_objectToString');

/** `Object#toString` result references. */
var nullTag = '[object Null]',
    undefinedTag = '[object Undefined]';

/** Built-in value references. */
var symToStringTag = Symbol ? Symbol.toStringTag : undefined;

/**
 * The base implementation of `getTag` without fallbacks for buggy environments.
 *
 * @private
 * @param {*} value The value to query.
 * @returns {string} Returns the `toStringTag`.
 */
function baseGetTag(value) {
  if (value == null) {
    return value === undefined ? undefinedTag : nullTag;
  }
  return (symToStringTag && symToStringTag in Object(value))
    ? getRawTag(value)
    : objectToString(value);
}

module.exports = baseGetTag;
", "node_modules/lodash/_baseGetTag.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseGetTag.js");
    }
}
