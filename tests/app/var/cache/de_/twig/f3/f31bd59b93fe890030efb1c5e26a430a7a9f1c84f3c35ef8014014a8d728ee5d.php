<?php

/* node_modules/minimist/test/parse_modified.js */
class __TwigTemplate_d118f6d90711c611c2142498c6834bf93e5a68b4a7618dd5fdf007407eca2873 extends Twig_Template
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
        $__internal_90a07745463fe72afcba0b953d87c719e55dcc4cd3ae2ea9cc65b1b14a81f8f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a07745463fe72afcba0b953d87c719e55dcc4cd3ae2ea9cc65b1b14a81f8f7->enter($__internal_90a07745463fe72afcba0b953d87c719e55dcc4cd3ae2ea9cc65b1b14a81f8f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/parse_modified.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: [123] });
});
";
        
        $__internal_90a07745463fe72afcba0b953d87c719e55dcc4cd3ae2ea9cc65b1b14a81f8f7->leave($__internal_90a07745463fe72afcba0b953d87c719e55dcc4cd3ae2ea9cc65b1b14a81f8f7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/parse_modified.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('parse with modifier functions' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b', '123' ], { boolean: 'b' });
    t.deepEqual(argv, { b: true, _: [123] });
});
", "node_modules/minimist/test/parse_modified.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/parse_modified.js");
    }
}
