<?php

/* node_modules/tape/test/exit.js */
class __TwigTemplate_4d4db6af9c31863cded983897f149566a8e2fd523350617cb4486afad67273a5 extends Twig_Template
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
        $__internal_f7c74d79fc6e1e471d8b7bac6864fbdc99537db44836c8a59726444eefd52f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7c74d79fc6e1e471d8b7bac6864fbdc99537db44836c8a59726444eefd52f75->enter($__internal_f7c74d79fc6e1e471d8b7bac6864fbdc99537db44836c8a59726444eefd52f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exit.js"));

        // line 1
        echo "var tap = require('tap');
var path = require('path');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('exit ok', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# array',
            '# hi',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            '',
            '1..5',
            '# tests 5',
            '# pass  5',
            '',
            '# ok',
            '', // yes, these double-blank-lines at the end are required.
            ''  // if you can figure out how to remove them, please do!
        ].join('\\n'));
    }

    var ps = spawn(process.execPath, [path.join(__dirname, 'exit', 'ok.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

tap.test('exit fail', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# array',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'not ok 5 should be equivalent',
            '  ---',
            '    operator: deepEqual',
            '    expected: [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]',
            '    actual:   [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]',
            '    stack: |-',
            '      Error: should be equivalent',
            '          [... stack stripped ...]',
            '          at \$TEST/exit/fail.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..5',
            '# tests 5',
            '# pass  4',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, 'exit', 'fail.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});

tap.test('too few exit', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# array',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            'not ok 6 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 6',
            '    actual:   5',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..6',
            '# tests 6',
            '# pass  5',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, '/exit/too_few.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});

tap.test('more planned in a second test', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# first',
            'ok 1 should be truthy',
            '# second',
            'ok 2 should be truthy',
            'not ok 3 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 2',
            '    actual:   1',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..3',
            '# tests 3',
            '# pass  2',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, '/exit/second.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});
";
        
        $__internal_f7c74d79fc6e1e471d8b7bac6864fbdc99537db44836c8a59726444eefd52f75->leave($__internal_f7c74d79fc6e1e471d8b7bac6864fbdc99537db44836c8a59726444eefd52f75_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exit.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require('tap');
var path = require('path');
var spawn = require('child_process').spawn;
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('exit ok', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(rows.toString('utf8'), [
            'TAP version 13',
            '# array',
            '# hi',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            '',
            '1..5',
            '# tests 5',
            '# pass  5',
            '',
            '# ok',
            '', // yes, these double-blank-lines at the end are required.
            ''  // if you can figure out how to remove them, please do!
        ].join('\\n'));
    }

    var ps = spawn(process.execPath, [path.join(__dirname, 'exit', 'ok.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.equal(code, 0);
    });
});

tap.test('exit fail', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# array',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'not ok 5 should be equivalent',
            '  ---',
            '    operator: deepEqual',
            '    expected: [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]',
            '    actual:   [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]',
            '    stack: |-',
            '      Error: should be equivalent',
            '          [... stack stripped ...]',
            '          at \$TEST/exit/fail.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/exit/fail.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..5',
            '# tests 5',
            '# pass  4',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, 'exit', 'fail.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});

tap.test('too few exit', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# array',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            'not ok 6 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 6',
            '    actual:   5',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..6',
            '# tests 6',
            '# pass  5',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, '/exit/too_few.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});

tap.test('more planned in a second test', function (t) {
    t.plan(2);

    var tc = function (rows) {
        t.same(stripFullStack(rows.toString('utf8')), [
            'TAP version 13',
            '# first',
            'ok 1 should be truthy',
            '# second',
            'ok 2 should be truthy',
            'not ok 3 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 2',
            '    actual:   1',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..3',
            '# tests 3',
            '# pass  2',
            '# fail  1'
        ].join('\\n') + '\\n\\n');
    };

    var ps = spawn(process.execPath, [path.join(__dirname, '/exit/second.js')]);
    ps.stdout.pipe(concat(tc));
    ps.on('exit', function (code) {
        t.notEqual(code, 0);
    });
});
", "node_modules/tape/test/exit.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exit.js");
    }
}
