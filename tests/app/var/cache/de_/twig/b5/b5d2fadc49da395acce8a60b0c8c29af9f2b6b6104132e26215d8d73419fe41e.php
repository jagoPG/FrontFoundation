<?php

/* node_modules/tape/example/two.js */
class __TwigTemplate_a2e14302f8ff97b2759b652e21420e3d8142f9907a2e893530de393b7848af55 extends Twig_Template
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
        $__internal_2481a29e57baac06b31d272bf6d118126ea429634ee0fc47efeb0b6de29ec8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2481a29e57baac06b31d272bf6d118126ea429634ee0fc47efeb0b6de29ec8c2->enter($__internal_2481a29e57baac06b31d272bf6d118126ea429634ee0fc47efeb0b6de29ec8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/two.js"));

        // line 1
        echo "var test = require('../');

test('one', function (t) {
    t.plan(2);
    t.ok(true);
    setTimeout(function () {
        t.equal(1+3, 4);
    }, 100);
});

test('two', function (t) {
    t.plan(3);
    t.equal(5, 2+3);
    setTimeout(function () {
        t.equal('a'.charCodeAt(0), 97);
        t.ok(true);
    }, 50);
});
";
        
        $__internal_2481a29e57baac06b31d272bf6d118126ea429634ee0fc47efeb0b6de29ec8c2->leave($__internal_2481a29e57baac06b31d272bf6d118126ea429634ee0fc47efeb0b6de29ec8c2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/two.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('one', function (t) {
    t.plan(2);
    t.ok(true);
    setTimeout(function () {
        t.equal(1+3, 4);
    }, 100);
});

test('two', function (t) {
    t.plan(3);
    t.equal(5, 2+3);
    setTimeout(function () {
        t.equal('a'.charCodeAt(0), 97);
        t.ok(true);
    }, 50);
});
", "node_modules/tape/example/two.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/two.js");
    }
}
