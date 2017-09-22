<?php

/* node_modules/events/tests/remove-listeners.js */
class __TwigTemplate_d9963ff107576e67115367aab5c10e259e2aa2c5a0833879f36e7eaf756ba53a extends Twig_Template
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
        $__internal_808e193a7e717dccd71c5656f1bd72cf5f131f7d0e10a229945fc74c28b483e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808e193a7e717dccd71c5656f1bd72cf5f131f7d0e10a229945fc74c28b483e6->enter($__internal_808e193a7e717dccd71c5656f1bd72cf5f131f7d0e10a229945fc74c28b483e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/remove-listeners.js"));

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

var common = require('./common');
var assert = require('assert');
var events = require('../');

var count = 0;

function listener1() {
  console.log('listener1');
  count++;
}

function listener2() {
  console.log('listener2');
  count++;
}

function listener3() {
  console.log('listener3');
  count++;
}

function remove1() {
  assert(0);
}

function remove2() {
  assert(0);
}

var e1 = new events.EventEmitter();
e1.on('hello', listener1);
e1.on('removeListener', common.mustCall(function(name, cb) {
  assert.equal(name, 'hello');
  assert.equal(cb, listener1);
}));
e1.removeListener('hello', listener1);
assert.deepEqual([], e1.listeners('hello'));

var e2 = new events.EventEmitter();
e2.on('hello', listener1);
e2.on('removeListener', assert.fail);
e2.removeListener('hello', listener2);
assert.deepEqual([listener1], e2.listeners('hello'));

var e3 = new events.EventEmitter();
e3.on('hello', listener1);
e3.on('hello', listener2);
e3.on('removeListener', common.mustCall(function(name, cb) {
  assert.equal(name, 'hello');
  assert.equal(cb, listener1);
}));
e3.removeListener('hello', listener1);
assert.deepEqual([listener2], e3.listeners('hello'));

var e4 = new events.EventEmitter();
e4.on('removeListener', common.mustCall(function(name, cb) {
  if (cb !== remove1) return;
  this.removeListener('quux', remove2);
  this.emit('quux');
}, 2));
e4.on('quux', remove1);
e4.on('quux', remove2);
e4.removeListener('quux', remove1);
";
        
        $__internal_808e193a7e717dccd71c5656f1bd72cf5f131f7d0e10a229945fc74c28b483e6->leave($__internal_808e193a7e717dccd71c5656f1bd72cf5f131f7d0e10a229945fc74c28b483e6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/remove-listeners.js";
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

var common = require('./common');
var assert = require('assert');
var events = require('../');

var count = 0;

function listener1() {
  console.log('listener1');
  count++;
}

function listener2() {
  console.log('listener2');
  count++;
}

function listener3() {
  console.log('listener3');
  count++;
}

function remove1() {
  assert(0);
}

function remove2() {
  assert(0);
}

var e1 = new events.EventEmitter();
e1.on('hello', listener1);
e1.on('removeListener', common.mustCall(function(name, cb) {
  assert.equal(name, 'hello');
  assert.equal(cb, listener1);
}));
e1.removeListener('hello', listener1);
assert.deepEqual([], e1.listeners('hello'));

var e2 = new events.EventEmitter();
e2.on('hello', listener1);
e2.on('removeListener', assert.fail);
e2.removeListener('hello', listener2);
assert.deepEqual([listener1], e2.listeners('hello'));

var e3 = new events.EventEmitter();
e3.on('hello', listener1);
e3.on('hello', listener2);
e3.on('removeListener', common.mustCall(function(name, cb) {
  assert.equal(name, 'hello');
  assert.equal(cb, listener1);
}));
e3.removeListener('hello', listener1);
assert.deepEqual([listener2], e3.listeners('hello'));

var e4 = new events.EventEmitter();
e4.on('removeListener', common.mustCall(function(name, cb) {
  if (cb !== remove1) return;
  this.removeListener('quux', remove2);
  this.emit('quux');
}, 2));
e4.on('quux', remove1);
e4.on('quux', remove2);
e4.removeListener('quux', remove1);
", "node_modules/events/tests/remove-listeners.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/remove-listeners.js");
    }
}
