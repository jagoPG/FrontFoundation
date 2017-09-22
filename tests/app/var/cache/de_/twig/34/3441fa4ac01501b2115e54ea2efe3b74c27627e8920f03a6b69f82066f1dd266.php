<?php

/* node_modules/stream-http/test/browser/disable-fetch.js */
class __TwigTemplate_d1756f66423654072854b6a3d6c4367b56b9823ecfc6ae57b99a3968ebd51558 extends Twig_Template
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
        $__internal_d1a9119c8b5dfe53454a35903de117f169c16b5e6007396402282b10e4607acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1a9119c8b5dfe53454a35903de117f169c16b5e6007396402282b10e4607acc->enter($__internal_d1a9119c8b5dfe53454a35903de117f169c16b5e6007396402282b10e4607acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/disable-fetch.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var test = require('tape')

var http = require('../..')

test('disable fetch', function (t) {
\tvar originalFetch
\tif (typeof fetch === 'function') {
\t\toriginalFetch = fetch
\t}

\tvar fetchCalled = false
\tfetch = function (input, options) {
\t\tfetchCalled = true
\t\tif (originalFetch) {
\t\t\treturn originalFetch(input, options)
\t\t}
\t}

\thttp.get({
\t\tpath: '/browserify.png',
\t\tmode: 'disable-fetch'
\t}, function (res) {
\t\tt.ok(!fetchCalled, 'fetch was not called')

\t\tif (originalFetch) {
\t\t\tfetch = originalFetch
\t\t}

\t\tres.on('end', function () {
\t\t\tt.ok(res.headers['content-type'] === 'image/png', 'content-type was set correctly')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function () {})
\t})
})
";
        
        $__internal_d1a9119c8b5dfe53454a35903de117f169c16b5e6007396402282b10e4607acc->leave($__internal_d1a9119c8b5dfe53454a35903de117f169c16b5e6007396402282b10e4607acc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/disable-fetch.js";
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

test('disable fetch', function (t) {
\tvar originalFetch
\tif (typeof fetch === 'function') {
\t\toriginalFetch = fetch
\t}

\tvar fetchCalled = false
\tfetch = function (input, options) {
\t\tfetchCalled = true
\t\tif (originalFetch) {
\t\t\treturn originalFetch(input, options)
\t\t}
\t}

\thttp.get({
\t\tpath: '/browserify.png',
\t\tmode: 'disable-fetch'
\t}, function (res) {
\t\tt.ok(!fetchCalled, 'fetch was not called')

\t\tif (originalFetch) {
\t\t\tfetch = originalFetch
\t\t}

\t\tres.on('end', function () {
\t\t\tt.ok(res.headers['content-type'] === 'image/png', 'content-type was set correctly')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function () {})
\t})
})
", "node_modules/stream-http/test/browser/disable-fetch.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/disable-fetch.js");
    }
}
