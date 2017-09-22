<?php

/* node_modules/minimist/test/dash.js */
class __TwigTemplate_af688d6968205f66096771b35e9fd4202ad2dee73c2254cbccd7ad705d27b06c extends Twig_Template
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
        $__internal_c6eebfd538313ad18562dca943e7c0c2747fc9c07e3f4834dcf11e80bfc1e451 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6eebfd538313ad18562dca943e7c0c2747fc9c07e3f4834dcf11e80bfc1e451->enter($__internal_c6eebfd538313ad18562dca943e7c0c2747fc9c07e3f4834dcf11e80bfc1e451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/dash.js"));

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
        
        $__internal_c6eebfd538313ad18562dca943e7c0c2747fc9c07e3f4834dcf11e80bfc1e451->leave($__internal_c6eebfd538313ad18562dca943e7c0c2747fc9c07e3f4834dcf11e80bfc1e451_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/dash.js";
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
", "node_modules/minimist/test/dash.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/dash.js");
    }
}
