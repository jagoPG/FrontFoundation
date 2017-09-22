<?php

/* node_modules/lodash/_baseKeys.js */
class __TwigTemplate_dbdcb17b246d30bf3aa030e5eb2849e3140c2249ee25809de70ed9b8d57aad73 extends Twig_Template
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
        $__internal_dcd410f445513c8052f4a746c8a2524ddaa4dc34a809873566924e8195398a81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd410f445513c8052f4a746c8a2524ddaa4dc34a809873566924e8195398a81->enter($__internal_dcd410f445513c8052f4a746c8a2524ddaa4dc34a809873566924e8195398a81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseKeys.js"));

        // line 1
        echo "var isPrototype = require('./_isPrototype'),
    nativeKeys = require('./_nativeKeys');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.keys` which doesn't treat sparse arrays as dense.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function baseKeys(object) {
  if (!isPrototype(object)) {
    return nativeKeys(object);
  }
  var result = [];
  for (var key in Object(object)) {
    if (hasOwnProperty.call(object, key) && key != 'constructor') {
      result.push(key);
    }
  }
  return result;
}

module.exports = baseKeys;
";
        
        $__internal_dcd410f445513c8052f4a746c8a2524ddaa4dc34a809873566924e8195398a81->leave($__internal_dcd410f445513c8052f4a746c8a2524ddaa4dc34a809873566924e8195398a81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseKeys.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isPrototype = require('./_isPrototype'),
    nativeKeys = require('./_nativeKeys');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * The base implementation of `_.keys` which doesn't treat sparse arrays as dense.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of property names.
 */
function baseKeys(object) {
  if (!isPrototype(object)) {
    return nativeKeys(object);
  }
  var result = [];
  for (var key in Object(object)) {
    if (hasOwnProperty.call(object, key) && key != 'constructor') {
      result.push(key);
    }
  }
  return result;
}

module.exports = baseKeys;
", "node_modules/lodash/_baseKeys.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseKeys.js");
    }
}
