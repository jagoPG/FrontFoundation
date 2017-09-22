<?php

/* node_modules/buffer/test/node/test-buffer-badhex.js */
class __TwigTemplate_bfa02b1921d2fd2990d2f06a434d9d280aa1b39f3b02da90157721b133d07cc0 extends Twig_Template
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
        $__internal_39ed594426dad78543fb0280b0c124f57335f5bb79e12c0758f68a968143a7c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ed594426dad78543fb0280b0c124f57335f5bb79e12c0758f68a968143a7c4->enter($__internal_39ed594426dad78543fb0280b0c124f57335f5bb79e12c0758f68a968143a7c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-badhex.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');
var Buffer = require('../../').Buffer;

// Test hex strings and bad hex strings
{
  var buf1 = Buffer.alloc(4);
  assert.strictEqual(buf1.length, 4);
  assert.deepStrictEqual(buf1, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf1.write('abcdxx', 0, 'hex'), 2);
  assert.deepStrictEqual(buf1, new Buffer([0xab, 0xcd, 0x00, 0x00]));
  assert.strictEqual(buf1.toString('hex'), 'abcd0000');
  assert.strictEqual(buf1.write('abcdef01', 0, 'hex'), 4);
  assert.deepStrictEqual(buf1, new Buffer([0xab, 0xcd, 0xef, 0x01]));
  assert.strictEqual(buf1.toString('hex'), 'abcdef01');

  var buf2 = Buffer.from(buf1.toString('hex'), 'hex');
  assert.strictEqual(buf1.toString('hex'), buf2.toString('hex'));

  var buf3 = Buffer.alloc(5);
  assert.strictEqual(buf3.write('abcdxx', 1, 'hex'), 2);
  assert.strictEqual(buf3.toString('hex'), '00abcd0000');

  var buf4 = Buffer.alloc(4);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('xxabcd', 0, 'hex'), 0);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('xxab', 1, 'hex'), 0);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('cdxxab', 0, 'hex'), 1);
  assert.deepStrictEqual(buf4, new Buffer([0xcd, 0, 0, 0]));

  var buf5 = Buffer.alloc(256);
  for (var i = 0; i < 256; i++)
    buf5[i] = i;

  var hex = buf5.toString('hex');
  assert.deepStrictEqual(Buffer.from(hex, 'hex'), buf5);

  var badHex = hex.slice(0, 256) + 'xx' + hex.slice(256, 510);
  assert.deepStrictEqual(Buffer.from(badHex, 'hex'), buf5.slice(0, 128));
}

";
        
        $__internal_39ed594426dad78543fb0280b0c124f57335f5bb79e12c0758f68a968143a7c4->leave($__internal_39ed594426dad78543fb0280b0c124f57335f5bb79e12c0758f68a968143a7c4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-badhex.js";
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
var Buffer = require('../../').Buffer;

// Test hex strings and bad hex strings
{
  var buf1 = Buffer.alloc(4);
  assert.strictEqual(buf1.length, 4);
  assert.deepStrictEqual(buf1, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf1.write('abcdxx', 0, 'hex'), 2);
  assert.deepStrictEqual(buf1, new Buffer([0xab, 0xcd, 0x00, 0x00]));
  assert.strictEqual(buf1.toString('hex'), 'abcd0000');
  assert.strictEqual(buf1.write('abcdef01', 0, 'hex'), 4);
  assert.deepStrictEqual(buf1, new Buffer([0xab, 0xcd, 0xef, 0x01]));
  assert.strictEqual(buf1.toString('hex'), 'abcdef01');

  var buf2 = Buffer.from(buf1.toString('hex'), 'hex');
  assert.strictEqual(buf1.toString('hex'), buf2.toString('hex'));

  var buf3 = Buffer.alloc(5);
  assert.strictEqual(buf3.write('abcdxx', 1, 'hex'), 2);
  assert.strictEqual(buf3.toString('hex'), '00abcd0000');

  var buf4 = Buffer.alloc(4);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('xxabcd', 0, 'hex'), 0);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('xxab', 1, 'hex'), 0);
  assert.deepStrictEqual(buf4, new Buffer([0, 0, 0, 0]));
  assert.strictEqual(buf4.write('cdxxab', 0, 'hex'), 1);
  assert.deepStrictEqual(buf4, new Buffer([0xcd, 0, 0, 0]));

  var buf5 = Buffer.alloc(256);
  for (var i = 0; i < 256; i++)
    buf5[i] = i;

  var hex = buf5.toString('hex');
  assert.deepStrictEqual(Buffer.from(hex, 'hex'), buf5);

  var badHex = hex.slice(0, 256) + 'xx' + hex.slice(256, 510);
  assert.deepStrictEqual(Buffer.from(badHex, 'hex'), buf5.slice(0, 128));
}

", "node_modules/buffer/test/node/test-buffer-badhex.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-badhex.js");
    }
}
