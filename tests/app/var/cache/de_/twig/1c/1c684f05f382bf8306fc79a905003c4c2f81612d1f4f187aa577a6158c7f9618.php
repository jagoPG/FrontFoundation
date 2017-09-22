<?php

/* node_modules/stream-browserify/test/buf.js */
class __TwigTemplate_008db0e514c5faf841bc80a8b8a8d2956a9a7193ba800a5ea194689ca1e0757f extends Twig_Template
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
        $__internal_b19cb4693e86a0c79897b83052fafe0ded96f13cdca8bb93681574269a80b692 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b19cb4693e86a0c79897b83052fafe0ded96f13cdca8bb93681574269a80b692->enter($__internal_b19cb4693e86a0c79897b83052fafe0ded96f13cdca8bb93681574269a80b692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-browserify/test/buf.js"));

        // line 1
        echo "var path = require('path');
var test = require('tape');

var Writable = require('../').Writable;
var inherits = require('inherits');

inherits(TestWritable, Writable);

function TestWritable(opt) {
    if (!(this instanceof TestWritable))
        return new TestWritable(opt);
    Writable.call(this, opt);
    this._written = [];
}

TestWritable.prototype._write = function(chunk, encoding, cb) {
    this._written.push(chunk);
    cb();
};

var buf = Buffer([ 88 ]);

test('.writable writing ArrayBuffer', function(t) {
    var writable = new TestWritable();
    
    writable.write(buf);
    writable.end();
    
    t.equal(writable._written.length, 1);
    t.equal(writable._written[0].toString(), 'X')
    t.end()
});
";
        
        $__internal_b19cb4693e86a0c79897b83052fafe0ded96f13cdca8bb93681574269a80b692->leave($__internal_b19cb4693e86a0c79897b83052fafe0ded96f13cdca8bb93681574269a80b692_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-browserify/test/buf.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var path = require('path');
var test = require('tape');

var Writable = require('../').Writable;
var inherits = require('inherits');

inherits(TestWritable, Writable);

function TestWritable(opt) {
    if (!(this instanceof TestWritable))
        return new TestWritable(opt);
    Writable.call(this, opt);
    this._written = [];
}

TestWritable.prototype._write = function(chunk, encoding, cb) {
    this._written.push(chunk);
    cb();
};

var buf = Buffer([ 88 ]);

test('.writable writing ArrayBuffer', function(t) {
    var writable = new TestWritable();
    
    writable.write(buf);
    writable.end();
    
    t.equal(writable._written.length, 1);
    t.equal(writable._written[0].toString(), 'X')
    t.end()
});
", "node_modules/stream-browserify/test/buf.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-browserify/test/buf.js");
    }
}
