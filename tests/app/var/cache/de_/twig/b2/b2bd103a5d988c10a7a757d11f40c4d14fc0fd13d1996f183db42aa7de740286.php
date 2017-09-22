<?php

/* node_modules/tape/test/timeoutAfter.js */
class __TwigTemplate_2fe07b57cdcf2d4433e6897656ab42cd93f07202a92d50d18815f1c35c88965c extends Twig_Template
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
        $__internal_f1f5e03a8d813c11f496921c1a4ef89cf7e74e3f2d068b13177d865bc7949b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f5e03a8d813c11f496921c1a4ef89cf7e74e3f2d068b13177d865bc7949b24->enter($__internal_f1f5e03a8d813c11f496921c1a4ef89cf7e74e3f2d068b13177d865bc7949b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/timeoutAfter.js"));

        // line 1
        echo "var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('timeoutAfter test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    var tc = function (rows) {
        tt.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# timeoutAfter',
            'not ok 1 test timed out after 1ms',
            '  ---',
            '    operator: fail',
            '    stack: |-',
            '      Error: test timed out after 1ms',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..1',
            '# tests 1',
            '# pass  0',
            '# fail  1'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('timeoutAfter', function (t) {
        t.plan(1);
        t.timeoutAfter(1);
    });
});
";
        
        $__internal_f1f5e03a8d813c11f496921c1a4ef89cf7e74e3f2d068b13177d865bc7949b24->leave($__internal_f1f5e03a8d813c11f496921c1a4ef89cf7e74e3f2d068b13177d865bc7949b24_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/timeoutAfter.js";
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

tap.test('timeoutAfter test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    var tc = function (rows) {
        tt.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# timeoutAfter',
            'not ok 1 test timed out after 1ms',
            '  ---',
            '    operator: fail',
            '    stack: |-',
            '      Error: test timed out after 1ms',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..1',
            '# tests 1',
            '# pass  0',
            '# fail  1'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('timeoutAfter', function (t) {
        t.plan(1);
        t.timeoutAfter(1);
    });
});
", "node_modules/tape/test/timeoutAfter.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/timeoutAfter.js");
    }
}
