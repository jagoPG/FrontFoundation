<?php

/* node_modules/lodash/_baseKeysIn.js */
class __TwigTemplate_66c927275bff75f9080ff46fafcbf18393ecb5c138d690912ae6e9dbc1d278c9 extends Twig_Template
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
        $__internal_816c39e192844f4163fa20e60b0fbe8b84531e1f7c10f366d590a7a297c77ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_816c39e192844f4163fa20e60b0fbe8b84531e1f7c10f366d590a7a297c77ed7->enter($__internal_816c39e192844f4163fa20e60b0fbe8b84531e1f7c10f366d590a7a297c77ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseKeysIn.js"));

        // line 1
        echo "var isObject = require('./isObject'),
    isPrototype = require('./_isPrototype'),
    nativeKeysIn = require('./_nativeKeysIn');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.keysIn` which doesn't treat sparse arrays as dense.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function baseKeysIn(object) {
  if (!isObject(object)) {
    return nativeKeysIn(object);
  }
  var isProto = isPrototype(object),
      result = [];

  for (var key in object) {
    if (!(key == 'constructor' && (isProto || !hasOwnProperty.call(object, key)))) {
      result.push(key);
    }
  }
  return result;
}

module.exports = baseKeysIn;
";
        
        $__internal_816c39e192844f4163fa20e60b0fbe8b84531e1f7c10f366d590a7a297c77ed7->leave($__internal_816c39e192844f4163fa20e60b0fbe8b84531e1f7c10f366d590a7a297c77ed7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseKeysIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./isObject'),
    isPrototype = require('./_isPrototype'),
    nativeKeysIn = require('./_nativeKeysIn');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.keysIn` which doesn't treat sparse arrays as dense.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function baseKeysIn(object) {
  if (!isObject(object)) {
    return nativeKeysIn(object);
  }
  var isProto = isPrototype(object),
      result = [];

  for (var key in object) {
    if (!(key == 'constructor' && (isProto || !hasOwnProperty.call(object, key)))) {
      result.push(key);
    }
  }
  return result;
}

module.exports = baseKeysIn;
", "node_modules/lodash/_baseKeysIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseKeysIn.js");
    }
}
