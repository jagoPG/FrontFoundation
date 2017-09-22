<?php

/* node_modules/json-stable-stringify/test/cmp.js */
class __TwigTemplate_21fa9e20b7dbf763c8015f40d708be4b34c8ef6689ae66cdcc1565a4aea14fe8 extends Twig_Template
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
        $__internal_1a4379e119dbe5eb52c696a7c8d494450bdc4c14baeca71e313c7647709c776b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a4379e119dbe5eb52c696a7c8d494450bdc4c14baeca71e313c7647709c776b->enter($__internal_1a4379e119dbe5eb52c696a7c8d494450bdc4c14baeca71e313c7647709c776b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/test/cmp.js"));

        // line 1
        echo "var test = require('tape');
var stringify = require('../');

test('custom comparison function', function (t) {
    t.plan(1);
    var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
    var s = stringify(obj, function (a, b) {
        return a.key < b.key ? 1 : -1;
    });
    t.equal(s, '{\"c\":8,\"b\":[{\"z\":6,\"y\":5,\"x\":4},7],\"a\":3}');
});
";
        
        $__internal_1a4379e119dbe5eb52c696a7c8d494450bdc4c14baeca71e313c7647709c776b->leave($__internal_1a4379e119dbe5eb52c696a7c8d494450bdc4c14baeca71e313c7647709c776b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/test/cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var stringify = require('../');

test('custom comparison function', function (t) {
    t.plan(1);
    var obj = { c: 8, b: [{z:6,y:5,x:4},7], a: 3 };
    var s = stringify(obj, function (a, b) {
        return a.key < b.key ? 1 : -1;
    });
    t.equal(s, '{\"c\":8,\"b\":[{\"z\":6,\"y\":5,\"x\":4},7],\"a\":3}');
});
", "node_modules/json-stable-stringify/test/cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/test/cmp.js");
    }
}
