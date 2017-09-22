<?php

/* node_modules/minimist/test/dotted.js */
class __TwigTemplate_bdcd6e4816aac69eb89990e4125025dc422eac77d77bae360ea5422cc40195ce extends Twig_Template
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
        $__internal_6a1a96ffe03519b25ab8f5ab447fc96cf067423b2aaf93dab2776c6951a6e9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1a96ffe03519b25ab8f5ab447fc96cf067423b2aaf93dab2776c6951a6e9ae->enter($__internal_6a1a96ffe03519b25ab8f5ab447fc96cf067423b2aaf93dab2776c6951a6e9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/dotted.js"));

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
        
        $__internal_6a1a96ffe03519b25ab8f5ab447fc96cf067423b2aaf93dab2776c6951a6e9ae->leave($__internal_6a1a96ffe03519b25ab8f5ab447fc96cf067423b2aaf93dab2776c6951a6e9ae_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/dotted.js";
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
", "node_modules/minimist/test/dotted.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/dotted.js");
    }
}
