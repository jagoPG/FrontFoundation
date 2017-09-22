<?php

/* node_modules/tape/test/many.js */
class __TwigTemplate_4d1a4d7cb0b4f6243ee6085e2212aa1197993c3360918b24802a333264a7e5fa extends Twig_Template
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
        $__internal_a4ee6805e1fc0f264d341394479fdb35e7c12a0d1525dbbd07b37e5160752d38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ee6805e1fc0f264d341394479fdb35e7c12a0d1525dbbd07b37e5160752d38->enter($__internal_a4ee6805e1fc0f264d341394479fdb35e7c12a0d1525dbbd07b37e5160752d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/many.js"));

        // line 1
        echo "var test = require('../');

test('many tests', function (t) {
    t.plan(100);
    for (var i = 0; i < 100; i++) {
        setTimeout(function () { t.pass() }, Math.random() * 50);
    }
});
";
        
        $__internal_a4ee6805e1fc0f264d341394479fdb35e7c12a0d1525dbbd07b37e5160752d38->leave($__internal_a4ee6805e1fc0f264d341394479fdb35e7c12a0d1525dbbd07b37e5160752d38_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/many.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('many tests', function (t) {
    t.plan(100);
    for (var i = 0; i < 100; i++) {
        setTimeout(function () { t.pass() }, Math.random() * 50);
    }
});
", "node_modules/tape/test/many.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/many.js");
    }
}
