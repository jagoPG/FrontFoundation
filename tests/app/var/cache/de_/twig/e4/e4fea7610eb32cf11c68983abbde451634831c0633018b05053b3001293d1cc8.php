<?php

/* node_modules/tape/test/only5.js */
class __TwigTemplate_0b2df54e78843e189597145b777c7217ff63f10bc1a7c75fe737a0ec2ad9bdf8 extends Twig_Template
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
        $__internal_9f7dad128a9aed751f5fe03817be3638ac7cb85f5090ef3e98e371414dd8a4b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f7dad128a9aed751f5fe03817be3638ac7cb85f5090ef3e98e371414dd8a4b9->enter($__internal_9f7dad128a9aed751f5fe03817be3638ac7cb85f5090ef3e98e371414dd8a4b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/only5.js"));

        // line 1
        echo "var test = require('../');

test.only('only5 duplicate test name', function (t) {
    t.end();
});

test('only5 duplicate test name', function (t) {
    t.fail('not 2');
    t.end();
});
";
        
        $__internal_9f7dad128a9aed751f5fe03817be3638ac7cb85f5090ef3e98e371414dd8a4b9->leave($__internal_9f7dad128a9aed751f5fe03817be3638ac7cb85f5090ef3e98e371414dd8a4b9_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/only5.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test.only('only5 duplicate test name', function (t) {
    t.end();
});

test('only5 duplicate test name', function (t) {
    t.fail('not 2');
    t.end();
});
", "node_modules/tape/test/only5.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/only5.js");
    }
}
