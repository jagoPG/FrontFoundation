<?php

/* node_modules/browserify-zlib/test/test-zlib-convenience-methods.js */
class __TwigTemplate_ee538536f06c0b17f7198201d95f5fdf908c04ec8338504edfe820a1f8da31dc extends Twig_Template
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
        $__internal_c7a549390c736c7272c0edf27008d68302684dc16b094e64df5c167e0356ec91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a549390c736c7272c0edf27008d68302684dc16b094e64df5c167e0356ec91->enter($__internal_c7a549390c736c7272c0edf27008d68302684dc16b094e64df5c167e0356ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/test-zlib-convenience-methods.js"));

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

// test convenience methods with and without options supplied

var tape = require('tape');
var zlib = require('../');

var expect = 'blahblahblahblahblahblah';
var opts = {
  level: 9,
  chunkSize: 1024,
};

[
  ['gzip', 'gunzip'],
  ['gzip', 'unzip'],
  ['deflate', 'inflate'],
  ['deflateRaw', 'inflateRaw'],
].forEach(function(method) {
  tape(method.join(' '), function(t) {
    t.plan(4);
    
    zlib[method[0]](expect, opts, function(err, result) {
      zlib[method[1]](result, opts, function(err, result) {
        t.deepEqual(result, new Buffer(expect),
          'Should get original string after ' +
          method[0] + '/' + method[1] + ' with options.');
      });
    });

    zlib[method[0]](expect, function(err, result) {
      zlib[method[1]](result, function(err, result) {
        t.deepEqual(result, new Buffer(expect),
          'Should get original string after ' +
          method[0] + '/' + method[1] + ' without options.');
      });
    });

    var result = zlib[method[0] + 'Sync'](expect, opts);
    result = zlib[method[1] + 'Sync'](result, opts);
    t.deepEqual(result, new Buffer(expect),
      'Should get original string after ' +
      method[0] + '/' + method[1] + ' with options.');
    
    result = zlib[method[0] + 'Sync'](expect);
    result = zlib[method[1] + 'Sync'](result);
    t.deepEqual(result, new Buffer(expect),
      'Should get original string after ' +
      method[0] + '/' + method[1] + ' without options.');
  });
});
";
        
        $__internal_c7a549390c736c7272c0edf27008d68302684dc16b094e64df5c167e0356ec91->leave($__internal_c7a549390c736c7272c0edf27008d68302684dc16b094e64df5c167e0356ec91_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/test-zlib-convenience-methods.js";
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

// test convenience methods with and without options supplied

var tape = require('tape');
var zlib = require('../');

var expect = 'blahblahblahblahblahblah';
var opts = {
  level: 9,
  chunkSize: 1024,
};

[
  ['gzip', 'gunzip'],
  ['gzip', 'unzip'],
  ['deflate', 'inflate'],
  ['deflateRaw', 'inflateRaw'],
].forEach(function(method) {
  tape(method.join(' '), function(t) {
    t.plan(4);
    
    zlib[method[0]](expect, opts, function(err, result) {
      zlib[method[1]](result, opts, function(err, result) {
        t.deepEqual(result, new Buffer(expect),
          'Should get original string after ' +
          method[0] + '/' + method[1] + ' with options.');
      });
    });

    zlib[method[0]](expect, function(err, result) {
      zlib[method[1]](result, function(err, result) {
        t.deepEqual(result, new Buffer(expect),
          'Should get original string after ' +
          method[0] + '/' + method[1] + ' without options.');
      });
    });

    var result = zlib[method[0] + 'Sync'](expect, opts);
    result = zlib[method[1] + 'Sync'](result, opts);
    t.deepEqual(result, new Buffer(expect),
      'Should get original string after ' +
      method[0] + '/' + method[1] + ' with options.');
    
    result = zlib[method[0] + 'Sync'](expect);
    result = zlib[method[1] + 'Sync'](result);
    t.deepEqual(result, new Buffer(expect),
      'Should get original string after ' +
      method[0] + '/' + method[1] + ' without options.');
  });
});
", "node_modules/browserify-zlib/test/test-zlib-convenience-methods.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/test-zlib-convenience-methods.js");
    }
}
