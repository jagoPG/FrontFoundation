<?php

/* node_modules/fsevents/node_modules/fstream/examples/reader.js */
class __TwigTemplate_6d81ce3de5b586e5f5a0d8600eca09649cbb8ea648de2be80b707bdc3b3c3427 extends Twig_Template
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
        $__internal_bb3f9e892ee6a5950896f0d35dc28f3eef6baa9c46a7249c500e3e287e287d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb3f9e892ee6a5950896f0d35dc28f3eef6baa9c46a7249c500e3e287e287d88->enter($__internal_bb3f9e892ee6a5950896f0d35dc28f3eef6baa9c46a7249c500e3e287e287d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fstream/examples/reader.js"));

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
        
        $__internal_bb3f9e892ee6a5950896f0d35dc28f3eef6baa9c46a7249c500e3e287e287d88->leave($__internal_bb3f9e892ee6a5950896f0d35dc28f3eef6baa9c46a7249c500e3e287e287d88_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fstream/examples/reader.js";
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
", "node_modules/fsevents/node_modules/fstream/examples/reader.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fstream/examples/reader.js");
    }
}
