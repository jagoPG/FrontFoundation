<?php

/* node_modules/tape/example/not_enough.js */
class __TwigTemplate_3b83bbe907b28472716e6cccc5e59bf92ff70ac890698238095060067fcd74ed extends Twig_Template
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
        $__internal_81d9592af4a674a3751346900e186643fb13924b285589a44c72a8d7f09b6e2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81d9592af4a674a3751346900e186643fb13924b285589a44c72a8d7f09b6e2e->enter($__internal_81d9592af4a674a3751346900e186643fb13924b285589a44c72a8d7f09b6e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/not_enough.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../');

test('array', function (t) {
    t.plan(8);
    
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
";
        
        $__internal_81d9592af4a674a3751346900e186643fb13924b285589a44c72a8d7f09b6e2e->leave($__internal_81d9592af4a674a3751346900e186643fb13924b285589a44c72a8d7f09b6e2e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/not_enough.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var falafel = require('falafel');
var test = require('../');

test('array', function (t) {
    t.plan(8);
    
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
", "node_modules/tape/example/not_enough.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/not_enough.js");
    }
}
