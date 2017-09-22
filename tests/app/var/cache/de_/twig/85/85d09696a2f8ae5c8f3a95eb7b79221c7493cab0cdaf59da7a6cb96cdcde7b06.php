<?php

/* node_modules/tape/test/skip.js */
class __TwigTemplate_9969ae42312d434c0b92e13455f35bac0c064552cf1b0a7a21c36c4baa412659 extends Twig_Template
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
        $__internal_ffc3cf5b98a2fade5d4064694f94ae4ba8576e368dedd2f730ab4ee91b4599e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc3cf5b98a2fade5d4064694f94ae4ba8576e368dedd2f730ab4ee91b4599e9->enter($__internal_ffc3cf5b98a2fade5d4064694f94ae4ba8576e368dedd2f730ab4ee91b4599e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/skip.js"));

        // line 1
        echo "var test = require('../');
var ran = 0;

var concat = require('concat-stream');
var tap = require('tap');

tap.test('test SKIP comment', function (assert) {
    assert.plan(1);

    var verify = function (output) {
        assert.equal(output.toString('utf8'), [
            'TAP version 13',
            '# SKIP skipped',
            '',
            '1..0',
            '# tests 0',
            '# pass  0',
            '',
            '# ok',
            ''
        ].join('\\n'));
    };

    var tapeTest = test.createHarness();
    tapeTest.createStream().pipe(concat(verify));
    tapeTest('skipped', { skip: true }, function (t) {
        t.end();
    });
});

test('skip this', { skip: true }, function(t) {
    t.fail('this should not even run');
\tran++;
    t.end();
});

test.skip('skip this too', function(t) {
    t.fail('this should not even run');
    ran++;
    t.end();
});

test('skip subtest', function(t) {
    ran++;
    t.test('skip this', { skip: true }, function(t) {
        t.fail('this should not even run');
        t.end();
    });
    t.end();
});

// vim: set softtabstop=4 shiftwidth=4:
";
        
        $__internal_ffc3cf5b98a2fade5d4064694f94ae4ba8576e368dedd2f730ab4ee91b4599e9->leave($__internal_ffc3cf5b98a2fade5d4064694f94ae4ba8576e368dedd2f730ab4ee91b4599e9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/skip.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');
var ran = 0;

var concat = require('concat-stream');
var tap = require('tap');

tap.test('test SKIP comment', function (assert) {
    assert.plan(1);

    var verify = function (output) {
        assert.equal(output.toString('utf8'), [
            'TAP version 13',
            '# SKIP skipped',
            '',
            '1..0',
            '# tests 0',
            '# pass  0',
            '',
            '# ok',
            ''
        ].join('\\n'));
    };

    var tapeTest = test.createHarness();
    tapeTest.createStream().pipe(concat(verify));
    tapeTest('skipped', { skip: true }, function (t) {
        t.end();
    });
});

test('skip this', { skip: true }, function(t) {
    t.fail('this should not even run');
\tran++;
    t.end();
});

test.skip('skip this too', function(t) {
    t.fail('this should not even run');
    ran++;
    t.end();
});

test('skip subtest', function(t) {
    ran++;
    t.test('skip this', { skip: true }, function(t) {
        t.fail('this should not even run');
        t.end();
    });
    t.end();
});

// vim: set softtabstop=4 shiftwidth=4:
", "node_modules/tape/test/skip.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/skip.js");
    }
}
