<?php

/* node_modules/lodash/_baseInvoke.js */
class __TwigTemplate_eab0a01da8f9eec7bd9fd016a8600d202fec67e11a74612593d2b119cf5f5702 extends Twig_Template
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
        $__internal_02837c2890b4f617fd35f0f6cbc615ffa60d73c50336aeed3f60c617b2a62906 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02837c2890b4f617fd35f0f6cbc615ffa60d73c50336aeed3f60c617b2a62906->enter($__internal_02837c2890b4f617fd35f0f6cbc615ffa60d73c50336aeed3f60c617b2a62906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseInvoke.js"));

        // line 1
        echo "var apply = require('./_apply'),
    castPath = require('./_castPath'),
    last = require('./last'),
    parent = require('./_parent'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.invoke` without support for individual
 * method arguments.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the method to invoke.
 * @param {Array} args The arguments to invoke the method with.
 * @returns {*} Returns the result of the invoked method.
 */
function baseInvoke(object, path, args) {
  path = castPath(path, object);
  object = parent(object, path);
  var func = object == null ? object : object[toKey(last(path))];
  return func == null ? undefined : apply(func, object, args);
}

module.exports = baseInvoke;
";
        
        $__internal_02837c2890b4f617fd35f0f6cbc615ffa60d73c50336aeed3f60c617b2a62906->leave($__internal_02837c2890b4f617fd35f0f6cbc615ffa60d73c50336aeed3f60c617b2a62906_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseInvoke.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply'),
    castPath = require('./_castPath'),
    last = require('./last'),
    parent = require('./_parent'),
    toKey = require('./_toKey');

/**
 * The base implementation of `_.invoke` without support for individual
 * method arguments.
 *
 * @private
 * @param {Object} object The object to query.
 * @param {Array|string} path The path of the method to invoke.
 * @param {Array} args The arguments to invoke the method with.
 * @returns {*} Returns the result of the invoked method.
 */
function baseInvoke(object, path, args) {
  path = castPath(path, object);
  object = parent(object, path);
  var func = object == null ? object : object[toKey(last(path))];
  return func == null ? undefined : apply(func, object, args);
}

module.exports = baseInvoke;
", "node_modules/lodash/_baseInvoke.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseInvoke.js");
    }
}
