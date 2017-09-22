<?php

/* node_modules/through/test/buffering.js */
class __TwigTemplate_e074dbb6da1e5deb436ebf2db0cb5376424525e220f7216a891023b9879f432e extends Twig_Template
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
        $__internal_40882b582d1a4ab9d802c089dd559da67d84b7338b750f280fcdf7d92b1ba572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40882b582d1a4ab9d802c089dd559da67d84b7338b750f280fcdf7d92b1ba572->enter($__internal_40882b582d1a4ab9d802c089dd559da67d84b7338b750f280fcdf7d92b1ba572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/through/test/buffering.js"));

        // line 1
        echo "var test = require('tape')
var through = require('../')

// must emit end before close.

test('buffering', function(assert) {
  var ts = through(function (data) {
    this.queue(data)
  }, function () {
    this.queue(null)
  })

  var ended = false,  actual = []

  ts.on('data', actual.push.bind(actual))
  ts.on('end', function () {
    ended = true
  })

  ts.write(1)
  ts.write(2)
  ts.write(3)
  assert.deepEqual(actual, [1, 2, 3])
  ts.pause()
  ts.write(4)
  ts.write(5)
  ts.write(6)
  assert.deepEqual(actual, [1, 2, 3])
  ts.resume()
  assert.deepEqual(actual, [1, 2, 3, 4, 5, 6])
  ts.pause()
  ts.end()
  assert.ok(!ended)
  ts.resume()
  assert.ok(ended)
  assert.end()
})

test('buffering has data in queue, when ends', function (assert) {

  /*
   * If stream ends while paused with data in the queue,
   * stream should still emit end after all data is written
   * on resume.
   */

  var ts = through(function (data) {
    this.queue(data)
  }, function () {
    this.queue(null)
  })

  var ended = false,  actual = []

  ts.on('data', actual.push.bind(actual))
  ts.on('end', function () {
    ended = true
  })

  ts.pause()
  ts.write(1)
  ts.write(2)
  ts.write(3)
  ts.end()
  assert.deepEqual(actual, [], 'no data written yet, still paused')
  assert.ok(!ended, 'end not emitted yet, still paused')
  ts.resume()
  assert.deepEqual(actual, [1, 2, 3], 'resumed, all data should be delivered')
  assert.ok(ended, 'end should be emitted once all data was delivered')
  assert.end();
})
";
        
        $__internal_40882b582d1a4ab9d802c089dd559da67d84b7338b750f280fcdf7d92b1ba572->leave($__internal_40882b582d1a4ab9d802c089dd559da67d84b7338b750f280fcdf7d92b1ba572_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/through/test/buffering.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var through = require('../')

// must emit end before close.

test('buffering', function(assert) {
  var ts = through(function (data) {
    this.queue(data)
  }, function () {
    this.queue(null)
  })

  var ended = false,  actual = []

  ts.on('data', actual.push.bind(actual))
  ts.on('end', function () {
    ended = true
  })

  ts.write(1)
  ts.write(2)
  ts.write(3)
  assert.deepEqual(actual, [1, 2, 3])
  ts.pause()
  ts.write(4)
  ts.write(5)
  ts.write(6)
  assert.deepEqual(actual, [1, 2, 3])
  ts.resume()
  assert.deepEqual(actual, [1, 2, 3, 4, 5, 6])
  ts.pause()
  ts.end()
  assert.ok(!ended)
  ts.resume()
  assert.ok(ended)
  assert.end()
})

test('buffering has data in queue, when ends', function (assert) {

  /*
   * If stream ends while paused with data in the queue,
   * stream should still emit end after all data is written
   * on resume.
   */

  var ts = through(function (data) {
    this.queue(data)
  }, function () {
    this.queue(null)
  })

  var ended = false,  actual = []

  ts.on('data', actual.push.bind(actual))
  ts.on('end', function () {
    ended = true
  })

  ts.pause()
  ts.write(1)
  ts.write(2)
  ts.write(3)
  ts.end()
  assert.deepEqual(actual, [], 'no data written yet, still paused')
  assert.ok(!ended, 'end not emitted yet, still paused')
  ts.resume()
  assert.deepEqual(actual, [1, 2, 3], 'resumed, all data should be delivered')
  assert.ok(ended, 'end should be emitted once all data was delivered')
  assert.end();
})
", "node_modules/through/test/buffering.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/through/test/buffering.js");
    }
}
