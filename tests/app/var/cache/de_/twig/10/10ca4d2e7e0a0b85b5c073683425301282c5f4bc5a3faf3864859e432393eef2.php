<?php

/* node_modules/lodash/_createOver.js */
class __TwigTemplate_8ed394eb946c792b1f598f0bea7b705c60ccd5bbd995485125f45cbd45cb66cd extends Twig_Template
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
        $__internal_66ed3df3137a773660f49c32326a97c56c7b38de3e26dcf6d6c98218758a476b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ed3df3137a773660f49c32326a97c56c7b38de3e26dcf6d6c98218758a476b->enter($__internal_66ed3df3137a773660f49c32326a97c56c7b38de3e26dcf6d6c98218758a476b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_createOver.js"));

        // line 1
        echo "var apply = require('./_apply'),
    arrayMap = require('./_arrayMap'),
    baseIteratee = require('./_baseIteratee'),
    baseRest = require('./_baseRest'),
    baseUnary = require('./_baseUnary'),
    flatRest = require('./_flatRest');

/**
 * Creates a function like `_.over`.
 *
 * @private
 * @param {Function} arrayFunc The function to iterate over iteratees.
 * @returns {Function} Returns the new over function.
 */
function createOver(arrayFunc) {
  return flatRest(function(iteratees) {
    iteratees = arrayMap(iteratees, baseUnary(baseIteratee));
    return baseRest(function(args) {
      var thisArg = this;
      return arrayFunc(iteratees, function(iteratee) {
        return apply(iteratee, thisArg, args);
      });
    });
  });
}

module.exports = createOver;
";
        
        $__internal_66ed3df3137a773660f49c32326a97c56c7b38de3e26dcf6d6c98218758a476b->leave($__internal_66ed3df3137a773660f49c32326a97c56c7b38de3e26dcf6d6c98218758a476b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_createOver.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var apply = require('./_apply'),
    arrayMap = require('./_arrayMap'),
    baseIteratee = require('./_baseIteratee'),
    baseRest = require('./_baseRest'),
    baseUnary = require('./_baseUnary'),
    flatRest = require('./_flatRest');

/**
 * Creates a function like `_.over`.
 *
 * @private
 * @param {Function} arrayFunc The function to iterate over iteratees.
 * @returns {Function} Returns the new over function.
 */
function createOver(arrayFunc) {
  return flatRest(function(iteratees) {
    iteratees = arrayMap(iteratees, baseUnary(baseIteratee));
    return baseRest(function(args) {
      var thisArg = this;
      return arrayFunc(iteratees, function(iteratee) {
        return apply(iteratee, thisArg, args);
      });
    });
  });
}

module.exports = createOver;
", "node_modules/lodash/_createOver.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_createOver.js");
    }
}
