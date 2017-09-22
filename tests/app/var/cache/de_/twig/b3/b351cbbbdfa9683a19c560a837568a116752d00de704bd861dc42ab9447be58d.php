<?php

/* node_modules/randombytes/test.js */
class __TwigTemplate_0ac33898f954d4b4777610433d14eff2c18b23a2342a5220337856a0583ad432 extends Twig_Template
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
        $__internal_061c76fb36e50cc787d9022e567c804e25d4b43aba5087707b97d3d28a6a109c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_061c76fb36e50cc787d9022e567c804e25d4b43aba5087707b97d3d28a6a109c->enter($__internal_061c76fb36e50cc787d9022e567c804e25d4b43aba5087707b97d3d28a6a109c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randombytes/test.js"));

        // line 1
        echo "var test = require('tape')
var randomBytes = require('./')

test('sync', function (t) {
  t.plan(4)
  t.equals(randomBytes(0).length, 0, 'len: ' + 0)
  t.equals(randomBytes(3).length, 3, 'len: ' + 3)
  t.equals(randomBytes(30).length, 30, 'len: ' + 30)
  t.equals(randomBytes(300).length, 300, 'len: ' + 300)
})

test('async', function (t) {
  t.plan(4)

  randomBytes(0, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 0, 'len: ' + 0)
  })

  randomBytes(3, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 3, 'len: ' + 3)
  })

  randomBytes(30, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 30, 'len: ' + 30)
  })

  randomBytes(300, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 300, 'len: ' + 300)
  })
})

if (process.browser) {
  test('requesting to much throws', function (t) {
    t.plan(1)
    t.throws(function () {
      randomBytes(65537)
    })
  })

  test('requesting to much throws async', function (t) {
    t.plan(1)
    t.throws(function () {
      randomBytes(65537, function () {
        t.ok(false, 'should not get here')
      })
    })
  })
}
";
        
        $__internal_061c76fb36e50cc787d9022e567c804e25d4b43aba5087707b97d3d28a6a109c->leave($__internal_061c76fb36e50cc787d9022e567c804e25d4b43aba5087707b97d3d28a6a109c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randombytes/test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape')
var randomBytes = require('./')

test('sync', function (t) {
  t.plan(4)
  t.equals(randomBytes(0).length, 0, 'len: ' + 0)
  t.equals(randomBytes(3).length, 3, 'len: ' + 3)
  t.equals(randomBytes(30).length, 30, 'len: ' + 30)
  t.equals(randomBytes(300).length, 300, 'len: ' + 300)
})

test('async', function (t) {
  t.plan(4)

  randomBytes(0, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 0, 'len: ' + 0)
  })

  randomBytes(3, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 3, 'len: ' + 3)
  })

  randomBytes(30, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 30, 'len: ' + 30)
  })

  randomBytes(300, function (err, resp) {
    if (err) throw err

    t.equals(resp.length, 300, 'len: ' + 300)
  })
})

if (process.browser) {
  test('requesting to much throws', function (t) {
    t.plan(1)
    t.throws(function () {
      randomBytes(65537)
    })
  })

  test('requesting to much throws async', function (t) {
    t.plan(1)
    t.throws(function () {
      randomBytes(65537, function () {
        t.ok(false, 'should not get here')
      })
    })
  })
}
", "node_modules/randombytes/test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randombytes/test.js");
    }
}
