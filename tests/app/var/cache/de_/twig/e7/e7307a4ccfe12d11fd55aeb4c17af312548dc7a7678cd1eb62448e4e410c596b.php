<?php

/* node_modules/console-browserify/index.js */
class __TwigTemplate_f37752c2e48416da0a1a1a3e2c7d916eb3e3794be057a311045714f5255c8fb3 extends Twig_Template
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
        $__internal_cbadf2c400aba6d4e5c17dedc6ebdb9db4545e62926b2df7e569381512d1306a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadf2c400aba6d4e5c17dedc6ebdb9db4545e62926b2df7e569381512d1306a->enter($__internal_cbadf2c400aba6d4e5c17dedc6ebdb9db4545e62926b2df7e569381512d1306a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/console-browserify/index.js"));

        // line 1
        echo "/*global window, global*/
var util = require(\"util\")
var assert = require(\"assert\")
var now = require(\"date-now\")

var slice = Array.prototype.slice
var console
var times = {}

if (typeof global !== \"undefined\" && global.console) {
    console = global.console
} else if (typeof window !== \"undefined\" && window.console) {
    console = window.console
} else {
    console = {}
}

var functions = [
    [log, \"log\"],
    [info, \"info\"],
    [warn, \"warn\"],
    [error, \"error\"],
    [time, \"time\"],
    [timeEnd, \"timeEnd\"],
    [trace, \"trace\"],
    [dir, \"dir\"],
    [consoleAssert, \"assert\"]
]

for (var i = 0; i < functions.length; i++) {
    var tuple = functions[i]
    var f = tuple[0]
    var name = tuple[1]

    if (!console[name]) {
        console[name] = f
    }
}

module.exports = console

function log() {}

function info() {
    console.log.apply(console, arguments)
}

function warn() {
    console.log.apply(console, arguments)
}

function error() {
    console.warn.apply(console, arguments)
}

function time(label) {
    times[label] = now()
}

function timeEnd(label) {
    var time = times[label]
    if (!time) {
        throw new Error(\"No such label: \" + label)
    }

    var duration = now() - time
    console.log(label + \": \" + duration + \"ms\")
}

function trace() {
    var err = new Error()
    err.name = \"Trace\"
    err.message = util.format.apply(null, arguments)
    console.error(err.stack)
}

function dir(object) {
    console.log(util.inspect(object) + \"\\n\")
}

function consoleAssert(expression) {
    if (!expression) {
        var arr = slice.call(arguments, 1)
        assert.ok(false, util.format.apply(null, arr))
    }
}
";
        
        $__internal_cbadf2c400aba6d4e5c17dedc6ebdb9db4545e62926b2df7e569381512d1306a->leave($__internal_cbadf2c400aba6d4e5c17dedc6ebdb9db4545e62926b2df7e569381512d1306a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/console-browserify/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*global window, global*/
var util = require(\"util\")
var assert = require(\"assert\")
var now = require(\"date-now\")

var slice = Array.prototype.slice
var console
var times = {}

if (typeof global !== \"undefined\" && global.console) {
    console = global.console
} else if (typeof window !== \"undefined\" && window.console) {
    console = window.console
} else {
    console = {}
}

var functions = [
    [log, \"log\"],
    [info, \"info\"],
    [warn, \"warn\"],
    [error, \"error\"],
    [time, \"time\"],
    [timeEnd, \"timeEnd\"],
    [trace, \"trace\"],
    [dir, \"dir\"],
    [consoleAssert, \"assert\"]
]

for (var i = 0; i < functions.length; i++) {
    var tuple = functions[i]
    var f = tuple[0]
    var name = tuple[1]

    if (!console[name]) {
        console[name] = f
    }
}

module.exports = console

function log() {}

function info() {
    console.log.apply(console, arguments)
}

function warn() {
    console.log.apply(console, arguments)
}

function error() {
    console.warn.apply(console, arguments)
}

function time(label) {
    times[label] = now()
}

function timeEnd(label) {
    var time = times[label]
    if (!time) {
        throw new Error(\"No such label: \" + label)
    }

    var duration = now() - time
    console.log(label + \": \" + duration + \"ms\")
}

function trace() {
    var err = new Error()
    err.name = \"Trace\"
    err.message = util.format.apply(null, arguments)
    console.error(err.stack)
}

function dir(object) {
    console.log(util.inspect(object) + \"\\n\")
}

function consoleAssert(expression) {
    if (!expression) {
        var arr = slice.call(arguments, 1)
        assert.ok(false, util.format.apply(null, arr))
    }
}
", "node_modules/console-browserify/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/console-browserify/index.js");
    }
}
