<?php

/* node_modules/lodash/_LazyWrapper.js */
class __TwigTemplate_9f7ce5d00209f485536c06f0926ce03ab936bcb7daf01194e9e9639940c1ba89 extends Twig_Template
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
        $__internal_2cd686243eb9756dc247d9b92e84d5380db5aa914432c395e3813137849fdfae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd686243eb9756dc247d9b92e84d5380db5aa914432c395e3813137849fdfae->enter($__internal_2cd686243eb9756dc247d9b92e84d5380db5aa914432c395e3813137849fdfae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_LazyWrapper.js"));

        // line 1
        echo "var baseCreate = require('./_baseCreate'),
    baseLodash = require('./_baseLodash');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Creates a lazy wrapper object which wraps `value` to enable lazy evaluation.
 *
 * @private
 * @constructor
 * @param {*} value The value to wrap.
 */
function LazyWrapper(value) {
  this.__wrapped__ = value;
  this.__actions__ = [];
  this.__dir__ = 1;
  this.__filtered__ = false;
  this.__iteratees__ = [];
  this.__takeCount__ = MAX_ARRAY_LENGTH;
  this.__views__ = [];
}

// Ensure `LazyWrapper` is an instance of `baseLodash`.
LazyWrapper.prototype = baseCreate(baseLodash.prototype);
LazyWrapper.prototype.constructor = LazyWrapper;

module.exports = LazyWrapper;
";
        
        $__internal_2cd686243eb9756dc247d9b92e84d5380db5aa914432c395e3813137849fdfae->leave($__internal_2cd686243eb9756dc247d9b92e84d5380db5aa914432c395e3813137849fdfae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_LazyWrapper.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseCreate = require('./_baseCreate'),
    baseLodash = require('./_baseLodash');

/** Used as references for the maximum length and index of an array. */
var MAX_ARRAY_LENGTH = 4294967295;

/**
 * Creates a lazy wrapper object which wraps `value` to enable lazy evaluation.
 *
 * @private
 * @constructor
 * @param {*} value The value to wrap.
 */
function LazyWrapper(value) {
  this.__wrapped__ = value;
  this.__actions__ = [];
  this.__dir__ = 1;
  this.__filtered__ = false;
  this.__iteratees__ = [];
  this.__takeCount__ = MAX_ARRAY_LENGTH;
  this.__views__ = [];
}

// Ensure `LazyWrapper` is an instance of `baseLodash`.
LazyWrapper.prototype = baseCreate(baseLodash.prototype);
LazyWrapper.prototype.constructor = LazyWrapper;

module.exports = LazyWrapper;
", "node_modules/lodash/_LazyWrapper.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_LazyWrapper.js");
    }
}
