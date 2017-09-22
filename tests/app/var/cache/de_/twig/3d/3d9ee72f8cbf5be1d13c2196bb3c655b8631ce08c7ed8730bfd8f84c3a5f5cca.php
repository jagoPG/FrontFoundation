<?php

/* node_modules/fsevents/node_modules/json-stable-stringify/test/cmp.js */
class __TwigTemplate_dd3befb3fc53bae1cd20223a185de7bf989609e64bcd206c6fda139a61dd5acb extends Twig_Template
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
        $__internal_03dbbf041e8e4949fe894a030b249a5b47b0be8933cee03b156f8e8bba2a5df3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dbbf041e8e4949fe894a030b249a5b47b0be8933cee03b156f8e8bba2a5df3->enter($__internal_03dbbf041e8e4949fe894a030b249a5b47b0be8933cee03b156f8e8bba2a5df3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/json-stable-stringify/test/cmp.js"));

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
        
        $__internal_03dbbf041e8e4949fe894a030b249a5b47b0be8933cee03b156f8e8bba2a5df3->leave($__internal_03dbbf041e8e4949fe894a030b249a5b47b0be8933cee03b156f8e8bba2a5df3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/json-stable-stringify/test/cmp.js";
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
", "node_modules/fsevents/node_modules/json-stable-stringify/test/cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/json-stable-stringify/test/cmp.js");
    }
}
