<?php

/* node_modules/tape/test/circular-things.js */
class __TwigTemplate_95b19da3a5fe30e44f0c1991d88950a9ec01d5bc1c34abe0dd8e436dc7828239 extends Twig_Template
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
        $__internal_0ddda4432d058ed8ad85005e2efc6b74ca59548b78f19de9f6463eef35757cb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ddda4432d058ed8ad85005e2efc6b74ca59548b78f19de9f6463eef35757cb0->enter($__internal_0ddda4432d058ed8ad85005e2efc6b74ca59548b78f19de9f6463eef35757cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/circular-things.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('circular test', function (assert) {
    var test = tape.createHarness({ exit : false });
    assert.plan(1);

    test.createStream().pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# circular\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      {}\\n'
            + '    actual: |-\\n'
            + '      { circular: [Circular] }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/circular-things.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );
    }));

    test(\"circular\", function (t) {
        t.plan(1);
        var circular = {};
        circular.circular = circular;
        t.equal(circular, {});
    })
})
";
        
        $__internal_0ddda4432d058ed8ad85005e2efc6b74ca59548b78f19de9f6463eef35757cb0->leave($__internal_0ddda4432d058ed8ad85005e2efc6b74ca59548b78f19de9f6463eef35757cb0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/circular-things.js";
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

var stripFullStack = require('./common').stripFullStack;

tap.test('circular test', function (assert) {
    var test = tape.createHarness({ exit : false });
    assert.plan(1);

    test.createStream().pipe(concat(function (body) {
        assert.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# circular\\n'
            + 'not ok 1 should be equal\\n'
            + '  ---\\n'
            + '    operator: equal\\n'
            + '    expected: |-\\n'
            + '      {}\\n'
            + '    actual: |-\\n'
            + '      { circular: [Circular] }\\n'
            + '    stack: |-\\n'
            + '      Error: should be equal\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/circular-things.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );
    }));

    test(\"circular\", function (t) {
        t.plan(1);
        var circular = {};
        circular.circular = circular;
        t.equal(circular, {});
    })
})
", "node_modules/tape/test/circular-things.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/circular-things.js");
    }
}
