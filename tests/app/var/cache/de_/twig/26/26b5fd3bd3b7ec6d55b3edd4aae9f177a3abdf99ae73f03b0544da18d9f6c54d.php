<?php

/* node_modules/lodash/_baseFill.js */
class __TwigTemplate_20a2e730d7781eb79aac5ec7861f33edcbe54d151134dcf103465d960c2d8f3a extends Twig_Template
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
        $__internal_6b92e5e913c46125baee58a3b732ed184e0eaf049b49db80d5713d084e51f54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b92e5e913c46125baee58a3b732ed184e0eaf049b49db80d5713d084e51f54a->enter($__internal_6b92e5e913c46125baee58a3b732ed184e0eaf049b49db80d5713d084e51f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseFill.js"));

        // line 1
        echo "var toInteger = require('./toInteger'),
    toLength = require('./toLength');

/**
 * The base implementation of `_.fill` without an iteratee call guard.
 *
 * @private
 * @param {Array} array The array to fill.
 * @param {*} value The value to fill `array` with.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns `array`.
 */
function baseFill(array, value, start, end) {
  var length = array.length;

  start = toInteger(start);
  if (start < 0) {
    start = -start > length ? 0 : (length + start);
  }
  end = (end === undefined || end > length) ? length : toInteger(end);
  if (end < 0) {
    end += length;
  }
  end = start > end ? 0 : toLength(end);
  while (start < end) {
    array[start++] = value;
  }
  return array;
}

module.exports = baseFill;
";
        
        $__internal_6b92e5e913c46125baee58a3b732ed184e0eaf049b49db80d5713d084e51f54a->leave($__internal_6b92e5e913c46125baee58a3b732ed184e0eaf049b49db80d5713d084e51f54a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseFill.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var toInteger = require('./toInteger'),
    toLength = require('./toLength');

/**
 * The base implementation of `_.fill` without an iteratee call guard.
 *
 * @private
 * @param {Array} array The array to fill.
 * @param {*} value The value to fill `array` with.
 * @param {number} [start=0] The start position.
 * @param {number} [end=array.length] The end position.
 * @returns {Array} Returns `array`.
 */
function baseFill(array, value, start, end) {
  var length = array.length;

  start = toInteger(start);
  if (start < 0) {
    start = -start > length ? 0 : (length + start);
  }
  end = (end === undefined || end > length) ? length : toInteger(end);
  if (end < 0) {
    end += length;
  }
  end = start > end ? 0 : toLength(end);
  while (start < end) {
    array[start++] = value;
  }
  return array;
}

module.exports = baseFill;
", "node_modules/lodash/_baseFill.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseFill.js");
    }
}
