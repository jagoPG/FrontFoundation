<?php

/* node_modules/mkdirp/node_modules/minimist/test/whitespace.js */
class __TwigTemplate_e170a8aace5ffa1bf3d1ec6c29425268f6118db20e43f35f096bede173a093c4 extends Twig_Template
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
        $__internal_7d10449103d1c0f23eebf956d07ce4c94ca18362cb3c9311ae57ea6ff036659d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d10449103d1c0f23eebf956d07ce4c94ca18362cb3c9311ae57ea6ff036659d->enter($__internal_7d10449103d1c0f23eebf956d07ce4c94ca18362cb3c9311ae57ea6ff036659d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mkdirp/node_modules/minimist/test/whitespace.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
";
        
        $__internal_7d10449103d1c0f23eebf956d07ce4c94ca18362cb3c9311ae57ea6ff036659d->leave($__internal_7d10449103d1c0f23eebf956d07ce4c94ca18362cb3c9311ae57ea6ff036659d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mkdirp/node_modules/minimist/test/whitespace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
", "node_modules/mkdirp/node_modules/minimist/test/whitespace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mkdirp/node_modules/minimist/test/whitespace.js");
    }
}
