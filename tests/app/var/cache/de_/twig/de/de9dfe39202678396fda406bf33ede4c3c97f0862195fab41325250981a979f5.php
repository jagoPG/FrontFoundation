<?php

/* node_modules/tape/example/stream/tap.js */
class __TwigTemplate_0741aa507b1adff01a2583e9e56e650d9abd60e6c24d1e2387664a7435bf006c extends Twig_Template
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
        $__internal_5c1678cb642b202ebf57d778b4c0b5e37b401c92e002f84a3ad7cc8c6b3afabd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c1678cb642b202ebf57d778b4c0b5e37b401c92e002f84a3ad7cc8c6b3afabd->enter($__internal_5c1678cb642b202ebf57d778b4c0b5e37b401c92e002f84a3ad7cc8c6b3afabd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/tape/example/stream/tap.js"));

        // line 1
        echo "var test = require('../../');
var path = require('path');

test.createStream().pipe(process.stdout);

process.argv.slice(2).forEach(function (file) {
    require(path.resolve(file));
});
";
        
        $__internal_5c1678cb642b202ebf57d778b4c0b5e37b401c92e002f84a3ad7cc8c6b3afabd->leave($__internal_5c1678cb642b202ebf57d778b4c0b5e37b401c92e002f84a3ad7cc8c6b3afabd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/tape/example/stream/tap.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var test = require('../../');
var path = require('path');

test.createStream().pipe(process.stdout);

process.argv.slice(2).forEach(function (file) {
    require(path.resolve(file));
});
", "node_modules/tape/example/stream/tap.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/tape/example/stream/tap.js");
    }
}
