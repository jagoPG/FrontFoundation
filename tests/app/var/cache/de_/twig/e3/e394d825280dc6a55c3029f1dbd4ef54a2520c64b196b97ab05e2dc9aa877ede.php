<?php

/* node_modules/fsevents/node_modules/concat-map/test/map.js */
class __TwigTemplate_e7db7c5d4a1239b645fde61c630ee65c3be0791a915b25c41893661d9ec445e4 extends Twig_Template
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
        $__internal_23ba62a51a2c3db4ba37e28aee770d5a8b3dac95dcfbb446008a44329d5ba061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ba62a51a2c3db4ba37e28aee770d5a8b3dac95dcfbb446008a44329d5ba061->enter($__internal_23ba62a51a2c3db4ba37e28aee770d5a8b3dac95dcfbb446008a44329d5ba061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/concat-map/test/map.js"));

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
        
        $__internal_23ba62a51a2c3db4ba37e28aee770d5a8b3dac95dcfbb446008a44329d5ba061->leave($__internal_23ba62a51a2c3db4ba37e28aee770d5a8b3dac95dcfbb446008a44329d5ba061_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/concat-map/test/map.js";
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
", "node_modules/fsevents/node_modules/concat-map/test/map.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/concat-map/test/map.js");
    }
}
