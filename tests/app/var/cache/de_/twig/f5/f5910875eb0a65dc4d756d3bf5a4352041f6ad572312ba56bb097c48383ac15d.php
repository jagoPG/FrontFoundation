<?php

/* node_modules/tape/test/nested.js */
class __TwigTemplate_c0a782d0636fbc9296e8ead3e8895aac1dfe0ce66fe483f7c402ff9bf12236fb extends Twig_Template
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
        $__internal_54653d149a35d8e975d75feac1a0e4a08977547f2f281043b460cb2f3ffbf762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54653d149a35d8e975d75feac1a0e4a08977547f2f281043b460cb2f3ffbf762->enter($__internal_54653d149a35d8e975d75feac1a0e4a08977547f2f281043b460cb2f3ffbf762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/nested.js"));

        // line 1
        echo "var falafel = require('falafel');
var tape = require('../');
var tap = require('tap');
var concat = require('concat-stream');

tap.test('array test', function (tt) {
    tt.plan(1);
    
    var test = tape.createHarness();
    var tc = function (rows) {
        tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# nested array test',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            '# inside test',
            'ok 6 should be truthy',
            'ok 7 should be truthy',
            '# another',
            'ok 8 should be truthy',
            '',
            '1..8',
            '# tests 8',
            '# pass  8',
            '',
            '# ok'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('nested array test', function (t) {
        t.plan(6);
        
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
        
        t.test('inside test', function (q) {
            q.plan(2);
            q.ok(true);
            
            setTimeout(function () {
                q.ok(true);
            }, 100);
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

    test('another', function (t) {
        t.plan(1);
        setTimeout(function () {
            t.ok(true);
        }, 50);
    });
});
";
        
        $__internal_54653d149a35d8e975d75feac1a0e4a08977547f2f281043b460cb2f3ffbf762->leave($__internal_54653d149a35d8e975d75feac1a0e4a08977547f2f281043b460cb2f3ffbf762_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/nested.js";
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
    var tc = function (rows) {
        tt.same(rows.toString('utf8'), [
            'TAP version 13',
            '# nested array test',
            'ok 1 should be equivalent',
            'ok 2 should be equivalent',
            'ok 3 should be equivalent',
            'ok 4 should be equivalent',
            'ok 5 should be equivalent',
            '# inside test',
            'ok 6 should be truthy',
            'ok 7 should be truthy',
            '# another',
            'ok 8 should be truthy',
            '',
            '1..8',
            '# tests 8',
            '# pass  8',
            '',
            '# ok'
        ].join('\\n') + '\\n');
    };
    
    test.createStream().pipe(concat(tc));
    
    test('nested array test', function (t) {
        t.plan(6);
        
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
        
        t.test('inside test', function (q) {
            q.plan(2);
            q.ok(true);
            
            setTimeout(function () {
                q.ok(true);
            }, 100);
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

    test('another', function (t) {
        t.plan(1);
        setTimeout(function () {
            t.ok(true);
        }, 50);
    });
});
", "node_modules/tape/test/nested.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/nested.js");
    }
}
