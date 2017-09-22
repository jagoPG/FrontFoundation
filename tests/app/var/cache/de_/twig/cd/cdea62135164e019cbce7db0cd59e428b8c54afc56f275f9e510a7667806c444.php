<?php

/* node_modules/buffer/test/node/test-buffer-slow.js */
class __TwigTemplate_75cebcbf686d47eeb4586aae4c84b37d562ed500c4003dc9fa2eff5626a45289 extends Twig_Template
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
        $__internal_2b89dbc62289a5d786c5dc6ed7506f262b515520e813e67139cfa83621549efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b89dbc62289a5d786c5dc6ed7506f262b515520e813e67139cfa83621549efb->enter($__internal_2b89dbc62289a5d786c5dc6ed7506f262b515520e813e67139cfa83621549efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-slow.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;



var assert = require('assert');
var buffer = require('../../');
var Buffer = buffer.Buffer;
var SlowBuffer = buffer.SlowBuffer;

var ones = [1, 1, 1, 1];

// should create a Buffer
var sb = SlowBuffer(4);
assert(sb instanceof Buffer);
assert.strictEqual(sb.length, 4);
sb.fill(1);
for (var [key, value] of sb.entries()) {
  assert.deepStrictEqual(value, ones[key]);
}

// underlying ArrayBuffer should have the same length
assert.strictEqual(sb.buffer.byteLength, 4);

// should work without new
sb = SlowBuffer(4);
assert(sb instanceof Buffer);
assert.strictEqual(sb.length, 4);
sb.fill(1);
for (var [key, value] of sb.entries()) {
  assert.deepStrictEqual(value, ones[key]);
}

// should work with edge cases
assert.strictEqual(SlowBuffer(0).length, 0);
try {
  assert.strictEqual(
    SlowBuffer(buffer.kMaxLength).length, buffer.kMaxLength);
} catch (e) {
  assert.equal(e.message, 'Array buffer allocation failed');
}

// should work with number-coercible values
assert.strictEqual(SlowBuffer('6').length, 6);
assert.strictEqual(SlowBuffer(true).length, 1);

// should create zero-length buffer if parameter is not a number
assert.strictEqual(SlowBuffer().length, 0);
assert.strictEqual(SlowBuffer(NaN).length, 0);
assert.strictEqual(SlowBuffer({}).length, 0);
assert.strictEqual(SlowBuffer('string').length, 0);

// should throw with invalid length
assert.throws(function() {
  SlowBuffer(Infinity);
}, 'invalid Buffer length');
assert.throws(function() {
  SlowBuffer(-1);
}, 'invalid Buffer length');
assert.throws(function() {
  SlowBuffer(buffer.kMaxLength + 1);
}, 'invalid Buffer length');

";
        
        $__internal_2b89dbc62289a5d786c5dc6ed7506f262b515520e813e67139cfa83621549efb->leave($__internal_2b89dbc62289a5d786c5dc6ed7506f262b515520e813e67139cfa83621549efb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-slow.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var Buffer = require('../../').Buffer;



var assert = require('assert');
var buffer = require('../../');
var Buffer = buffer.Buffer;
var SlowBuffer = buffer.SlowBuffer;

var ones = [1, 1, 1, 1];

// should create a Buffer
var sb = SlowBuffer(4);
assert(sb instanceof Buffer);
assert.strictEqual(sb.length, 4);
sb.fill(1);
for (var [key, value] of sb.entries()) {
  assert.deepStrictEqual(value, ones[key]);
}

// underlying ArrayBuffer should have the same length
assert.strictEqual(sb.buffer.byteLength, 4);

// should work without new
sb = SlowBuffer(4);
assert(sb instanceof Buffer);
assert.strictEqual(sb.length, 4);
sb.fill(1);
for (var [key, value] of sb.entries()) {
  assert.deepStrictEqual(value, ones[key]);
}

// should work with edge cases
assert.strictEqual(SlowBuffer(0).length, 0);
try {
  assert.strictEqual(
    SlowBuffer(buffer.kMaxLength).length, buffer.kMaxLength);
} catch (e) {
  assert.equal(e.message, 'Array buffer allocation failed');
}

// should work with number-coercible values
assert.strictEqual(SlowBuffer('6').length, 6);
assert.strictEqual(SlowBuffer(true).length, 1);

// should create zero-length buffer if parameter is not a number
assert.strictEqual(SlowBuffer().length, 0);
assert.strictEqual(SlowBuffer(NaN).length, 0);
assert.strictEqual(SlowBuffer({}).length, 0);
assert.strictEqual(SlowBuffer('string').length, 0);

// should throw with invalid length
assert.throws(function() {
  SlowBuffer(Infinity);
}, 'invalid Buffer length');
assert.throws(function() {
  SlowBuffer(-1);
}, 'invalid Buffer length');
assert.throws(function() {
  SlowBuffer(buffer.kMaxLength + 1);
}, 'invalid Buffer length');

", "node_modules/buffer/test/node/test-buffer-slow.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-slow.js");
    }
}
