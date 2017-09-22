<?php

/* node_modules/tape/test/subtest_plan.js */
class __TwigTemplate_f9a027632cfd859ef420e3b45798705ac777b1d423832301471175c22796f59d extends Twig_Template
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
        $__internal_be4eae4fb17f923c096d64c08e62f418f2690b3278969fec60490f71a20a3371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be4eae4fb17f923c096d64c08e62f418f2690b3278969fec60490f71a20a3371->enter($__internal_be4eae4fb17f923c096d64c08e62f418f2690b3278969fec60490f71a20a3371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/subtest_plan.js"));

        // line 1
        echo "var test = require('../');

test('parent', function (t) {
    t.plan(3)

    var firstChildRan = false;

    t.pass('assertion in parent');

    t.test('first child', function (t) {
        t.plan(1);
        t.pass('pass first child');
        firstChildRan = true;
    });

    t.test('second child', function (t) {
        t.plan(2);
        t.ok(firstChildRan, 'first child ran first');
        t.pass('pass second child');
    });
});
";
        
        $__internal_be4eae4fb17f923c096d64c08e62f418f2690b3278969fec60490f71a20a3371->leave($__internal_be4eae4fb17f923c096d64c08e62f418f2690b3278969fec60490f71a20a3371_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/subtest_plan.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('parent', function (t) {
    t.plan(3)

    var firstChildRan = false;

    t.pass('assertion in parent');

    t.test('first child', function (t) {
        t.plan(1);
        t.pass('pass first child');
        firstChildRan = true;
    });

    t.test('second child', function (t) {
        t.plan(2);
        t.ok(firstChildRan, 'first child ran first');
        t.pass('pass second child');
    });
});
", "node_modules/tape/test/subtest_plan.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/subtest_plan.js");
    }
}
