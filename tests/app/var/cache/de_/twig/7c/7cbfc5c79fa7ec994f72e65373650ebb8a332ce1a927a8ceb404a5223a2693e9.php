<?php

/* node_modules/buffer/test/node/test-buffer-zero-fill-reset.js */
class __TwigTemplate_ad51811ea1d24eee20698965156f046e1db349f1fa615f79c036e0db3795db7e extends Twig_Template
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
        $__internal_37ebfcc397e320a9f7845ffc9f4bdda7f97d31b838ed2c568d61ee7864a5ee55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ebfcc397e320a9f7845ffc9f4bdda7f97d31b838ed2c568d61ee7864a5ee55->enter($__internal_37ebfcc397e320a9f7845ffc9f4bdda7f97d31b838ed2c568d61ee7864a5ee55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-zero-fill-reset.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;



var assert = require('assert');


function testUint8Array(ui) {
  var length = ui.length;
  for (var i = 0; i < length; i++)
    if (ui[i] !== 0) return false;
  return true;
}


for (var i = 0; i < 100; i++) {
  Buffer.alloc(0);
  var ui = new Uint8Array(65);
  assert.ok(testUint8Array(ui), 'Uint8Array is not zero-filled');
}

";
        
        $__internal_37ebfcc397e320a9f7845ffc9f4bdda7f97d31b838ed2c568d61ee7864a5ee55->leave($__internal_37ebfcc397e320a9f7845ffc9f4bdda7f97d31b838ed2c568d61ee7864a5ee55_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-zero-fill-reset.js";
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


function testUint8Array(ui) {
  var length = ui.length;
  for (var i = 0; i < length; i++)
    if (ui[i] !== 0) return false;
  return true;
}


for (var i = 0; i < 100; i++) {
  Buffer.alloc(0);
  var ui = new Uint8Array(65);
  assert.ok(testUint8Array(ui), 'Uint8Array is not zero-filled');
}

", "node_modules/buffer/test/node/test-buffer-zero-fill-reset.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-zero-fill-reset.js");
    }
}
