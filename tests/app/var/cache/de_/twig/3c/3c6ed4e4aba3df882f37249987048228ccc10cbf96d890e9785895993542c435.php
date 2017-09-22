<?php

/* node_modules/fsevents/node_modules/asynckit/bench.js */
class __TwigTemplate_362551fdf4da8db7b83825df0d65c82442d4f91396dde60b5905964bfe97e949 extends Twig_Template
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
        $__internal_a6ccddd1699e1a583b99e0943f0557f95150b1b9bf4cc313e87cdb16c639d30e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ccddd1699e1a583b99e0943f0557f95150b1b9bf4cc313e87cdb16c639d30e->enter($__internal_a6ccddd1699e1a583b99e0943f0557f95150b1b9bf4cc313e87cdb16c639d30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/asynckit/bench.js"));

        // line 1
        echo "/* eslint no-console: \"off\" */

var asynckit = require('./')
  , async    = require('async')
  , assert   = require('assert')
  , expected = 0
  ;

var Benchmark = require('benchmark');
var suite = new Benchmark.Suite;

var source = [];
for (var z = 1; z < 100; z++)
{
  source.push(z);
  expected += z;
}

suite
// add tests

.add('async.map', function(deferred)
{
  var total = 0;

  async.map(source,
  function(i, cb)
  {
    setImmediate(function()
    {
      total += i;
      cb(null, total);
    });
  },
  function(err, result)
  {
    assert.ifError(err);
    assert.equal(result[result.length - 1], expected);
    deferred.resolve();
  });
}, {'defer': true})


.add('asynckit.parallel', function(deferred)
{
  var total = 0;

  asynckit.parallel(source,
  function(i, cb)
  {
    setImmediate(function()
    {
      total += i;
      cb(null, total);
    });
  },
  function(err, result)
  {
    assert.ifError(err);
    assert.equal(result[result.length - 1], expected);
    deferred.resolve();
  });
}, {'defer': true})


// add listeners
.on('cycle', function(ev)
{
  console.log(String(ev.target));
})
.on('complete', function()
{
  console.log('Fastest is ' + this.filter('fastest').map('name'));
})
// run async
.run({ 'async': true });
";
        
        $__internal_a6ccddd1699e1a583b99e0943f0557f95150b1b9bf4cc313e87cdb16c639d30e->leave($__internal_a6ccddd1699e1a583b99e0943f0557f95150b1b9bf4cc313e87cdb16c639d30e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/asynckit/bench.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* eslint no-console: \"off\" */

var asynckit = require('./')
  , async    = require('async')
  , assert   = require('assert')
  , expected = 0
  ;

var Benchmark = require('benchmark');
var suite = new Benchmark.Suite;

var source = [];
for (var z = 1; z < 100; z++)
{
  source.push(z);
  expected += z;
}

suite
// add tests

.add('async.map', function(deferred)
{
  var total = 0;

  async.map(source,
  function(i, cb)
  {
    setImmediate(function()
    {
      total += i;
      cb(null, total);
    });
  },
  function(err, result)
  {
    assert.ifError(err);
    assert.equal(result[result.length - 1], expected);
    deferred.resolve();
  });
}, {'defer': true})


.add('asynckit.parallel', function(deferred)
{
  var total = 0;

  asynckit.parallel(source,
  function(i, cb)
  {
    setImmediate(function()
    {
      total += i;
      cb(null, total);
    });
  },
  function(err, result)
  {
    assert.ifError(err);
    assert.equal(result[result.length - 1], expected);
    deferred.resolve();
  });
}, {'defer': true})


// add listeners
.on('cycle', function(ev)
{
  console.log(String(ev.target));
})
.on('complete', function()
{
  console.log('Fastest is ' + this.filter('fastest').map('name'));
})
// run async
.run({ 'async': true });
", "node_modules/fsevents/node_modules/asynckit/bench.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/asynckit/bench.js");
    }
}
