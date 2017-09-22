<?php

/* node_modules/lodash/_getSymbolsIn.js */
class __TwigTemplate_4f1b03dd8116d064da71da37430b9812bbc905b679b305b8784af6843d817c15 extends Twig_Template
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
        $__internal_5ad5bb24496ed3dd9b15ef83eca66e9521ed64d6b41a83fac118886d167d587f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad5bb24496ed3dd9b15ef83eca66e9521ed64d6b41a83fac118886d167d587f->enter($__internal_5ad5bb24496ed3dd9b15ef83eca66e9521ed64d6b41a83fac118886d167d587f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_getSymbolsIn.js"));

        // line 1
        echo "var arrayPush = require('./_arrayPush'),
    getPrototype = require('./_getPrototype'),
    getSymbols = require('./_getSymbols'),
    stubArray = require('./stubArray');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeGetSymbols = Object.getOwnPropertySymbols;

/**
 * Creates an array of the own and inherited enumerable symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of symbols.
 */
var getSymbolsIn = !nativeGetSymbols ? stubArray : function(object) {
  var result = [];
  while (object) {
    arrayPush(result, getSymbols(object));
    object = getPrototype(object);
  }
  return result;
};

module.exports = getSymbolsIn;
";
        
        $__internal_5ad5bb24496ed3dd9b15ef83eca66e9521ed64d6b41a83fac118886d167d587f->leave($__internal_5ad5bb24496ed3dd9b15ef83eca66e9521ed64d6b41a83fac118886d167d587f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_getSymbolsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var arrayPush = require('./_arrayPush'),
    getPrototype = require('./_getPrototype'),
    getSymbols = require('./_getSymbols'),
    stubArray = require('./stubArray');

/* Built-in method references for those with the same name as other `lodash` methods. */
var nativeGetSymbols = Object.getOwnPropertySymbols;

/**
 * Creates an array of the own and inherited enumerable symbols of `object`.
 *
 * @private
 * @param {Object} object The object to query.
 * @returns {Array} Returns the array of symbols.
 */
var getSymbolsIn = !nativeGetSymbols ? stubArray : function(object) {
  var result = [];
  while (object) {
    arrayPush(result, getSymbols(object));
    object = getPrototype(object);
  }
  return result;
};

module.exports = getSymbolsIn;
", "node_modules/lodash/_getSymbolsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_getSymbolsIn.js");
    }
}
