<?php

/* node_modules/fsevents/node_modules/rc/node_modules/minimist/test/whitespace.js */
class __TwigTemplate_05c38115a9161aae62f14a493580a09f62b4f4bcdc53d39284bb406252aeb13c extends Twig_Template
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
        $__internal_4a7ff4d55f26c76da384b58f4613bb84eded3d28862f6b071fc322523db588f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ff4d55f26c76da384b58f4613bb84eded3d28862f6b071fc322523db588f0->enter($__internal_4a7ff4d55f26c76da384b58f4613bb84eded3d28862f6b071fc322523db588f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/whitespace.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
";
        
        $__internal_4a7ff4d55f26c76da384b58f4613bb84eded3d28862f6b071fc322523db588f0->leave($__internal_4a7ff4d55f26c76da384b58f4613bb84eded3d28862f6b071fc322523db588f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/whitespace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
", "node_modules/fsevents/node_modules/rc/node_modules/minimist/test/whitespace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/rc/node_modules/minimist/test/whitespace.js");
    }
}
