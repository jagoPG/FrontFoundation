<?php

/* node_modules/tape/test/fail.js */
class __TwigTemplate_700a95779dee019922ff2073424ba75b7ad66fec4d7dc2809db301b4524e9f76 extends Twig_Template
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
        $__internal_f1dd1036162bd14577c0b79b4bac1ef20b93f14998390359baf93b16ec616796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1dd1036162bd14577c0b79b4bac1ef20b93f14998390359baf93b16ec616796->enter($__internal_f1dd1036162bd14577c0b79b4bac1ef20b93f14998390359baf93b16ec616796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/fail.js"));

        // line 1
        echo "var falafel = require('falafel');
var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness({ exit : false });
    var tc = function (rows) {
        tt.same(stripFullStack(rows.toString('utf8')), [
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
            '          at \$TEST/fail.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/fail.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/fail.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/fail.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..5',
            '# tests 5',
            '# pass  4',
            '# fail  1',
            ''
        ].join('\\n'));
    };
    
    test.createStream().pipe(concat(tc));
    
    test('array', function (t) {
        t.plan(5);
        
        var src = '(' + function () {
            var xs = [ 1, 2, [ 3, 4 ] ];
            var ys = [ 5, 6 ];
            g([ xs, ys ]);
        } + ')()';
        
        var output = falafel(src, function (node) {
            if (node.type === 'ArrayExpression') {
                node.update('fn(' + node.source() + ')');
            }
        });
        
        var arrays = [
            [ 3, 4 ],
            [ 1, 2, [ 3, 4 ] ],
            [ 5, 6 ],
            [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ],
        ];
        
        Function(['fn','g'], output)(
            function (xs) {
                t.same(arrays.shift(), xs);
                return xs;
            },
            function (xs) {
                t.same(xs, [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
";
        
        $__internal_f1dd1036162bd14577c0b79b4bac1ef20b93f14998390359baf93b16ec616796->leave($__internal_f1dd1036162bd14577c0b79b4bac1ef20b93f14998390359baf93b16ec616796_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/fail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var falafel = require('falafel');
var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

var stripFullStack = require('./common').stripFullStack;

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness({ exit : false });
    var tc = function (rows) {
        tt.same(stripFullStack(rows.toString('utf8')), [
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
            '          at \$TEST/fail.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/fail.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/fail.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/fail.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            '',
            '1..5',
            '# tests 5',
            '# pass  4',
            '# fail  1',
            ''
        ].join('\\n'));
    };
    
    test.createStream().pipe(concat(tc));
    
    test('array', function (t) {
        t.plan(5);
        
        var src = '(' + function () {
            var xs = [ 1, 2, [ 3, 4 ] ];
            var ys = [ 5, 6 ];
            g([ xs, ys ]);
        } + ')()';
        
        var output = falafel(src, function (node) {
            if (node.type === 'ArrayExpression') {
                node.update('fn(' + node.source() + ')');
            }
        });
        
        var arrays = [
            [ 3, 4 ],
            [ 1, 2, [ 3, 4 ] ],
            [ 5, 6 ],
            [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ],
        ];
        
        Function(['fn','g'], output)(
            function (xs) {
                t.same(arrays.shift(), xs);
                return xs;
            },
            function (xs) {
                t.same(xs, [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
", "node_modules/tape/test/fail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/fail.js");
    }
}
