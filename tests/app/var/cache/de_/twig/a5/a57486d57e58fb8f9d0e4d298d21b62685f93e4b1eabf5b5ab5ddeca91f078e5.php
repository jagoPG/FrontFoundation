<?php

/* node_modules/fsevents/node_modules/minimist/test/dotted.js */
class __TwigTemplate_68414f1257756b2af1b23da21f2e52cd2702c3f9a294cc9510609381d5759153 extends Twig_Template
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
        $__internal_50a85e106488442a53fff0b7dcdfb3187aa19ef36b4a661b137b3b3b58ce3189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a85e106488442a53fff0b7dcdfb3187aa19ef36b4a661b137b3b3b58ce3189->enter($__internal_50a85e106488442a53fff0b7dcdfb3187aa19ef36b4a661b137b3b3b58ce3189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/minimist/test/dotted.js"));

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
        
        $__internal_50a85e106488442a53fff0b7dcdfb3187aa19ef36b4a661b137b3b3b58ce3189->leave($__internal_50a85e106488442a53fff0b7dcdfb3187aa19ef36b4a661b137b3b3b58ce3189_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/minimist/test/dotted.js";
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
", "node_modules/fsevents/node_modules/minimist/test/dotted.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/minimist/test/dotted.js");
    }
}
