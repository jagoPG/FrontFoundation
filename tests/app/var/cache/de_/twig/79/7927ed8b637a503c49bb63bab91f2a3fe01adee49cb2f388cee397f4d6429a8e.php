<?php

/* node_modules/json-stable-stringify/example/value_cmp.js */
class __TwigTemplate_f0859249e4f10c6a8622c952b53716e79e13743ecf189ee4e14699c2fd8cdc70 extends Twig_Template
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
        $__internal_f5fc8af1e4bbe403a4cdff4c57eb05e5f4f81a9195496d07d02d7f74c39eb9f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5fc8af1e4bbe403a4cdff4c57eb05e5f4f81a9195496d07d02d7f74c39eb9f7->enter($__internal_f5fc8af1e4bbe403a4cdff4c57eb05e5f4f81a9195496d07d02d7f74c39eb9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/json-stable-stringify/example/value_cmp.js"));

        // line 1
        echo "var stringify = require('../');

var obj = { d: 6, c: 5, b: [{z:3,y:2,x:1},9], a: 10 };
var s = stringify(obj, function (a, b) {
    return a.value < b.value ? 1 : -1;
});
console.log(s);
";
        
        $__internal_f5fc8af1e4bbe403a4cdff4c57eb05e5f4f81a9195496d07d02d7f74c39eb9f7->leave($__internal_f5fc8af1e4bbe403a4cdff4c57eb05e5f4f81a9195496d07d02d7f74c39eb9f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/json-stable-stringify/example/value_cmp.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var stringify = require('../');

var obj = { d: 6, c: 5, b: [{z:3,y:2,x:1},9], a: 10 };
var s = stringify(obj, function (a, b) {
    return a.value < b.value ? 1 : -1;
});
console.log(s);
", "node_modules/json-stable-stringify/example/value_cmp.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/json-stable-stringify/example/value_cmp.js");
    }
}
