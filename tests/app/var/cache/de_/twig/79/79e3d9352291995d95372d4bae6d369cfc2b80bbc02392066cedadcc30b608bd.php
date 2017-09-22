<?php

/* node_modules/fstream/examples/reader.js */
class __TwigTemplate_535256333fe050ed53f9ea8b68e693232d58ea5ce9c0bee02e6703e9e26aca0f extends Twig_Template
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
        $__internal_46b27512db2d3f2213effa5aa8a86df81c9e96c02f9f4e0cdd5a2da401f8925b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b27512db2d3f2213effa5aa8a86df81c9e96c02f9f4e0cdd5a2da401f8925b->enter($__internal_46b27512db2d3f2213effa5aa8a86df81c9e96c02f9f4e0cdd5a2da401f8925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fstream/examples/reader.js"));

        // line 1
        echo "var fstream = require('../fstream.js')
var tap = require('tap')
var fs = require('fs')
var path = require('path')
var dir = path.dirname(__dirname)

tap.test('reader test', function (t) {
  var children = -1
  var gotReady = false
  var ended = false

  var r = fstream.Reader({
    path: dir,
    filter: function () {
      // return this.parent === r
      return this.parent === r || this === r
    }
  })

  r.on('ready', function () {
    gotReady = true
    children = fs.readdirSync(dir).length
    console.error('Setting expected children to ' + children)
    t.equal(r.type, 'Directory', 'should be a directory')
  })

  r.on('entry', function (entry) {
    children--
    if (!gotReady) {
      t.fail('children before ready!')
    }
    t.equal(entry.dirname, r.path, 'basename is parent dir')
  })

  r.on('error', function (er) {
    t.fail(er)
    t.end()
    process.exit(1)
  })

  r.on('end', function () {
    t.equal(children, 0, 'should have seen all children')
    ended = true
  })

  var closed = false
  r.on('close', function () {
    t.ok(ended, 'saw end before close')
    t.notOk(closed, 'close should only happen once')
    closed = true
    t.end()
  })
})

tap.test('reader error test', function (t) {
  // assumes non-root on a *nix system
  var r = fstream.Reader({ path: '/etc/shadow' })

  r.once('error', function (er) {
    t.ok(true)
    t.end()
  })

  r.on('end', function () {
    t.fail('reader ended without error')
    t.end()
  })
})
";
        
        $__internal_46b27512db2d3f2213effa5aa8a86df81c9e96c02f9f4e0cdd5a2da401f8925b->leave($__internal_46b27512db2d3f2213effa5aa8a86df81c9e96c02f9f4e0cdd5a2da401f8925b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fstream/examples/reader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fstream = require('../fstream.js')
var tap = require('tap')
var fs = require('fs')
var path = require('path')
var dir = path.dirname(__dirname)

tap.test('reader test', function (t) {
  var children = -1
  var gotReady = false
  var ended = false

  var r = fstream.Reader({
    path: dir,
    filter: function () {
      // return this.parent === r
      return this.parent === r || this === r
    }
  })

  r.on('ready', function () {
    gotReady = true
    children = fs.readdirSync(dir).length
    console.error('Setting expected children to ' + children)
    t.equal(r.type, 'Directory', 'should be a directory')
  })

  r.on('entry', function (entry) {
    children--
    if (!gotReady) {
      t.fail('children before ready!')
    }
    t.equal(entry.dirname, r.path, 'basename is parent dir')
  })

  r.on('error', function (er) {
    t.fail(er)
    t.end()
    process.exit(1)
  })

  r.on('end', function () {
    t.equal(children, 0, 'should have seen all children')
    ended = true
  })

  var closed = false
  r.on('close', function () {
    t.ok(ended, 'saw end before close')
    t.notOk(closed, 'close should only happen once')
    closed = true
    t.end()
  })
})

tap.test('reader error test', function (t) {
  // assumes non-root on a *nix system
  var r = fstream.Reader({ path: '/etc/shadow' })

  r.once('error', function (er) {
    t.ok(true)
    t.end()
  })

  r.on('end', function () {
    t.fail('reader ended without error')
    t.end()
  })
})
", "node_modules/fstream/examples/reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fstream/examples/reader.js");
    }
}
