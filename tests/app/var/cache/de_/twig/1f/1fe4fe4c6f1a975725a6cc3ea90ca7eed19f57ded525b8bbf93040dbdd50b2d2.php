<?php

/* node_modules/mkdirp/node_modules/minimist/test/short.js */
class __TwigTemplate_c6645f7d9dc8f0443ada0aa615a61fe3a1ad3013a7cb9f363c0d6755d5769c20 extends Twig_Template
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
        $__internal_7887bf476b713f67219c5610c14ceaa76722d2f76e68a4274a233071fabaab6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7887bf476b713f67219c5610c14ceaa76722d2f76e68a4274a233071fabaab6c->enter($__internal_7887bf476b713f67219c5610c14ceaa76722d2f76e68a4274a233071fabaab6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/short.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('numeric short args', function (t) {
    t.plan(2);
    t.deepEqual(parse([ '-n123' ]), { n: 123, _: [] });
    t.deepEqual(
        parse([ '-123', '456' ]),
        { 1: true, 2: true, 3: 456, _: [] }
    );
});

test('short', function (t) {
    t.deepEqual(
        parse([ '-b' ]),
        { b : true, _ : [] },
        'short boolean'
    );
    t.deepEqual(
        parse([ 'foo', 'bar', 'baz' ]),
        { _ : [ 'foo', 'bar', 'baz' ] },
        'bare'
    );
    t.deepEqual(
        parse([ '-cats' ]),
        { c : true, a : true, t : true, s : true, _ : [] },
        'group'
    );
    t.deepEqual(
        parse([ '-cats', 'meow' ]),
        { c : true, a : true, t : true, s : 'meow', _ : [] },
        'short group next'
    );
    t.deepEqual(
        parse([ '-h', 'localhost' ]),
        { h : 'localhost', _ : [] },
        'short capture'
    );
    t.deepEqual(
        parse([ '-h', 'localhost', '-p', '555' ]),
        { h : 'localhost', p : 555, _ : [] },
        'short captures'
    );
    t.end();
});
 
test('mixed short bool and capture', function (t) {
    t.same(
        parse([ '-h', 'localhost', '-fp', '555', 'script.js' ]),
        {
            f : true, p : 555, h : 'localhost',
            _ : [ 'script.js' ]
        }
    );
    t.end();
});
 
test('short and long', function (t) {
    t.deepEqual(
        parse([ '-h', 'localhost', '-fp', '555', 'script.js' ]),
        {
            f : true, p : 555, h : 'localhost',
            _ : [ 'script.js' ]
        }
    );
    t.end();
});
";
        
        $__internal_7887bf476b713f67219c5610c14ceaa76722d2f76e68a4274a233071fabaab6c->leave($__internal_7887bf476b713f67219c5610c14ceaa76722d2f76e68a4274a233071fabaab6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/short.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('numeric short args', function (t) {
    t.plan(2);
    t.deepEqual(parse([ '-n123' ]), { n: 123, _: [] });
    t.deepEqual(
        parse([ '-123', '456' ]),
        { 1: true, 2: true, 3: 456, _: [] }
    );
});

test('short', function (t) {
    t.deepEqual(
        parse([ '-b' ]),
        { b : true, _ : [] },
        'short boolean'
    );
    t.deepEqual(
        parse([ 'foo', 'bar', 'baz' ]),
        { _ : [ 'foo', 'bar', 'baz' ] },
        'bare'
    );
    t.deepEqual(
        parse([ '-cats' ]),
        { c : true, a : true, t : true, s : true, _ : [] },
        'group'
    );
    t.deepEqual(
        parse([ '-cats', 'meow' ]),
        { c : true, a : true, t : true, s : 'meow', _ : [] },
        'short group next'
    );
    t.deepEqual(
        parse([ '-h', 'localhost' ]),
        { h : 'localhost', _ : [] },
        'short capture'
    );
    t.deepEqual(
        parse([ '-h', 'localhost', '-p', '555' ]),
        { h : 'localhost', p : 555, _ : [] },
        'short captures'
    );
    t.end();
});
 
test('mixed short bool and capture', function (t) {
    t.same(
        parse([ '-h', 'localhost', '-fp', '555', 'script.js' ]),
        {
            f : true, p : 555, h : 'localhost',
            _ : [ 'script.js' ]
        }
    );
    t.end();
});
 
test('short and long', function (t) {
    t.deepEqual(
        parse([ '-h', 'localhost', '-fp', '555', 'script.js' ]),
        {
            f : true, p : 555, h : 'localhost',
            _ : [ 'script.js' ]
        }
    );
    t.end();
});
", "node_modules/mkdirp/node_modules/minimist/test/short.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/short.js");
    }
}
