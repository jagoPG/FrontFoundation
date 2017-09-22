<?php

/* node_modules/tape/test/exit/second.js */
class __TwigTemplate_e88dc742cf3c5f172960a7dd5dc253fb6fcdcdcc2f9907f0f7450abfff321c8d extends Twig_Template
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
        $__internal_b554ebe99a049da88b5b6126004017f1825ab6b091332afee6c130893fd60527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b554ebe99a049da88b5b6126004017f1825ab6b091332afee6c130893fd60527->enter($__internal_b554ebe99a049da88b5b6126004017f1825ab6b091332afee6c130893fd60527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/test/exit/second.js"));

        // line 1
        echo "var test = require('../../');

test('first', function (t) {
    t.plan(1);
    t.ok(true);
});

test('second', function (t) {
    t.plan(2);
    t.ok(true);
});
";
        
        $__internal_b554ebe99a049da88b5b6126004017f1825ab6b091332afee6c130893fd60527->leave($__internal_b554ebe99a049da88b5b6126004017f1825ab6b091332afee6c130893fd60527_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/test/exit/second.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');

test('first', function (t) {
    t.plan(1);
    t.ok(true);
});

test('second', function (t) {
    t.plan(2);
    t.ok(true);
});
", "node_modules/tape/test/exit/second.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/test/exit/second.js");
    }
}
