<?php

/* node_modules/tape/example/fail.js */
class __TwigTemplate_2e2c3a35d8a99357bb1044214ef3f4736be332d77fe95a1fdeb618eb8fbb4b34 extends Twig_Template
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
        $__internal_44700c185fb3403170b08529d7bb72056d1f2cbf3243ef1ad7134a9513c07158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44700c185fb3403170b08529d7bb72056d1f2cbf3243ef1ad7134a9513c07158->enter($__internal_44700c185fb3403170b08529d7bb72056d1f2cbf3243ef1ad7134a9513c07158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/fail.js"));

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
            t.same(xs, [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]);
        }
    );
});
";
        
        $__internal_44700c185fb3403170b08529d7bb72056d1f2cbf3243ef1ad7134a9513c07158->leave($__internal_44700c185fb3403170b08529d7bb72056d1f2cbf3243ef1ad7134a9513c07158_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/fail.js";
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
            t.same(xs, [ [ 1, 2, [ 3, 4444 ] ], [ 5, 6 ] ]);
        }
    );
});
", "node_modules/tape/example/fail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/fail.js");
    }
}
