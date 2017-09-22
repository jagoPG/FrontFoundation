<?php

/* node_modules/event-emitter/benchmark/single-on.js */
class __TwigTemplate_e9365096182e51d284ef54ebee1407815db9f38d2df5aebf1453a564a6b3895e extends Twig_Template
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
        $__internal_c44657e2f40b932d3d45a67d201405c18d4976f8bbb0db7f6ea2180f287bc1bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c44657e2f40b932d3d45a67d201405c18d4976f8bbb0db7f6ea2180f287bc1bf->enter($__internal_c44657e2f40b932d3d45a67d201405c18d4976f8bbb0db7f6ea2180f287bc1bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/benchmark/single-on.js"));

        // line 1
        echo "'use strict';

// Benchmark comparing performance of event emit for single listener
// To run it, do following in memoizee package path:
//
// \$ npm install eventemitter2 signals
// \$ node benchmark/single-on.js

var forEach    = require('es5-ext/object/for-each')
  , pad        = require('es5-ext/string/#/pad')

  , now = Date.now

  , time, count = 1000000, i, data = {}
  , ee, native, ee2, signals, a = {}, b = {};

ee = (function () {
\tvar ee = require('../');
\treturn ee().on('test', function () { return arguments; });
}());

native = (function () {
\tvar ee = require('events');
\treturn (new ee.EventEmitter()).on('test', function () { return arguments; });
}());

ee2 = (function () {
\tvar ee = require('eventemitter2');
\treturn (new ee.EventEmitter2()).on('test', function () { return arguments; });
}());

signals = (function () {
\tvar Signal = require('signals')
\t  , ee = { test: new Signal() };
\tee.test.add(function () { return arguments; });
\treturn ee;
}());

console.log(\"Emit for single listener\", \"x\" + count + \":\\n\");

i = count;
time = now();
while (i--) {
\tee.emit('test', a, b);
}
data[\"event-emitter (this implementation)\"] = now() - time;

i = count;
time = now();
while (i--) {
\tnative.emit('test', a, b);
}
data[\"EventEmitter (Node.js native)\"] = now() - time;

i = count;
time = now();
while (i--) {
\tee2.emit('test', a, b);
}
data.EventEmitter2 = now() - time;

i = count;
time = now();
while (i--) {
\tsignals.test.dispatch(a, b);
}
data.Signals = now() - time;

forEach(data, function (value, name, obj, index) {
\tconsole.log(index + 1 + \":\",  pad.call(value, \" \", 5), name);
}, null, function (a, b) {
\treturn this[a] - this[b];
});
";
        
        $__internal_c44657e2f40b932d3d45a67d201405c18d4976f8bbb0db7f6ea2180f287bc1bf->leave($__internal_c44657e2f40b932d3d45a67d201405c18d4976f8bbb0db7f6ea2180f287bc1bf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/benchmark/single-on.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// Benchmark comparing performance of event emit for single listener
// To run it, do following in memoizee package path:
//
// \$ npm install eventemitter2 signals
// \$ node benchmark/single-on.js

var forEach    = require('es5-ext/object/for-each')
  , pad        = require('es5-ext/string/#/pad')

  , now = Date.now

  , time, count = 1000000, i, data = {}
  , ee, native, ee2, signals, a = {}, b = {};

ee = (function () {
\tvar ee = require('../');
\treturn ee().on('test', function () { return arguments; });
}());

native = (function () {
\tvar ee = require('events');
\treturn (new ee.EventEmitter()).on('test', function () { return arguments; });
}());

ee2 = (function () {
\tvar ee = require('eventemitter2');
\treturn (new ee.EventEmitter2()).on('test', function () { return arguments; });
}());

signals = (function () {
\tvar Signal = require('signals')
\t  , ee = { test: new Signal() };
\tee.test.add(function () { return arguments; });
\treturn ee;
}());

console.log(\"Emit for single listener\", \"x\" + count + \":\\n\");

i = count;
time = now();
while (i--) {
\tee.emit('test', a, b);
}
data[\"event-emitter (this implementation)\"] = now() - time;

i = count;
time = now();
while (i--) {
\tnative.emit('test', a, b);
}
data[\"EventEmitter (Node.js native)\"] = now() - time;

i = count;
time = now();
while (i--) {
\tee2.emit('test', a, b);
}
data.EventEmitter2 = now() - time;

i = count;
time = now();
while (i--) {
\tsignals.test.dispatch(a, b);
}
data.Signals = now() - time;

forEach(data, function (value, name, obj, index) {
\tconsole.log(index + 1 + \":\",  pad.call(value, \" \", 5), name);
}, null, function (a, b) {
\treturn this[a] - this[b];
});
", "node_modules/event-emitter/benchmark/single-on.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/benchmark/single-on.js");
    }
}
