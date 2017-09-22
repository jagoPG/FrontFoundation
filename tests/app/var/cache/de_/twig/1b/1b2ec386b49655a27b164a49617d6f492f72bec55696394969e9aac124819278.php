<?php

/* node_modules/buffer/test/node/test-buffer-bad-overload.js */
class __TwigTemplate_5d8c4f945a7dff5e5cd49dabf6736d620be97bc3d0ff6cde27d79e547ef0e625 extends Twig_Template
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
        $__internal_97f923801439da44d8c2ab5be84a5017707c3f678dbc821507afdd241ff50979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f923801439da44d8c2ab5be84a5017707c3f678dbc821507afdd241ff50979->enter($__internal_97f923801439da44d8c2ab5be84a5017707c3f678dbc821507afdd241ff50979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/node/test-buffer-bad-overload.js"));

        // line 1
        echo "'use strict';
var Buffer = require('../../').Buffer;


var assert = require('assert');

assert.doesNotThrow(function() {
  Buffer.allocUnsafe(10);
});

assert.throws(function() {
  Buffer.from(10, 'hex');
});

assert.doesNotThrow(function() {
  Buffer.from('deadbeaf', 'hex');
});

";
        
        $__internal_97f923801439da44d8c2ab5be84a5017707c3f678dbc821507afdd241ff50979->leave($__internal_97f923801439da44d8c2ab5be84a5017707c3f678dbc821507afdd241ff50979_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/node/test-buffer-bad-overload.js";
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

assert.doesNotThrow(function() {
  Buffer.allocUnsafe(10);
});

assert.throws(function() {
  Buffer.from(10, 'hex');
});

assert.doesNotThrow(function() {
  Buffer.from('deadbeaf', 'hex');
});

", "node_modules/buffer/test/node/test-buffer-bad-overload.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/node/test-buffer-bad-overload.js");
    }
}
