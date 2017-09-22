<?php

/* node_modules/event-emitter/benchmark/many-on.js */
class __TwigTemplate_4e089b338796a5e4c94cfa702a6a205fccf7a177547b7f82db0c136e25945a9a extends Twig_Template
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
        $__internal_32a57b345d997a622d9b49013c29c83e09511ee50e5a4a293bcada4ee10e1c9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a57b345d997a622d9b49013c29c83e09511ee50e5a4a293bcada4ee10e1c9b->enter($__internal_32a57b345d997a622d9b49013c29c83e09511ee50e5a4a293bcada4ee10e1c9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/event-emitter/benchmark/many-on.js"));

        // line 1
        echo "'use strict';

// Benchmark comparing performance of event emit for many listeners
// To run it, do following in memoizee package path:
//
// \$ npm install eventemitter2 signals
// \$ node benchmark/many-on.js

var forEach    = require('es5-ext/object/for-each')
  , pad        = require('es5-ext/string/#/pad')

  , now = Date.now

  , time, count = 1000000, i, data = {}
  , ee, native, ee2, signals, a = {}, b = {};

ee = (function () {
\tvar ee = require('../')();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

native = (function () {
\tvar ee = require('events');
\tee = new ee.EventEmitter();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

ee2 = (function () {
\tvar ee = require('eventemitter2');
\tee = new ee.EventEmitter2();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

signals = (function () {
\tvar Signal = require('signals')
\t  , ee = { test: new Signal() };
\tee.test.add(function () { return arguments; });
\tee.test.add(function () { return arguments; });
\tee.test.add(function () { return arguments; });
\treturn ee;
}());

console.log(\"Emit for 3 listeners\", \"x\" + count + \":\\n\");

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
        
        $__internal_32a57b345d997a622d9b49013c29c83e09511ee50e5a4a293bcada4ee10e1c9b->leave($__internal_32a57b345d997a622d9b49013c29c83e09511ee50e5a4a293bcada4ee10e1c9b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/event-emitter/benchmark/many-on.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

// Benchmark comparing performance of event emit for many listeners
// To run it, do following in memoizee package path:
//
// \$ npm install eventemitter2 signals
// \$ node benchmark/many-on.js

var forEach    = require('es5-ext/object/for-each')
  , pad        = require('es5-ext/string/#/pad')

  , now = Date.now

  , time, count = 1000000, i, data = {}
  , ee, native, ee2, signals, a = {}, b = {};

ee = (function () {
\tvar ee = require('../')();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

native = (function () {
\tvar ee = require('events');
\tee = new ee.EventEmitter();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

ee2 = (function () {
\tvar ee = require('eventemitter2');
\tee = new ee.EventEmitter2();
\tee.on('test', function () { return arguments; });
\tee.on('test', function () { return arguments; });
\treturn ee.on('test', function () { return arguments; });
}());

signals = (function () {
\tvar Signal = require('signals')
\t  , ee = { test: new Signal() };
\tee.test.add(function () { return arguments; });
\tee.test.add(function () { return arguments; });
\tee.test.add(function () { return arguments; });
\treturn ee;
}());

console.log(\"Emit for 3 listeners\", \"x\" + count + \":\\n\");

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
", "node_modules/event-emitter/benchmark/many-on.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/event-emitter/benchmark/many-on.js");
    }
}
