<?php

/* node_modules/lodash/_copySymbolsIn.js */
class __TwigTemplate_3b87c9d9b1da587b60fc8f58e16041892375420d130732bf436207bf75ecbd7d extends Twig_Template
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
        $__internal_d7c48e5188af8cd319fe5df97d8de0d3880e4148b6a34efe9b708d168f61f20d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7c48e5188af8cd319fe5df97d8de0d3880e4148b6a34efe9b708d168f61f20d->enter($__internal_d7c48e5188af8cd319fe5df97d8de0d3880e4148b6a34efe9b708d168f61f20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_copySymbolsIn.js"));

        // line 1
        echo "var copyObject = require('./_copyObject'),
    getSymbolsIn = require('./_getSymbolsIn');

/**
 * Copies own and inherited symbols of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy symbols from.
 * @param {Object} [object={}] The object to copy symbols to.
 * @returns {Object} Returns `object`.
 */
function copySymbolsIn(source, object) {
  return copyObject(source, getSymbolsIn(source), object);
}

module.exports = copySymbolsIn;
";
        
        $__internal_d7c48e5188af8cd319fe5df97d8de0d3880e4148b6a34efe9b708d168f61f20d->leave($__internal_d7c48e5188af8cd319fe5df97d8de0d3880e4148b6a34efe9b708d168f61f20d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_copySymbolsIn.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var copyObject = require('./_copyObject'),
    getSymbolsIn = require('./_getSymbolsIn');

/**
 * Copies own and inherited symbols of `source` to `object`.
 *
 * @private
 * @param {Object} source The object to copy symbols from.
 * @param {Object} [object={}] The object to copy symbols to.
 * @returns {Object} Returns `object`.
 */
function copySymbolsIn(source, object) {
  return copyObject(source, getSymbolsIn(source), object);
}

module.exports = copySymbolsIn;
", "node_modules/lodash/_copySymbolsIn.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_copySymbolsIn.js");
    }
}
