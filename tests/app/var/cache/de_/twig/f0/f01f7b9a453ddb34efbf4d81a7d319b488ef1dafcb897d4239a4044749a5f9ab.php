<?php

/* node_modules/fast-deep-equal/benchmark/index.js */
class __TwigTemplate_bf4fb75e3b778b9373ee7699223192d7b910068d6b21edeea59c1f0d7bc6b216 extends Twig_Template
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
        $__internal_0aa3c92bb9ce8aebaedf207989af28396fb259eddf7318acd45167f9a62b6a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aa3c92bb9ce8aebaedf207989af28396fb259eddf7318acd45167f9a62b6a62->enter($__internal_0aa3c92bb9ce8aebaedf207989af28396fb259eddf7318acd45167f9a62b6a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fast-deep-equal/benchmark/index.js"));

        // line 1
        echo "'use strict';

const assertDeepStrictEqual = require('assert').deepStrictEqual;
const tests = require('../spec/tests');
const Benchmark = require('benchmark');
const suite = new Benchmark.Suite;


const equalPackages = {
  'fast-deep-equal': require('../index'),
  'nano-equal': true,
  'shallow-equal-fuzzy': true,
  'underscore.isEqual': require('underscore').isEqual,
  'lodash.isEqual': require('lodash').isEqual,
  'deep-equal': true,
  'deep-eql': true,
  'assert.deepStrictEqual': (a, b) => {
    try { assertDeepStrictEqual(a, b); return true; }
    catch(e) { return false; }
  }
};


for (const equalName in equalPackages) {
  let equalFunc = equalPackages[equalName];
  if (equalFunc === true) equalFunc = require(equalName);

  for (const testSuite of tests) {
    for (const test of testSuite.tests) {
      try {
        if (equalFunc(test.value1, test.value2) !== test.equal)
          console.error('different result', equalName, testSuite.description, test.description);
      } catch(e) {
        console.error(equalName, testSuite.description, test.description, e);
      }
    }
  }

  suite.add(equalName, function() {
    for (const testSuite of tests) {
      for (const test of testSuite.tests) {
        if (test.description != 'pseudo array and equivalent array are not equal')
          equalFunc(test.value1, test.value2);
      }
    }
  });
}

console.log();

suite
  .on('cycle', (event) => console.log(String(event.target)))
  .on('complete', function () {
    console.log('The fastest is ' + this.filter('fastest').map('name'));
  })
  .run({async: true});
";
        
        $__internal_0aa3c92bb9ce8aebaedf207989af28396fb259eddf7318acd45167f9a62b6a62->leave($__internal_0aa3c92bb9ce8aebaedf207989af28396fb259eddf7318acd45167f9a62b6a62_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fast-deep-equal/benchmark/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

const assertDeepStrictEqual = require('assert').deepStrictEqual;
const tests = require('../spec/tests');
const Benchmark = require('benchmark');
const suite = new Benchmark.Suite;


const equalPackages = {
  'fast-deep-equal': require('../index'),
  'nano-equal': true,
  'shallow-equal-fuzzy': true,
  'underscore.isEqual': require('underscore').isEqual,
  'lodash.isEqual': require('lodash').isEqual,
  'deep-equal': true,
  'deep-eql': true,
  'assert.deepStrictEqual': (a, b) => {
    try { assertDeepStrictEqual(a, b); return true; }
    catch(e) { return false; }
  }
};


for (const equalName in equalPackages) {
  let equalFunc = equalPackages[equalName];
  if (equalFunc === true) equalFunc = require(equalName);

  for (const testSuite of tests) {
    for (const test of testSuite.tests) {
      try {
        if (equalFunc(test.value1, test.value2) !== test.equal)
          console.error('different result', equalName, testSuite.description, test.description);
      } catch(e) {
        console.error(equalName, testSuite.description, test.description, e);
      }
    }
  }

  suite.add(equalName, function() {
    for (const testSuite of tests) {
      for (const test of testSuite.tests) {
        if (test.description != 'pseudo array and equivalent array are not equal')
          equalFunc(test.value1, test.value2);
      }
    }
  });
}

console.log();

suite
  .on('cycle', (event) => console.log(String(event.target)))
  .on('complete', function () {
    console.log('The fastest is ' + this.filter('fastest').map('name'));
  })
  .run({async: true});
", "node_modules/fast-deep-equal/benchmark/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fast-deep-equal/benchmark/index.js");
    }
}
