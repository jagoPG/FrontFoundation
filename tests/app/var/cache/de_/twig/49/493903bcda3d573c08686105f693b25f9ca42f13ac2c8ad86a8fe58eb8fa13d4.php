<?php

/* node_modules/buffer/test/node/test-buffer-safe-unsafe.js */
class __TwigTemplate_57d68c10c31f2d6e64ffa8a057f41cb2f064907312311be26b043644be427781 extends Twig_Template
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
        $__internal_26df86463dde4c41acecf275d50a2a3fa5450d415b39f171e378b28217410622 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26df86463dde4c41acecf275d50a2a3fa5450d415b39f171e378b28217410622->enter($__internal_26df86463dde4c41acecf275d50a2a3fa5450d415b39f171e378b28217410622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-safe-unsafe.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;



var assert = require('assert');

var safe = Buffer.alloc(10);

function isZeroFilled(buf) {
  for (var n = 0; n < buf.length; n++)
    if (buf[n] !== 0) return false;
  return true;
}

assert(isZeroFilled(safe));

// Test that unsafe allocations doesn't affect subsequent safe allocations
Buffer.allocUnsafe(10);
assert(isZeroFilled(new Float64Array(10)));

new Buffer(10);
assert(isZeroFilled(new Float64Array(10)));

Buffer.allocUnsafe(10);
assert(isZeroFilled(Buffer.alloc(10)));

";
        
        $__internal_26df86463dde4c41acecf275d50a2a3fa5450d415b39f171e378b28217410622->leave($__internal_26df86463dde4c41acecf275d50a2a3fa5450d415b39f171e378b28217410622_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-safe-unsafe.js";
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

var safe = Buffer.alloc(10);

function isZeroFilled(buf) {
  for (var n = 0; n < buf.length; n++)
    if (buf[n] !== 0) return false;
  return true;
}

assert(isZeroFilled(safe));

// Test that unsafe allocations doesn't affect subsequent safe allocations
Buffer.allocUnsafe(10);
assert(isZeroFilled(new Float64Array(10)));

new Buffer(10);
assert(isZeroFilled(new Float64Array(10)));

Buffer.allocUnsafe(10);
assert(isZeroFilled(Buffer.alloc(10)));

", "node_modules/buffer/test/node/test-buffer-safe-unsafe.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-safe-unsafe.js");
    }
}
