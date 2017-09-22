<?php

/* node_modules/lodash/_baseSome.js */
class __TwigTemplate_123f4a936ef92789904b9ca63adb0e990dd33bd0bf3731a4a85465fbc28993e3 extends Twig_Template
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
        $__internal_53c0a01516b7494a461c5ab6aa2c54acf3c7350a237a4a80ee5d053e3a6ae42a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53c0a01516b7494a461c5ab6aa2c54acf3c7350a237a4a80ee5d053e3a6ae42a->enter($__internal_53c0a01516b7494a461c5ab6aa2c54acf3c7350a237a4a80ee5d053e3a6ae42a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_baseSome.js"));

        // line 1
        echo "var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.some` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if any element passes the predicate check,
 *  else `false`.
 */
function baseSome(collection, predicate) {
  var result;

  baseEach(collection, function(value, index, collection) {
    result = predicate(value, index, collection);
    return !result;
  });
  return !!result;
}

module.exports = baseSome;
";
        
        $__internal_53c0a01516b7494a461c5ab6aa2c54acf3c7350a237a4a80ee5d053e3a6ae42a->leave($__internal_53c0a01516b7494a461c5ab6aa2c54acf3c7350a237a4a80ee5d053e3a6ae42a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_baseSome.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseEach = require('./_baseEach');

/**
 * The base implementation of `_.some` without support for iteratee shorthands.
 *
 * @private
 * @param {Array|Object} collection The collection to iterate over.
 * @param {Function} predicate The function invoked per iteration.
 * @returns {boolean} Returns `true` if any element passes the predicate check,
 *  else `false`.
 */
function baseSome(collection, predicate) {
  var result;

  baseEach(collection, function(value, index, collection) {
    result = predicate(value, index, collection);
    return !result;
  });
  return !!result;
}

module.exports = baseSome;
", "node_modules/lodash/_baseSome.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_baseSome.js");
    }
}
