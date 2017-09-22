<?php

/* node_modules/util/test/browser/inspect.js */
class __TwigTemplate_e08c2127b80a41df5e0fdd8eeb3ef3d449c6ba9bc23800f63a581f9686f3fa2b extends Twig_Template
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
        $__internal_30b5522709df0acad5f2ff3f4082c0a148083d8670239c90cd429ea594bb6e26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b5522709df0acad5f2ff3f4082c0a148083d8670239c90cd429ea594bb6e26->enter($__internal_30b5522709df0acad5f2ff3f4082c0a148083d8670239c90cd429ea594bb6e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/test/browser/inspect.js"));

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

var assert = require('assert');
var util = require('../../');

suite('inspect');

test('util.inspect - test for sparse array', function () {
  var a = ['foo', 'bar', 'baz'];
  assert.equal(util.inspect(a), '[ \\'foo\\', \\'bar\\', \\'baz\\' ]');
  delete a[1];
  assert.equal(util.inspect(a), '[ \\'foo\\', , \\'baz\\' ]');
  assert.equal(util.inspect(a, true), '[ \\'foo\\', , \\'baz\\', [length]: 3 ]');
  assert.equal(util.inspect(new Array(5)), '[ , , , ,  ]');
});

test('util.inspect -  exceptions should print the error message, not \\'{}\\'', function () {
  assert.equal(util.inspect(new Error()), '[Error]');
  assert.equal(util.inspect(new Error('FAIL')), '[Error: FAIL]');
  assert.equal(util.inspect(new TypeError('FAIL')), '[TypeError: FAIL]');
  assert.equal(util.inspect(new SyntaxError('FAIL')), '[SyntaxError: FAIL]');
});
";
        
        $__internal_30b5522709df0acad5f2ff3f4082c0a148083d8670239c90cd429ea594bb6e26->leave($__internal_30b5522709df0acad5f2ff3f4082c0a148083d8670239c90cd429ea594bb6e26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/test/browser/inspect.js";
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

var assert = require('assert');
var util = require('../../');

suite('inspect');

test('util.inspect - test for sparse array', function () {
  var a = ['foo', 'bar', 'baz'];
  assert.equal(util.inspect(a), '[ \\'foo\\', \\'bar\\', \\'baz\\' ]');
  delete a[1];
  assert.equal(util.inspect(a), '[ \\'foo\\', , \\'baz\\' ]');
  assert.equal(util.inspect(a, true), '[ \\'foo\\', , \\'baz\\', [length]: 3 ]');
  assert.equal(util.inspect(new Array(5)), '[ , , , ,  ]');
});

test('util.inspect -  exceptions should print the error message, not \\'{}\\'', function () {
  assert.equal(util.inspect(new Error()), '[Error]');
  assert.equal(util.inspect(new Error('FAIL')), '[Error: FAIL]');
  assert.equal(util.inspect(new TypeError('FAIL')), '[TypeError: FAIL]');
  assert.equal(util.inspect(new SyntaxError('FAIL')), '[SyntaxError: FAIL]');
});
", "node_modules/util/test/browser/inspect.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/test/browser/inspect.js");
    }
}
