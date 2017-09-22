<?php

/* node_modules/defined/test/falsy.js */
class __TwigTemplate_866d9647dfc9a520ecbdd7652837b1a0621743530d5d0e748ab871e3b141f44f extends Twig_Template
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
        $__internal_c84ec81d23155a409bf4d982deb0db8960feecf8eeed043e49ec20cbef995836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c84ec81d23155a409bf4d982deb0db8960feecf8eeed043e49ec20cbef995836->enter($__internal_c84ec81d23155a409bf4d982deb0db8960feecf8eeed043e49ec20cbef995836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/defined/test/falsy.js"));

        // line 1
        echo "var test = require('tape');
var defined = require('../');

test('falsy', function (t) {
    t.plan(1);
    var opts = { y : false, w : 4 };
    var x = defined(opts.x, opts.y, opts.w, 8);
    t.equal(x, false);
});
";
        
        $__internal_c84ec81d23155a409bf4d982deb0db8960feecf8eeed043e49ec20cbef995836->leave($__internal_c84ec81d23155a409bf4d982deb0db8960feecf8eeed043e49ec20cbef995836_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/defined/test/falsy.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var defined = require('../');

test('falsy', function (t) {
    t.plan(1);
    var opts = { y : false, w : 4 };
    var x = defined(opts.x, opts.y, opts.w, 8);
    t.equal(x, false);
});
", "node_modules/defined/test/falsy.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/defined/test/falsy.js");
    }
}
