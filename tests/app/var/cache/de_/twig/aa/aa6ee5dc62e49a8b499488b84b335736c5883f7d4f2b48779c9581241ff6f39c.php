<?php

/* node_modules/events/tests/max-listeners.js */
class __TwigTemplate_11cb053cfa064a75f46e041e2203a9e6142ef9b6917b6d9dc3e7bca906e5436a extends Twig_Template
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
        $__internal_7aa8d2d57bb2354529e03f33bd1e876d9b556373ee60f88a6132f7c5c13136ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7aa8d2d57bb2354529e03f33bd1e876d9b556373ee60f88a6132f7c5c13136ac->enter($__internal_7aa8d2d57bb2354529e03f33bd1e876d9b556373ee60f88a6132f7c5c13136ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/max-listeners.js"));

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
var events = require('../');

var gotEvent = false;

var e = new events.EventEmitter();

e.on('maxListeners', function() {
  gotEvent = true;
});

// Should not corrupt the 'maxListeners' queue.
e.setMaxListeners(42);

assert.throws(function() {
  e.setMaxListeners(NaN);
});

assert.throws(function() {
  e.setMaxListeners(-1);
});

assert.throws(function() {
  e.setMaxListeners(\"and even this\");
});

e.emit('maxListeners');

assert(gotEvent);
";
        
        $__internal_7aa8d2d57bb2354529e03f33bd1e876d9b556373ee60f88a6132f7c5c13136ac->leave($__internal_7aa8d2d57bb2354529e03f33bd1e876d9b556373ee60f88a6132f7c5c13136ac_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/max-listeners.js";
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
var events = require('../');

var gotEvent = false;

var e = new events.EventEmitter();

e.on('maxListeners', function() {
  gotEvent = true;
});

// Should not corrupt the 'maxListeners' queue.
e.setMaxListeners(42);

assert.throws(function() {
  e.setMaxListeners(NaN);
});

assert.throws(function() {
  e.setMaxListeners(-1);
});

assert.throws(function() {
  e.setMaxListeners(\"and even this\");
});

e.emit('maxListeners');

assert(gotEvent);
", "node_modules/events/tests/max-listeners.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/max-listeners.js");
    }
}
