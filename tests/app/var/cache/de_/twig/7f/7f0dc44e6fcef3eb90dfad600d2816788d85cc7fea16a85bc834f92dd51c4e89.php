<?php

/* node_modules/lodash/_copyObject.js */
class __TwigTemplate_47640d472ef24245425a6e94b7d61560e7e0fc952588577ed84683a789540158 extends Twig_Template
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
        $__internal_de4408e8a150e9e70074ae0c859319d8c84291536846093ce0e30b63c8f11420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de4408e8a150e9e70074ae0c859319d8c84291536846093ce0e30b63c8f11420->enter($__internal_de4408e8a150e9e70074ae0c859319d8c84291536846093ce0e30b63c8f11420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_copyObject.js"));

        // line 1
        echo "var assignValue = require('./_assignValue'),
    baseAssignValue = require('./_baseAssignValue');

/**
 * Copies properties of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy properties from.
 * @param {Array} props The property identifiers to copy.
 * @param {Object} [object={}] The object to copy properties to.
 * @param {Function} [customizer] The function to customize copied values.
 * @returns {Object} Returns `object`.
 */
function copyObject(source, props, object, customizer) {
  var isNew = !object;
  object || (object = {});

  var index = -1,
      length = props.length;

  while (++index < length) {
    var key = props[index];

    var newValue = customizer
      ? customizer(object[key], source[key], key, object, source)
      : undefined;

    if (newValue === undefined) {
      newValue = source[key];
    }
    if (isNew) {
      baseAssignValue(object, key, newValue);
    } else {
      assignValue(object, key, newValue);
    }
  }
  return object;
}

module.exports = copyObject;
";
        
        $__internal_de4408e8a150e9e70074ae0c859319d8c84291536846093ce0e30b63c8f11420->leave($__internal_de4408e8a150e9e70074ae0c859319d8c84291536846093ce0e30b63c8f11420_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_copyObject.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assignValue = require('./_assignValue'),
    baseAssignValue = require('./_baseAssignValue');

/**
 * Copies properties of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy properties from.
 * @param {Array} props The property identifiers to copy.
 * @param {Object} [object={}] The object to copy properties to.
 * @param {Function} [customizer] The function to customize copied values.
 * @returns {Object} Returns `object`.
 */
function copyObject(source, props, object, customizer) {
  var isNew = !object;
  object || (object = {});

  var index = -1,
      length = props.length;

  while (++index < length) {
    var key = props[index];

    var newValue = customizer
      ? customizer(object[key], source[key], key, object, source)
      : undefined;

    if (newValue === undefined) {
      newValue = source[key];
    }
    if (isNew) {
      baseAssignValue(object, key, newValue);
    } else {
      assignValue(object, key, newValue);
    }
  }
  return object;
}

module.exports = copyObject;
", "node_modules/lodash/_copyObject.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_copyObject.js");
    }
}
