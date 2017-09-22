<?php

/* node_modules/object-inspect/test/has.js */
class __TwigTemplate_7a54f44d3420194c3a08c8bcf15aaa67a24ebf7bf5ba8b5defda9cd8304eb383 extends Twig_Template
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
        $__internal_8c1a70b7652c21a3750f638ad568020556b1817ae212b1a4c3c181001413d08b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1a70b7652c21a3750f638ad568020556b1817ae212b1a4c3c181001413d08b->enter($__internal_8c1a70b7652c21a3750f638ad568020556b1817ae212b1a4c3c181001413d08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/has.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

var withoutProperty = function (object, property, fn) {
    var original;
    if (Object.getOwnPropertyDescriptor) {
        original = Object.getOwnPropertyDescriptor(object, property);
    } else {
        original = object[property];
    }
    delete object[property];
    try {
        fn();
    } finally {
        if (Object.getOwnPropertyDescriptor) {
            Object.defineProperty(object, property, original);
        } else {
            object[property] = original;
        }
    }
};

test('when Object#hasOwnProperty is deleted', function (t) {
    t.plan(1);
    var arr = [1, , 3];
    Array.prototype[1] = 2; // this is needed to account for \"in\" vs \"hasOwnProperty\"
    withoutProperty(Object.prototype, 'hasOwnProperty', function () {
        t.equal(inspect(arr), '[ 1, , 3 ]');
    });
\tdelete Array.prototype[1];
});
";
        
        $__internal_8c1a70b7652c21a3750f638ad568020556b1817ae212b1a4c3c181001413d08b->leave($__internal_8c1a70b7652c21a3750f638ad568020556b1817ae212b1a4c3c181001413d08b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/has.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

var withoutProperty = function (object, property, fn) {
    var original;
    if (Object.getOwnPropertyDescriptor) {
        original = Object.getOwnPropertyDescriptor(object, property);
    } else {
        original = object[property];
    }
    delete object[property];
    try {
        fn();
    } finally {
        if (Object.getOwnPropertyDescriptor) {
            Object.defineProperty(object, property, original);
        } else {
            object[property] = original;
        }
    }
};

test('when Object#hasOwnProperty is deleted', function (t) {
    t.plan(1);
    var arr = [1, , 3];
    Array.prototype[1] = 2; // this is needed to account for \"in\" vs \"hasOwnProperty\"
    withoutProperty(Object.prototype, 'hasOwnProperty', function () {
        t.equal(inspect(arr), '[ 1, , 3 ]');
    });
\tdelete Array.prototype[1];
});
", "node_modules/object-inspect/test/has.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/has.js");
    }
}
