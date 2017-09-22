<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/num.js */
class __TwigTemplate_7b460d10645524831c92ed83562cce4b1c6933ebb4df7fafa6198f5cb8f2234f extends Twig_Template
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
        $__internal_4ab48b1f1b73ace66a7e2a94c4cf80cdcf45e8da1d6c7586ef5488c65de37cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ab48b1f1b73ace66a7e2a94c4cf80cdcf45e8da1d6c7586ef5488c65de37cff->enter($__internal_4ab48b1f1b73ace66a7e2a94c4cf80cdcf45e8da1d6c7586ef5488c65de37cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/num.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('nums', function (t) {
    var argv = parse([
        '-x', '1234',
        '-y', '5.67',
        '-z', '1e7',
        '-w', '10f',
        '--hex', '0xdeadbeef',
        '789'
    ]);
    t.deepEqual(argv, {
        x : 1234,
        y : 5.67,
        z : 1e7,
        w : '10f',
        hex : 0xdeadbeef,
        _ : [ 789 ]
    });
    t.deepEqual(typeof argv.x, 'number');
    t.deepEqual(typeof argv.y, 'number');
    t.deepEqual(typeof argv.z, 'number');
    t.deepEqual(typeof argv.w, 'string');
    t.deepEqual(typeof argv.hex, 'number');
    t.deepEqual(typeof argv._[0], 'number');
    t.end();
});

test('already a number', function (t) {
    var argv = parse([ '-x', 1234, 789 ]);
    t.deepEqual(argv, { x : 1234, _ : [ 789 ] });
    t.deepEqual(typeof argv.x, 'number');
    t.deepEqual(typeof argv._[0], 'number');
    t.end();
});
";
        
        $__internal_4ab48b1f1b73ace66a7e2a94c4cf80cdcf45e8da1d6c7586ef5488c65de37cff->leave($__internal_4ab48b1f1b73ace66a7e2a94c4cf80cdcf45e8da1d6c7586ef5488c65de37cff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/num.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('nums', function (t) {
    var argv = parse([
        '-x', '1234',
        '-y', '5.67',
        '-z', '1e7',
        '-w', '10f',
        '--hex', '0xdeadbeef',
        '789'
    ]);
    t.deepEqual(argv, {
        x : 1234,
        y : 5.67,
        z : 1e7,
        w : '10f',
        hex : 0xdeadbeef,
        _ : [ 789 ]
    });
    t.deepEqual(typeof argv.x, 'number');
    t.deepEqual(typeof argv.y, 'number');
    t.deepEqual(typeof argv.z, 'number');
    t.deepEqual(typeof argv.w, 'string');
    t.deepEqual(typeof argv.hex, 'number');
    t.deepEqual(typeof argv._[0], 'number');
    t.end();
});

test('already a number', function (t) {
    var argv = parse([ '-x', 1234, 789 ]);
    t.deepEqual(argv, { x : 1234, _ : [ 789 ] });
    t.deepEqual(typeof argv.x, 'number');
    t.deepEqual(typeof argv._[0], 'number');
    t.end();
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/num.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/num.js");
    }
}
