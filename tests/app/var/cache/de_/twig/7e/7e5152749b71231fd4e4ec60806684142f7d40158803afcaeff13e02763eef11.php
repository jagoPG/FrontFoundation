<?php

/* node_modules/stream-http/test/browser/error.js.disabled */
class __TwigTemplate_b729dd240dbd04b9734307e14d4c3e4b744d793f5db40c55849b2b9da6191689 extends Twig_Template
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
        $__internal_c632c0620cb6fbc1d56970945b827bf15c2a9b6a3ce6e36e3aa568ca58c8b065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c632c0620cb6fbc1d56970945b827bf15c2a9b6a3ce6e36e3aa568ca58c8b065->enter($__internal_c632c0620cb6fbc1d56970945b827bf15c2a9b6a3ce6e36e3aa568ca58c8b065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/error.js.disabled"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('error handling', function (t) {
\tvar req = http.get('https://0.0.0.0:0/fail.txt')
\treq.on('error', function (err) {
\t\tt.ok(err && ('message' in err), 'got error')
\t\tt.end()
\t})
})";
        
        $__internal_c632c0620cb6fbc1d56970945b827bf15c2a9b6a3ce6e36e3aa568ca58c8b065->leave($__internal_c632c0620cb6fbc1d56970945b827bf15c2a9b6a3ce6e36e3aa568ca58c8b065_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/error.js.disabled";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('error handling', function (t) {
\tvar req = http.get('https://0.0.0.0:0/fail.txt')
\treq.on('error', function (err) {
\t\tt.ok(err && ('message' in err), 'got error')
\t\tt.end()
\t})
})", "node_modules/stream-http/test/browser/error.js.disabled", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/error.js.disabled");
    }
}
