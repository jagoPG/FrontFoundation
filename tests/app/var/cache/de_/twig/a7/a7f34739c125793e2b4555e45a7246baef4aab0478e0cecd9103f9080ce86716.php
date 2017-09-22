<?php

/* node_modules/tape/example/array.js */
class __TwigTemplate_1408a71fdf2049a61bfd7a8ae2bbee1f355c62f196d71d90e572528c69c2e9fc extends Twig_Template
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
        $__internal_ed6150a72cb5611222f2dfd50ac547d7af84bd4e257e2ae5697a243fb0eff72e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed6150a72cb5611222f2dfd50ac547d7af84bd4e257e2ae5697a243fb0eff72e->enter($__internal_ed6150a72cb5611222f2dfd50ac547d7af84bd4e257e2ae5697a243fb0eff72e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/array.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../');

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
";
        
        $__internal_ed6150a72cb5611222f2dfd50ac547d7af84bd4e257e2ae5697a243fb0eff72e->leave($__internal_ed6150a72cb5611222f2dfd50ac547d7af84bd4e257e2ae5697a243fb0eff72e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/array.js";
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
", "node_modules/tape/example/array.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/array.js");
    }
}
