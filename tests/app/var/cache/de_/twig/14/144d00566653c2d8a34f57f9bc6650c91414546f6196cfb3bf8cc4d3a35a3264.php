<?php

/* node_modules/crypto-browserify/test/random-bytes.js */
class __TwigTemplate_c8fe2ac03ee21e4fd8d0f24d8e6f201b5df39ab16979b4265ef9d692d2b9c710 extends Twig_Template
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
        $__internal_994b0fd3b8c97a3225a5f21a3a4aa8ac3edd4a4a1331c20a0e1b83c2cb90f397 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994b0fd3b8c97a3225a5f21a3a4aa8ac3edd4a4a1331c20a0e1b83c2cb90f397->enter($__internal_994b0fd3b8c97a3225a5f21a3a4aa8ac3edd4a4a1331c20a0e1b83c2cb90f397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/test/random-bytes.js"));

        // line 1
        echo "var test = require('tape')
var crypto = require('../')

var randomBytesFunctions = {
  randomBytes: require('randombytes'),
  pseudoRandomBytes: crypto.pseudoRandomBytes
}

for (var randomBytesName in randomBytesFunctions) {
  // Both randomBytes and pseudoRandomBytes should provide the same interface
  var randomBytes = randomBytesFunctions[randomBytesName]

  test('get error message', function (t) {
    try {
      var b = randomBytes(10)
      t.ok(Buffer.isBuffer(b))
      t.end()
    } catch (err) {
      t.ok(/not supported/.test(err.message), '\"not supported\"  is in error message')
      t.end()
    }
  })

  test(randomBytesName, function (t) {
    t.plan(5)
    t.equal(randomBytes(10).length, 10)
    t.ok(Buffer.isBuffer(randomBytes(10)))
    randomBytes(10, function (ex, bytes) {
      t.error(ex)
      t.equal(bytes.length, 10)
      t.ok(Buffer.isBuffer(bytes))
      t.end()
    })
  })

  test(randomBytesName + ' seem random', function (t) {
    var L = 1000
    var b = randomBytes(L)

    var mean = [].reduce.call(b, function (a, b) { return a + b }, 0) / L

    // test that the random numbers are plausably random.
    // Math.random() will pass this, but this will catch
    // terrible mistakes such as this blunder:
    // https://github.com/dominictarr/crypto-browserify/commit/3267955e1df7edd1680e52aeede9a89506ed2464#commitcomment-7916835

    // this doesn't check that the bytes are in a random *order*
    // but it's better than nothing.

    var expected = 256 / 2
    var smean = Math.sqrt(mean)

    // console.log doesn't work right on testling, *grumble grumble*
    console.log(JSON.stringify([expected - smean, mean, expected + smean]))
    t.ok(mean < expected + smean)
    t.ok(mean > expected - smean)

    t.end()
  })
}
";
        
        $__internal_994b0fd3b8c97a3225a5f21a3a4aa8ac3edd4a4a1331c20a0e1b83c2cb90f397->leave($__internal_994b0fd3b8c97a3225a5f21a3a4aa8ac3edd4a4a1331c20a0e1b83c2cb90f397_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/test/random-bytes.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var crypto = require('../')

var randomBytesFunctions = {
  randomBytes: require('randombytes'),
  pseudoRandomBytes: crypto.pseudoRandomBytes
}

for (var randomBytesName in randomBytesFunctions) {
  // Both randomBytes and pseudoRandomBytes should provide the same interface
  var randomBytes = randomBytesFunctions[randomBytesName]

  test('get error message', function (t) {
    try {
      var b = randomBytes(10)
      t.ok(Buffer.isBuffer(b))
      t.end()
    } catch (err) {
      t.ok(/not supported/.test(err.message), '\"not supported\"  is in error message')
      t.end()
    }
  })

  test(randomBytesName, function (t) {
    t.plan(5)
    t.equal(randomBytes(10).length, 10)
    t.ok(Buffer.isBuffer(randomBytes(10)))
    randomBytes(10, function (ex, bytes) {
      t.error(ex)
      t.equal(bytes.length, 10)
      t.ok(Buffer.isBuffer(bytes))
      t.end()
    })
  })

  test(randomBytesName + ' seem random', function (t) {
    var L = 1000
    var b = randomBytes(L)

    var mean = [].reduce.call(b, function (a, b) { return a + b }, 0) / L

    // test that the random numbers are plausably random.
    // Math.random() will pass this, but this will catch
    // terrible mistakes such as this blunder:
    // https://github.com/dominictarr/crypto-browserify/commit/3267955e1df7edd1680e52aeede9a89506ed2464#commitcomment-7916835

    // this doesn't check that the bytes are in a random *order*
    // but it's better than nothing.

    var expected = 256 / 2
    var smean = Math.sqrt(mean)

    // console.log doesn't work right on testling, *grumble grumble*
    console.log(JSON.stringify([expected - smean, mean, expected + smean]))
    t.ok(mean < expected + smean)
    t.ok(mean > expected - smean)

    t.end()
  })
}
", "node_modules/crypto-browserify/test/random-bytes.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/test/random-bytes.js");
    }
}
