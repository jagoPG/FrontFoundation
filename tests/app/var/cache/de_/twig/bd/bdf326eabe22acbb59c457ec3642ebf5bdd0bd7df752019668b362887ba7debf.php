<?php

/* node_modules/lodash/_isKey.js */
class __TwigTemplate_dfa50a9ca101c2d3e780417bb53c924b0c40c50655337487c657411126728248 extends Twig_Template
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
        $__internal_f8e5086b19a0490d091fc3aee3d986965d506915c0d974718c8002f14a3037e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8e5086b19a0490d091fc3aee3d986965d506915c0d974718c8002f14a3037e7->enter($__internal_f8e5086b19a0490d091fc3aee3d986965d506915c0d974718c8002f14a3037e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isKey.js"));

        // line 1
        echo "var isArray = require('./isArray'),
    isSymbol = require('./isSymbol');

/** Used to match property names within property paths. */
var reIsDeepProp = /\\.|\\[(?:[^[\\]]*|([\"'])(?:(?!\\1)[^\\\\]|\\\\.)*?\\1)\\]/,
    reIsPlainProp = /^\\w*\$/;

/**
 * Checks if `value` is a property name and not a property path.
 *
 * @private
 * @param {*} value The value to check.
 * @param {Object} [object] The object to query keys on.
 * @returns {boolean} Returns `true` if `value` is a property name, else `false`.
 */
function isKey(value, object) {
  if (isArray(value)) {
    return false;
  }
  var type = typeof value;
  if (type == 'number' || type == 'symbol' || type == 'boolean' ||
      value == null || isSymbol(value)) {
    return true;
  }
  return reIsPlainProp.test(value) || !reIsDeepProp.test(value) ||
    (object != null && value in Object(object));
}

module.exports = isKey;
";
        
        $__internal_f8e5086b19a0490d091fc3aee3d986965d506915c0d974718c8002f14a3037e7->leave($__internal_f8e5086b19a0490d091fc3aee3d986965d506915c0d974718c8002f14a3037e7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isKey.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isArray = require('./isArray'),
    isSymbol = require('./isSymbol');

/** Used to match property names within property paths. */
var reIsDeepProp = /\\.|\\[(?:[^[\\]]*|([\"'])(?:(?!\\1)[^\\\\]|\\\\.)*?\\1)\\]/,
    reIsPlainProp = /^\\w*\$/;

/**
 * Checks if `value` is a property name and not a property path.
 *
 * @private
 * @param {*} value The value to check.
 * @param {Object} [object] The object to query keys on.
 * @returns {boolean} Returns `true` if `value` is a property name, else `false`.
 */
function isKey(value, object) {
  if (isArray(value)) {
    return false;
  }
  var type = typeof value;
  if (type == 'number' || type == 'symbol' || type == 'boolean' ||
      value == null || isSymbol(value)) {
    return true;
  }
  return reIsPlainProp.test(value) || !reIsDeepProp.test(value) ||
    (object != null && value in Object(object));
}

module.exports = isKey;
", "node_modules/lodash/_isKey.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isKey.js");
    }
}
