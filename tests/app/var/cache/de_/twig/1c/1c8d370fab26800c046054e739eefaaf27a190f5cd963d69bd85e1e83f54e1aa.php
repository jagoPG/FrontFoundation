<?php

/* node_modules/tape/test/exit/too_few.js */
class __TwigTemplate_f43755d7c7ebf41caf07c07d8893662d73c60021e2f883c8803241dd039c0991 extends Twig_Template
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
        $__internal_c61e89ec94ba7acb47be14a0cbd006ab016589af5d65f98640a3f333c89d8e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61e89ec94ba7acb47be14a0cbd006ab016589af5d65f98640a3f333c89d8e2a->enter($__internal_c61e89ec94ba7acb47be14a0cbd006ab016589af5d65f98640a3f333c89d8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exit/too_few.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../../');

test('array', function (t) {
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
        
        $__internal_c61e89ec94ba7acb47be14a0cbd006ab016589af5d65f98640a3f333c89d8e2a->leave($__internal_c61e89ec94ba7acb47be14a0cbd006ab016589af5d65f98640a3f333c89d8e2a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exit/too_few.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var falafel = require('falafel');
var test = require('../../');

test('array', function (t) {
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
", "node_modules/tape/test/exit/too_few.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exit/too_few.js");
    }
}
