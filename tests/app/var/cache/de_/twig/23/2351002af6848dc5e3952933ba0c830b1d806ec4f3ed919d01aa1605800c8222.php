<?php

/* node_modules/buffer/test/node/test-buffer-inheritance.js */
class __TwigTemplate_367d662918ddebe91d494d372e1e975a6953dedc5a972cd749ffd82885dceb2b extends Twig_Template
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
        $__internal_cb16fce639cdf16dd50b38e3c53d41a28335e429ed6393b9d5adf120b223f4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb16fce639cdf16dd50b38e3c53d41a28335e429ed6393b9d5adf120b223f4a0->enter($__internal_cb16fce639cdf16dd50b38e3c53d41a28335e429ed6393b9d5adf120b223f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-inheritance.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;



var assert = require('assert');


function T(n) {
  var ui8 = new Uint8Array(n);
  Object.setPrototypeOf(ui8, T.prototype);
  return ui8;
}
Object.setPrototypeOf(T.prototype, Buffer.prototype);
Object.setPrototypeOf(T, Buffer);

T.prototype.sum = function sum() {
  var cntr = 0;
  for (var i = 0; i < this.length; i++)
    cntr += this[i];
  return cntr;
};


var vals = [new T(4), T(4)];

vals.forEach(function(t) {
  assert.equal(t.constructor, T);
  assert.equal(Object.getPrototypeOf(t), T.prototype);
  assert.equal(Object.getPrototypeOf(Object.getPrototypeOf(t)),
    Buffer.prototype);

  t.fill(5);
  var cntr = 0;
  for (var i = 0; i < t.length; i++)
    cntr += t[i];
  assert.equal(t.length * 5, cntr);

  // Check this does not throw
  t.toString();
});

";
        
        $__internal_cb16fce639cdf16dd50b38e3c53d41a28335e429ed6393b9d5adf120b223f4a0->leave($__internal_cb16fce639cdf16dd50b38e3c53d41a28335e429ed6393b9d5adf120b223f4a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-inheritance.js";
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


function T(n) {
  var ui8 = new Uint8Array(n);
  Object.setPrototypeOf(ui8, T.prototype);
  return ui8;
}
Object.setPrototypeOf(T.prototype, Buffer.prototype);
Object.setPrototypeOf(T, Buffer);

T.prototype.sum = function sum() {
  var cntr = 0;
  for (var i = 0; i < this.length; i++)
    cntr += this[i];
  return cntr;
};


var vals = [new T(4), T(4)];

vals.forEach(function(t) {
  assert.equal(t.constructor, T);
  assert.equal(Object.getPrototypeOf(t), T.prototype);
  assert.equal(Object.getPrototypeOf(Object.getPrototypeOf(t)),
    Buffer.prototype);

  t.fill(5);
  var cntr = 0;
  for (var i = 0; i < t.length; i++)
    cntr += t[i];
  assert.equal(t.length * 5, cntr);

  // Check this does not throw
  t.toString();
});

", "node_modules/buffer/test/node/test-buffer-inheritance.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-inheritance.js");
    }
}
