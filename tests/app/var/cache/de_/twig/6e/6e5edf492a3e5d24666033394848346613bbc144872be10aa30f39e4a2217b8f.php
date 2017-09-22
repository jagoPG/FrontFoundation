<?php

/* node_modules/tape/test/subcount.js */
class __TwigTemplate_4d83f07d2519e30fcd87405f35c6b9f125996f5efec2e57b4c898a98c1619568 extends Twig_Template
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
        $__internal_63bd5a46d44ba5e79838ceebfab5a6963e25b5b9252f6b6ea7284b2fb0ea46d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bd5a46d44ba5e79838ceebfab5a6963e25b5b9252f6b6ea7284b2fb0ea46d1->enter($__internal_63bd5a46d44ba5e79838ceebfab5a6963e25b5b9252f6b6ea7284b2fb0ea46d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/subcount.js"));

        // line 1
        echo "var test = require('../');

test('parent test', function (t) {
    t.plan(2);
    t.test('first child', function (t) {
        t.plan(1);
        t.pass('pass first child');
    })

    t.test(function (t) {
        t.plan(1);
        t.pass('pass second child');
    })
})
";
        
        $__internal_63bd5a46d44ba5e79838ceebfab5a6963e25b5b9252f6b6ea7284b2fb0ea46d1->leave($__internal_63bd5a46d44ba5e79838ceebfab5a6963e25b5b9252f6b6ea7284b2fb0ea46d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/subcount.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');

test('parent test', function (t) {
    t.plan(2);
    t.test('first child', function (t) {
        t.plan(1);
        t.pass('pass first child');
    })

    t.test(function (t) {
        t.plan(1);
        t.pass('pass second child');
    })
})
", "node_modules/tape/test/subcount.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/subcount.js");
    }
}
