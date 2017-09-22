<?php

/* node_modules/lodash/_baseCreate.js */
class __TwigTemplate_b937f1cccd7e10441d818827a9c89f59d6a2acd0fdae2d84d9e10f3ae6562314 extends Twig_Template
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
        $__internal_2d1f7fd4776a37102d69f699b8098d65ff789d5c889881a2756be214bd2a5991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d1f7fd4776a37102d69f699b8098d65ff789d5c889881a2756be214bd2a5991->enter($__internal_2d1f7fd4776a37102d69f699b8098d65ff789d5c889881a2756be214bd2a5991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseCreate.js"));

        // line 1
        echo "var isObject = require('./isObject');

/** Built-in value references. */
var objectCreate = Object.create;

/**
 * The base implementation of `_.create` without support for assigning
 * properties to the created object.
 *
 * @private
 * @param {Object} proto The object to inherit from.
 * @returns {Object} Returns the new object.
 */
var baseCreate = (function() {
  function object() {}
  return function(proto) {
    if (!isObject(proto)) {
      return {};
    }
    if (objectCreate) {
      return objectCreate(proto);
    }
    object.prototype = proto;
    var result = new object;
    object.prototype = undefined;
    return result;
  };
}());

module.exports = baseCreate;
";
        
        $__internal_2d1f7fd4776a37102d69f699b8098d65ff789d5c889881a2756be214bd2a5991->leave($__internal_2d1f7fd4776a37102d69f699b8098d65ff789d5c889881a2756be214bd2a5991_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseCreate.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var isObject = require('./isObject');

/** Built-in value references. */
var objectCreate = Object.create;

/**
 * The base implementation of `_.create` without support for assigning
 * properties to the created object.
 *
 * @private
 * @param {Object} proto The object to inherit from.
 * @returns {Object} Returns the new object.
 */
var baseCreate = (function() {
  function object() {}
  return function(proto) {
    if (!isObject(proto)) {
      return {};
    }
    if (objectCreate) {
      return objectCreate(proto);
    }
    object.prototype = proto;
    var result = new object;
    object.prototype = undefined;
    return result;
  };
}());

module.exports = baseCreate;
", "node_modules/lodash/_baseCreate.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseCreate.js");
    }
}
