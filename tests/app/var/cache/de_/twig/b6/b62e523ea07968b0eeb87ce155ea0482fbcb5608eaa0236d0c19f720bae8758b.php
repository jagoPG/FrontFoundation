<?php

/* node_modules/lodash/_castPath.js */
class __TwigTemplate_21215a2287bf4c12929a1b3f3f147eee0736c92ce814f9893e9553de63b727d0 extends Twig_Template
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
        $__internal_5aac8a510a04aaabe67380d7ccbefbceda4a60dd40416e4f793d8b04ce8acb60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aac8a510a04aaabe67380d7ccbefbceda4a60dd40416e4f793d8b04ce8acb60->enter($__internal_5aac8a510a04aaabe67380d7ccbefbceda4a60dd40416e4f793d8b04ce8acb60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_castPath.js"));

        // line 1
        echo "var isArray = require('./isArray'),
    isKey = require('./_isKey'),
    stringToPath = require('./_stringToPath'),
    toString = require('./toString');

/**
 * Casts `value` to a path array if it's not one.
 *
 * @private
 * @param {*} value The value to inspect.
 * @param {Object} [object] The object to query keys on.
 * @returns {Array} Returns the cast property path array.
 */
function castPath(value, object) {
  if (isArray(value)) {
    return value;
  }
  return isKey(value, object) ? [value] : stringToPath(toString(value));
}

module.exports = castPath;
";
        
        $__internal_5aac8a510a04aaabe67380d7ccbefbceda4a60dd40416e4f793d8b04ce8acb60->leave($__internal_5aac8a510a04aaabe67380d7ccbefbceda4a60dd40416e4f793d8b04ce8acb60_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_castPath.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArray = require('./isArray'),
    isKey = require('./_isKey'),
    stringToPath = require('./_stringToPath'),
    toString = require('./toString');

/**
 * Casts `value` to a path array if it's not one.
 *
 * @private
 * @param {*} value The value to inspect.
 * @param {Object} [object] The object to query keys on.
 * @returns {Array} Returns the cast property path array.
 */
function castPath(value, object) {
  if (isArray(value)) {
    return value;
  }
  return isKey(value, object) ? [value] : stringToPath(toString(value));
}

module.exports = castPath;
", "node_modules/lodash/_castPath.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_castPath.js");
    }
}
