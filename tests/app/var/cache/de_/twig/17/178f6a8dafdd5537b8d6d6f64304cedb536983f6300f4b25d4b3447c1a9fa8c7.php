<?php

/* node_modules/lodash/_Stack.js */
class __TwigTemplate_f08216b4cb0f7eb14dfab5cf4cca3fa5297c6dc67d1c7ff678be574e5f246ebb extends Twig_Template
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
        $__internal_f81798aa5afbae23bd45fc3047e9e8ec7644c483aaf6b41c1719fcc482094852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f81798aa5afbae23bd45fc3047e9e8ec7644c483aaf6b41c1719fcc482094852->enter($__internal_f81798aa5afbae23bd45fc3047e9e8ec7644c483aaf6b41c1719fcc482094852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_Stack.js"));

        // line 1
        echo "var ListCache = require('./_ListCache'),
    stackClear = require('./_stackClear'),
    stackDelete = require('./_stackDelete'),
    stackGet = require('./_stackGet'),
    stackHas = require('./_stackHas'),
    stackSet = require('./_stackSet');

/**
 * Creates a stack cache object to store key-value pairs.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function Stack(entries) {
  var data = this.__data__ = new ListCache(entries);
  this.size = data.size;
}

// Add methods to `Stack`.
Stack.prototype.clear = stackClear;
Stack.prototype['delete'] = stackDelete;
Stack.prototype.get = stackGet;
Stack.prototype.has = stackHas;
Stack.prototype.set = stackSet;

module.exports = Stack;
";
        
        $__internal_f81798aa5afbae23bd45fc3047e9e8ec7644c483aaf6b41c1719fcc482094852->leave($__internal_f81798aa5afbae23bd45fc3047e9e8ec7644c483aaf6b41c1719fcc482094852_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_Stack.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ListCache = require('./_ListCache'),
    stackClear = require('./_stackClear'),
    stackDelete = require('./_stackDelete'),
    stackGet = require('./_stackGet'),
    stackHas = require('./_stackHas'),
    stackSet = require('./_stackSet');

/**
 * Creates a stack cache object to store key-value pairs.
 *
 * @private
 * @constructor
 * @param {Array} [entries] The key-value pairs to cache.
 */
function Stack(entries) {
  var data = this.__data__ = new ListCache(entries);
  this.size = data.size;
}

// Add methods to `Stack`.
Stack.prototype.clear = stackClear;
Stack.prototype['delete'] = stackDelete;
Stack.prototype.get = stackGet;
Stack.prototype.has = stackHas;
Stack.prototype.set = stackSet;

module.exports = Stack;
", "node_modules/lodash/_Stack.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_Stack.js");
    }
}
