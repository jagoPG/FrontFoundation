<?php

/* node_modules/tape/test/double_end.js */
class __TwigTemplate_6d8ac081e70a644c3144dbc52dded3291f720e18f551481f6e036549d487391a extends Twig_Template
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
        $__internal_b27c831ab6eb64a6456c0a2863c30a10b77e6572ecbc54923284442c315f8340 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b27c831ab6eb64a6456c0a2863c30a10b77e6572ecbc54923284442c315f8340->enter($__internal_b27c831ab6eb64a6456c0a2863c30a10b77e6572ecbc54923284442c315f8340_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/double_end.js"));

        // line 1
        echo "var test = require('tap').test;
var path = require('path');
var concat = require('concat-stream');
var spawn = require('child_process').spawn;

var stripFullStack = require('./common').stripFullStack;

test(function (t) {
    t.plan(2);
    var ps = spawn(process.execPath, [path.join(__dirname, 'double_end', 'double.js')]);
    ps.on('exit', function (code) {
        t.equal(code, 1);
    });
    ps.stdout.pipe(concat(function (body) {
        // The implementation of node's timer library has changed over time. We
        // need to reverse engineer the error we expect to see.

        // This code is unfortunately by necessity highly coupled to node
        // versions, and may require tweaking with future versions of the timers
        // library.
        function doEnd() { throw new Error() };
        var to = setTimeout(doEnd, 5000);
        clearTimeout(to);
        to._onTimeout = doEnd;

        var stackExpected;
        try {
          to._onTimeout();
        }
        catch (e) {
          stackExpected = stripFullStack(e.stack).split('\\n')[1];
          stackExpected = stackExpected.replace('double_end.js', 'double_end/double.js');
          stackExpected = stackExpected.trim();
        }

        var stripped = stripFullStack(body.toString('utf8'));
        t.equal(stripped, [
            'TAP version 13',
            '# double end',
            'ok 1 should be equal',
            'not ok 2 .end() called twice',
            '  ---',
            '    operator: fail',
            '    stack: |-',
            '      Error: .end() called twice',
            '          [... stack stripped ...]',
            '          ' + stackExpected,
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..2',
            '# tests 2',
            '# pass  1',
            '# fail  1',
        ].join('\\n') + '\\n\\n');
    }));
});
";
        
        $__internal_b27c831ab6eb64a6456c0a2863c30a10b77e6572ecbc54923284442c315f8340->leave($__internal_b27c831ab6eb64a6456c0a2863c30a10b77e6572ecbc54923284442c315f8340_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/double_end.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tap').test;
var path = require('path');
var concat = require('concat-stream');
var spawn = require('child_process').spawn;

var stripFullStack = require('./common').stripFullStack;

test(function (t) {
    t.plan(2);
    var ps = spawn(process.execPath, [path.join(__dirname, 'double_end', 'double.js')]);
    ps.on('exit', function (code) {
        t.equal(code, 1);
    });
    ps.stdout.pipe(concat(function (body) {
        // The implementation of node's timer library has changed over time. We
        // need to reverse engineer the error we expect to see.

        // This code is unfortunately by necessity highly coupled to node
        // versions, and may require tweaking with future versions of the timers
        // library.
        function doEnd() { throw new Error() };
        var to = setTimeout(doEnd, 5000);
        clearTimeout(to);
        to._onTimeout = doEnd;

        var stackExpected;
        try {
          to._onTimeout();
        }
        catch (e) {
          stackExpected = stripFullStack(e.stack).split('\\n')[1];
          stackExpected = stackExpected.replace('double_end.js', 'double_end/double.js');
          stackExpected = stackExpected.trim();
        }

        var stripped = stripFullStack(body.toString('utf8'));
        t.equal(stripped, [
            'TAP version 13',
            '# double end',
            'ok 1 should be equal',
            'not ok 2 .end() called twice',
            '  ---',
            '    operator: fail',
            '    stack: |-',
            '      Error: .end() called twice',
            '          [... stack stripped ...]',
            '          ' + stackExpected,
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..2',
            '# tests 2',
            '# pass  1',
            '# fail  1',
        ].join('\\n') + '\\n\\n');
    }));
});
", "node_modules/tape/test/double_end.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/double_end.js");
    }
}
