<?php

/* node_modules/util/test/node/debug.js */
class __TwigTemplate_b117d7080731c9abd92f42bad9b422fc44ed818edbc67bb8148c38635eb86533 extends Twig_Template
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
        $__internal_8fd7f899ea3238209a85d72bca9950afed36707c36bef2143049fa338abb30d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd7f899ea3238209a85d72bca9950afed36707c36bef2143049fa338abb30d5->enter($__internal_8fd7f899ea3238209a85d72bca9950afed36707c36bef2143049fa338abb30d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util/test/node/debug.js"));

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

if (process.argv[2] === 'child')
  child();
else
  parent();

function parent() {
  test('foo,tud,bar', true);
  test('foo,tud', true);
  test('tud,bar', true);
  test('tud', true);
  test('foo,bar', false);
  test('', false);
}

function test(environ, shouldWrite) {
  var expectErr = '';
  if (shouldWrite) {
    expectErr = 'TUD %PID%: this { is: \\'a\\' } /debugging/\\n' +
                'TUD %PID%: number=1234 string=asdf obj={\"foo\":\"bar\"}\\n';
  }
  var expectOut = 'ok\\n';
  var didTest = false;

  var spawn = require('child_process').spawn;
  var child = spawn(process.execPath, [__filename, 'child'], {
    env: { NODE_DEBUG: environ }
  });

  expectErr = expectErr.split('%PID%').join(child.pid);

  var err = '';
  child.stderr.setEncoding('utf8');
  child.stderr.on('data', function(c) {
    err += c;
  });

  var out = '';
  child.stdout.setEncoding('utf8');
  child.stdout.on('data', function(c) {
    out += c;
  });

  child.on('close', function(c) {
    assert(!c);
    assert.equal(err, expectErr);
    assert.equal(out, expectOut);
    didTest = true;
    console.log('ok %j %j', environ, shouldWrite);
  });

  process.on('exit', function() {
    assert(didTest);
  });
}


function child() {
  var debug = util.debuglog('tud');
  debug('this', { is: 'a' }, /debugging/);
  debug('number=%d string=%s obj=%j', 1234, 'asdf', { foo: 'bar' });
  console.log('ok');
}
";
        
        $__internal_8fd7f899ea3238209a85d72bca9950afed36707c36bef2143049fa338abb30d5->leave($__internal_8fd7f899ea3238209a85d72bca9950afed36707c36bef2143049fa338abb30d5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util/test/node/debug.js";
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

if (process.argv[2] === 'child')
  child();
else
  parent();

function parent() {
  test('foo,tud,bar', true);
  test('foo,tud', true);
  test('tud,bar', true);
  test('tud', true);
  test('foo,bar', false);
  test('', false);
}

function test(environ, shouldWrite) {
  var expectErr = '';
  if (shouldWrite) {
    expectErr = 'TUD %PID%: this { is: \\'a\\' } /debugging/\\n' +
                'TUD %PID%: number=1234 string=asdf obj={\"foo\":\"bar\"}\\n';
  }
  var expectOut = 'ok\\n';
  var didTest = false;

  var spawn = require('child_process').spawn;
  var child = spawn(process.execPath, [__filename, 'child'], {
    env: { NODE_DEBUG: environ }
  });

  expectErr = expectErr.split('%PID%').join(child.pid);

  var err = '';
  child.stderr.setEncoding('utf8');
  child.stderr.on('data', function(c) {
    err += c;
  });

  var out = '';
  child.stdout.setEncoding('utf8');
  child.stdout.on('data', function(c) {
    out += c;
  });

  child.on('close', function(c) {
    assert(!c);
    assert.equal(err, expectErr);
    assert.equal(out, expectOut);
    didTest = true;
    console.log('ok %j %j', environ, shouldWrite);
  });

  process.on('exit', function() {
    assert(didTest);
  });
}


function child() {
  var debug = util.debuglog('tud');
  debug('this', { is: 'a' }, /debugging/);
  debug('number=%d string=%s obj=%j', 1234, 'asdf', { foo: 'bar' });
  console.log('ok');
}
", "node_modules/util/test/node/debug.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util/test/node/debug.js");
    }
}
