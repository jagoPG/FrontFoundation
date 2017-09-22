<?php

/* node_modules/browserify-zlib/test/test-zlib-write-after-flush.js */
class __TwigTemplate_139e6b2e3814c34495a30fc667053f1c599a4485c6eaecb1ec931fc019ea8479 extends Twig_Template
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
        $__internal_15e566ead2297649fe967f6466c1d4c2934e41527382947cbfa80b8b0a7e278f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15e566ead2297649fe967f6466c1d4c2934e41527382947cbfa80b8b0a7e278f->enter($__internal_15e566ead2297649fe967f6466c1d4c2934e41527382947cbfa80b8b0a7e278f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/test-zlib-write-after-flush.js"));

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
var fs = require('fs');

tape('write after flush', function(t) {
  t.plan(2);
  
  var gzip = zlib.createGzip();
  var gunz = zlib.createUnzip();

  gzip.pipe(gunz);

  var output = '';
  var input = 'A line of data\\n';
  gunz.setEncoding('utf8');
  gunz.on('data', function(c) {
    output += c;
  });
  
  gunz.on('end', function() {
    t.equal(output, input);
    
    // Make sure that the flush flag was set back to normal
    t.equal(gzip._flushFlag, zlib.Z_NO_FLUSH);
  });
  
  // make sure that flush/write doesn't trigger an assert failure
  gzip.flush(); write();
  function write() {
    gzip.write(input);
    gzip.end();
    gunz.read(0);
  }
});
";
        
        $__internal_15e566ead2297649fe967f6466c1d4c2934e41527382947cbfa80b8b0a7e278f->leave($__internal_15e566ead2297649fe967f6466c1d4c2934e41527382947cbfa80b8b0a7e278f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/test-zlib-write-after-flush.js";
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
var fs = require('fs');

tape('write after flush', function(t) {
  t.plan(2);
  
  var gzip = zlib.createGzip();
  var gunz = zlib.createUnzip();

  gzip.pipe(gunz);

  var output = '';
  var input = 'A line of data\\n';
  gunz.setEncoding('utf8');
  gunz.on('data', function(c) {
    output += c;
  });
  
  gunz.on('end', function() {
    t.equal(output, input);
    
    // Make sure that the flush flag was set back to normal
    t.equal(gzip._flushFlag, zlib.Z_NO_FLUSH);
  });
  
  // make sure that flush/write doesn't trigger an assert failure
  gzip.flush(); write();
  function write() {
    gzip.write(input);
    gzip.end();
    gunz.read(0);
  }
});
", "node_modules/browserify-zlib/test/test-zlib-write-after-flush.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/test-zlib-write-after-flush.js");
    }
}
