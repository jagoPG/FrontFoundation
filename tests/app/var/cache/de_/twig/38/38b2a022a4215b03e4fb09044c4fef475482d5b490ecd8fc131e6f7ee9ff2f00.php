<?php

/* node_modules/buffer/test/constructor.js */
class __TwigTemplate_618f36e9d84e88a99171bd8742a61e03d89f690fb12cba918cd25303840334cf extends Twig_Template
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
        $__internal_06acbd8f4cd9c3fcfbe5ef69337ccba494b0f6b40160dd150be5d62a5349c8b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06acbd8f4cd9c3fcfbe5ef69337ccba494b0f6b40160dd150be5d62a5349c8b3->enter($__internal_06acbd8f4cd9c3fcfbe5ef69337ccba494b0f6b40160dd150be5d62a5349c8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer/test/constructor.js"));

        // line 1
        echo "if (process.env.OBJECT_IMPL) global.TYPED_ARRAY_SUPPORT = false
var B = require('../').Buffer
var test = require('tape')

test('new buffer from array', function (t) {
  t.equal(
    new B([1, 2, 3]).toString(),
    '\\u0001\\u0002\\u0003'
  )
  t.end()
})

test('new buffer from array w/ negatives', function (t) {
  t.equal(
    new B([-1, -2, -3]).toString('hex'),
    'fffefd'
  )
  t.end()
})

test('new buffer from array with mixed signed input', function (t) {
  t.equal(
    new B([-255, 255, -128, 128, 512, -512, 511, -511]).toString('hex'),
    '01ff80800000ff01'
  )
  t.end()
})

test('new buffer from string', function (t) {
  t.equal(
    new B('hey', 'utf8').toString(),
    'hey'
  )
  t.end()
})

test('new buffer from buffer', function (t) {
  var b1 = new B('asdf')
  var b2 = new B(b1)
  t.equal(b1.toString('hex'), b2.toString('hex'))
  t.end()
})

test('new buffer from ArrayBuffer', function (t) {
  if (typeof ArrayBuffer !== 'undefined') {
    var arraybuffer = new Uint8Array([0, 1, 2, 3]).buffer
    var b = new B(arraybuffer)
    t.equal(b.length, 4)
    t.equal(b[0], 0)
    t.equal(b[1], 1)
    t.equal(b[2], 2)
    t.equal(b[3], 3)
    t.equal(b[4], undefined)
  }
  t.end()
})

test('new buffer from ArrayBuffer, shares memory', function (t) {
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    var u = new Uint8Array([0, 1, 2, 3])
    var arraybuffer = u.buffer
    var b = new B(arraybuffer)
    t.equal(b.length, 4)
    t.equal(b[0], 0)
    t.equal(b[1], 1)
    t.equal(b[2], 2)
    t.equal(b[3], 3)
    t.equal(b[4], undefined)

    // changing the Uint8Array (and thus the ArrayBuffer), changes the Buffer
    u[0] = 10
    t.equal(b[0], 10)
    u[1] = 11
    t.equal(b[1], 11)
    u[2] = 12
    t.equal(b[2], 12)
    u[3] = 13
    t.equal(b[3], 13)
  }
  t.end()
})

