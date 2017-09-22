<?php

/* node_modules/minimist/test/whitespace.js */
class __TwigTemplate_a68598aba44170fd2b28665ebf02577f5ddee4ee18f42f1b558e26bb14a24b16 extends Twig_Template
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
        $__internal_05ba81b471e040d23acfc405132eb146afe090ec138d5b3d449ff22073cc1296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ba81b471e040d23acfc405132eb146afe090ec138d5b3d449ff22073cc1296->enter($__internal_05ba81b471e040d23acfc405132eb146afe090ec138d5b3d449ff22073cc1296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/minimist/test/whitespace.js"));

        // line 1
        echo "var parse = require('../');
var test = require('tape');

test('whitespace should be whitespace' , function (t) {
    t.plan(1);
    var x = parse([ '-x', '\\t' ]).x;
    t.equal(x, '\\t');
});
";
        
        $__internal_05ba81b471e040d23acfc405132eb146afe090ec138d5b3d449ff22073cc1296->leave($__internal_05ba81b471e040d23acfc405132eb146afe090ec138d5b3d449ff22073cc1296_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/minimist/test/whitespace.js";
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
", "node_modules/minimist/test/whitespace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/minimist/test/whitespace.js");
    }
}
