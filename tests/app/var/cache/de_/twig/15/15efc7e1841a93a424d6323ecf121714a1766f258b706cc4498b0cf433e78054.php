<?php

/* node_modules/tape/test/undef.js */
class __TwigTemplate_382bb942ae12748e3b70847dcb11bd2cbcc0c6dc7536136edb1a127b5eeb7ffb extends Twig_Template
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
        $__internal_877b819bad31657a514994da90341becef2fb5f4fcfb84c6a9b01aab0e2fecd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_877b819bad31657a514994da90341becef2fb5f4fcfb84c6a9b01aab0e2fecd5->enter($__internal_877b819bad31657a514994da90341becef2fb5f4fcfb84c6a9b01aab0e2fecd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/undef.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    test.createStream().pipe(concat(function (body) {
        tt.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# undef\\n'
            + 'not ok 1 should be equivalent\\n'
            + '  ---\\n'
            + '    operator: deepEqual\\n'
            + '    expected: |-\\n'
            + '      { beep: undefined }\\n'
            + '    actual: |-\\n'
            + '      {}\\n'
            + '    stack: |-\\n'
            + '      Error: should be equivalent\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/undef.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );
    }));
    
    test('undef', function (t) {
        t.plan(1);
        t.deepEqual({}, { beep: undefined });
    });
});
";
        
        $__internal_877b819bad31657a514994da90341becef2fb5f4fcfb84c6a9b01aab0e2fecd5->leave($__internal_877b819bad31657a514994da90341becef2fb5f4fcfb84c6a9b01aab0e2fecd5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/undef.js";
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

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    test.createStream().pipe(concat(function (body) {
        tt.equal(
            stripFullStack(body.toString('utf8')),
            'TAP version 13\\n'
            + '# undef\\n'
            + 'not ok 1 should be equivalent\\n'
            + '  ---\\n'
            + '    operator: deepEqual\\n'
            + '    expected: |-\\n'
            + '      { beep: undefined }\\n'
            + '    actual: |-\\n'
            + '      {}\\n'
            + '    stack: |-\\n'
            + '      Error: should be equivalent\\n'
            + '          [... stack stripped ...]\\n'
            + '          at Test.<anonymous> (\$TEST/undef.js:\$LINE:\$COL)\\n'
            + '          [... stack stripped ...]\\n'
            + '  ...\\n'
            + '\\n'
            + '1..1\\n'
            + '# tests 1\\n'
            + '# pass  0\\n'
            + '# fail  1\\n'
        );
    }));
    
    test('undef', function (t) {
        t.plan(1);
        t.deepEqual({}, { beep: undefined });
    });
});
", "node_modules/tape/test/undef.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/undef.js");
    }
}
