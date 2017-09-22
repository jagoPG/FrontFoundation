<?php

/* node_modules/events/tests/listeners-side-effects.js */
class __TwigTemplate_f0794507962fc7a8c2bffd383c904d2a3aa33226787aa217cf9b3a8506703b78 extends Twig_Template
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
        $__internal_35bf8c1d010ba1d143e92dd5c4c18171e03b41b9be7efaca07e4079fbf2113c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bf8c1d010ba1d143e92dd5c4c18171e03b41b9be7efaca07e4079fbf2113c5->enter($__internal_35bf8c1d010ba1d143e92dd5c4c18171e03b41b9be7efaca07e4079fbf2113c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/listeners-side-effects.js"));

        // line 1
        echo "
// Copyright Joyent, Inc. and other Node contributors.
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
var EventEmitter = require('../').EventEmitter;

var e = new EventEmitter;
var fl;  // foo listeners

fl = e.listeners('foo');
assert(Array.isArray(fl));
assert(fl.length === 0);
assert.deepEqual(e._events, {});

e.on('foo', assert.fail);
fl = e.listeners('foo');
assert(e._events.foo === assert.fail);
assert(Array.isArray(fl));
assert(fl.length === 1);
assert(fl[0] === assert.fail);

e.listeners('bar');
assert(!e._events.hasOwnProperty('bar'));

e.on('foo', assert.ok);
fl = e.listeners('foo');

assert(Array.isArray(e._events.foo));
assert(e._events.foo.length === 2);
assert(e._events.foo[0] === assert.fail);
assert(e._events.foo[1] === assert.ok);

assert(Array.isArray(fl));
assert(fl.length === 2);
assert(fl[0] === assert.fail);
assert(fl[1] === assert.ok);
";
        
        $__internal_35bf8c1d010ba1d143e92dd5c4c18171e03b41b9be7efaca07e4079fbf2113c5->leave($__internal_35bf8c1d010ba1d143e92dd5c4c18171e03b41b9be7efaca07e4079fbf2113c5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/listeners-side-effects.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
// Copyright Joyent, Inc. and other Node contributors.
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
var EventEmitter = require('../').EventEmitter;

var e = new EventEmitter;
var fl;  // foo listeners

fl = e.listeners('foo');
assert(Array.isArray(fl));
assert(fl.length === 0);
assert.deepEqual(e._events, {});

e.on('foo', assert.fail);
fl = e.listeners('foo');
assert(e._events.foo === assert.fail);
assert(Array.isArray(fl));
assert(fl.length === 1);
assert(fl[0] === assert.fail);

e.listeners('bar');
assert(!e._events.hasOwnProperty('bar'));

e.on('foo', assert.ok);
fl = e.listeners('foo');

assert(Array.isArray(e._events.foo));
assert(e._events.foo.length === 2);
assert(e._events.foo[0] === assert.fail);
assert(e._events.foo[1] === assert.ok);

assert(Array.isArray(fl));
assert(fl.length === 2);
assert(fl[0] === assert.fail);
assert(fl[1] === assert.ok);
", "node_modules/events/tests/listeners-side-effects.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/listeners-side-effects.js");
    }
}
