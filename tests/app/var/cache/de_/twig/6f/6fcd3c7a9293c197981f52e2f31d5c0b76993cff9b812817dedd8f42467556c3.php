<?php

/* node_modules/tape/example/too_many.js */
class __TwigTemplate_b1938ee453327a773a767083350219dafe52613bc110637bea3c808d10fee14f extends Twig_Template
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
        $__internal_f950a8310ee85c186e9795a02f26c065f6c8cecd9a4d1e02d49c3d232347cc16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f950a8310ee85c186e9795a02f26c065f6c8cecd9a4d1e02d49c3d232347cc16->enter($__internal_f950a8310ee85c186e9795a02f26c065f6c8cecd9a4d1e02d49c3d232347cc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/too_many.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../');

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
";
        
        $__internal_f950a8310ee85c186e9795a02f26c065f6c8cecd9a4d1e02d49c3d232347cc16->leave($__internal_f950a8310ee85c186e9795a02f26c065f6c8cecd9a4d1e02d49c3d232347cc16_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/too_many.js";
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
", "node_modules/tape/example/too_many.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/too_many.js");
    }
}
