<?php

/* node_modules/object-inspect/test/circular.js */
class __TwigTemplate_0d9ecc1e89f5583bfceb18f1f75523c2201b61e9f10e762288bbb4c71088a27c extends Twig_Template
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
        $__internal_bcf565705a95e11a37539cd9c24a4302334cc7d7d4a133d90e71dbfa075f3a10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcf565705a95e11a37539cd9c24a4302334cc7d7d4a133d90e71dbfa075f3a10->enter($__internal_bcf565705a95e11a37539cd9c24a4302334cc7d7d4a133d90e71dbfa075f3a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/circular.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('circular', function (t) {
    t.plan(1);
    var obj = { a: 1, b: [3,4] };
    obj.c = obj;
    t.equal(inspect(obj), '{ a: 1, b: [ 3, 4 ], c: [Circular] }');
});
";
        
        $__internal_bcf565705a95e11a37539cd9c24a4302334cc7d7d4a133d90e71dbfa075f3a10->leave($__internal_bcf565705a95e11a37539cd9c24a4302334cc7d7d4a133d90e71dbfa075f3a10_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/circular.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('circular', function (t) {
    t.plan(1);
    var obj = { a: 1, b: [3,4] };
    obj.c = obj;
    t.equal(inspect(obj), '{ a: 1, b: [ 3, 4 ], c: [Circular] }');
});
", "node_modules/object-inspect/test/circular.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/circular.js");
    }
}
