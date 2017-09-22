<?php

/* node_modules/asynckit/bench.js */
class __TwigTemplate_f63e04dd61e66b85c168342839b3e6c572138d6297ee93e2f41675c819023627 extends Twig_Template
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
        $__internal_1e9159b9cf444ab2f826d4c8a9a576c1ce501c8433f2b04948a268c68a86d4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9159b9cf444ab2f826d4c8a9a576c1ce501c8433f2b04948a268c68a86d4a0->enter($__internal_1e9159b9cf444ab2f826d4c8a9a576c1ce501c8433f2b04948a268c68a86d4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/asynckit/bench.js"));

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
        
        $__internal_1e9159b9cf444ab2f826d4c8a9a576c1ce501c8433f2b04948a268c68a86d4a0->leave($__internal_1e9159b9cf444ab2f826d4c8a9a576c1ce501c8433f2b04948a268c68a86d4a0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/asynckit/bench.js";
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
", "node_modules/asynckit/bench.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/asynckit/bench.js");
    }
}
