<?php

/* node_modules/lodash/_customDefaultsAssignIn.js */
class __TwigTemplate_e65e598ec9f015b8c09df1b55c836a0c1f447475250edaaf56d37e108dc68705 extends Twig_Template
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
        $__internal_3da74a21bcff984fbae6f3a01cb85e040bf576c7b08edbdcf226fce0035a92c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da74a21bcff984fbae6f3a01cb85e040bf576c7b08edbdcf226fce0035a92c4->enter($__internal_3da74a21bcff984fbae6f3a01cb85e040bf576c7b08edbdcf226fce0035a92c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_customDefaultsAssignIn.js"));

        // line 1
        echo "var eq = require('./eq');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Used by `_.defaults` to customize its `_.assignIn` use to assign properties
 * of source objects to the destination object for all destination properties
 * that resolve to `undefined`.
 *
 * @private
 * @param {*} objValue The destination value.
 * @param {*} srcValue The source value.
 * @param {string} key The key of the property to assign.
 * @param {Object} object The parent object of `objValue`.
 * @returns {*} Returns the value to assign.
 */
function customDefaultsAssignIn(objValue, srcValue, key, object) {
  if (objValue === undefined ||
      (eq(objValue, objectProto[key]) && !hasOwnProperty.call(object, key))) {
    return srcValue;
  }
  return objValue;
}

module.exports = customDefaultsAssignIn;
";
        
        $__internal_3da74a21bcff984fbae6f3a01cb85e040bf576c7b08edbdcf226fce0035a92c4->leave($__internal_3da74a21bcff984fbae6f3a01cb85e040bf576c7b08edbdcf226fce0035a92c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_customDefaultsAssignIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var eq = require('./eq');

/** Used for built-in method references. */
var objectProto = Object.prototype;

/** Used to check objects for own properties. */
var hasOwnProperty = objectProto.hasOwnProperty;

/**
 * Used by `_.defaults` to customize its `_.assignIn` use to assign properties
 * of source objects to the destination object for all destination properties
 * that resolve to `undefined`.
 *
 * @private
 * @param {*} objValue The destination value.
 * @param {*} srcValue The source value.
 * @param {string} key The key of the property to assign.
 * @param {Object} object The parent object of `objValue`.
 * @returns {*} Returns the value to assign.
 */
function customDefaultsAssignIn(objValue, srcValue, key, object) {
  if (objValue === undefined ||
      (eq(objValue, objectProto[key]) && !hasOwnProperty.call(object, key))) {
    return srcValue;
  }
  return objValue;
}

module.exports = customDefaultsAssignIn;
", "node_modules/lodash/_customDefaultsAssignIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_customDefaultsAssignIn.js");
    }
}
