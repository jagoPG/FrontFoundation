<?php

/* node_modules/tape/example/stream/test/y.js */
class __TwigTemplate_3317259a3f6a2a01b3e62e91106b147b5bb006475919d4d27b2833d029eef396 extends Twig_Template
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
        $__internal_d5442184b50b997df616c873834fc862abc8efb890bb5d73efaeab303d1b1164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5442184b50b997df616c873834fc862abc8efb890bb5d73efaeab303d1b1164->enter($__internal_d5442184b50b997df616c873834fc862abc8efb890bb5d73efaeab303d1b1164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/stream/test/y.js"));

        // line 1
        echo "var test = require('../../../');
test(function (t) {
    t.plan(2);
    t.equal(1+1, 2);
    t.ok(true);
});

test('wheee', function (t) {
    t.ok(true);
    t.end();
});
";
        
        $__internal_d5442184b50b997df616c873834fc862abc8efb890bb5d73efaeab303d1b1164->leave($__internal_d5442184b50b997df616c873834fc862abc8efb890bb5d73efaeab303d1b1164_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/stream/test/y.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../../');
test(function (t) {
    t.plan(2);
    t.equal(1+1, 2);
    t.ok(true);
});

test('wheee', function (t) {
    t.ok(true);
    t.end();
});
", "node_modules/tape/example/stream/test/y.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/stream/test/y.js");
    }
}
