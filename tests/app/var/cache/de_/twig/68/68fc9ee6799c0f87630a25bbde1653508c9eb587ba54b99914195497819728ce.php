<?php

/* node_modules/resumer/test/resume.js */
class __TwigTemplate_0920d9217b4efd57285fca26a87afc6d2b75608f0d1851c9e5ad8700b361c9ec extends Twig_Template
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
        $__internal_755d6232440e4044d7dbbb62420e691599da0418468c0a31e82a7b9687ea64ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755d6232440e4044d7dbbb62420e691599da0418468c0a31e82a7b9687ea64ae->enter($__internal_755d6232440e4044d7dbbb62420e691599da0418468c0a31e82a7b9687ea64ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resumer/test/resume.js"));

        // line 1
        echo "var test = require('tape');
var resumer = require('../');
var concat = require('concat-stream');

test('implicit resume', function (t) {
    t.plan(1);
    
    var s = createStream();
    s.pipe(concat(function (err, body) {
        t.equal(body, 'beep boop\\n');
    }));
});

test('pause/resume', function (t) {
    t.plan(2);
    
    var s = createStream();
    s.pause();
    
    var paused = true;
    setTimeout(function () {
        paused = false;
        s.resume();
    }, 100);
    
    s.pipe(concat(function (err, body) {
        t.equal(paused, false);
        t.equal(body, 'beep boop\\n');
    }));
});

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    stream.queue(null);
    return stream;
}
";
        
        $__internal_755d6232440e4044d7dbbb62420e691599da0418468c0a31e82a7b9687ea64ae->leave($__internal_755d6232440e4044d7dbbb62420e691599da0418468c0a31e82a7b9687ea64ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resumer/test/resume.js";
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

test('implicit resume', function (t) {
    t.plan(1);
    
    var s = createStream();
    s.pipe(concat(function (err, body) {
        t.equal(body, 'beep boop\\n');
    }));
});

test('pause/resume', function (t) {
    t.plan(2);
    
    var s = createStream();
    s.pause();
    
    var paused = true;
    setTimeout(function () {
        paused = false;
        s.resume();
    }, 100);
    
    s.pipe(concat(function (err, body) {
        t.equal(paused, false);
        t.equal(body, 'beep boop\\n');
    }));
});

function createStream () {
    var stream = resumer();
    stream.queue('beep boop\\n');
    stream.queue(null);
    return stream;
}
", "node_modules/resumer/test/resume.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resumer/test/resume.js");
    }
}
