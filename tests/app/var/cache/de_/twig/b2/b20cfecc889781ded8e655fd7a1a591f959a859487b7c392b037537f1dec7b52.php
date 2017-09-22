<?php

/* node_modules/tape/test/exit/ok.js */
class __TwigTemplate_1a8e72f26d56b59a1afaf95e951eccb0e205ec2c4faa2ff401b033ad78caf983 extends Twig_Template
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
        $__internal_7b03cd211955d99a4bfd7c4aa5313f3186de609bb1c1c2e09ef85c3fa0e50dff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b03cd211955d99a4bfd7c4aa5313f3186de609bb1c1c2e09ef85c3fa0e50dff->enter($__internal_7b03cd211955d99a4bfd7c4aa5313f3186de609bb1c1c2e09ef85c3fa0e50dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exit/ok.js"));

        // line 1
        echo "var falafel = require('falafel');
var test = require('../../');

test('array', function (t) {
    t.comment('hi');
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
        
        $__internal_7b03cd211955d99a4bfd7c4aa5313f3186de609bb1c1c2e09ef85c3fa0e50dff->leave($__internal_7b03cd211955d99a4bfd7c4aa5313f3186de609bb1c1c2e09ef85c3fa0e50dff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exit/ok.js";
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
    t.comment('hi');
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
", "node_modules/tape/test/exit/ok.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exit/ok.js");
    }
}
