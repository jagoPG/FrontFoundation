<?php

/* node_modules/tape/test/plan_optional.js */
class __TwigTemplate_91f67f345aba6355482531287939e48475c02481855ed37a68c6387cdd8dc679 extends Twig_Template
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
        $__internal_d4d5d7df4bd77216836c80da3b87989813bf11f0b8491e60537a8db5c4959f45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4d5d7df4bd77216836c80da3b87989813bf11f0b8491e60537a8db5c4959f45->enter($__internal_d4d5d7df4bd77216836c80da3b87989813bf11f0b8491e60537a8db5c4959f45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/plan_optional.js"));

        // line 1
        echo "var test = require('../');

test('plan should be optional', function (t) {
    t.pass('no plan here');
    t.end();
});

test('no plan async', function (t) {
    setTimeout(function() {
        t.pass('ok');
        t.end();
    }, 100);
});

// vim: set softtabstop=4 shiftwidth=4:
";
        
        $__internal_d4d5d7df4bd77216836c80da3b87989813bf11f0b8491e60537a8db5c4959f45->leave($__internal_d4d5d7df4bd77216836c80da3b87989813bf11f0b8491e60537a8db5c4959f45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/plan_optional.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('plan should be optional', function (t) {
    t.pass('no plan here');
    t.end();
});

test('no plan async', function (t) {
    setTimeout(function() {
        t.pass('ok');
        t.end();
    }, 100);
});

// vim: set softtabstop=4 shiftwidth=4:
", "node_modules/tape/test/plan_optional.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/plan_optional.js");
    }
}
