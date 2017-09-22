<?php

/* node_modules/buffer/test/node/test-buffer-concat.js */
class __TwigTemplate_1c670159cb99dc01a745cea0c1ec08f978db1bf27536cc80fb54260e91619d78 extends Twig_Template
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
        $__internal_e07ce6e040e2b3496bd68b4bd3f177529648275e640e60ea781d43fec88f68ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07ce6e040e2b3496bd68b4bd3f177529648275e640e60ea781d43fec88f68ff->enter($__internal_e07ce6e040e2b3496bd68b4bd3f177529648275e640e60ea781d43fec88f68ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-concat.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

var zero = [];
var one = [ Buffer.from('asdf') ];
var long = [];
for (var i = 0; i < 10; i++) long.push(Buffer.from('asdf'));

var flatZero = Buffer.concat(zero);
var flatOne = Buffer.concat(one);
var flatLong = Buffer.concat(long);
var flatLongLen = Buffer.concat(long, 40);

assert(flatZero.length === 0);
assert(flatOne.toString() === 'asdf');
// A special case where concat used to return the first item,
// if the length is one. This check is to make sure that we don't do that.
assert(flatOne !== one[0]);
assert(flatLong.toString() === (new Array(10 + 1).join('asdf')));
assert(flatLongLen.toString() === (new Array(10 + 1).join('asdf')));

assertWrongList();
assertWrongList(null);
assertWrongList(Buffer.from('hello'));
assertWrongList([42]);
assertWrongList(['hello', 'world']);
assertWrongList(['hello', Buffer.from('world')]);

function assertWrongList(value) {
  assert.throws(function() {
    Buffer.concat(value);
  }, function(err) {
    return err instanceof TypeError &&
           err.message === '\"list\" argument must be an Array of Buffers';
  });
}

";
        
        $__internal_e07ce6e040e2b3496bd68b4bd3f177529648275e640e60ea781d43fec88f68ff->leave($__internal_e07ce6e040e2b3496bd68b4bd3f177529648275e640e60ea781d43fec88f68ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-concat.js";
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

var zero = [];
var one = [ Buffer.from('asdf') ];
var long = [];
for (var i = 0; i < 10; i++) long.push(Buffer.from('asdf'));

var flatZero = Buffer.concat(zero);
var flatOne = Buffer.concat(one);
var flatLong = Buffer.concat(long);
var flatLongLen = Buffer.concat(long, 40);

assert(flatZero.length === 0);
assert(flatOne.toString() === 'asdf');
// A special case where concat used to return the first item,
// if the length is one. This check is to make sure that we don't do that.
assert(flatOne !== one[0]);
assert(flatLong.toString() === (new Array(10 + 1).join('asdf')));
assert(flatLongLen.toString() === (new Array(10 + 1).join('asdf')));

assertWrongList();
assertWrongList(null);
assertWrongList(Buffer.from('hello'));
assertWrongList([42]);
assertWrongList(['hello', 'world']);
assertWrongList(['hello', Buffer.from('world')]);

function assertWrongList(value) {
  assert.throws(function() {
    Buffer.concat(value);
  }, function(err) {
    return err instanceof TypeError &&
           err.message === '\"list\" argument must be an Array of Buffers';
  });
}

", "node_modules/buffer/test/node/test-buffer-concat.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-concat.js");
    }
}
