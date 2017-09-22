<?php

/* node_modules/resumer/test/through.js */
class __TwigTemplate_f0bc5aeb3bbee49041e0743b555f671c212d80b331f48b5fca4df532bf76f5ec extends Twig_Template
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
        $__internal_59b1a73218eebde5753a6b3d6c0c0383e38dbbfddbc8d621c99014e737a5c206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59b1a73218eebde5753a6b3d6c0c0383e38dbbfddbc8d621c99014e737a5c206->enter($__internal_59b1a73218eebde5753a6b3d6c0c0383e38dbbfddbc8d621c99014e737a5c206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resumer/test/through.js"));

        // line 1
        echo "var test = require('tape');
var resumer = require('../');
var concat = require('concat-stream');

test('through write/end', function (t) {
    t.plan(2);
    
    var s = createStream();
    
    s.on('okok', function () {
        t.ok(true);
    });
    
    s.pipe(concat(function (err, body) {
        t.equal(body, 'BEGIN\\nRAWR\\nEND\\n');
    }));
    
    setTimeout(function () {
        s.end('rawr\\n');
    }, 50);
});

function createStream () {
    var stream = resumer(write, end);
    stream.queue('BEGIN\\n');
    return stream;
    
    function write (x) {
        this.queue(String(x).toUpperCase());
    }
    function end () {
        this.emit('okok');
        this.queue('END\\n');
        this.queue(null);
    }
}
";
        
        $__internal_59b1a73218eebde5753a6b3d6c0c0383e38dbbfddbc8d621c99014e737a5c206->leave($__internal_59b1a73218eebde5753a6b3d6c0c0383e38dbbfddbc8d621c99014e737a5c206_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resumer/test/through.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var resumer = require('../');
var concat = require('concat-stream');

test('through write/end', function (t) {
    t.plan(2);
    
    var s = createStream();
    
    s.on('okok', function () {
        t.ok(true);
    });
    
    s.pipe(concat(function (err, body) {
        t.equal(body, 'BEGIN\\nRAWR\\nEND\\n');
    }));
    
    setTimeout(function () {
        s.end('rawr\\n');
    }, 50);
});

function createStream () {
    var stream = resumer(write, end);
    stream.queue('BEGIN\\n');
    return stream;
    
    function write (x) {
        this.queue(String(x).toUpperCase());
    }
    function end () {
        this.emit('okok');
        this.queue('END\\n');
        this.queue(null);
    }
}
", "node_modules/resumer/test/through.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resumer/test/through.js");
    }
}
