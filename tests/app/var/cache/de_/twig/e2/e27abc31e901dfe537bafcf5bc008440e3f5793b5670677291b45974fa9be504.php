<?php

/* node_modules/tape/test/browser/asserts.js */
class __TwigTemplate_0fdc0ec37c9a61c2ca8f0d1d96980c341160f8c801e9eadd3d4adc004bc6cd60 extends Twig_Template
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
        $__internal_768fe03908f028dedfaf5d3488a519f31552bcb3c775dbb0d6f6e4e2a0fe2f59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_768fe03908f028dedfaf5d3488a519f31552bcb3c775dbb0d6f6e4e2a0fe2f59->enter($__internal_768fe03908f028dedfaf5d3488a519f31552bcb3c775dbb0d6f6e4e2a0fe2f59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/browser/asserts.js"));

        // line 1
        echo "var test = require('../../');

test(function (t) {
    t.plan(4);
    t.ok(true);
    t.equal(3, 1+2);
    t.deepEqual([1,2,[3,4]], [1,2,[3,4]]);
    t.notDeepEqual([1,2,[3,4,5]], [1,2,[3,4]]);
});
";
        
        $__internal_768fe03908f028dedfaf5d3488a519f31552bcb3c775dbb0d6f6e4e2a0fe2f59->leave($__internal_768fe03908f028dedfaf5d3488a519f31552bcb3c775dbb0d6f6e4e2a0fe2f59_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/browser/asserts.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');

test(function (t) {
    t.plan(4);
    t.ok(true);
    t.equal(3, 1+2);
    t.deepEqual([1,2,[3,4]], [1,2,[3,4]]);
    t.notDeepEqual([1,2,[3,4,5]], [1,2,[3,4]]);
});
", "node_modules/tape/test/browser/asserts.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/browser/asserts.js");
    }
}
