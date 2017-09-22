<?php

/* node_modules/stream-http/test/browser/body-empty.js */
class __TwigTemplate_9cc6531dadc25937bae275836e2de4af758a3cdee0abd792616594e372e808e4 extends Twig_Template
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
        $__internal_9031572da184152470e30b1a67e1536d6e6a854174824ee317140374475d3e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9031572da184152470e30b1a67e1536d6e6a854174824ee317140374475d3e1c->enter($__internal_9031572da184152470e30b1a67e1536d6e6a854174824ee317140374475d3e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/body-empty.js"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')

var http = require('../..')

var reference = fs.readFileSync(__dirname + '/../server/static/basic.txt')

test('get body empty', function (t) {
\tvar req = http.request({
\t\tpath: '/verifyEmpty',
\t\tmethod: 'GET'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tconsole.log(Buffer.concat(buffers).toString('utf8'))
\t\t\tt.ok(Buffer.from('empty').equals(Buffer.concat(buffers)), 'response body indicates request body was empty')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})
";
        
        $__internal_9031572da184152470e30b1a67e1536d6e6a854174824ee317140374475d3e1c->leave($__internal_9031572da184152470e30b1a67e1536d6e6a854174824ee317140374475d3e1c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/body-empty.js";
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

test('get body empty', function (t) {
\tvar req = http.request({
\t\tpath: '/verifyEmpty',
\t\tmethod: 'GET'
\t}, function (res) {
\t\tvar buffers = []

\t\tres.on('end', function () {
\t\t\tconsole.log(Buffer.concat(buffers).toString('utf8'))
\t\t\tt.ok(Buffer.from('empty').equals(Buffer.concat(buffers)), 'response body indicates request body was empty')
\t\t\tt.end()
\t\t})

\t\tres.on('data', function (data) {
\t\t\tbuffers.push(data)
\t\t})
\t})

\treq.write(reference)
\treq.end()
})
", "node_modules/stream-http/test/browser/body-empty.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/body-empty.js");
    }
}
