<?php

/* node_modules/tape/test/child_ordering.js */
class __TwigTemplate_485ff57d524e840a7f0249644880f074584357b4bfa4d737d2b91accdade9e16 extends Twig_Template
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
        $__internal_a0be1a9f30310b31cdbde1d9ae63200fc1918ebaed41a0fee114c5039b1d0743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0be1a9f30310b31cdbde1d9ae63200fc1918ebaed41a0fee114c5039b1d0743->enter($__internal_a0be1a9f30310b31cdbde1d9ae63200fc1918ebaed41a0fee114c5039b1d0743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/child_ordering.js"));

        // line 1
        echo "var test = require('../');

var childRan = false;

test('parent', function(t) {
    t.test('child', function(t) {
        childRan = true;
        t.pass('child ran');
        t.end();
    });
    t.end();
});

test('uncle', function(t) {
    t.ok(childRan, 'Child should run before next top-level test');
    t.end();
});

var grandParentRan = false;
var parentRan = false;
var grandChildRan = false;
test('grandparent', function(t) {
    t.ok(!grandParentRan, 'grand parent ran twice');
    grandParentRan = true;
    t.test('parent', function(t) {
        t.ok(!parentRan, 'parent ran twice');
        parentRan = true;
        t.test('grandchild', function(t) {
            t.ok(!grandChildRan, 'grand child ran twice');
            grandChildRan = true;
            t.pass('grand child ran');
            t.end();
        });
        t.pass('parent ran');
        t.end();
    });
    t.test('other parent', function(t) {
        t.ok(parentRan, 'first parent runs before second parent');
        t.ok(grandChildRan, 'grandchild runs before second parent');
        t.end();
    });
    t.pass('grandparent ran');
    t.end();
});

test('second grandparent', function(t) {
    t.ok(grandParentRan, 'grandparent ran');
    t.ok(parentRan, 'parent ran');
    t.ok(grandChildRan, 'grandchild ran');
    t.pass('other grandparent ran');
    t.end();
});

// vim: set softtabstop=4 shiftwidth=4:
";
        
        $__internal_a0be1a9f30310b31cdbde1d9ae63200fc1918ebaed41a0fee114c5039b1d0743->leave($__internal_a0be1a9f30310b31cdbde1d9ae63200fc1918ebaed41a0fee114c5039b1d0743_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/child_ordering.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

var childRan = false;

test('parent', function(t) {
    t.test('child', function(t) {
        childRan = true;
        t.pass('child ran');
        t.end();
    });
    t.end();
});

test('uncle', function(t) {
    t.ok(childRan, 'Child should run before next top-level test');
    t.end();
});

var grandParentRan = false;
var parentRan = false;
var grandChildRan = false;
test('grandparent', function(t) {
    t.ok(!grandParentRan, 'grand parent ran twice');
    grandParentRan = true;
    t.test('parent', function(t) {
        t.ok(!parentRan, 'parent ran twice');
        parentRan = true;
        t.test('grandchild', function(t) {
            t.ok(!grandChildRan, 'grand child ran twice');
            grandChildRan = true;
            t.pass('grand child ran');
            t.end();
        });
        t.pass('parent ran');
        t.end();
    });
    t.test('other parent', function(t) {
        t.ok(parentRan, 'first parent runs before second parent');
        t.ok(grandChildRan, 'grandchild runs before second parent');
        t.end();
    });
    t.pass('grandparent ran');
    t.end();
});

test('second grandparent', function(t) {
    t.ok(grandParentRan, 'grandparent ran');
    t.ok(parentRan, 'parent ran');
    t.ok(grandChildRan, 'grandchild ran');
    t.pass('other grandparent ran');
    t.end();
});

// vim: set softtabstop=4 shiftwidth=4:
", "node_modules/tape/test/child_ordering.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/child_ordering.js");
    }
}
