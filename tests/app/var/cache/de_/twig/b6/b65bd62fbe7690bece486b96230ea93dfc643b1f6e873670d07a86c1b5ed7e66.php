<?php

/* node_modules/defined/test/def.js */
class __TwigTemplate_f75c1ddbe9a1100174eb28f29e05411f391d6fc3eaf12855abc5203897ae6f26 extends Twig_Template
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
        $__internal_8047890f1a34cc03834f0a7613fb6786926f14107c463e664df3bf46153cf0e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8047890f1a34cc03834f0a7613fb6786926f14107c463e664df3bf46153cf0e4->enter($__internal_8047890f1a34cc03834f0a7613fb6786926f14107c463e664df3bf46153cf0e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/defined/test/def.js"));

        // line 1
        echo "var defined = require('../');
var test = require('tape');

test('defined-or', function (t) {
    var u = undefined;
    
    t.equal(defined(), u, 'empty arguments');
    t.equal(defined(u), u, '1 undefined');
    t.equal(defined(u, u), u, '2 undefined');
    t.equal(defined(u, u, u, u), u, '4 undefineds');
    
    t.equal(defined(undefined, false, true), false, 'false[0]');
    t.equal(defined(false, true), false, 'false[1]');
    t.equal(defined(undefined, 0, true), 0, 'zero[0]');
    t.equal(defined(0, true), 0, 'zero[1]');
    
    t.equal(defined(3, undefined, 4), 3, 'first arg');
    t.equal(defined(undefined, 3, 4), 3, 'second arg');
    t.equal(defined(undefined, undefined, 3), 3, 'third arg');
    
    t.end();
});
";
        
        $__internal_8047890f1a34cc03834f0a7613fb6786926f14107c463e664df3bf46153cf0e4->leave($__internal_8047890f1a34cc03834f0a7613fb6786926f14107c463e664df3bf46153cf0e4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/defined/test/def.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var defined = require('../');
var test = require('tape');

test('defined-or', function (t) {
    var u = undefined;
    
    t.equal(defined(), u, 'empty arguments');
    t.equal(defined(u), u, '1 undefined');
    t.equal(defined(u, u), u, '2 undefined');
    t.equal(defined(u, u, u, u), u, '4 undefineds');
    
    t.equal(defined(undefined, false, true), false, 'false[0]');
    t.equal(defined(false, true), false, 'false[1]');
    t.equal(defined(undefined, 0, true), 0, 'zero[0]');
    t.equal(defined(0, true), 0, 'zero[1]');
    
    t.equal(defined(3, undefined, 4), 3, 'first arg');
    t.equal(defined(undefined, 3, 4), 3, 'second arg');
    t.equal(defined(undefined, undefined, 3), 3, 'third arg');
    
    t.end();
});
", "node_modules/defined/test/def.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/defined/test/def.js");
    }
}
