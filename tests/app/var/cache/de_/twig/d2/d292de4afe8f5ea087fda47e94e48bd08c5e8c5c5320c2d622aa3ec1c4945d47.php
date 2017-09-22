<?php

/* node_modules/resolve/test/nonstring.js */
class __TwigTemplate_5e12d04ac8fbd27354ad48fa31bc5255c207252b4351954a58020e07880671a9 extends Twig_Template
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
        $__internal_e91d10aaaff915c849c372ef30117d18e6fac7251d2c2ec5be2a8d5cd2ad2299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91d10aaaff915c849c372ef30117d18e6fac7251d2c2ec5be2a8d5cd2ad2299->enter($__internal_e91d10aaaff915c849c372ef30117d18e6fac7251d2c2ec5be2a8d5cd2ad2299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/resolve/test/nonstring.js"));

        // line 1
        echo "var test = require('tape');
var resolve = require('../');

test('nonstring', function (t) {
    t.plan(1);
    resolve(555, function (err, res, pkg) {
        t.ok(err);
    });
});
";
        
        $__internal_e91d10aaaff915c849c372ef30117d18e6fac7251d2c2ec5be2a8d5cd2ad2299->leave($__internal_e91d10aaaff915c849c372ef30117d18e6fac7251d2c2ec5be2a8d5cd2ad2299_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/resolve/test/nonstring.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('tape');
var resolve = require('../');

test('nonstring', function (t) {
    t.plan(1);
    resolve(555, function (err, res, pkg) {
        t.ok(err);
    });
});
", "node_modules/resolve/test/nonstring.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/resolve/test/nonstring.js");
    }
}
