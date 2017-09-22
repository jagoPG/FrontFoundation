<?php

/* node_modules/tape/test/only.js */
class __TwigTemplate_d5d033eb4feb44d9382269d11d053a7324086e831c0b63081643fbed8e561e72 extends Twig_Template
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
        $__internal_2e8bc63707d0980bf370c931e7625b0447552cd0deb5ebf0f990cb27a8e95639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e8bc63707d0980bf370c931e7625b0447552cd0deb5ebf0f990cb27a8e95639->enter($__internal_2e8bc63707d0980bf370c931e7625b0447552cd0deb5ebf0f990cb27a8e95639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only.js"));

        // line 1
        echo "var tap = require('tap');
var tape = require('../');
var concat = require('concat-stream');

tap.test('tape only test', function (tt) {
    var test = tape.createHarness({ exit: false });
    var ran = [];

    var tc = function (rows) {
        tt.deepEqual(rows.toString('utf8'), [
            'TAP version 13',
            '# run success',
            'ok 1 assert name',
            '',
            '1..1',
            '# tests 1',
            '# pass  1',
            '',
            '# ok'
        ].join('\\n') + '\\n');
        tt.deepEqual(ran, [ 3 ]);

        tt.end()
    };

    test.createStream().pipe(concat(tc));

    test(\"never run fail\", function (t) {
        ran.push(1);
        t.equal(true, false)
        t.end()
    })

    test(\"never run success\", function (t) {
        ran.push(2);
        t.equal(true, true)
        t.end()
    })

    test.only(\"run success\", function (t) {
        ran.push(3);
        t.ok(true, \"assert name\")
        t.end()
    })
})
";
        
        $__internal_2e8bc63707d0980bf370c931e7625b0447552cd0deb5ebf0f990cb27a8e95639->leave($__internal_2e8bc63707d0980bf370c931e7625b0447552cd0deb5ebf0f990cb27a8e95639_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require('tap');
var tape = require('../');
var concat = require('concat-stream');

tap.test('tape only test', function (tt) {
    var test = tape.createHarness({ exit: false });
    var ran = [];

    var tc = function (rows) {
        tt.deepEqual(rows.toString('utf8'), [
            'TAP version 13',
            '# run success',
            'ok 1 assert name',
            '',
            '1..1',
            '# tests 1',
            '# pass  1',
            '',
            '# ok'
        ].join('\\n') + '\\n');
        tt.deepEqual(ran, [ 3 ]);

        tt.end()
    };

    test.createStream().pipe(concat(tc));

    test(\"never run fail\", function (t) {
        ran.push(1);
        t.equal(true, false)
        t.end()
    })

    test(\"never run success\", function (t) {
        ran.push(2);
        t.equal(true, true)
        t.end()
    })

    test.only(\"run success\", function (t) {
        ran.push(3);
        t.ok(true, \"assert name\")
        t.end()
    })
})
", "node_modules/tape/test/only.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only.js");
    }
}
