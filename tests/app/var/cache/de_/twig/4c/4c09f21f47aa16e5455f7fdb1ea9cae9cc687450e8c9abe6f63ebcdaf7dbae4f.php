<?php

/* node_modules/tape/example/nested_fail.js */
class __TwigTemplate_5334242a372cc1b0a7a4690726f6e2a686f91846dac8ab0f0ec73eb637e6fffc extends Twig_Template
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
        $__internal_5a101d06172b6443c8e710276e33bb9adb3e1d55d4e281bc41094cfeecac1f23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a101d06172b6443c8e710276e33bb9adb3e1d55d4e281bc41094cfeecac1f23->enter($__internal_5a101d06172b6443c8e710276e33bb9adb3e1d55d4e281bc41094cfeecac1f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/nested_fail.js"));

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
        q.ok(true);
        
        setTimeout(function () {
            q.equal(3, 4);
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
        
        $__internal_5a101d06172b6443c8e710276e33bb9adb3e1d55d4e281bc41094cfeecac1f23->leave($__internal_5a101d06172b6443c8e710276e33bb9adb3e1d55d4e281bc41094cfeecac1f23_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/nested_fail.js";
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
        q.ok(true);
        
        setTimeout(function () {
            q.equal(3, 4);
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
", "node_modules/tape/example/nested_fail.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/nested_fail.js");
    }
}
