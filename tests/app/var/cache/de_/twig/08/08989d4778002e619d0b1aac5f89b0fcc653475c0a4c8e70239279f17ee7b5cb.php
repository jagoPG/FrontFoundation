<?php

/* node_modules/events/tests/once.js */
class __TwigTemplate_832298f049e635626d7179b1c651eb342b040ffc532b6dd59a2f842167c360b0 extends Twig_Template
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
        $__internal_3abac1dd3e01baa962fd071d70d3c450a4d3e9d77ea7851946ca1a4d1a1849dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3abac1dd3e01baa962fd071d70d3c450a4d3e9d77ea7851946ca1a4d1a1849dd->enter($__internal_3abac1dd3e01baa962fd071d70d3c450a4d3e9d77ea7851946ca1a4d1a1849dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/events/tests/once.js"));

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

var e = new events.EventEmitter();
var times_hello_emited = 0;

e.once('hello', function(a, b) {
  times_hello_emited++;
});

e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');

var remove = function() {
  assert.fail(1, 0, 'once->foo should not be emitted', '!');
};

e.once('foo', remove);
e.removeListener('foo', remove);
e.emit('foo');

var times_recurse_emitted = 0;

e.once('e', function() {
\te.emit('e');
\ttimes_recurse_emitted++;
});

e.once('e', function() {
\ttimes_recurse_emitted++;
});

e.emit('e');

assert.equal(1, times_hello_emited);
assert.equal(2, times_recurse_emitted);
";
        
        $__internal_3abac1dd3e01baa962fd071d70d3c450a4d3e9d77ea7851946ca1a4d1a1849dd->leave($__internal_3abac1dd3e01baa962fd071d70d3c450a4d3e9d77ea7851946ca1a4d1a1849dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/events/tests/once.js";
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

var e = new events.EventEmitter();
var times_hello_emited = 0;

e.once('hello', function(a, b) {
  times_hello_emited++;
});

e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');
e.emit('hello', 'a', 'b');

var remove = function() {
  assert.fail(1, 0, 'once->foo should not be emitted', '!');
};

e.once('foo', remove);
e.removeListener('foo', remove);
e.emit('foo');

var times_recurse_emitted = 0;

e.once('e', function() {
\te.emit('e');
\ttimes_recurse_emitted++;
});

e.once('e', function() {
\ttimes_recurse_emitted++;
});

e.emit('e');

assert.equal(1, times_hello_emited);
assert.equal(2, times_recurse_emitted);
", "node_modules/events/tests/once.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/events/tests/once.js");
    }
}
