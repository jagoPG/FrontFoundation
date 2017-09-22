<?php

/* node_modules/fsevents/node_modules/core-util-is/test.js */
class __TwigTemplate_725d283b13f7e7b7c811df0ef47f8ee827757e6a75caf1b86cb26ce6755d1650 extends Twig_Template
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
        $__internal_0194bf4dbc83a887c5da0fdddfb7667ef3da14af641c9c333ed101f245332d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0194bf4dbc83a887c5da0fdddfb7667ef3da14af641c9c333ed101f245332d16->enter($__internal_0194bf4dbc83a887c5da0fdddfb7667ef3da14af641c9c333ed101f245332d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/core-util-is/test.js"));

        // line 1
        echo "var assert = require('tap');

var t = require('./lib/util');

assert.equal(t.isArray([]), true);
assert.equal(t.isArray({}), false);

assert.equal(t.isBoolean(null), false);
assert.equal(t.isBoolean(true), true);
assert.equal(t.isBoolean(false), true);

assert.equal(t.isNull(null), true);
assert.equal(t.isNull(undefined), false);
assert.equal(t.isNull(false), false);
assert.equal(t.isNull(), false);

assert.equal(t.isNullOrUndefined(null), true);
assert.equal(t.isNullOrUndefined(undefined), true);
assert.equal(t.isNullOrUndefined(false), false);
assert.equal(t.isNullOrUndefined(), true);

assert.equal(t.isNumber(null), false);
assert.equal(t.isNumber('1'), false);
assert.equal(t.isNumber(1), true);

assert.equal(t.isString(null), false);
assert.equal(t.isString('1'), true);
assert.equal(t.isString(1), false);

assert.equal(t.isSymbol(null), false);
assert.equal(t.isSymbol('1'), false);
assert.equal(t.isSymbol(1), false);
assert.equal(t.isSymbol(Symbol()), true);

assert.equal(t.isUndefined(null), false);
assert.equal(t.isUndefined(undefined), true);
assert.equal(t.isUndefined(false), false);
assert.equal(t.isUndefined(), true);

assert.equal(t.isRegExp(null), false);
assert.equal(t.isRegExp('1'), false);
assert.equal(t.isRegExp(new RegExp()), true);

assert.equal(t.isObject({}), true);
assert.equal(t.isObject([]), true);
assert.equal(t.isObject(new RegExp()), true);
assert.equal(t.isObject(new Date()), true);

assert.equal(t.isDate(null), false);
assert.equal(t.isDate('1'), false);
assert.equal(t.isDate(new Date()), true);

assert.equal(t.isError(null), false);
assert.equal(t.isError({ err: true }), false);
assert.equal(t.isError(new Error()), true);

assert.equal(t.isFunction(null), false);
assert.equal(t.isFunction({ }), false);
assert.equal(t.isFunction(function() {}), true);

assert.equal(t.isPrimitive(null), true);
assert.equal(t.isPrimitive(''), true);
assert.equal(t.isPrimitive(0), true);
assert.equal(t.isPrimitive(new Date()), false);

assert.equal(t.isBuffer(null), false);
assert.equal(t.isBuffer({}), false);
assert.equal(t.isBuffer(new Buffer(0)), true);
";
        
        $__internal_0194bf4dbc83a887c5da0fdddfb7667ef3da14af641c9c333ed101f245332d16->leave($__internal_0194bf4dbc83a887c5da0fdddfb7667ef3da14af641c9c333ed101f245332d16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/core-util-is/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var assert = require('tap');

var t = require('./lib/util');

assert.equal(t.isArray([]), true);
assert.equal(t.isArray({}), false);

assert.equal(t.isBoolean(null), false);
assert.equal(t.isBoolean(true), true);
assert.equal(t.isBoolean(false), true);

assert.equal(t.isNull(null), true);
assert.equal(t.isNull(undefined), false);
assert.equal(t.isNull(false), false);
assert.equal(t.isNull(), false);

assert.equal(t.isNullOrUndefined(null), true);
assert.equal(t.isNullOrUndefined(undefined), true);
assert.equal(t.isNullOrUndefined(false), false);
assert.equal(t.isNullOrUndefined(), true);

assert.equal(t.isNumber(null), false);
assert.equal(t.isNumber('1'), false);
assert.equal(t.isNumber(1), true);

assert.equal(t.isString(null), false);
assert.equal(t.isString('1'), true);
assert.equal(t.isString(1), false);

assert.equal(t.isSymbol(null), false);
assert.equal(t.isSymbol('1'), false);
assert.equal(t.isSymbol(1), false);
assert.equal(t.isSymbol(Symbol()), true);

assert.equal(t.isUndefined(null), false);
assert.equal(t.isUndefined(undefined), true);
assert.equal(t.isUndefined(false), false);
assert.equal(t.isUndefined(), true);

assert.equal(t.isRegExp(null), false);
assert.equal(t.isRegExp('1'), false);
assert.equal(t.isRegExp(new RegExp()), true);

assert.equal(t.isObject({}), true);
assert.equal(t.isObject([]), true);
assert.equal(t.isObject(new RegExp()), true);
assert.equal(t.isObject(new Date()), true);

assert.equal(t.isDate(null), false);
assert.equal(t.isDate('1'), false);
assert.equal(t.isDate(new Date()), true);

assert.equal(t.isError(null), false);
assert.equal(t.isError({ err: true }), false);
assert.equal(t.isError(new Error()), true);

assert.equal(t.isFunction(null), false);
assert.equal(t.isFunction({ }), false);
assert.equal(t.isFunction(function() {}), true);

assert.equal(t.isPrimitive(null), true);
assert.equal(t.isPrimitive(''), true);
assert.equal(t.isPrimitive(0), true);
assert.equal(t.isPrimitive(new Date()), false);

assert.equal(t.isBuffer(null), false);
assert.equal(t.isBuffer({}), false);
assert.equal(t.isBuffer(new Buffer(0)), true);
", "node_modules/fsevents/node_modules/core-util-is/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/core-util-is/test.js");
    }
}
