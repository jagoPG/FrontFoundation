<?php

/* node_modules/tape/test/too_many.js */
class __TwigTemplate_b76fb47b8544c5e0618e5b0966bcbba2cd67d5fc5c590845b5c3fb9fa49865ab extends Twig_Template
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
        $__internal_5ec69458b782b6df57893c033141d7a2e340e5be54738792964076c5e0bb172a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ec69458b782b6df57893c033141d7a2e340e5be54738792964076c5e0bb172a->enter($__internal_5ec69458b782b6df57893c033141d7a2e340e5be54738792964076c5e0bb172a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/too_many.js"));

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
            'not ok 5 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 3',
            '    actual:   4',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '          at \$TEST/too_many.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/too_many.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/too_many.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/too_many.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            'ok 6 should be equivalent',
            '',
            '1..6',
            '# tests 6',
            '# pass  5',
            '# fail  1'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('array', function (t) {
        t.plan(3);
        
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
                t.same(xs, [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
";
        
        $__internal_5ec69458b782b6df57893c033141d7a2e340e5be54738792964076c5e0bb172a->leave($__internal_5ec69458b782b6df57893c033141d7a2e340e5be54738792964076c5e0bb172a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/too_many.js";
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
            'not ok 5 plan != count',
            '  ---',
            '    operator: fail',
            '    expected: 3',
            '    actual:   4',
            '    stack: |-',
            '      Error: plan != count',
            '          [... stack stripped ...]',
            '          at \$TEST/too_many.js:\$LINE:\$COL',
            '          at eval (eval at <anonymous> (\$TEST/too_many.js:\$LINE:\$COL))',
            '          at eval (eval at <anonymous> (\$TEST/too_many.js:\$LINE:\$COL))',
            '          at Test.<anonymous> (\$TEST/too_many.js:\$LINE:\$COL)',
            '          [... stack stripped ...]',
            '  ...',
            'ok 6 should be equivalent',
            '',
            '1..6',
            '# tests 6',
            '# pass  5',
            '# fail  1'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('array', function (t) {
        t.plan(3);
        
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
                t.same(xs, [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
", "node_modules/tape/test/too_many.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/too_many.js");
    }
}
