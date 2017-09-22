<?php

/* node_modules/object-inspect/test-core-js.js */
class __TwigTemplate_973bb216f79fa0da6f97d69493826f692dd24e0f265ece47c98b4788e193b6a9 extends Twig_Template
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
        $__internal_f70abdf0b57112182b70eb781965dfe1f9e47289e1c26137e0ba5b9bda1e4aa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f70abdf0b57112182b70eb781965dfe1f9e47289e1c26137e0ba5b9bda1e4aa4->enter($__internal_f70abdf0b57112182b70eb781965dfe1f9e47289e1c26137e0ba5b9bda1e4aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test-core-js.js"));

        // line 1
        echo "'use strict';

require('core-js');

var inspect = require('./');
var test = require('tape');

test('Maps', function (t) {
    t.equal(inspect(new Map([[1, 2]])), 'Map (1) {1 => 2}');
    t.end();
});

test('Sets', function (t) {
    t.equal(inspect(new Set([[1, 2]])), 'Set (1) {[ 1, 2 ]}');
    t.end();
});
";
        
        $__internal_f70abdf0b57112182b70eb781965dfe1f9e47289e1c26137e0ba5b9bda1e4aa4->leave($__internal_f70abdf0b57112182b70eb781965dfe1f9e47289e1c26137e0ba5b9bda1e4aa4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test-core-js.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

require('core-js');

var inspect = require('./');
var test = require('tape');

test('Maps', function (t) {
    t.equal(inspect(new Map([[1, 2]])), 'Map (1) {1 => 2}');
    t.end();
});

test('Sets', function (t) {
    t.equal(inspect(new Set([[1, 2]])), 'Set (1) {[ 1, 2 ]}');
    t.end();
});
", "node_modules/object-inspect/test-core-js.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test-core-js.js");
    }
}
