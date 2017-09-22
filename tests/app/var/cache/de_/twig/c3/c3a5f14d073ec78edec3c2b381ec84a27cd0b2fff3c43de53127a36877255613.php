<?php

/* node_modules/minimist/test/num.js */
class __TwigTemplate_a0964e2c71151b96f07159f28b5a1fb8cc21ecc5f4406c66b0a9e3982e1058c3 extends Twig_Template
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
        $__internal_afc4e65cb36b590d0184f4852291c4a643e00de209d5c23f1d21d3d7baf45790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afc4e65cb36b590d0184f4852291c4a643e00de209d5c23f1d21d3d7baf45790->enter($__internal_afc4e65cb36b590d0184f4852291c4a643e00de209d5c23f1d21d3d7baf45790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/num.js"));

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
        
        $__internal_afc4e65cb36b590d0184f4852291c4a643e00de209d5c23f1d21d3d7baf45790->leave($__internal_afc4e65cb36b590d0184f4852291c4a643e00de209d5c23f1d21d3d7baf45790_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/num.js";
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
", "node_modules/minimist/test/num.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/num.js");
    }
}
