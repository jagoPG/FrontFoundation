<?php

/* node_modules/buffer/test/write.js */
class __TwigTemplate_df1bf8316cbdb68f8aaae57290a3c165854fca041902af36be375e0774227108 extends Twig_Template
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
        $__internal_5cd9cba0fbd06796ed94f017fa23140c1a931686a50cbdf6f8986097abfb3422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd9cba0fbd06796ed94f017fa23140c1a931686a50cbdf6f8986097abfb3422->enter($__internal_5cd9cba0fbd06796ed94f017fa23140c1a931686a50cbdf6f8986097abfb3422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/write.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')
var isnan = require('is-nan')

test('buffer.write string should get parsed as number', function (t) {
  var b = new B(64)
  b.writeUInt16LE('1003', 0)
  t.equal(b.readUInt16LE(0), 1003)
  t.end()
})

test('buffer.writeUInt8 a fractional number will get Math.floored', function (t) {
  // Some extra work is necessary to make this test pass with the Object implementation

  var b = new B(1)
  b.writeInt8(5.5, 0)
  t.equal(b[0], 5)
  t.end()
})

test('writeUint8 with a negative number throws', function (t) {
  var buf = new B(1)

  t.throws(function () {
    buf.writeUInt8(-3, 0)
  })

  t.end()
})

test('hex of write{Uint,Int}{8,16,32}{LE,BE}', function (t) {
  t.plan(2 * (2 * 2 * 2 + 2))
  var hex = [
    '03', '0300', '0003', '03000000', '00000003',
    'fd', 'fdff', 'fffd', 'fdffffff', 'fffffffd'
  ]
  var reads = [ 3, 3, 3, 3, 3, -3, -3, -3, -3, -3 ]
  var xs = ['UInt', 'Int']
  var ys = [8, 16, 32]
  for (var i = 0; i < xs.length; i++) {
    var x = xs[i]
    for (var j = 0; j < ys.length; j++) {
      var y = ys[j]
      var endianesses = (y === 8) ? [''] : ['LE', 'BE']
      for (var k = 0; k < endianesses.length; k++) {
        var z = endianesses[k]

        var v1 = new B(y / 8)
        var writefn = 'write' + x + y + z
        var val = (x === 'Int') ? -3 : 3
        v1[writefn](val, 0)
        t.equal(
          v1.toString('hex'),
          hex.shift()
        )
        var readfn = 'read' + x + y + z
        t.equal(
          v1[readfn](0),
          reads.shift()
        )
      }
    }
  }
  t.end()
})

test('hex of write{Uint,Int}{8,16,32}{LE,BE} with overflow', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) {
    t.pass('object impl: skipping overflow test')
    t.end()
    return
  }

  t.plan(3 * (2 * 2 * 2 + 2))
  var hex = [
    '', '03', '00', '030000', '000000',
    '', 'fd', 'ff', 'fdffff', 'ffffff'
  ]
  var reads = [
    undefined, 3, 0, NaN, 0,
    undefined, 253, -256, 16777213, -256
  ]
  var xs = ['UInt', 'Int']
  var ys = [8, 16, 32]
  for (var i = 0; i < xs.length; i++) {
    var x = xs[i]
    for (var j = 0; j < ys.length; j++) {
      var y = ys[j]
      var endianesses = (y === 8) ? [''] : ['LE', 'BE']
      for (var k = 0; k < endianesses.length; k++) {
        var z = endianesses[k]

        var v1 = new B(y / 8 - 1)
        var next = new B(4)
        next.writeUInt32BE(0, 0)
        var writefn = 'write' + x + y + z
        var val = (x === 'Int') ? -3 : 3
        v1[writefn](val, 0, true)
        t.equal(
          v1.toString('hex'),
          hex.shift()
        )
        // check that nothing leaked to next buffer.
        t.equal(next.readUInt32BE(0), 0)
        // check that no bytes are read from next buffer.
        next.writeInt32BE(~0, 0)
        var readfn = 'read' + x + y + z
        var r = reads.shift()
        if (isnan(r)) t.pass('equal')
        else t.equal(v1[readfn](0, true), r)
      }
    }
  }
  t.end()
})
test('large values do not improperly roll over (ref #80)', function (t) {
  var nums = [-25589992, -633756690, -898146932]
  var out = new B(12)
  out.fill(0)
  out.writeInt32BE(nums[0], 0)
  var newNum = out.readInt32BE(0)
  t.equal(nums[0], newNum)
  out.writeInt32BE(nums[1], 4)
  newNum = out.readInt32BE(4)
  t.equal(nums[1], newNum)
  out.writeInt32BE(nums[2], 8)
  newNum = out.readInt32BE(8)
  t.equal(nums[2], newNum)
  t.end()
})
";
        
        $__internal_5cd9cba0fbd06796ed94f017fa23140c1a931686a50cbdf6f8986097abfb3422->leave($__internal_5cd9cba0fbd06796ed94f017fa23140c1a931686a50cbdf6f8986097abfb3422_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/write.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')
var isnan = require('is-nan')

test('buffer.write string should get parsed as number', function (t) {
  var b = new B(64)
  b.writeUInt16LE('1003', 0)
  t.equal(b.readUInt16LE(0), 1003)
  t.end()
})

test('buffer.writeUInt8 a fractional number will get Math.floored', function (t) {
  // Some extra work is necessary to make this test pass with the Object implementation

  var b = new B(1)
  b.writeInt8(5.5, 0)
  t.equal(b[0], 5)
  t.end()
})

test('writeUint8 with a negative number throws', function (t) {
  var buf = new B(1)

  t.throws(function () {
    buf.writeUInt8(-3, 0)
  })

  t.end()
})

test('hex of write{Uint,Int}{8,16,32}{LE,BE}', function (t) {
  t.plan(2 * (2 * 2 * 2 + 2))
  var hex = [
    '03', '0300', '0003', '03000000', '00000003',
    'fd', 'fdff', 'fffd', 'fdffffff', 'fffffffd'
  ]
  var reads = [ 3, 3, 3, 3, 3, -3, -3, -3, -3, -3 ]
  var xs = ['UInt', 'Int']
  var ys = [8, 16, 32]
  for (var i = 0; i < xs.length; i++) {
    var x = xs[i]
    for (var j = 0; j < ys.length; j++) {
      var y = ys[j]
      var endianesses = (y === 8) ? [''] : ['LE', 'BE']
      for (var k = 0; k < endianesses.length; k++) {
        var z = endianesses[k]

        var v1 = new B(y / 8)
        var writefn = 'write' + x + y + z
        var val = (x === 'Int') ? -3 : 3
        v1[writefn](val, 0)
        t.equal(
          v1.toString('hex'),
          hex.shift()
        )
        var readfn = 'read' + x + y + z
        t.equal(
          v1[readfn](0),
          reads.shift()
        )
      }
    }
  }
  t.end()
})

test('hex of write{Uint,Int}{8,16,32}{LE,BE} with overflow', function (t) {
  if (!B.TYPED_ARRAY_SUPPORT) {
    t.pass('object impl: skipping overflow test')
    t.end()
    return
  }

  t.plan(3 * (2 * 2 * 2 + 2))
  var hex = [
    '', '03', '00', '030000', '000000',
    '', 'fd', 'ff', 'fdffff', 'ffffff'
  ]
  var reads = [
    undefined, 3, 0, NaN, 0,
    undefined, 253, -256, 16777213, -256
  ]
  var xs = ['UInt', 'Int']
  var ys = [8, 16, 32]
  for (var i = 0; i < xs.length; i++) {
    var x = xs[i]
    for (var j = 0; j < ys.length; j++) {
      var y = ys[j]
      var endianesses = (y === 8) ? [''] : ['LE', 'BE']
      for (var k = 0; k < endianesses.length; k++) {
        var z = endianesses[k]

        var v1 = new B(y / 8 - 1)
        var next = new B(4)
        next.writeUInt32BE(0, 0)
        var writefn = 'write' + x + y + z
        var val = (x === 'Int') ? -3 : 3
        v1[writefn](val, 0, true)
        t.equal(
          v1.toString('hex'),
          hex.shift()
        )
        // check that nothing leaked to next buffer.
        t.equal(next.readUInt32BE(0), 0)
        // check that no bytes are read from next buffer.
        next.writeInt32BE(~0, 0)
        var readfn = 'read' + x + y + z
        var r = reads.shift()
        if (isnan(r)) t.pass('equal')
        else t.equal(v1[readfn](0, true), r)
      }
    }
  }
  t.end()
})
test('large values do not improperly roll over (ref #80)', function (t) {
  var nums = [-25589992, -633756690, -898146932]
  var out = new B(12)
  out.fill(0)
  out.writeInt32BE(nums[0], 0)
  var newNum = out.readInt32BE(0)
  t.equal(nums[0], newNum)
  out.writeInt32BE(nums[1], 4)
  newNum = out.readInt32BE(4)
  t.equal(nums[1], newNum)
  out.writeInt32BE(nums[2], 8)
  newNum = out.readInt32BE(8)
  t.equal(nums[2], newNum)
  t.end()
})
", "node_modules/buffer/test/write.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/write.js");
    }
}
