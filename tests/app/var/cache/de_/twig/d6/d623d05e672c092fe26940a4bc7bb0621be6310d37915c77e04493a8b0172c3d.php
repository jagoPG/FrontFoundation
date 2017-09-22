<?php

/* node_modules/browserify-zlib/test/test-zlib-zero-byte.js */
class __TwigTemplate_92ff126514907ff94cb2e09cfec4079dd04e79e732ccafe7a061f5bfc201e88d extends Twig_Template
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
        $__internal_9b52a1fc9a80bbf2a139b76d1c167558f97c54cbe098d898fb3de8218c2d162d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b52a1fc9a80bbf2a139b76d1c167558f97c54cbe098d898fb3de8218c2d162d->enter($__internal_9b52a1fc9a80bbf2a139b76d1c167558f97c54cbe098d898fb3de8218c2d162d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/test-zlib-zero-byte.js"));

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

var tape = require('tape');
var zlib = require('../');

tape('zero byte', function(t) {
  t.plan(2);
  var gz = zlib.Gzip()
  var emptyBuffer = new Buffer(0);
  var received = 0;
  gz.on('data', function(c) {
    received += c.length;
  });
  gz.on('end', function() {
    t.equal(received, 20);
  });
  gz.on('finish', function() {
    t.ok(true);
  });
  gz.write(emptyBuffer);
  gz.end();
});
";
        
        $__internal_9b52a1fc9a80bbf2a139b76d1c167558f97c54cbe098d898fb3de8218c2d162d->leave($__internal_9b52a1fc9a80bbf2a139b76d1c167558f97c54cbe098d898fb3de8218c2d162d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/test-zlib-zero-byte.js";
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

var tape = require('tape');
var zlib = require('../');

tape('zero byte', function(t) {
  t.plan(2);
  var gz = zlib.Gzip()
  var emptyBuffer = new Buffer(0);
  var received = 0;
  gz.on('data', function(c) {
    received += c.length;
  });
  gz.on('end', function() {
    t.equal(received, 20);
  });
  gz.on('finish', function() {
    t.ok(true);
  });
  gz.write(emptyBuffer);
  gz.end();
});
", "node_modules/browserify-zlib/test/test-zlib-zero-byte.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/test-zlib-zero-byte.js");
    }
}