<?php

/* node_modules/lodash/_baseIteratee.js */
class __TwigTemplate_295b82382a283d778efadcff1dd9005036ad0ee0f7acc69e655bcaf8e14aa3ad extends Twig_Template
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
        $__internal_6f91b7bcac7c7268be4f12e8d0d64363ce005a7152613b3dc36f2c7eff45d843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f91b7bcac7c7268be4f12e8d0d64363ce005a7152613b3dc36f2c7eff45d843->enter($__internal_6f91b7bcac7c7268be4f12e8d0d64363ce005a7152613b3dc36f2c7eff45d843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseIteratee.js"));

        // line 1
        echo "var baseMatches = require('./_baseMatches'),
    baseMatchesProperty = require('./_baseMatchesProperty'),
    identity = require('./identity'),
    isArray = require('./isArray'),
    property = require('./property');

/**
 * The base implementation of `_.iteratee`.
 *
 * @private
 * @param {*} [value=_.identity] The value to convert to an iteratee.
 * @returns {Function} Returns the iteratee.
 */
function baseIteratee(value) {
  // Don't store the `typeof` result in a variable to avoid a JIT bug in Safari 9.
  // See https://bugs.webkit.org/show_bug.cgi?id=156034 for more details.
  if (typeof value == 'function') {
    return value;
  }
  if (value == null) {
    return identity;
  }
  if (typeof value == 'object') {
    return isArray(value)
      ? baseMatchesProperty(value[0], value[1])
      : baseMatches(value);
  }
  return property(value);
}

module.exports = baseIteratee;
";
        
        $__internal_6f91b7bcac7c7268be4f12e8d0d64363ce005a7152613b3dc36f2c7eff45d843->leave($__internal_6f91b7bcac7c7268be4f12e8d0d64363ce005a7152613b3dc36f2c7eff45d843_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseIteratee.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseMatches = require('./_baseMatches'),
    baseMatchesProperty = require('./_baseMatchesProperty'),
    identity = require('./identity'),
    isArray = require('./isArray'),
    property = require('./property');

/**
 * The base implementation of `_.iteratee`.
 *
 * @private
 * @param {*} [value=_.identity] The value to convert to an iteratee.
 * @returns {Function} Returns the iteratee.
 */
function baseIteratee(value) {
  // Don't store the `typeof` result in a variable to avoid a JIT bug in Safari 9.
  // See https://bugs.webkit.org/show_bug.cgi?id=156034 for more details.
  if (typeof value == 'function') {
    return value;
  }
  if (value == null) {
    return identity;
  }
  if (typeof value == 'object') {
    return isArray(value)
      ? baseMatchesProperty(value[0], value[1])
      : baseMatches(value);
  }
  return property(value);
}

module.exports = baseIteratee;
", "node_modules/lodash/_baseIteratee.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseIteratee.js");
    }
}
