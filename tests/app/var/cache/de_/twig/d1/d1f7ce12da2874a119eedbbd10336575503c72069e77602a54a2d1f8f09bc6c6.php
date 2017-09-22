<?php

/* node_modules/request/node_modules/qs/test/utils.js */
class __TwigTemplate_cd31b83c34447a5d9678707f7c23b514517e25f803e1e557e222ec0e7175e23c extends Twig_Template
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
        $__internal_1b11e03a4c174ff60ef8264401c1a0fa09b2d76a9e04cbe0dd42f5d2106980d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b11e03a4c174ff60ef8264401c1a0fa09b2d76a9e04cbe0dd42f5d2106980d0->enter($__internal_1b11e03a4c174ff60ef8264401c1a0fa09b2d76a9e04cbe0dd42f5d2106980d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/request/node_modules/qs/test/utils.js"));

        // line 1
        echo "'use strict';

var test = require('tape');
var utils = require('../lib/utils');

test('merge()', function (t) {
    t.deepEqual(utils.merge({ a: 'b' }, { a: 'c' }), { a: ['b', 'c'] }, 'merges two objects with the same key');

    var oneMerged = utils.merge({ foo: 'bar' }, { foo: { first: '123' } });
    t.deepEqual(oneMerged, { foo: ['bar', { first: '123' }] }, 'merges a standalone and an object into an array');

    var twoMerged = utils.merge({ foo: ['bar', { first: '123' }] }, { foo: { second: '456' } });
    t.deepEqual(twoMerged, { foo: { 0: 'bar', 1: { first: '123' }, second: '456' } }, 'merges a standalone and two objects into an array');

    var sandwiched = utils.merge({ foo: ['bar', { first: '123', second: '456' }] }, { foo: 'baz' });
    t.deepEqual(sandwiched, { foo: ['bar', { first: '123', second: '456' }, 'baz'] }, 'merges an object sandwiched by two standalones into an array');

    var nestedArrays = utils.merge({ foo: ['baz'] }, { foo: ['bar', 'xyzzy'] });
    t.deepEqual(nestedArrays, { foo: ['baz', 'bar', 'xyzzy'] });

    t.end();
});
";
        
        $__internal_1b11e03a4c174ff60ef8264401c1a0fa09b2d76a9e04cbe0dd42f5d2106980d0->leave($__internal_1b11e03a4c174ff60ef8264401c1a0fa09b2d76a9e04cbe0dd42f5d2106980d0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/request/node_modules/qs/test/utils.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var test = require('tape');
var utils = require('../lib/utils');

test('merge()', function (t) {
    t.deepEqual(utils.merge({ a: 'b' }, { a: 'c' }), { a: ['b', 'c'] }, 'merges two objects with the same key');

    var oneMerged = utils.merge({ foo: 'bar' }, { foo: { first: '123' } });
    t.deepEqual(oneMerged, { foo: ['bar', { first: '123' }] }, 'merges a standalone and an object into an array');

    var twoMerged = utils.merge({ foo: ['bar', { first: '123' }] }, { foo: { second: '456' } });
    t.deepEqual(twoMerged, { foo: { 0: 'bar', 1: { first: '123' }, second: '456' } }, 'merges a standalone and two objects into an array');

    var sandwiched = utils.merge({ foo: ['bar', { first: '123', second: '456' }] }, { foo: 'baz' });
    t.deepEqual(sandwiched, { foo: ['bar', { first: '123', second: '456' }, 'baz'] }, 'merges an object sandwiched by two standalones into an array');

    var nestedArrays = utils.merge({ foo: ['baz'] }, { foo: ['bar', 'xyzzy'] });
    t.deepEqual(nestedArrays, { foo: ['baz', 'bar', 'xyzzy'] });

    t.end();
});
", "node_modules/request/node_modules/qs/test/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/request/node_modules/qs/test/utils.js");
    }
}
