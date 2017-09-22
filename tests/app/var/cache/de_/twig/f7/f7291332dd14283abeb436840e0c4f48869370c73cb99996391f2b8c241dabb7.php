<?php

/* node_modules/lodash/_getSymbols.js */
class __TwigTemplate_7c378c79f4a24148163ef0883bf81013c917a3cab16474bd825f493cc4c228a5 extends Twig_Template
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
        $__internal_17e4dc830710d89c932f6cf3af10b6844aaf7b796f4aa8a0868756bd4b097594 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17e4dc830710d89c932f6cf3af10b6844aaf7b796f4aa8a0868756bd4b097594->enter($__internal_17e4dc830710d89c932f6cf3af10b6844aaf7b796f4aa8a0868756bd4b097594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getSymbols.js"));

        // line 1
        echo "var arrayFilter = require('./_arrayFilter'),
    stubArray = require('./stubArray');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Built-in value references. */
var propertyIsEnumerable = objectProto.propertyIsEnumerable;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeGetSymbols = Object.getOwnPropertySymbols;

/**
 * Creates an array of the own enumerable symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of symbols.
 */
var getSymbols = !nativeGetSymbols ? stubArray : function(object) {
  if (object == null) {
    return [];
  }
  object = Object(object);
  return arrayFilter(nativeGetSymbols(object), function(symbol) {
    return propertyIsEnumerable.call(object, symbol);
  });
};

module.exports = getSymbols;
";
        
        $__internal_17e4dc830710d89c932f6cf3af10b6844aaf7b796f4aa8a0868756bd4b097594->leave($__internal_17e4dc830710d89c932f6cf3af10b6844aaf7b796f4aa8a0868756bd4b097594_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getSymbols.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayFilter = require('./_arrayFilter'),
    stubArray = require('./stubArray');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Built-in value references. */
var propertyIsEnumerable = objectProto.propertyIsEnumerable;

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeGetSymbols = Object.getOwnPropertySymbols;

/**
 * Creates an array of the own enumerable symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of symbols.
 */
var getSymbols = !nativeGetSymbols ? stubArray : function(object) {
  if (object == null) {
    return [];
  }
  object = Object(object);
  return arrayFilter(nativeGetSymbols(object), function(symbol) {
    return propertyIsEnumerable.call(object, symbol);
  });
};

module.exports = getSymbols;
", "node_modules/lodash/_getSymbols.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getSymbols.js");
    }
}
