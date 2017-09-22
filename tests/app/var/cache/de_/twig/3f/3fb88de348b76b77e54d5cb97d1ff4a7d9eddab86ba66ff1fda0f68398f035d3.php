<?php

/* node_modules/buffer/test/node/test-buffer-zero-fill-cli.js */
class __TwigTemplate_4a53af8da9f4f85650a9f261270423de13760605bb34943f8650a391f154f64d extends Twig_Template
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
        $__internal_279c1162dec454b0675fd884b05ba2f4c303881d69a83496610c9f2bcd33c9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_279c1162dec454b0675fd884b05ba2f4c303881d69a83496610c9f2bcd33c9bc->enter($__internal_279c1162dec454b0675fd884b05ba2f4c303881d69a83496610c9f2bcd33c9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-zero-fill-cli.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;

// Flags: --zero-fill-buffers

// when using --zero-fill-buffers, every Buffer and SlowBuffer
// instance must be zero filled upon creation


var SlowBuffer = require('../../').SlowBuffer;
var assert = require('assert');

function isZeroFilled(buf) {
  for (var n = 0; n < buf.length; n++)
    if (buf[n] > 0) return false;
  return true;
}

// This can be somewhat unreliable because the
// allocated memory might just already happen to
// contain all zeroes. The test is run multiple
// times to improve the reliability.
for (var i = 0; i < 50; i++) {
  var bufs = [
    Buffer.alloc(20),
    Buffer.allocUnsafe(20),
    SlowBuffer(20),
    Buffer(20),
    new SlowBuffer(20)
  ];
  for (var buf of bufs) {
    assert(isZeroFilled(buf));
  }
}

";
        
        $__internal_279c1162dec454b0675fd884b05ba2f4c303881d69a83496610c9f2bcd33c9bc->leave($__internal_279c1162dec454b0675fd884b05ba2f4c303881d69a83496610c9f2bcd33c9bc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-zero-fill-cli.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';
var Buffer = require('../../').Buffer;

// Flags: --zero-fill-buffers

// when using --zero-fill-buffers, every Buffer and SlowBuffer
// instance must be zero filled upon creation


var SlowBuffer = require('../../').SlowBuffer;
var assert = require('assert');

function isZeroFilled(buf) {
  for (var n = 0; n < buf.length; n++)
    if (buf[n] > 0) return false;
  return true;
}

// This can be somewhat unreliable because the
// allocated memory might just already happen to
// contain all zeroes. The test is run multiple
// times to improve the reliability.
for (var i = 0; i < 50; i++) {
  var bufs = [
    Buffer.alloc(20),
    Buffer.allocUnsafe(20),
    SlowBuffer(20),
    Buffer(20),
    new SlowBuffer(20)
  ];
  for (var buf of bufs) {
    assert(isZeroFilled(buf));
  }
}

", "node_modules/buffer/test/node/test-buffer-zero-fill-cli.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-zero-fill-cli.js");
    }
}
