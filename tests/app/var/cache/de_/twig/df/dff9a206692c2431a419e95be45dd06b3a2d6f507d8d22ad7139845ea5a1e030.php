<?php

/* node_modules/fast-deep-equal/spec/index.spec.js */
class __TwigTemplate_15b9a291789d1f98089826d0a762ac70de8d95d63a7026578ea39991c6a5b41b extends Twig_Template
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
        $__internal_e3467101179d1d0afa0c965e59c6c3f779a9c607d5470538e7f192ddb6f27e3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3467101179d1d0afa0c965e59c6c3f779a9c607d5470538e7f192ddb6f27e3e->enter($__internal_e3467101179d1d0afa0c965e59c6c3f779a9c607d5470538e7f192ddb6f27e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fast-deep-equal/spec/index.spec.js"));

        // line 1
        echo "'use strict';

var equal = require('../index');
var tests = require('./tests');
var assert = require('assert');


describe('equal', function() {
  tests.forEach(function (suite) {
    describe(suite.description, function() {
      suite.tests.forEach(function (test) {
        it(test.description, function() {
          assert.strictEqual(equal(test.value1, test.value2), test.equal);
        });
      });
    });
  });
});
";
        
        $__internal_e3467101179d1d0afa0c965e59c6c3f779a9c607d5470538e7f192ddb6f27e3e->leave($__internal_e3467101179d1d0afa0c965e59c6c3f779a9c607d5470538e7f192ddb6f27e3e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fast-deep-equal/spec/index.spec.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var equal = require('../index');
var tests = require('./tests');
var assert = require('assert');


describe('equal', function() {
  tests.forEach(function (suite) {
    describe(suite.description, function() {
      suite.tests.forEach(function (test) {
        it(test.description, function() {
          assert.strictEqual(equal(test.value1, test.value2), test.equal);
        });
      });
    });
  });
});
", "node_modules/fast-deep-equal/spec/index.spec.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fast-deep-equal/spec/index.spec.js");
    }
}
