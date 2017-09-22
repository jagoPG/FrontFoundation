<?php

/* node_modules/lodash/_customDefaultsMerge.js */
class __TwigTemplate_49bd4e7964614d942054ec59fb46124d4aa1fd096fe94ce249ecbd7198e87d71 extends Twig_Template
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
        $__internal_7471b8e4484177b86cbff88dcacf18bb8f33894db704bd54c95f7692da0e48b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7471b8e4484177b86cbff88dcacf18bb8f33894db704bd54c95f7692da0e48b7->enter($__internal_7471b8e4484177b86cbff88dcacf18bb8f33894db704bd54c95f7692da0e48b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_customDefaultsMerge.js"));

        // line 1
        echo "var baseMerge = require('./_baseMerge'),
    isObject = require('./isObject');

/**
 * Used by `_.defaultsDeep` to customize its `_.merge` use to merge source
 * objects into destination objects that are passed thru.
 *
 * @private
 * @param {*} objValue The destination value.
 * @param {*} srcValue The source value.
 * @param {string} key The key of the property to merge.
 * @param {Object} object The parent object of `objValue`.
 * @param {Object} source The parent object of `srcValue`.
 * @param {Object} [stack] Tracks traversed source values and their merged
 *  counterparts.
 * @returns {*} Returns the value to assign.
 */
function customDefaultsMerge(objValue, srcValue, key, object, source, stack) {
  if (isObject(objValue) && isObject(srcValue)) {
    // Recursively merge objects and arrays (susceptible to call stack limits).
    stack.set(srcValue, objValue);
    baseMerge(objValue, srcValue, undefined, customDefaultsMerge, stack);
    stack['delete'](srcValue);
  }
  return objValue;
}

module.exports = customDefaultsMerge;
";
        
        $__internal_7471b8e4484177b86cbff88dcacf18bb8f33894db704bd54c95f7692da0e48b7->leave($__internal_7471b8e4484177b86cbff88dcacf18bb8f33894db704bd54c95f7692da0e48b7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_customDefaultsMerge.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseMerge = require('./_baseMerge'),
    isObject = require('./isObject');

/**
 * Used by `_.defaultsDeep` to customize its `_.merge` use to merge source
 * objects into destination objects that are passed thru.
 *
 * @private
 * @param {*} objValue The destination value.
 * @param {*} srcValue The source value.
 * @param {string} key The key of the property to merge.
 * @param {Object} object The parent object of `objValue`.
 * @param {Object} source The parent object of `srcValue`.
 * @param {Object} [stack] Tracks traversed source values and their merged
 *  counterparts.
 * @returns {*} Returns the value to assign.
 */
function customDefaultsMerge(objValue, srcValue, key, object, source, stack) {
  if (isObject(objValue) && isObject(srcValue)) {
    // Recursively merge objects and arrays (susceptible to call stack limits).
    stack.set(srcValue, objValue);
    baseMerge(objValue, srcValue, undefined, customDefaultsMerge, stack);
    stack['delete'](srcValue);
  }
  return objValue;
}

module.exports = customDefaultsMerge;
", "node_modules/lodash/_customDefaultsMerge.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_customDefaultsMerge.js");
    }
}
