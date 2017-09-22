<?php

/* node_modules/browserify-zlib/test/ignored/test-zlib-dictionary.js */
class __TwigTemplate_7c7962a7a9773d33df07cf3b418a8d6ba3c4ecb81bf49ba7653c15219e72cdbb extends Twig_Template
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
        $__internal_cf155d5578b2c51b46fe483d54037080c8d9c1dfb3afbf584b274d6c31a68334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf155d5578b2c51b46fe483d54037080c8d9c1dfb3afbf584b274d6c31a68334->enter($__internal_cf155d5578b2c51b46fe483d54037080c8d9c1dfb3afbf584b274d6c31a68334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary.js"));

        // line 1
        echo "// Copyright Joyent, Inc. and other Node contributors.
//
// Permission is hereby granted, free of charge, to any person obtaining a
// copy of this software and associated documentation files (the
// \"Software\"), to deal in the Software without restriction, including
// without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit
// persons to whom the Software is furnished to do so, subject to the
// following conditions:
//
// The above copyright notice and this permission notice shall be included
// in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS
// OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
// NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
// USE OR OTHER DEALINGS IN THE SOFTWARE.

// test compression/decompression with dictionary

var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');
var path = require('path');

var spdyDict = new Buffer([
  'optionsgetheadpostputdeletetraceacceptaccept-charsetaccept-encodingaccept-',
  'languageauthorizationexpectfromhostif-modified-sinceif-matchif-none-matchi',
  'f-rangeif-unmodifiedsincemax-forwardsproxy-authorizationrangerefererteuser',
  '-agent10010120020120220320420520630030130230330430530630740040140240340440',
  '5406407408409410411412413414415416417500501502503504505accept-rangesageeta',
  'glocationproxy-authenticatepublicretry-afterservervarywarningwww-authentic',
  'ateallowcontent-basecontent-encodingcache-controlconnectiondatetrailertran',
  'sfer-encodingupgradeviawarningcontent-languagecontent-lengthcontent-locati',
  'oncontent-md5content-rangecontent-typeetagexpireslast-modifiedset-cookieMo',
  'ndayTuesdayWednesdayThursdayFridaySaturdaySundayJanFebMarAprMayJunJulAugSe',
  'pOctNovDecchunkedtext/htmlimage/pngimage/jpgimage/gifapplication/xmlapplic',
  'ation/xhtmltext/plainpublicmax-agecharset=iso-8859-1utf-8gzipdeflateHTTP/1',
  '.1statusversionurl\\0'
].join(''));

var deflate = zlib.createDeflate({ dictionary: spdyDict });

var input = [
  'HTTP/1.1 200 Ok',
  'Server: node.js',
  'Content-Length: 0',
  ''
].join('\\r\\n');

var called = 0;

//
// We'll use clean-new inflate stream each time
// and .reset() old dirty deflate one
//
function run(num) {
  var inflate = zlib.createInflate({ dictionary: spdyDict });

  if (num === 2) {
    deflate.reset();
    deflate.removeAllListeners('data');
  }

  // Put data into deflate stream
  deflate.on('data', function(chunk) {
    inflate.write(chunk);
  });

  // Get data from inflate stream
  var output = [];
  inflate.on('data', function(chunk) {
    output.push(chunk);
  });
  inflate.on('end', function() {
    called++;

    assert.equal(output.join(''), input);

    if (num < 2) run(num + 1);
  });

  deflate.write(input);
  deflate.flush(function() {
    inflate.end();
  });
}
run(1);

process.on('exit', function() {
  assert.equal(called, 2);
});
";
        
        $__internal_cf155d5578b2c51b46fe483d54037080c8d9c1dfb3afbf584b274d6c31a68334->leave($__internal_cf155d5578b2c51b46fe483d54037080c8d9c1dfb3afbf584b274d6c31a68334_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Copyright Joyent, Inc. and other Node contributors.
//
// Permission is hereby granted, free of charge, to any person obtaining a
// copy of this software and associated documentation files (the
// \"Software\"), to deal in the Software without restriction, including
// without limitation the rights to use, copy, modify, merge, publish,
// distribute, sublicense, and/or sell copies of the Software, and to permit
// persons to whom the Software is furnished to do so, subject to the
// following conditions:
//
// The above copyright notice and this permission notice shall be included
// in all copies or substantial portions of the Software.
//
// THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND, EXPRESS
// OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
// MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
// NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM,
// DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
// OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE
// USE OR OTHER DEALINGS IN THE SOFTWARE.

// test compression/decompression with dictionary

var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');
var path = require('path');

var spdyDict = new Buffer([
  'optionsgetheadpostputdeletetraceacceptaccept-charsetaccept-encodingaccept-',
  'languageauthorizationexpectfromhostif-modified-sinceif-matchif-none-matchi',
  'f-rangeif-unmodifiedsincemax-forwardsproxy-authorizationrangerefererteuser',
  '-agent10010120020120220320420520630030130230330430530630740040140240340440',
  '5406407408409410411412413414415416417500501502503504505accept-rangesageeta',
  'glocationproxy-authenticatepublicretry-afterservervarywarningwww-authentic',
  'ateallowcontent-basecontent-encodingcache-controlconnectiondatetrailertran',
  'sfer-encodingupgradeviawarningcontent-languagecontent-lengthcontent-locati',
  'oncontent-md5content-rangecontent-typeetagexpireslast-modifiedset-cookieMo',
  'ndayTuesdayWednesdayThursdayFridaySaturdaySundayJanFebMarAprMayJunJulAugSe',
  'pOctNovDecchunkedtext/htmlimage/pngimage/jpgimage/gifapplication/xmlapplic',
  'ation/xhtmltext/plainpublicmax-agecharset=iso-8859-1utf-8gzipdeflateHTTP/1',
  '.1statusversionurl\\0'
].join(''));

var deflate = zlib.createDeflate({ dictionary: spdyDict });

var input = [
  'HTTP/1.1 200 Ok',
  'Server: node.js',
  'Content-Length: 0',
  ''
].join('\\r\\n');

var called = 0;

//
// We'll use clean-new inflate stream each time
// and .reset() old dirty deflate one
//
function run(num) {
  var inflate = zlib.createInflate({ dictionary: spdyDict });

  if (num === 2) {
    deflate.reset();
    deflate.removeAllListeners('data');
  }

  // Put data into deflate stream
  deflate.on('data', function(chunk) {
    inflate.write(chunk);
  });

  // Get data from inflate stream
  var output = [];
  inflate.on('data', function(chunk) {
    output.push(chunk);
  });
  inflate.on('end', function() {
    called++;

    assert.equal(output.join(''), input);

    if (num < 2) run(num + 1);
  });

  deflate.write(input);
  deflate.flush(function() {
    inflate.end();
  });
}
run(1);

process.on('exit', function() {
  assert.equal(called, 2);
});
", "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/ignored/test-zlib-dictionary.js");
    }
}
