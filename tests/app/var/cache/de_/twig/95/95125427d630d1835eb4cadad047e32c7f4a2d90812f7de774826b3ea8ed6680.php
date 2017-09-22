<?php

/* node_modules/tape/test/order.js */
class __TwigTemplate_55f919b086d5bb078d235c165724f11225a45af4d144fc820d4f71ba3e42b987 extends Twig_Template
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
        $__internal_38a6cc3a43b0af0358fb3b256c7b2f6aebb4966a9fa91bc625bbab9c4fc94349 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38a6cc3a43b0af0358fb3b256c7b2f6aebb4966a9fa91bc625bbab9c4fc94349->enter($__internal_38a6cc3a43b0af0358fb3b256c7b2f6aebb4966a9fa91bc625bbab9c4fc94349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/order.js"));

        // line 1
        echo "var test = require('../');
var current = 0;

test(function (t) {
    t.equal(current++, 0);
    t.end();
});
test(function (t) {
    t.plan(1);
    setTimeout(function () {
        t.equal(current++, 1);
    }, 100);
});
test(function (t) {
    t.equal(current++, 2);
    t.end();
});
";
        
        $__internal_38a6cc3a43b0af0358fb3b256c7b2f6aebb4966a9fa91bc625bbab9c4fc94349->leave($__internal_38a6cc3a43b0af0358fb3b256c7b2f6aebb4966a9fa91bc625bbab9c4fc94349_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/order.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../');
var current = 0;

test(function (t) {
    t.equal(current++, 0);
    t.end();
});
test(function (t) {
    t.plan(1);
    setTimeout(function () {
        t.equal(current++, 1);
    }, 100);
});
test(function (t) {
    t.equal(current++, 2);
    t.end();
});
", "node_modules/tape/test/order.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/order.js");
    }
}
