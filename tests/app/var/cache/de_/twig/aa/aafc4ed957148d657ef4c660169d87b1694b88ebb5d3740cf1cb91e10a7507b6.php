<?php

/* node_modules/stream-http/test/browser/auth.js */
class __TwigTemplate_490c0b9a02062dae725640956495d322c96f671b75e8d9bf2d1b7ab45c3d01ca extends Twig_Template
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
        $__internal_0fdeaba64f751966c78b23ff3e193fdf3bcacb8be8085992a5c72daf31dab742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdeaba64f751966c78b23ff3e193fdf3bcacb8be8085992a5c72daf31dab742->enter($__internal_0fdeaba64f751966c78b23ff3e193fdf3bcacb8be8085992a5c72daf31dab742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/auth.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('authentication', function (t) {
\thttp.get({
\t\tpath: '/auth',
\t\tauth: 'TestUser:trustno1'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(new Buffer('You\\'re in!').equals(Buffer.concat(buffers)), 'authentication succeeded')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})";
        
        $__internal_0fdeaba64f751966c78b23ff3e193fdf3bcacb8be8085992a5c72daf31dab742->leave($__internal_0fdeaba64f751966c78b23ff3e193fdf3bcacb8be8085992a5c72daf31dab742_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/auth.js";
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

test('authentication', function (t) {
\thttp.get({
\t\tpath: '/auth',
\t\tauth: 'TestUser:trustno1'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(new Buffer('You\\'re in!').equals(Buffer.concat(buffers)), 'authentication succeeded')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})
})", "node_modules/stream-http/test/browser/auth.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/auth.js");
    }
}
