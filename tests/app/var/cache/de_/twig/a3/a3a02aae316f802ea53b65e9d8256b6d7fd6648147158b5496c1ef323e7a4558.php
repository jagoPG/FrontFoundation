<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/kv_short.js */
class __TwigTemplate_5ca205e7a03d1c3f538aea1b94c95f8e9d78525e01286f5f54df8f92c8727ef5 extends Twig_Template
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
        $__internal_a02c655b3ac382829a88259864e2599bbe96f28580839f718f6b3dec54a4ab41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a02c655b3ac382829a88259864e2599bbe96f28580839f718f6b3dec54a4ab41->enter($__internal_a02c655b3ac382829a88259864e2599bbe96f28580839f718f6b3dec54a4ab41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/kv_short.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b=123' ]);
    t.deepEqual(argv, { b: 123, _: [] });
});

test('multi short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-a=whatever', '-b=robots' ]);
    t.deepEqual(argv, { a: 'whatever', b: 'robots', _: [] });
});
";
        
        $__internal_a02c655b3ac382829a88259864e2599bbe96f28580839f718f6b3dec54a4ab41->leave($__internal_a02c655b3ac382829a88259864e2599bbe96f28580839f718f6b3dec54a4ab41_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/kv_short.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-b=123' ]);
    t.deepEqual(argv, { b: 123, _: [] });
});

test('multi short -k=v' , function (t) {
    t.plan(1);
    
    var argv = parse([ '-a=whatever', '-b=robots' ]);
    t.deepEqual(argv, { a: 'whatever', b: 'robots', _: [] });
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/kv_short.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/kv_short.js");
    }
}
