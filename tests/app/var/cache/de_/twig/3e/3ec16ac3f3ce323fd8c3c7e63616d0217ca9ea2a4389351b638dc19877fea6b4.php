<?php

/* node_modules/mkdirp/node_modules/minimist/test/dotted.js */
class __TwigTemplate_bb78301221f5e5733c3057381c7ba4000a734f9c0a53bb96b26b231e29e6bc93 extends Twig_Template
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
        $__internal_fd2f8cf98bcefcf1bb2cdecfc9a1a1ae96b0aeaa644d3e75a4b8abc0cb8238cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd2f8cf98bcefcf1bb2cdecfc9a1a1ae96b0aeaa644d3e75a4b8abc0cb8238cf->enter($__internal_fd2f8cf98bcefcf1bb2cdecfc9a1a1ae96b0aeaa644d3e75a4b8abc0cb8238cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/dotted.js"));

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
";
        
        $__internal_fd2f8cf98bcefcf1bb2cdecfc9a1a1ae96b0aeaa644d3e75a4b8abc0cb8238cf->leave($__internal_fd2f8cf98bcefcf1bb2cdecfc9a1a1ae96b0aeaa644d3e75a4b8abc0cb8238cf_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/dotted.js";
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
", "node_modules/mkdirp/node_modules/minimist/test/dotted.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/dotted.js");
    }
}
