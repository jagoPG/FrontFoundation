<?php

/* node_modules/object-inspect/test/number.js */
class __TwigTemplate_c83daea4067d71ff2a1ae716ea4b910fc27c6630f415a3ba5ce69d875a6d3196 extends Twig_Template
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
        $__internal_ca492e9aeef76bddcddaddada700839924b8e56d1b5af39b7a2fc6797105ce69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca492e9aeef76bddcddaddada700839924b8e56d1b5af39b7a2fc6797105ce69->enter($__internal_ca492e9aeef76bddcddaddada700839924b8e56d1b5af39b7a2fc6797105ce69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-inspect/test/number.js"));

        // line 1
        echo "var inspect = require('../');
var test = require('tape');

test('negative zero', function (t) {
    t.equal(inspect(0), '0');
    t.equal(inspect(-0), '-0');
    t.end();
});
";
        
        $__internal_ca492e9aeef76bddcddaddada700839924b8e56d1b5af39b7a2fc6797105ce69->leave($__internal_ca492e9aeef76bddcddaddada700839924b8e56d1b5af39b7a2fc6797105ce69_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-inspect/test/number.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var inspect = require('../');
var test = require('tape');

test('negative zero', function (t) {
    t.equal(inspect(0), '0');
    t.equal(inspect(-0), '-0');
    t.end();
});
", "node_modules/object-inspect/test/number.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-inspect/test/number.js");
    }
}
