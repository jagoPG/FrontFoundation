<?php

/* node_modules/lodash/_LodashWrapper.js */
class __TwigTemplate_d3f86330820643f70c3c827b5ebafc7cfc634db78cd9bf80ec6f31e572702a9b extends Twig_Template
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
        $__internal_7e8bb15e5f0bf064e3b26b7603dc14b3d009df076049db2355c436a49ea120d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8bb15e5f0bf064e3b26b7603dc14b3d009df076049db2355c436a49ea120d7->enter($__internal_7e8bb15e5f0bf064e3b26b7603dc14b3d009df076049db2355c436a49ea120d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/lodash/_LodashWrapper.js"));

        // line 1
        echo "var baseCreate = require('./_baseCreate'),
    baseLodash = require('./_baseLodash');

/**
 * The base constructor for creating `lodash` wrapper objects.
 *
 * @private
 * @param {*} value The value to wrap.
 * @param {boolean} [chainAll] Enable explicit method chain sequences.
 */
function LodashWrapper(value, chainAll) {
  this.__wrapped__ = value;
  this.__actions__ = [];
  this.__chain__ = !!chainAll;
  this.__index__ = 0;
  this.__values__ = undefined;
}

LodashWrapper.prototype = baseCreate(baseLodash.prototype);
LodashWrapper.prototype.constructor = LodashWrapper;

module.exports = LodashWrapper;
";
        
        $__internal_7e8bb15e5f0bf064e3b26b7603dc14b3d009df076049db2355c436a49ea120d7->leave($__internal_7e8bb15e5f0bf064e3b26b7603dc14b3d009df076049db2355c436a49ea120d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/lodash/_LodashWrapper.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var baseCreate = require('./_baseCreate'),
    baseLodash = require('./_baseLodash');

/**
 * The base constructor for creating `lodash` wrapper objects.
 *
 * @private
 * @param {*} value The value to wrap.
 * @param {boolean} [chainAll] Enable explicit method chain sequences.
 */
function LodashWrapper(value, chainAll) {
  this.__wrapped__ = value;
  this.__actions__ = [];
  this.__chain__ = !!chainAll;
  this.__index__ = 0;
  this.__values__ = undefined;
}

LodashWrapper.prototype = baseCreate(baseLodash.prototype);
LodashWrapper.prototype.constructor = LodashWrapper;

module.exports = LodashWrapper;
", "node_modules/lodash/_LodashWrapper.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/lodash/_LodashWrapper.js");
    }
}
