<?php

/* node_modules/stream-http/test/browser/timeout.js.disabled */
class __TwigTemplate_705244cdc3645fa285df8e16b2d47ceedf5153dc324999ff5da0308953374bce extends Twig_Template
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
        $__internal_68bb291147355f63653ca5cffb7df17847aeff2e95ee972aff6f967b8734e0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bb291147355f63653ca5cffb7df17847aeff2e95ee972aff6f967b8734e0f4->enter($__internal_68bb291147355f63653ca5cffb7df17847aeff2e95ee972aff6f967b8734e0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/browser/timeout.js.disabled"));

        // line 1
        echo "var Buffer = require('buffer').Buffer
var fs = require('fs')
var test = require('tape')
var UAParser = require('ua-parser-js')
var url = require('url')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major

var skipTimeout = ((browserName === 'Opera' && browserVersion <= 12) ||
\t(browserName === 'Safari' && browserVersion <= 5))


test('emits timeout events', function (t) {
\tif (skipTimeout) {
\t\treturn t.skip('Browser does not support setting timeouts')
\t}

\tvar req = http.request({
\t\tpath: '/basic.txt',
\t\ttimeout: 1
\t})

\treq.on('timeout', function () {
\t\tt.pass('timeout caught')
\t\tt.end() // the test will timeout if this does not happen
\t})

\treq.end()
})
";
        
        $__internal_68bb291147355f63653ca5cffb7df17847aeff2e95ee972aff6f967b8734e0f4->leave($__internal_68bb291147355f63653ca5cffb7df17847aeff2e95ee972aff6f967b8734e0f4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/browser/timeout.js.disabled";
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
var UAParser = require('ua-parser-js')
var url = require('url')

var http = require('../..')

var browser = (new UAParser()).setUA(navigator.userAgent).getBrowser()
var browserName = browser.name
var browserVersion = browser.major

var skipTimeout = ((browserName === 'Opera' && browserVersion <= 12) ||
\t(browserName === 'Safari' && browserVersion <= 5))


test('emits timeout events', function (t) {
\tif (skipTimeout) {
\t\treturn t.skip('Browser does not support setting timeouts')
\t}

\tvar req = http.request({
\t\tpath: '/basic.txt',
\t\ttimeout: 1
\t})

\treq.on('timeout', function () {
\t\tt.pass('timeout caught')
\t\tt.end() // the test will timeout if this does not happen
\t})

\treq.end()
})
", "node_modules/stream-http/test/browser/timeout.js.disabled", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/browser/timeout.js.disabled");
    }
}
