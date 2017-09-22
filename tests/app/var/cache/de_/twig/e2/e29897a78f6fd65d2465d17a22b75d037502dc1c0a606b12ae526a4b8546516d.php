<?php

/* node_modules/stream-http/test/node/http-browserify.js */
class __TwigTemplate_5af466b77e90a077ddf3e0f73309352792092c3dc0eb5b91f025912e75bd3b63 extends Twig_Template
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
        $__internal_d0445aa37a280fc691e7487fcf06c63da05e55647ed6e97872b82c9ffdd38383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0445aa37a280fc691e7487fcf06c63da05e55647ed6e97872b82c9ffdd38383->enter($__internal_d0445aa37a280fc691e7487fcf06c63da05e55647ed6e97872b82c9ffdd38383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/node/http-browserify.js"));

        // line 1
        echo "// These tests are teken from http-browserify to ensure compatibility with
// that module
var test = require('tape')
var url = require('url')

var location = 'http://localhost:8081/foo/123'

var noop = function() {}
global.location = url.parse(location)
global.XMLHttpRequest = function() {
\tthis.open = noop
\tthis.send = noop
\tthis.withCredentials = false
}

var moduleName = require.resolve('../../')
delete require.cache[moduleName]
var http = require('../../')

test('Test simple url string', function(t) {
\tvar testUrl = { path: '/api/foo' }
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo', 'Url should be correct')
\tt.end()

})

test('Test full url object', function(t) {
\tvar testUrl = {
\t\thost: \"localhost:8081\",
\t\thostname: \"localhost\",
\t\thref: \"http://localhost:8081/api/foo?bar=baz\",
\t\tmethod: \"GET\",
\t\tpath: \"/api/foo?bar=baz\",
\t\tpathname: \"/api/foo\",
\t\tport: \"8081\",
\t\tprotocol: \"http:\",
\t\tquery: \"bar=baz\",
\t\tsearch: \"?bar=baz\",
\t\tslashes: true
\t}

\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo?bar=baz', 'Url should be correct')
\tt.end()
})

test('Test alt protocol', function(t) {
\tvar params = {
\t\tprotocol: \"foo:\",
\t\thostname: \"localhost\",
\t\tport: \"3000\",
\t\tpath: \"/bar\"
\t}

\tvar request = http.get(params, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'foo://localhost:3000/bar', 'Url should be correct')
\tt.end()
})

test('Test page with \\'file:\\' protocol', function (t) {
\tvar params = {
\t\thostname: 'localhost',
\t\tport: 3000,
\t\tpath: '/bar'
\t}

\tvar fileLocation = 'file:///home/me/stuff/index.html'

\tvar normalLocation = global.location
\tglobal.location = url.parse(fileLocation) // Temporarily change the location
\tvar request = http.get(params, noop)
\tglobal.location = normalLocation // Reset the location

\tvar resolved = url.resolve(fileLocation, request._opts.url)
\tt.equal(resolved, 'http://localhost:3000/bar', 'Url should be correct')
\tt.end()
})

test('Test string as parameters', function(t) {
\tvar testUrl = '/api/foo'
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo', 'Url should be correct')
\tt.end()
})

test('Test withCredentials param', function(t) {
\tvar url = '/api/foo'

\tvar request = http.get({ url: url, withCredentials: false }, noop)
\tt.equal(request._xhr.withCredentials, false, 'xhr.withCredentials should be false')

\tvar request = http.get({ url: url, withCredentials: true }, noop)
\tt.equal(request._xhr.withCredentials, true, 'xhr.withCredentials should be true')

\tvar request = http.get({ url: url }, noop)
\tt.equal(request._xhr.withCredentials, false, 'xhr.withCredentials should be false')

\tt.end()
})

test('Test ipv6 address', function(t) {
\tvar testUrl = 'http://[::1]:80/foo'
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://[::1]:80/foo', 'Url should be correct')
\tt.end()
})

test('Test relative path in url', function(t) {
\tvar params = { path: './bar' }
\tvar request = http.get(params, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/foo/bar', 'Url should be correct')
\tt.end()
})

test('Cleanup', function (t) {
\tdelete global.location
\tdelete global.XMLHttpRequest
\tdelete require.cache[moduleName]
\tt.end()
})
";
        
        $__internal_d0445aa37a280fc691e7487fcf06c63da05e55647ed6e97872b82c9ffdd38383->leave($__internal_d0445aa37a280fc691e7487fcf06c63da05e55647ed6e97872b82c9ffdd38383_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/node/http-browserify.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// These tests are teken from http-browserify to ensure compatibility with
// that module
var test = require('tape')
var url = require('url')

var location = 'http://localhost:8081/foo/123'

var noop = function() {}
global.location = url.parse(location)
global.XMLHttpRequest = function() {
\tthis.open = noop
\tthis.send = noop
\tthis.withCredentials = false
}

var moduleName = require.resolve('../../')
delete require.cache[moduleName]
var http = require('../../')

test('Test simple url string', function(t) {
\tvar testUrl = { path: '/api/foo' }
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo', 'Url should be correct')
\tt.end()

})

test('Test full url object', function(t) {
\tvar testUrl = {
\t\thost: \"localhost:8081\",
\t\thostname: \"localhost\",
\t\thref: \"http://localhost:8081/api/foo?bar=baz\",
\t\tmethod: \"GET\",
\t\tpath: \"/api/foo?bar=baz\",
\t\tpathname: \"/api/foo\",
\t\tport: \"8081\",
\t\tprotocol: \"http:\",
\t\tquery: \"bar=baz\",
\t\tsearch: \"?bar=baz\",
\t\tslashes: true
\t}

\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo?bar=baz', 'Url should be correct')
\tt.end()
})

test('Test alt protocol', function(t) {
\tvar params = {
\t\tprotocol: \"foo:\",
\t\thostname: \"localhost\",
\t\tport: \"3000\",
\t\tpath: \"/bar\"
\t}

\tvar request = http.get(params, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'foo://localhost:3000/bar', 'Url should be correct')
\tt.end()
})

test('Test page with \\'file:\\' protocol', function (t) {
\tvar params = {
\t\thostname: 'localhost',
\t\tport: 3000,
\t\tpath: '/bar'
\t}

\tvar fileLocation = 'file:///home/me/stuff/index.html'

\tvar normalLocation = global.location
\tglobal.location = url.parse(fileLocation) // Temporarily change the location
\tvar request = http.get(params, noop)
\tglobal.location = normalLocation // Reset the location

\tvar resolved = url.resolve(fileLocation, request._opts.url)
\tt.equal(resolved, 'http://localhost:3000/bar', 'Url should be correct')
\tt.end()
})

test('Test string as parameters', function(t) {
\tvar testUrl = '/api/foo'
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/api/foo', 'Url should be correct')
\tt.end()
})

test('Test withCredentials param', function(t) {
\tvar url = '/api/foo'

\tvar request = http.get({ url: url, withCredentials: false }, noop)
\tt.equal(request._xhr.withCredentials, false, 'xhr.withCredentials should be false')

\tvar request = http.get({ url: url, withCredentials: true }, noop)
\tt.equal(request._xhr.withCredentials, true, 'xhr.withCredentials should be true')

\tvar request = http.get({ url: url }, noop)
\tt.equal(request._xhr.withCredentials, false, 'xhr.withCredentials should be false')

\tt.end()
})

test('Test ipv6 address', function(t) {
\tvar testUrl = 'http://[::1]:80/foo'
\tvar request = http.get(testUrl, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://[::1]:80/foo', 'Url should be correct')
\tt.end()
})

test('Test relative path in url', function(t) {
\tvar params = { path: './bar' }
\tvar request = http.get(params, noop)

\tvar resolved = url.resolve(location, request._opts.url)
\tt.equal(resolved, 'http://localhost:8081/foo/bar', 'Url should be correct')
\tt.end()
})

test('Cleanup', function (t) {
\tdelete global.location
\tdelete global.XMLHttpRequest
\tdelete require.cache[moduleName]
\tt.end()
})
", "node_modules/stream-http/test/node/http-browserify.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/node/http-browserify.js");
    }
}
