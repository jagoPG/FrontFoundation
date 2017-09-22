<?php

/* node_modules/lodash/_isIterateeCall.js */
class __TwigTemplate_02536a3e510b1c12b9a64dd2454aa55f3a1272e635e512860a4a1ba43d89f01f extends Twig_Template
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
        $__internal_9dc30e22e88c825f22246eaf4f467248967b296110044ecdb3c2e6ffb229b30b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc30e22e88c825f22246eaf4f467248967b296110044ecdb3c2e6ffb229b30b->enter($__internal_9dc30e22e88c825f22246eaf4f467248967b296110044ecdb3c2e6ffb229b30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_isIterateeCall.js"));

        // line 1
        echo "var eq = require('./eq'),
    isArrayLike = require('./isArrayLike'),
    isIndex = require('./_isIndex'),
    isObject = require('./isObject');

/**
 * Checks if the given arguments are from an iteratee call.
 *
 * @private
 * @param {*} value The potential iteratee value argument.
 * @param {*} index The potential iteratee index or key argument.
 * @param {*} object The potential iteratee object argument.
 * @returns {boolean} Returns `true` if the arguments are from an iteratee call,
 *  else `false`.
 */
function isIterateeCall(value, index, object) {
  if (!isObject(object)) {
    return false;
  }
  var type = typeof index;
  if (type == 'number'
        ? (isArrayLike(object) && isIndex(index, object.length))
        : (type == 'string' && index in object)
      ) {
    return eq(object[index], value);
  }
  return false;
}

module.exports = isIterateeCall;
";
        
        $__internal_9dc30e22e88c825f22246eaf4f467248967b296110044ecdb3c2e6ffb229b30b->leave($__internal_9dc30e22e88c825f22246eaf4f467248967b296110044ecdb3c2e6ffb229b30b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_isIterateeCall.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var eq = require('./eq'),
    isArrayLike = require('./isArrayLike'),
    isIndex = require('./_isIndex'),
    isObject = require('./isObject');

/**
 * Checks if the given arguments are from an iteratee call.
 *
 * @private
 * @param {*} value The potential iteratee value argument.
 * @param {*} index The potential iteratee index or key argument.
 * @param {*} object The potential iteratee object argument.
 * @returns {boolean} Returns `true` if the arguments are from an iteratee call,
 *  else `false`.
 */
function isIterateeCall(value, index, object) {
  if (!isObject(object)) {
    return false;
  }
  var type = typeof index;
  if (type == 'number'
        ? (isArrayLike(object) && isIndex(index, object.length))
        : (type == 'string' && index in object)
      ) {
    return eq(object[index], value);
  }
  return false;
}

module.exports = isIterateeCall;
", "node_modules/lodash/_isIterateeCall.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_isIterateeCall.js");
    }
}