test('new buffer from Uint8Array', function (t) {
  if (typeof Uint8Array !== 'undefined') {
    var b1 = new Uint8Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Uint16Array', function (t) {
  if (typeof Uint16Array !== 'undefined') {
    var b1 = new Uint16Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Uint32Array', function (t) {
  if (typeof Uint32Array !== 'undefined') {
    var b1 = new Uint32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Int16Array', function (t) {
  if (typeof Int16Array !== 'undefined') {
    var b1 = new Int16Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Int32Array', function (t) {
  if (typeof Int32Array !== 'undefined') {
    var b1 = new Int32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Float32Array', function (t) {
  if (typeof Float32Array !== 'undefined') {
    var b1 = new Float32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Float64Array', function (t) {
  if (typeof Float64Array !== 'undefined') {
    var b1 = new Float64Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from buffer.toJSON() output', function (t) {
  if (typeof JSON === 'undefined') {
    // ie6, ie7 lack support
    t.end()
    return
  }
  var buf = new B('test')
  var json = JSON.stringify(buf)
  var obj = JSON.parse(json)
  var copy = new B(obj)
  t.ok(buf.equals(copy))
  t.end()
})
";
        
        $__internal_06acbd8f4cd9c3fcfbe5ef69337ccba494b0f6b40160dd150be5d62a5349c8b3->leave($__internal_06acbd8f4cd9c3fcfbe5ef69337ccba494b0f6b40160dd150be5d62a5349c8b3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer/test/constructor.js";
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

test('new buffer from array', function (t) {
  t.equal(
    new B([1, 2, 3]).toString(),
    '\\u0001\\u0002\\u0003'
  )
  t.end()
})

test('new buffer from array w/ negatives', function (t) {
  t.equal(
    new B([-1, -2, -3]).toString('hex'),
    'fffefd'
  )
  t.end()
})

test('new buffer from array with mixed signed input', function (t) {
  t.equal(
    new B([-255, 255, -128, 128, 512, -512, 511, -511]).toString('hex'),
    '01ff80800000ff01'
  )
  t.end()
})

test('new buffer from string', function (t) {
  t.equal(
    new B('hey', 'utf8').toString(),
    'hey'
  )
  t.end()
})

test('new buffer from buffer', function (t) {
  var b1 = new B('asdf')
  var b2 = new B(b1)
  t.equal(b1.toString('hex'), b2.toString('hex'))
  t.end()
})

test('new buffer from ArrayBuffer', function (t) {
  if (typeof ArrayBuffer !== 'undefined') {
    var arraybuffer = new Uint8Array([0, 1, 2, 3]).buffer
    var b = new B(arraybuffer)
    t.equal(b.length, 4)
    t.equal(b[0], 0)
    t.equal(b[1], 1)
    t.equal(b[2], 2)
    t.equal(b[3], 3)
    t.equal(b[4], undefined)
  }
  t.end()
})

test('new buffer from ArrayBuffer, shares memory', function (t) {
  if (Buffer.TYPED_ARRAY_SUPPORT) {
    var u = new Uint8Array([0, 1, 2, 3])
    var arraybuffer = u.buffer
    var b = new B(arraybuffer)
    t.equal(b.length, 4)
    t.equal(b[0], 0)
    t.equal(b[1], 1)
    t.equal(b[2], 2)
    t.equal(b[3], 3)
    t.equal(b[4], undefined)

    // changing the Uint8Array (and thus the ArrayBuffer), changes the Buffer
    u[0] = 10
    t.equal(b[0], 10)
    u[1] = 11
    t.equal(b[1], 11)
    u[2] = 12
    t.equal(b[2], 12)
    u[3] = 13
    t.equal(b[3], 13)
  }
  t.end()
})

test('new buffer from Uint8Array', function (t) {
  if (typeof Uint8Array !== 'undefined') {
    var b1 = new Uint8Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Uint16Array', function (t) {
  if (typeof Uint16Array !== 'undefined') {
    var b1 = new Uint16Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Uint32Array', function (t) {
  if (typeof Uint32Array !== 'undefined') {
    var b1 = new Uint32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Int16Array', function (t) {
  if (typeof Int16Array !== 'undefined') {
    var b1 = new Int16Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Int32Array', function (t) {
  if (typeof Int32Array !== 'undefined') {
    var b1 = new Int32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Float32Array', function (t) {
  if (typeof Float32Array !== 'undefined') {
    var b1 = new Float32Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from Float64Array', function (t) {
  if (typeof Float64Array !== 'undefined') {
    var b1 = new Float64Array([0, 1, 2, 3])
    var b2 = new B(b1)
    t.equal(b1.length, b2.length)
    t.equal(b1[0], 0)
    t.equal(b1[1], 1)
    t.equal(b1[2], 2)
    t.equal(b1[3], 3)
    t.equal(b1[4], undefined)
  }
  t.end()
})

test('new buffer from buffer.toJSON() output', function (t) {
  if (typeof JSON === 'undefined') {
    // ie6, ie7 lack support
    t.end()
    return
  }
  var buf = new B('test')
  var json = JSON.stringify(buf)
  var obj = JSON.parse(json)
  var copy = new B(obj)
  t.ok(buf.equals(copy))
  t.end()
})
", "node_modules/buffer/test/constructor.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer/test/constructor.js");
    }
}
