<?php

/* node_modules/browserify-zlib/test/test-zlib-close-after-write.js */
class __TwigTemplate_f2d22a53a4d9d36eff8cc02f8f0ee7c41f9c254c3f986d002c9bcdeb2eb0b0a5 extends Twig_Template
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
        $__internal_45d85f91c249ae00da55b87a864a2166c78048398817bf69acaef65e3aa29325 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45d85f91c249ae00da55b87a864a2166c78048398817bf69acaef65e3aa29325->enter($__internal_45d85f91c249ae00da55b87a864a2166c78048398817bf69acaef65e3aa29325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/browserify-zlib/test/test-zlib-close-after-write.js"));

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

tape(function(t) {
  t.plan(1);
  
  zlib.gzip('hello', function(err, out) {
    var unzip = zlib.createGunzip();
    unzip.write(out);
    unzip.close(function() {
      t.ok(true);
    });
  });
});
";
        
        $__internal_45d85f91c249ae00da55b87a864a2166c78048398817bf69acaef65e3aa29325->leave($__internal_45d85f91c249ae00da55b87a864a2166c78048398817bf69acaef65e3aa29325_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/browserify-zlib/test/test-zlib-close-after-write.js";
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

tape(function(t) {
  t.plan(1);
  
  zlib.gzip('hello', function(err, out) {
    var unzip = zlib.createGunzip();
    unzip.write(out);
    unzip.close(function() {
      t.ok(true);
    });
  });
});
", "node_modules/browserify-zlib/test/test-zlib-close-after-write.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/browserify-zlib/test/test-zlib-close-after-write.js");
    }
}
