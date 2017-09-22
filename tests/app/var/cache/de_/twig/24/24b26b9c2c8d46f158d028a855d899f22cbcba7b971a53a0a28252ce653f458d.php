<?php

/* node_modules/tar/test/error-on-broken.js */
class __TwigTemplate_5776054572722a287284d6e59bd3510245dc1ff6e113b4b3be159889aba87ae8 extends Twig_Template
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
        $__internal_6aa3008c4ff37a95132c4d0bcf0d9663d462594e94b7db8baf01ebda4c7775a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa3008c4ff37a95132c4d0bcf0d9663d462594e94b7db8baf01ebda4c7775a1->enter($__internal_6aa3008c4ff37a95132c4d0bcf0d9663d462594e94b7db8baf01ebda4c7775a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tar/test/error-on-broken.js"));

        // line 1
        echo "var fs = require('fs')
var path = require('path')
var zlib = require('zlib')

var tap = require('tap')

var tar = require('../tar.js')

var file = path.join(__dirname, 'cb-never-called-1.0.1.tgz')
var target = path.join(__dirname, 'tmp/extract-test')

tap.test('preclean', function (t) {
  require('rimraf').sync(__dirname + '/tmp/extract-test')
  t.pass('cleaned!')
  t.end()
})

tap.test('extract test', function (t) {
  var extract = tar.Extract(target)
  var inp = fs.createReadStream(file)

  inp.pipe(zlib.createGunzip()).pipe(extract)

  extract.on('error', function (er) {
    t.equal(er.message, 'unexpected eof', 'error noticed')
    t.end()
  })

  extract.on('end', function () {
    t.fail('shouldn\\'t reach this point due to errors')
    t.end()
  })
})
";
        
        $__internal_6aa3008c4ff37a95132c4d0bcf0d9663d462594e94b7db8baf01ebda4c7775a1->leave($__internal_6aa3008c4ff37a95132c4d0bcf0d9663d462594e94b7db8baf01ebda4c7775a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tar/test/error-on-broken.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var fs = require('fs')
var path = require('path')
var zlib = require('zlib')

var tap = require('tap')

var tar = require('../tar.js')

var file = path.join(__dirname, 'cb-never-called-1.0.1.tgz')
var target = path.join(__dirname, 'tmp/extract-test')

tap.test('preclean', function (t) {
  require('rimraf').sync(__dirname + '/tmp/extract-test')
  t.pass('cleaned!')
  t.end()
})

tap.test('extract test', function (t) {
  var extract = tar.Extract(target)
  var inp = fs.createReadStream(file)

  inp.pipe(zlib.createGunzip()).pipe(extract)

  extract.on('error', function (er) {
    t.equal(er.message, 'unexpected eof', 'error noticed')
    t.end()
  })

  extract.on('end', function () {
    t.fail('shouldn\\'t reach this point due to errors')
    t.end()
  })
})
", "node_modules/tar/test/error-on-broken.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tar/test/error-on-broken.js");
    }
}
