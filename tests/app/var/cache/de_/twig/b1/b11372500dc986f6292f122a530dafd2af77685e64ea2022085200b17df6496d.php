<?php

/* node_modules/browserify-zlib/test/test-zlib-invalid-input.js */
class __TwigTemplate_7510f5a739344323e49b4b3500dafaa1d0d98e193a2b2f2e2ca667b1f1cedd42 extends Twig_Template
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
        $__internal_2ac87e5c6cdae9ef6f80fbb50f0a785034d929537fca124b5ccd06e8421b110c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac87e5c6cdae9ef6f80fbb50f0a785034d929537fca124b5ccd06e8421b110c->enter($__internal_2ac87e5c6cdae9ef6f80fbb50f0a785034d929537fca124b5ccd06e8421b110c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/test-zlib-invalid-input.js"));

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

// test uncompressing invalid input

var tape = require('tape'),
    zlib = require('../');

tape('non-strings', function(t) {
  var nonStringInputs = [1, true, {a: 1}, ['a']];
  t.plan(12);

  nonStringInputs.forEach(function(input) {
    // zlib.gunzip should not throw an error when called with bad input.
    t.doesNotThrow(function() {
      zlib.gunzip(input, function(err, buffer) {
        // zlib.gunzip should pass the error to the callback.
        t.ok(err);
      });
    });
  });
});

tape('unzips', function(t) {
  // zlib.Unzip classes need to get valid data, or else they'll throw.
  var unzips = [ zlib.Unzip(),
                 zlib.Gunzip(),
                 zlib.Inflate(),
                 zlib.InflateRaw() ];
                 
  t.plan(4);
  unzips.forEach(function (uz, i) {
    uz.on('error', function(er) {
      t.ok(er);
    });

    uz.on('end', function(er) {
      throw new Error('end event should not be emitted '+uz.constructor.name);
    });

    // this will trigger error event
    uz.write('this is not valid compressed data.');
  });
});
";
        
        $__internal_2ac87e5c6cdae9ef6f80fbb50f0a785034d929537fca124b5ccd06e8421b110c->leave($__internal_2ac87e5c6cdae9ef6f80fbb50f0a785034d929537fca124b5ccd06e8421b110c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/test-zlib-invalid-input.js";
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

// test uncompressing invalid input

var tape = require('tape'),
    zlib = require('../');

tape('non-strings', function(t) {
  var nonStringInputs = [1, true, {a: 1}, ['a']];
  t.plan(12);

  nonStringInputs.forEach(function(input) {
    // zlib.gunzip should not throw an error when called with bad input.
    t.doesNotThrow(function() {
      zlib.gunzip(input, function(err, buffer) {
        // zlib.gunzip should pass the error to the callback.
        t.ok(err);
      });
    });
  });
});

tape('unzips', function(t) {
  // zlib.Unzip classes need to get valid data, or else they'll throw.
  var unzips = [ zlib.Unzip(),
                 zlib.Gunzip(),
                 zlib.Inflate(),
                 zlib.InflateRaw() ];
                 
  t.plan(4);
  unzips.forEach(function (uz, i) {
    uz.on('error', function(er) {
      t.ok(er);
    });

    uz.on('end', function(er) {
      throw new Error('end event should not be emitted '+uz.constructor.name);
    });

    // this will trigger error event
    uz.write('this is not valid compressed data.');
  });
});
", "node_modules/browserify-zlib/test/test-zlib-invalid-input.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/test-zlib-invalid-input.js");
    }
}
