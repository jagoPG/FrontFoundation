<?php

/* node_modules/tape/test/exit/fail.js */
class __TwigTemplate_ff90cbb86010833428632d55d99d81684c46d94705a7d331aa78d594ebcb5ec3 extends Twig_Template
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
        $__internal_00ff55e5962e795d0326defc667e2381231f189a5311db29e09f4a9584020bcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00ff55e5962e795d0326defc667e2381231f189a5311db29e09f4a9584020bcf->enter($__internal_00ff55e5962e795d0326defc667e2381231f189a5311db29e09f4a9584020bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exit/fail.js"));

        // line 1
        echo "var test = require('../../');
var falafel = require('falafel');

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
";
        
        $__internal_00ff55e5962e795d0326defc667e2381231f189a5311db29e09f4a9584020bcf->leave($__internal_00ff55e5962e795d0326defc667e2381231f189a5311db29e09f4a9584020bcf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exit/fail.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');
var falafel = require('falafel');

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
", "node_modules/tape/test/exit/fail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exit/fail.js");
    }
}
