<?php

/* node_modules/tape/example/nested.js */
class __TwigTemplate_46775f43b42c163eb5d3b99c224aca1121142d2e26cf4a663ae9ddc1382cdef3 extends Twig_Template
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
        $__internal_e30265e3d677751f9f34869519fc2776362fb9e8fa3d023eb8e7a377e5b4a346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e30265e3d677751f9f34869519fc2776362fb9e8fa3d023eb8e7a377e5b4a346->enter($__internal_e30265e3d677751f9f34869519fc2776362fb9e8fa3d023eb8e7a377e5b4a346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/nested.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../');

test('nested array test', function (t) {
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
    
    t.test('inside test', function (q) {
        q.plan(2);
        q.ok(true, 'inside ok');
        
        setTimeout(function () {
            q.ok(true, 'inside delayed');
        }, 3000);
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
    }, 100);
});
";
        
        $__internal_e30265e3d677751f9f34869519fc2776362fb9e8fa3d023eb8e7a377e5b4a346->leave($__internal_e30265e3d677751f9f34869519fc2776362fb9e8fa3d023eb8e7a377e5b4a346_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/nested.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var falafel = require('falafel');
var test = require('../');

test('nested array test', function (t) {
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
    
    t.test('inside test', function (q) {
        q.plan(2);
        q.ok(true, 'inside ok');
        
        setTimeout(function () {
            q.ok(true, 'inside delayed');
        }, 3000);
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
    }, 100);
});
", "node_modules/tape/example/nested.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/nested.js");
    }
}
