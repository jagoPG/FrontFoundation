<?php

/* node_modules/tape/test/array.js */
class __TwigTemplate_d463d02adc614436296ab77fdb59f6daad7ded91156ead478d9ca51105a6cb79 extends Twig_Template
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
        $__internal_d47b29c38055bb71d342c7136521a3a399cccfffe8b3262ee90d3339590b368f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d47b29c38055bb71d342c7136521a3a399cccfffe8b3262ee90d3339590b368f->enter($__internal_d47b29c38055bb71d342c7136521a3a399cccfffe8b3262ee90d3339590b368f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/array.js"));

        // line 1
        echo "var falafel = require('falafel');
var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    
    test.createStream().pipe(concat(function (rows) {
        tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# array',
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
            '# ok'
        ].join('\\n') + '\\n');
    }));
    
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
                t.same(xs, [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
";
        
        $__internal_d47b29c38055bb71d342c7136521a3a399cccfffe8b3262ee90d3339590b368f->leave($__internal_d47b29c38055bb71d342c7136521a3a399cccfffe8b3262ee90d3339590b368f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/array.js";
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

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    
    test.createStream().pipe(concat(function (rows) {
        tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# array',
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
            '# ok'
        ].join('\\n') + '\\n');
    }));
    
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
                t.same(xs, [ [ 1, 2, [ 3, 4 ] ], [ 5, 6 ] ]);
            }
        );
    });
});
", "node_modules/tape/test/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/array.js");
    }
}
