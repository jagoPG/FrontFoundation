<?php

/* node_modules/concat-map/test/map.js */
class __TwigTemplate_2bb41c221c1c68bd34a6103b4e27073c1cae615ad1f06f6a17c49d5314405545 extends Twig_Template
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
        $__internal_89a93ea7d22ff2f8b7c79b576cc0c9ac6721311d973a0d6de16c2fd1361cad7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a93ea7d22ff2f8b7c79b576cc0c9ac6721311d973a0d6de16c2fd1361cad7f->enter($__internal_89a93ea7d22ff2f8b7c79b576cc0c9ac6721311d973a0d6de16c2fd1361cad7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/concat-map/test/map.js"));

        // line 1
        echo "var concatMap = require('../');
var test = require('tape');

test('empty or not', function (t) {
    var xs = [ 1, 2, 3, 4, 5, 6 ];
    var ixes = [];
    var ys = concatMap(xs, function (x, ix) {
        ixes.push(ix);
        return x % 2 ? [ x - 0.1, x, x + 0.1 ] : [];
    });
    t.same(ys, [ 0.9, 1, 1.1, 2.9, 3, 3.1, 4.9, 5, 5.1 ]);
    t.same(ixes, [ 0, 1, 2, 3, 4, 5 ]);
    t.end();
});

test('always something', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function (x) {
        return x === 'b' ? [ 'B', 'B', 'B' ] : [ x ];
    });
    t.same(ys, [ 'a', 'B', 'B', 'B', 'c', 'd' ]);
    t.end();
});

test('scalars', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function (x) {
        return x === 'b' ? [ 'B', 'B', 'B' ] : x;
    });
    t.same(ys, [ 'a', 'B', 'B', 'B', 'c', 'd' ]);
    t.end();
});

test('undefs', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function () {});
    t.same(ys, [ undefined, undefined, undefined, undefined ]);
    t.end();
});
";
        
        $__internal_89a93ea7d22ff2f8b7c79b576cc0c9ac6721311d973a0d6de16c2fd1361cad7f->leave($__internal_89a93ea7d22ff2f8b7c79b576cc0c9ac6721311d973a0d6de16c2fd1361cad7f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/concat-map/test/map.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var concatMap = require('../');
var test = require('tape');

test('empty or not', function (t) {
    var xs = [ 1, 2, 3, 4, 5, 6 ];
    var ixes = [];
    var ys = concatMap(xs, function (x, ix) {
        ixes.push(ix);
        return x % 2 ? [ x - 0.1, x, x + 0.1 ] : [];
    });
    t.same(ys, [ 0.9, 1, 1.1, 2.9, 3, 3.1, 4.9, 5, 5.1 ]);
    t.same(ixes, [ 0, 1, 2, 3, 4, 5 ]);
    t.end();
});

test('always something', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function (x) {
        return x === 'b' ? [ 'B', 'B', 'B' ] : [ x ];
    });
    t.same(ys, [ 'a', 'B', 'B', 'B', 'c', 'd' ]);
    t.end();
});

test('scalars', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function (x) {
        return x === 'b' ? [ 'B', 'B', 'B' ] : x;
    });
    t.same(ys, [ 'a', 'B', 'B', 'B', 'c', 'd' ]);
    t.end();
});

test('undefs', function (t) {
    var xs = [ 'a', 'b', 'c', 'd' ];
    var ys = concatMap(xs, function () {});
    t.same(ys, [ undefined, undefined, undefined, undefined ]);
    t.end();
});
", "node_modules/concat-map/test/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/concat-map/test/map.js");
    }
}
