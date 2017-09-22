<?php

/* node_modules/browserify-zlib/test/ignored/test-zlib-params.js */
class __TwigTemplate_0d987ea1a9414acc626ef8a7604d38ff63ed88bf0df558b17a4a7eff53aa7efd extends Twig_Template
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
        $__internal_764dc345af062a0729bf8388fa01a3d258cbee8367cd3a321251c143a19925bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_764dc345af062a0729bf8388fa01a3d258cbee8367cd3a321251c143a19925bb->enter($__internal_764dc345af062a0729bf8388fa01a3d258cbee8367cd3a321251c143a19925bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/ignored/test-zlib-params.js"));

        // line 1
        echo "var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');
var path = require('path');
var fs = require('fs');

var file = fs.readFileSync(path.resolve(common.fixturesDir, 'person.jpg')),
    chunkSize = 24 * 1024,
    opts = { level: 9, strategy: zlib.Z_DEFAULT_STRATEGY },
    deflater = zlib.createDeflate(opts);

var chunk1 = file.slice(0, chunkSize),
    chunk2 = file.slice(chunkSize),
    blkhdr = new Buffer([0x00, 0x48, 0x82, 0xb7, 0x7d]),
    expected = Buffer.concat([blkhdr, chunk2]),
    actual;

deflater.write(chunk1, function() {
  deflater.params(0, zlib.Z_DEFAULT_STRATEGY, function() {
    while (deflater.read());
    deflater.end(chunk2, function() {
      var bufs = [], buf;
      while (buf = deflater.read())
        bufs.push(buf);
      actual = Buffer.concat(bufs);
    });
  });
  while (deflater.read());
});

process.once('exit', function() {
  assert.deepEqual(actual, expected);
});
";
        
        $__internal_764dc345af062a0729bf8388fa01a3d258cbee8367cd3a321251c143a19925bb->leave($__internal_764dc345af062a0729bf8388fa01a3d258cbee8367cd3a321251c143a19925bb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/ignored/test-zlib-params.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');
var path = require('path');
var fs = require('fs');

var file = fs.readFileSync(path.resolve(common.fixturesDir, 'person.jpg')),
    chunkSize = 24 * 1024,
    opts = { level: 9, strategy: zlib.Z_DEFAULT_STRATEGY },
    deflater = zlib.createDeflate(opts);

var chunk1 = file.slice(0, chunkSize),
    chunk2 = file.slice(chunkSize),
    blkhdr = new Buffer([0x00, 0x48, 0x82, 0xb7, 0x7d]),
    expected = Buffer.concat([blkhdr, chunk2]),
    actual;

deflater.write(chunk1, function() {
  deflater.params(0, zlib.Z_DEFAULT_STRATEGY, function() {
    while (deflater.read());
    deflater.end(chunk2, function() {
      var bufs = [], buf;
      while (buf = deflater.read())
        bufs.push(buf);
      actual = Buffer.concat(bufs);
    });
  });
  while (deflater.read());
});

process.once('exit', function() {
  assert.deepEqual(actual, expected);
});
", "node_modules/browserify-zlib/test/ignored/test-zlib-params.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/ignored/test-zlib-params.js");
    }
}
