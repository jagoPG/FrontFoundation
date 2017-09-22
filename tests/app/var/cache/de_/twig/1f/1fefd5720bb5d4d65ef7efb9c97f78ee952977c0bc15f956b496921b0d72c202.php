<?php

/* node_modules/stream-http/test/browser/lib/webworker-worker.js */
class __TwigTemplate_66e2e432348073055e8b7d3994581570522da5abd6ae765d31b65316cf8a6add extends Twig_Template
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
        $__internal_1b0e23679db3b69ed2f1a98f6b3336e632b04258e195074fb04743dd2b67d1d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b0e23679db3b69ed2f1a98f6b3336e632b04258e195074fb04743dd2b67d1d4->enter($__internal_1b0e23679db3b69ed2f1a98f6b3336e632b04258e195074fb04743dd2b67d1d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/lib/webworker-worker.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer

var http = require('../../..')

module.exports = function (self) {
\tself.addEventListener('message', function (ev) {
\t\tvar url = ev.data
\t\thttp.get(url, function (res) {
\t\t\tvar buffers = []

\t\t\tres.on('end', function () {
\t\t\t\tself.postMessage(Buffer.concat(buffers).buffer)
\t\t\t})

\t\t\tres.on('data', function (data) {
\t\t\t\tbuffers.push(data)
\t\t\t})
\t\t})
\t})
}";
        
        $__internal_1b0e23679db3b69ed2f1a98f6b3336e632b04258e195074fb04743dd2b67d1d4->leave($__internal_1b0e23679db3b69ed2f1a98f6b3336e632b04258e195074fb04743dd2b67d1d4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/lib/webworker-worker.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer

var http = require('../../..')

module.exports = function (self) {
\tself.addEventListener('message', function (ev) {
\t\tvar url = ev.data
\t\thttp.get(url, function (res) {
\t\t\tvar buffers = []

\t\t\tres.on('end', function () {
\t\t\t\tself.postMessage(Buffer.concat(buffers).buffer)
\t\t\t})

\t\t\tres.on('data', function (data) {
\t\t\t\tbuffers.push(data)
\t\t\t})
\t\t})
\t})
}", "node_modules/stream-http/test/browser/lib/webworker-worker.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/lib/webworker-worker.js");
    }
}
