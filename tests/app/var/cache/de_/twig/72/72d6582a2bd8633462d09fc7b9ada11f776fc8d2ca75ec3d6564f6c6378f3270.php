<?php

/* node_modules/stream-http/test/browser/post-text.js */
class __TwigTemplate_a8f587d951ca846c4377d27c37c825cf2a67a303072e8c27da93d866fe01adcb extends Twig_Template
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
        $__internal_49a732d5ada7dfa66ed6174723e7d93d171080a57054fc406742b40b3ce17832 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49a732d5ada7dfa66ed6174723e7d93d171080a57054fc406742b40b3ce17832->enter($__internal_49a732d5ada7dfa66ed6174723e7d93d171080a57054fc406742b40b3ce17832_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/post-text.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')

var http = require('../..')

var reference = fs.readFileSync(__dirname + '/../server/static/basic.txt')

test('post text', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})

test('post text with data in end()', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.end(reference)
})";
        
        $__internal_49a732d5ada7dfa66ed6174723e7d93d171080a57054fc406742b40b3ce17832->leave($__internal_49a732d5ada7dfa66ed6174723e7d93d171080a57054fc406742b40b3ce17832_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/post-text.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')

var http = require('../..')

var reference = fs.readFileSync(__dirname + '/../server/static/basic.txt')

test('post text', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})

test('post text with data in end()', function (t) {
\tvar req = http.request({
\t\tpath: '/echo',
\t\tmethod: 'POST'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tt.ok(reference.equals(Buffer.concat(buffers)), 'echoed contents match')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.end(reference)
})", "node_modules/stream-http/test/browser/post-text.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/post-text.js");
    }
}
