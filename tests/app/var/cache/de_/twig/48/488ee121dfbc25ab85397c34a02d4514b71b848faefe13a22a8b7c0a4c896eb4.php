<?php

/* node_modules/tape/test/nested2.js */
class __TwigTemplate_f31d6c9c75e90209ff6d48d3030133cce85e3c47760aba8a78719c820c81c7cf extends Twig_Template
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
        $__internal_0f736a6d1ee60d2e4cc42c5b4e9f64f534376d0204500fc1ffe49d6a927fea85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f736a6d1ee60d2e4cc42c5b4e9f64f534376d0204500fc1ffe49d6a927fea85->enter($__internal_0f736a6d1ee60d2e4cc42c5b4e9f64f534376d0204500fc1ffe49d6a927fea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/nested2.js"));

        // line 1
        echo "var test = require('../');

test(function(t) {
    var i = 0
    t.test('setup', function(t) {
        process.nextTick(function() {
            t.equal(i, 0, 'called once')
            i++
            t.end()
        })
    })


    t.test('teardown', function(t) {
        t.end()
    })

    t.end()
})
";
        
        $__internal_0f736a6d1ee60d2e4cc42c5b4e9f64f534376d0204500fc1ffe49d6a927fea85->leave($__internal_0f736a6d1ee60d2e4cc42c5b4e9f64f534376d0204500fc1ffe49d6a927fea85_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/nested2.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test(function(t) {
    var i = 0
    t.test('setup', function(t) {
        process.nextTick(function() {
            t.equal(i, 0, 'called once')
            i++
            t.end()
        })
    })


    t.test('teardown', function(t) {
        t.end()
    })

    t.end()
})
", "node_modules/tape/test/nested2.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/nested2.js");
    }
}
