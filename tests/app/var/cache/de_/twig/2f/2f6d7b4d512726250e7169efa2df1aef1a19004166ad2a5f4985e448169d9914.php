<?php

/* node_modules/tape/test/nested-sync-noplan-noend.js */
class __TwigTemplate_751f91f0e9e46a55fb88bccf17c23e126528251b1c8f649f8df86d44f2079604 extends Twig_Template
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
        $__internal_a240427be0bbc21b58f3ef829526e0f2c1fe391014d36e1e1daf501787eab413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a240427be0bbc21b58f3ef829526e0f2c1fe391014d36e1e1daf501787eab413->enter($__internal_a240427be0bbc21b58f3ef829526e0f2c1fe391014d36e1e1daf501787eab413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/nested-sync-noplan-noend.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

tap.test('nested sync test without plan or end', function (tt) {
    tt.plan(1);

    var test = tape.createHarness();
    var tc = function (rows) {
       tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# nested without plan or end',
            '# first',
            'ok 1 should be truthy',
            '# second',
            'ok 2 should be truthy',
            '',
            '1..2',
            '# tests 2',
            '# pass  2',
            '',
            '# ok'
        ].join('\\n') + '\\n');
    };

    test.createStream().pipe(concat(tc));

    test('nested without plan or end', function(t) {
        t.test('first', function(q) {
            setTimeout(function first() { 
                q.ok(true);
                q.end() 
            }, 10);
        });
        t.test('second', function(q) {
            setTimeout(function second() { 
                q.ok(true);
                q.end() 
            }, 10);
        });
    });

});
";
        
        $__internal_a240427be0bbc21b58f3ef829526e0f2c1fe391014d36e1e1daf501787eab413->leave($__internal_a240427be0bbc21b58f3ef829526e0f2c1fe391014d36e1e1daf501787eab413_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/nested-sync-noplan-noend.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

tap.test('nested sync test without plan or end', function (tt) {
    tt.plan(1);

    var test = tape.createHarness();
    var tc = function (rows) {
       tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# nested without plan or end',
            '# first',
            'ok 1 should be truthy',
            '# second',
            'ok 2 should be truthy',
            '',
            '1..2',
            '# tests 2',
            '# pass  2',
            '',
            '# ok'
        ].join('\\n') + '\\n');
    };

    test.createStream().pipe(concat(tc));

    test('nested without plan or end', function(t) {
        t.test('first', function(q) {
            setTimeout(function first() { 
                q.ok(true);
                q.end() 
            }, 10);
        });
        t.test('second', function(q) {
            setTimeout(function second() { 
                q.ok(true);
                q.end() 
            }, 10);
        });
    });

});
", "node_modules/tape/test/nested-sync-noplan-noend.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/nested-sync-noplan-noend.js");
    }
}
