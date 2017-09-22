<?php

/* node_modules/lodash/_cloneMap.js */
class __TwigTemplate_94368aff3e2a5efd8ce0442fa19e7eab594607f9262ed4cf15b328594552a0ec extends Twig_Template
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
        $__internal_c01e6b82b2f9022b2527c77893362507fe46d2a258cef48149e6961c6d02f231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c01e6b82b2f9022b2527c77893362507fe46d2a258cef48149e6961c6d02f231->enter($__internal_c01e6b82b2f9022b2527c77893362507fe46d2a258cef48149e6961c6d02f231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_cloneMap.js"));

        // line 1
        echo "var addMapEntry = require('./_addMapEntry'),
    arrayReduce = require('./_arrayReduce'),
    mapToArray = require('./_mapToArray');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a clone of `map`.
 *
 * @private
 * @param {Object} map The map to clone.
 * @param {Function} cloneFunc The function to clone values.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned map.
 */
function cloneMap(map, isDeep, cloneFunc) {
  var array = isDeep ? cloneFunc(mapToArray(map), CLONE_DEEP_FLAG) : mapToArray(map);
  return arrayReduce(array, addMapEntry, new map.constructor);
}

module.exports = cloneMap;
";
        
        $__internal_c01e6b82b2f9022b2527c77893362507fe46d2a258cef48149e6961c6d02f231->leave($__internal_c01e6b82b2f9022b2527c77893362507fe46d2a258cef48149e6961c6d02f231_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_cloneMap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var addMapEntry = require('./_addMapEntry'),
    arrayReduce = require('./_arrayReduce'),
    mapToArray = require('./_mapToArray');

/** Used to compose bitmasks for cloning. */
var CLONE_DEEP_FLAG = 1;

/**
 * Creates a clone of `map`.
 *
 * @private
 * @param {Object} map The map to clone.
 * @param {Function} cloneFunc The function to clone values.
 * @param {boolean} [isDeep] Specify a deep clone.
 * @returns {Object} Returns the cloned map.
 */
function cloneMap(map, isDeep, cloneFunc) {
  var array = isDeep ? cloneFunc(mapToArray(map), CLONE_DEEP_FLAG) : mapToArray(map);
  return arrayReduce(array, addMapEntry, new map.constructor);
}

module.exports = cloneMap;
", "node_modules/lodash/_cloneMap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_cloneMap.js");
    }
}
