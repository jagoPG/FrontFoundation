<?php

/* node_modules/fsevents/node_modules/safe-buffer/test.js */
class __TwigTemplate_2a5c58314454b73663e254b329aabda1dc923f16e7d9a23589a365d9395df672 extends Twig_Template
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
        $__internal_75ab15000e710e4a47f6711e9eb19fe21d04fb0555b4c3a399e07c434d7e9117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75ab15000e710e4a47f6711e9eb19fe21d04fb0555b4c3a399e07c434d7e9117->enter($__internal_75ab15000e710e4a47f6711e9eb19fe21d04fb0555b4c3a399e07c434d7e9117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/safe-buffer/test.js"));

        // line 1
        echo "var test = require('tape')
var SafeBuffer = require('./').Buffer

test('new SafeBuffer(value) works just like Buffer', function (t) {
  t.deepEqual(new SafeBuffer('hey'), new Buffer('hey'))
  t.deepEqual(new SafeBuffer('hey', 'utf8'), new Buffer('hey', 'utf8'))
  t.deepEqual(new SafeBuffer('686579', 'hex'), new Buffer('686579', 'hex'))
  t.deepEqual(new SafeBuffer([1, 2, 3]), new Buffer([1, 2, 3]))
  t.deepEqual(new SafeBuffer(new Uint8Array([1, 2, 3])), new Buffer(new Uint8Array([1, 2, 3])))

  t.equal(typeof SafeBuffer.isBuffer, 'function')
  t.equal(SafeBuffer.isBuffer(new SafeBuffer('hey')), true)
  t.equal(Buffer.isBuffer(new SafeBuffer('hey')), true)
  t.notOk(SafeBuffer.isBuffer({}))

  t.end()
})

test('SafeBuffer.from(value) converts to a Buffer', function (t) {
  t.deepEqual(SafeBuffer.from('hey'), new Buffer('hey'))
  t.deepEqual(SafeBuffer.from('hey', 'utf8'), new Buffer('hey', 'utf8'))
  t.deepEqual(SafeBuffer.from('686579', 'hex'), new Buffer('686579', 'hex'))
  t.deepEqual(SafeBuffer.from([1, 2, 3]), new Buffer([1, 2, 3]))
  t.deepEqual(SafeBuffer.from(new Uint8Array([1, 2, 3])), new Buffer(new Uint8Array([1, 2, 3])))

  t.end()
})

test('SafeBuffer.alloc(number) returns zeroed-out memory', function (t) {
  for (var i = 0; i < 10; i++) {
    var expected1 = new Buffer(1000)
    expected1.fill(0)
    t.deepEqual(SafeBuffer.alloc(1000), expected1)

    var expected2 = new Buffer(1000 * 1000)
    expected2.fill(0)
    t.deepEqual(SafeBuffer.alloc(1000 * 1000), expected2)
  }
  t.end()
})

test('SafeBuffer.allocUnsafe(number)', function (t) {
  var buf = SafeBuffer.allocUnsafe(100) // unitialized memory
  t.equal(buf.length, 100)
  t.equal(SafeBuffer.isBuffer(buf), true)
  t.equal(Buffer.isBuffer(buf), true)
  t.end()
})

test('SafeBuffer.from() throws with number types', function (t) {
  t.plan(5)
  t.throws(function () {
    SafeBuffer.from(0)
  })
  t.throws(function () {
    SafeBuffer.from(-1)
  })
  t.throws(function () {
    SafeBuffer.from(NaN)
  })
  t.throws(function () {
    SafeBuffer.from(Infinity)
  })
  t.throws(function () {
    SafeBuffer.from(99)
  })
})

test('SafeBuffer.allocUnsafe() throws with non-number types', function (t) {
  t.plan(4)
  t.throws(function () {
    SafeBuffer.allocUnsafe('hey')
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe('hey', 'utf8')
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe([1, 2, 3])
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe({})
  })
})

test('SafeBuffer.alloc() throws with non-number types', function (t) {
  t.plan(4)
  t.throws(function () {
    SafeBuffer.alloc('hey')
  })
  t.throws(function () {
    SafeBuffer.alloc('hey', 'utf8')
  })
  t.throws(function () {
    SafeBuffer.alloc([1, 2, 3])
  })
  t.throws(function () {
    SafeBuffer.alloc({})
  })
})
";
        
        $__internal_75ab15000e710e4a47f6711e9eb19fe21d04fb0555b4c3a399e07c434d7e9117->leave($__internal_75ab15000e710e4a47f6711e9eb19fe21d04fb0555b4c3a399e07c434d7e9117_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/safe-buffer/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var SafeBuffer = require('./').Buffer

test('new SafeBuffer(value) works just like Buffer', function (t) {
  t.deepEqual(new SafeBuffer('hey'), new Buffer('hey'))
  t.deepEqual(new SafeBuffer('hey', 'utf8'), new Buffer('hey', 'utf8'))
  t.deepEqual(new SafeBuffer('686579', 'hex'), new Buffer('686579', 'hex'))
  t.deepEqual(new SafeBuffer([1, 2, 3]), new Buffer([1, 2, 3]))
  t.deepEqual(new SafeBuffer(new Uint8Array([1, 2, 3])), new Buffer(new Uint8Array([1, 2, 3])))

  t.equal(typeof SafeBuffer.isBuffer, 'function')
  t.equal(SafeBuffer.isBuffer(new SafeBuffer('hey')), true)
  t.equal(Buffer.isBuffer(new SafeBuffer('hey')), true)
  t.notOk(SafeBuffer.isBuffer({}))

  t.end()
})

test('SafeBuffer.from(value) converts to a Buffer', function (t) {
  t.deepEqual(SafeBuffer.from('hey'), new Buffer('hey'))
  t.deepEqual(SafeBuffer.from('hey', 'utf8'), new Buffer('hey', 'utf8'))
  t.deepEqual(SafeBuffer.from('686579', 'hex'), new Buffer('686579', 'hex'))
  t.deepEqual(SafeBuffer.from([1, 2, 3]), new Buffer([1, 2, 3]))
  t.deepEqual(SafeBuffer.from(new Uint8Array([1, 2, 3])), new Buffer(new Uint8Array([1, 2, 3])))

  t.end()
})

test('SafeBuffer.alloc(number) returns zeroed-out memory', function (t) {
  for (var i = 0; i < 10; i++) {
    var expected1 = new Buffer(1000)
    expected1.fill(0)
    t.deepEqual(SafeBuffer.alloc(1000), expected1)

    var expected2 = new Buffer(1000 * 1000)
    expected2.fill(0)
    t.deepEqual(SafeBuffer.alloc(1000 * 1000), expected2)
  }
  t.end()
})

test('SafeBuffer.allocUnsafe(number)', function (t) {
  var buf = SafeBuffer.allocUnsafe(100) // unitialized memory
  t.equal(buf.length, 100)
  t.equal(SafeBuffer.isBuffer(buf), true)
  t.equal(Buffer.isBuffer(buf), true)
  t.end()
})

test('SafeBuffer.from() throws with number types', function (t) {
  t.plan(5)
  t.throws(function () {
    SafeBuffer.from(0)
  })
  t.throws(function () {
    SafeBuffer.from(-1)
  })
  t.throws(function () {
    SafeBuffer.from(NaN)
  })
  t.throws(function () {
    SafeBuffer.from(Infinity)
  })
  t.throws(function () {
    SafeBuffer.from(99)
  })
})

test('SafeBuffer.allocUnsafe() throws with non-number types', function (t) {
  t.plan(4)
  t.throws(function () {
    SafeBuffer.allocUnsafe('hey')
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe('hey', 'utf8')
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe([1, 2, 3])
  })
  t.throws(function () {
    SafeBuffer.allocUnsafe({})
  })
})

test('SafeBuffer.alloc() throws with non-number types', function (t) {
  t.plan(4)
  t.throws(function () {
    SafeBuffer.alloc('hey')
  })
  t.throws(function () {
    SafeBuffer.alloc('hey', 'utf8')
  })
  t.throws(function () {
    SafeBuffer.alloc([1, 2, 3])
  })
  t.throws(function () {
    SafeBuffer.alloc({})
  })
})
", "node_modules/fsevents/node_modules/safe-buffer/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/safe-buffer/test.js");
    }
}
