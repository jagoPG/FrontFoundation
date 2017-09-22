<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dash.js */
class __TwigTemplate_66bb10e64ec18e7f8970afc646642c5306a3cb511ab07c9263c98bcee2d1495b extends Twig_Template
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
        $__internal_651f6f32f1a431d49255121dea8ec9096edb382bca0bb8252d8d2d1fe291d340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_651f6f32f1a431d49255121dea8ec9096edb382bca0bb8252d8d2d1fe291d340->enter($__internal_651f6f32f1a431d49255121dea8ec9096edb382bca0bb8252d8d2d1fe291d340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dash.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('-', function (t) {
    t.plan(5);
    t.deepEqual(parse([ '-n', '-' ]), { n: '-', _: [] });
    t.deepEqual(parse([ '-' ]), { _: [ '-' ] });
    t.deepEqual(parse([ '-f-' ]), { f: '-', _: [] });
    t.deepEqual(
        parse([ '-b', '-' ], { boolean: 'b' }),
        { b: true, _: [ '-' ] }
    );
    t.deepEqual(
        parse([ '-s', '-' ], { string: 's' }),
        { s: '-', _: [] }
    );
});

test('-a -- b', function (t) {
    t.plan(3);
    t.deepEqual(parse([ '-a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
});

test('move arguments after the -- into their own `--` array', function(t) {
    t.plan(1);
    t.deepEqual(
        parse([ '--name', 'John', 'before', '--', 'after' ], { '--': true }),
        { name: 'John', _: [ 'before' ], '--': [ 'after' ] });
});
";
        
        $__internal_651f6f32f1a431d49255121dea8ec9096edb382bca0bb8252d8d2d1fe291d340->leave($__internal_651f6f32f1a431d49255121dea8ec9096edb382bca0bb8252d8d2d1fe291d340_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dash.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('-', function (t) {
    t.plan(5);
    t.deepEqual(parse([ '-n', '-' ]), { n: '-', _: [] });
    t.deepEqual(parse([ '-' ]), { _: [ '-' ] });
    t.deepEqual(parse([ '-f-' ]), { f: '-', _: [] });
    t.deepEqual(
        parse([ '-b', '-' ], { boolean: 'b' }),
        { b: true, _: [ '-' ] }
    );
    t.deepEqual(
        parse([ '-s', '-' ], { string: 's' }),
        { s: '-', _: [] }
    );
});

test('-a -- b', function (t) {
    t.plan(3);
    t.deepEqual(parse([ '-a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
    t.deepEqual(parse([ '--a', '--', 'b' ]), { a: true, _: [ 'b' ] });
});

test('move arguments after the -- into their own `--` array', function(t) {
    t.plan(1);
    t.deepEqual(
        parse([ '--name', 'John', 'before', '--', 'after' ], { '--': true }),
        { name: 'John', _: [ 'before' ], '--': [ 'after' ] });
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dash.js");
    }
}
