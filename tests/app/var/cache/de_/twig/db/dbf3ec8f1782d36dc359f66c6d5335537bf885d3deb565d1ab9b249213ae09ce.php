<?php

/* node_modules/buffer/test/node/test-buffer-inspect.js */
class __TwigTemplate_1d3d13e36c3121e9c3fbc54681147570e9df0e040eb830dc35f96b0be5512278 extends Twig_Template
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
        $__internal_6a33bb28281dc89e799ab0c6d9d66b9979c177b2f69b0780e52f8d7cb52d612e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a33bb28281dc89e799ab0c6d9d66b9979c177b2f69b0780e52f8d7cb52d612e->enter($__internal_6a33bb28281dc89e799ab0c6d9d66b9979c177b2f69b0780e52f8d7cb52d612e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-inspect.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

var util = require('util');

var buffer = require('../../');

buffer.INSPECT_MAX_BYTES = 2;

var b = Buffer.allocUnsafe(4);
b.fill('1234');

var s = buffer.SlowBuffer(4);
s.fill('1234');

var expected = '<Buffer 31 32 ... >';

assert.strictEqual(util.inspect(b), expected);
assert.strictEqual(util.inspect(s), expected);

b = Buffer.allocUnsafe(2);
b.fill('12');

s = buffer.SlowBuffer(2);
s.fill('12');

expected = '<Buffer 31 32>';

assert.strictEqual(util.inspect(b), expected);
assert.strictEqual(util.inspect(s), expected);

buffer.INSPECT_MAX_BYTES = Infinity;

assert.doesNotThrow(function() {
  assert.strictEqual(util.inspect(b), expected);
  assert.strictEqual(util.inspect(s), expected);
});

";
        
        $__internal_6a33bb28281dc89e799ab0c6d9d66b9979c177b2f69b0780e52f8d7cb52d612e->leave($__internal_6a33bb28281dc89e799ab0c6d9d66b9979c177b2f69b0780e52f8d7cb52d612e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-inspect.js";
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

var util = require('util');

var buffer = require('../../');

buffer.INSPECT_MAX_BYTES = 2;

var b = Buffer.allocUnsafe(4);
b.fill('1234');

var s = buffer.SlowBuffer(4);
s.fill('1234');

var expected = '<Buffer 31 32 ... >';

assert.strictEqual(util.inspect(b), expected);
assert.strictEqual(util.inspect(s), expected);

b = Buffer.allocUnsafe(2);
b.fill('12');

s = buffer.SlowBuffer(2);
s.fill('12');

expected = '<Buffer 31 32>';

assert.strictEqual(util.inspect(b), expected);
assert.strictEqual(util.inspect(s), expected);

buffer.INSPECT_MAX_BYTES = Infinity;

assert.doesNotThrow(function() {
  assert.strictEqual(util.inspect(b), expected);
  assert.strictEqual(util.inspect(s), expected);
});

", "node_modules/buffer/test/node/test-buffer-inspect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-inspect.js");
    }
}
