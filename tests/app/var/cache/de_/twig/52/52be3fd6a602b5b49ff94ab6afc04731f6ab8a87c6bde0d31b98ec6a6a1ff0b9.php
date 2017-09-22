<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dotted.js */
class __TwigTemplate_0df46f5917c8e302cba098fe364fb25b03d44415a39526fae39b8f9220e3bcdf extends Twig_Template
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
        $__internal_b9c9cd92831e3edf34b2a668ae67677b57c2e27a3fedc62d164e7b74bc5a0676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9c9cd92831e3edf34b2a668ae67677b57c2e27a3fedc62d164e7b74bc5a0676->enter($__internal_b9c9cd92831e3edf34b2a668ae67677b57c2e27a3fedc62d164e7b74bc5a0676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dotted.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('dotted alias', function (t) {
    var argv = parse(['--a.b', '22'], {default: {'a.b': 11}, alias: {'a.b': 'aa.bb'}});
    t.equal(argv.a.b, 22);
    t.equal(argv.aa.bb, 22);
    t.end();
});

test('dotted default', function (t) {
    var argv = parse('', {default: {'a.b': 11}, alias: {'a.b': 'aa.bb'}});
    t.equal(argv.a.b, 11);
    t.equal(argv.aa.bb, 11);
    t.end();
});

test('dotted default with no alias', function (t) {
    var argv = parse('', {default: {'a.b': 11}});
    t.equal(argv.a.b, 11);
    t.end();
});
";
        
        $__internal_b9c9cd92831e3edf34b2a668ae67677b57c2e27a3fedc62d164e7b74bc5a0676->leave($__internal_b9c9cd92831e3edf34b2a668ae67677b57c2e27a3fedc62d164e7b74bc5a0676_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dotted.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('dotted alias', function (t) {
    var argv = parse(['--a.b', '22'], {default: {'a.b': 11}, alias: {'a.b': 'aa.bb'}});
    t.equal(argv.a.b, 22);
    t.equal(argv.aa.bb, 22);
    t.end();
});

test('dotted default', function (t) {
    var argv = parse('', {default: {'a.b': 11}, alias: {'a.b': 'aa.bb'}});
    t.equal(argv.a.b, 11);
    t.equal(argv.aa.bb, 11);
    t.end();
});

test('dotted default with no alias', function (t) {
    var argv = parse('', {default: {'a.b': 11}});
    t.equal(argv.a.b, 11);
    t.end();
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dotted.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/dotted.js");
    }
}
