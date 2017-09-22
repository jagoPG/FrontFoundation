<?php

/* node_modules/browserify-zlib/test/ignored/test-zlib-dictionary-fail.js */
class __TwigTemplate_75d68e8c19cb33a37ca783740bb38663b6361c8a256dad902005219ffa297a84 extends Twig_Template
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
        $__internal_5deb97cc7c2c0681be0acd2278ea59850a94b516eb984619ce2c42bd635dcd7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5deb97cc7c2c0681be0acd2278ea59850a94b516eb984619ce2c42bd635dcd7c->enter($__internal_5deb97cc7c2c0681be0acd2278ea59850a94b516eb984619ce2c42bd635dcd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary-fail.js"));

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

var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');

// Should raise an error, not trigger an assertion in src/node_zlib.cc
(function() {
  var stream = zlib.createInflate();

  stream.on('error', common.mustCall(function(err) {
    assert(/Missing dictionary/.test(err.message));
  }));

  // String \"test\" encoded with dictionary \"dict\".
  stream.write(Buffer([0x78,0xBB,0x04,0x09,0x01,0xA5]));
})();

// Should raise an error, not trigger an assertion in src/node_zlib.cc
(function() {
  var stream = zlib.createInflate({ dictionary: Buffer('fail') });

  stream.on('error', common.mustCall(function(err) {
    assert(/Bad dictionary/.test(err.message));
  }));

  // String \"test\" encoded with dictionary \"dict\".
  stream.write(Buffer([0x78,0xBB,0x04,0x09,0x01,0xA5]));
})();
";
        
        $__internal_5deb97cc7c2c0681be0acd2278ea59850a94b516eb984619ce2c42bd635dcd7c->leave($__internal_5deb97cc7c2c0681be0acd2278ea59850a94b516eb984619ce2c42bd635dcd7c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary-fail.js";
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

var common = require('../common.js');
var assert = require('assert');
var zlib = require('zlib');

// Should raise an error, not trigger an assertion in src/node_zlib.cc
(function() {
  var stream = zlib.createInflate();

  stream.on('error', common.mustCall(function(err) {
    assert(/Missing dictionary/.test(err.message));
  }));

  // String \"test\" encoded with dictionary \"dict\".
  stream.write(Buffer([0x78,0xBB,0x04,0x09,0x01,0xA5]));
})();

// Should raise an error, not trigger an assertion in src/node_zlib.cc
(function() {
  var stream = zlib.createInflate({ dictionary: Buffer('fail') });

  stream.on('error', common.mustCall(function(err) {
    assert(/Bad dictionary/.test(err.message));
  }));

  // String \"test\" encoded with dictionary \"dict\".
  stream.write(Buffer([0x78,0xBB,0x04,0x09,0x01,0xA5]));
})();
", "node_modules/browserify-zlib/test/ignored/test-zlib-dictionary-fail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/ignored/test-zlib-dictionary-fail.js");
    }
}
