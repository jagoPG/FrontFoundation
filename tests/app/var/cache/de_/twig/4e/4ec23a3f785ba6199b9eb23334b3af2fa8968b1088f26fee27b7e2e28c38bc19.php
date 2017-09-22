<?php

/* node_modules/tape/test/onFinish.js */
class __TwigTemplate_de70ea93e5230178dabc50d2bc88d16a39fc470adbf4834318e357459d7c64b0 extends Twig_Template
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
        $__internal_27535e1d39a028ee1c52c8cc9dca5830a3ac7c63519aa3d821282ae68e661e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27535e1d39a028ee1c52c8cc9dca5830a3ac7c63519aa3d821282ae68e661e1d->enter($__internal_27535e1d39a028ee1c52c8cc9dca5830a3ac7c63519aa3d821282ae68e661e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/onFinish.js"));

        // line 1
        echo "var tap = require(\"tap\");
var tape = require(\"../\");

tap.test(\"on finish\", {timeout: 1000}, function (tt) {
    tt.plan(1);
    tape.onFinish(function() {
        tt.pass('tape ended');
    });
    tape('dummy test', function(t) {
        t.end();
    });
});
";
        
        $__internal_27535e1d39a028ee1c52c8cc9dca5830a3ac7c63519aa3d821282ae68e661e1d->leave($__internal_27535e1d39a028ee1c52c8cc9dca5830a3ac7c63519aa3d821282ae68e661e1d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/onFinish.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var tap = require(\"tap\");
var tape = require(\"../\");

tap.test(\"on finish\", {timeout: 1000}, function (tt) {
    tt.plan(1);
    tape.onFinish(function() {
        tt.pass('tape ended');
    });
    tape('dummy test', function(t) {
        t.end();
    });
});
", "node_modules/tape/test/onFinish.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/onFinish.js");
    }
}
