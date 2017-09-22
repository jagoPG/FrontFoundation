<?php

/* node_modules/tape/test/timeout.js */
class __TwigTemplate_a433fcf621234d1ee3629b5d75da59469932436b4f275d1d04f58b2b4bda7a2e extends Twig_Template
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
        $__internal_f1ab52dc8dc81b3bbcc5184181cdc50f45ce6753d46a63219b486bd85c07931b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ab52dc8dc81b3bbcc5184181cdc50f45ce6753d46a63219b486bd85c07931b->enter($__internal_f1ab52dc8dc81b3bbcc5184181cdc50f45ce6753d46a63219b486bd85c07931b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/timeout.js"));

        // line 1
        echo "var test = require('../');
var ran = 0;

test('timeout', function(t) {
    t.pass('this should run');
    ran++;
    setTimeout(function () {
        t.end();
    }, 100);
});

test('should still run', { timeout: 50 }, function(t) {
    t.equal(ran, 1);
    t.end();
});
";
        
        $__internal_f1ab52dc8dc81b3bbcc5184181cdc50f45ce6753d46a63219b486bd85c07931b->leave($__internal_f1ab52dc8dc81b3bbcc5184181cdc50f45ce6753d46a63219b486bd85c07931b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/timeout.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');
var ran = 0;

test('timeout', function(t) {
    t.pass('this should run');
    ran++;
    setTimeout(function () {
        t.end();
    }, 100);
});

test('should still run', { timeout: 50 }, function(t) {
    t.equal(ran, 1);
    t.end();
});
", "node_modules/tape/test/timeout.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/timeout.js");
    }
}
