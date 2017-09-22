<?php

/* node_modules/stream-http/test/server/index.js */
class __TwigTemplate_ded093c54e2e61fc4a0e597b2b629044455cfe23776904d2e4092f842498b4e9 extends Twig_Template
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
        $__internal_cfffba4928b5558f6db28e8776de094825123e990515e5faa424ba2920a9bb6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfffba4928b5558f6db28e8776de094825123e990515e5faa424ba2920a9bb6a->enter($__internal_cfffba4928b5558f6db28e8776de094825123e990515e5faa424ba2920a9bb6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/test/server/index.js"));

        // line 1
        echo "var cookieParser = require('cookie-parser')
var basicAuth = require('basic-auth')
var express = require('express')
var fs = require('fs')
var http = require('http')
var path = require('path')
var url = require('url')

var app = express()
var server = http.createServer(app)

// Otherwise, use 'application/octet-stream'
var copiesMimeTypes = {
\t'/basic.txt': 'text/plain'
}

var maxDelay = 5000 // ms

// This should make sure bodies aren't cached
// so the streaming tests always pass
app.use(function (req, res, next) {
\tres.setHeader('Cache-Control', 'no-store')
\tnext()
})

app.get('/testHeaders', function (req, res) {
\tvar parsed = url.parse(req.url, true)

\t// Values in query parameters are sent as response headers
\tObject.keys(parsed.query).forEach(function (key) {
\t\tres.setHeader('Test-' + key, parsed.query[key])
\t})

\tres.setHeader('Content-Type', 'application/json')
\tres.setHeader('Cache-Control', 'no-cache')

\t// Request headers are sent in the body as json
\tvar reqHeaders = {}
\tObject.keys(req.headers).forEach(function (key) {
\t\tkey = key.toLowerCase()
\t\tif (key.indexOf('test-') === 0) {
\t\t\t// different browsers format request headers with multiple values
\t\t\t// slightly differently, so normalize
\t\t\treqHeaders[key] = req.headers[key].replace(', ', ',')
\t\t}
\t})

\tvar body = JSON.stringify(reqHeaders)
\tres.setHeader('Content-Length', body.length)
\tres.write(body)
\tres.end()
})

app.get('/cookie', cookieParser(), function (req, res) {
\tres.setHeader('Content-Type', 'text/plain')
\tres.write('hello=' + req.cookies.hello)
\tres.end()
})

app.get('/auth', function (req, res) {
\tvar user = basicAuth(req)

\tif (!user || user.name !== 'TestUser' || user.pass !== 'trustno1') {
\t\tres.setHeader('WWW-Authenticate', 'Basic realm=\"example\"')
\t\tres.end('Access denied')
\t} else {
\t\tres.setHeader('Content-Type', 'text/plain')
\t\tres.write('You\\'re in!')
\t\tres.end()
\t}
})

app.post('/echo', function (req, res) {
\tres.setHeader('Content-Type', 'application/octet-stream')
\treq.pipe(res)
})

app.use('/verifyEmpty', function (req, res) {
\tvar empty = true
\treq.on('data', function (buf) {
\t\tif (buf.length > 0) {
\t\t\tempty = false
\t\t}
\t})
\treq.on('end', function () {
\t\tres.setHeader('Content-Type', 'text/plain')

\t\tif (empty) {
\t\t\tres.end('empty')
\t\t} else {
\t\t\tres.end('not empty')
\t\t}
\t})
})

app.use(function (req, res, next) {
\tvar parsed = url.parse(req.url, true)

\tif ('copies' in parsed.query) {
\t\tvar totalCopies = parseInt(parsed.query.copies, 10)
\t\tfunction fail () {
\t\t\tres.statusCode = 500
\t\t\tres.end()
\t\t}
\t\tfs.readFile(path.join(__dirname, 'static', parsed.pathname), function (err, data) {
\t\t\tif (err)
\t\t\t\treturn fail()

\t\t\tvar mimeType = copiesMimeTypes[parsed.pathname] || 'application/octet-stream'
\t\t\tres.setHeader('Content-Type', mimeType)
\t\t\tres.setHeader('Content-Length', data.length * totalCopies)
\t\t\tvar pieceDelay = maxDelay / totalCopies
\t\t\tif (pieceDelay > 100)
\t\t\t\tpieceDelay = 100

\t\t\tfunction write (copies) {
\t\t\t\tif (copies === 0) 
\t\t\t\t\treturn res.end()

\t\t\t\tres.write(data, function (err) {
\t\t\t\t\tif (err)
\t\t\t\t\t\treturn fail()
\t\t\t\t\tsetTimeout(write.bind(null, copies - 1), pieceDelay)
\t\t\t\t})
\t\t\t}
\t\t\twrite(totalCopies)
\t\t})
\t\treturn
\t}
\tnext()
})

app.use(express.static(path.join(__dirname, 'static')))

var port = parseInt(process.env.ZUUL_PORT) || 8199
console.log('Test server listening on port', port)
server.listen(port)
";
        
        $__internal_cfffba4928b5558f6db28e8776de094825123e990515e5faa424ba2920a9bb6a->leave($__internal_cfffba4928b5558f6db28e8776de094825123e990515e5faa424ba2920a9bb6a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/test/server/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var cookieParser = require('cookie-parser')
var basicAuth = require('basic-auth')
var express = require('express')
var fs = require('fs')
var http = require('http')
var path = require('path')
var url = require('url')

var app = express()
var server = http.createServer(app)

// Otherwise, use 'application/octet-stream'
var copiesMimeTypes = {
\t'/basic.txt': 'text/plain'
}

var maxDelay = 5000 // ms

// This should make sure bodies aren't cached
// so the streaming tests always pass
app.use(function (req, res, next) {
\tres.setHeader('Cache-Control', 'no-store')
\tnext()
})

app.get('/testHeaders', function (req, res) {
\tvar parsed = url.parse(req.url, true)

\t// Values in query parameters are sent as response headers
\tObject.keys(parsed.query).forEach(function (key) {
\t\tres.setHeader('Test-' + key, parsed.query[key])
\t})

\tres.setHeader('Content-Type', 'application/json')
\tres.setHeader('Cache-Control', 'no-cache')

\t// Request headers are sent in the body as json
\tvar reqHeaders = {}
\tObject.keys(req.headers).forEach(function (key) {
\t\tkey = key.toLowerCase()
\t\tif (key.indexOf('test-') === 0) {
\t\t\t// different browsers format request headers with multiple values
\t\t\t// slightly differently, so normalize
\t\t\treqHeaders[key] = req.headers[key].replace(', ', ',')
\t\t}
\t})

\tvar body = JSON.stringify(reqHeaders)
\tres.setHeader('Content-Length', body.length)
\tres.write(body)
\tres.end()
})

app.get('/cookie', cookieParser(), function (req, res) {
\tres.setHeader('Content-Type', 'text/plain')
\tres.write('hello=' + req.cookies.hello)
\tres.end()
})

app.get('/auth', function (req, res) {
\tvar user = basicAuth(req)

\tif (!user || user.name !== 'TestUser' || user.pass !== 'trustno1') {
\t\tres.setHeader('WWW-Authenticate', 'Basic realm=\"example\"')
\t\tres.end('Access denied')
\t} else {
\t\tres.setHeader('Content-Type', 'text/plain')
\t\tres.write('You\\'re in!')
\t\tres.end()
\t}
})

app.post('/echo', function (req, res) {
\tres.setHeader('Content-Type', 'application/octet-stream')
\treq.pipe(res)
})

app.use('/verifyEmpty', function (req, res) {
\tvar empty = true
\treq.on('data', function (buf) {
\t\tif (buf.length > 0) {
\t\t\tempty = false
\t\t}
\t})
\treq.on('end', function () {
\t\tres.setHeader('Content-Type', 'text/plain')

\t\tif (empty) {
\t\t\tres.end('empty')
\t\t} else {
\t\t\tres.end('not empty')
\t\t}
\t})
})

app.use(function (req, res, next) {
\tvar parsed = url.parse(req.url, true)

\tif ('copies' in parsed.query) {
\t\tvar totalCopies = parseInt(parsed.query.copies, 10)
\t\tfunction fail () {
\t\t\tres.statusCode = 500
\t\t\tres.end()
\t\t}
\t\tfs.readFile(path.join(__dirname, 'static', parsed.pathname), function (err, data) {
\t\t\tif (err)
\t\t\t\treturn fail()

\t\t\tvar mimeType = copiesMimeTypes[parsed.pathname] || 'application/octet-stream'
\t\t\tres.setHeader('Content-Type', mimeType)
\t\t\tres.setHeader('Content-Length', data.length * totalCopies)
\t\t\tvar pieceDelay = maxDelay / totalCopies
\t\t\tif (pieceDelay > 100)
\t\t\t\tpieceDelay = 100

\t\t\tfunction write (copies) {
\t\t\t\tif (copies === 0) 
\t\t\t\t\treturn res.end()

\t\t\t\tres.write(data, function (err) {
\t\t\t\t\tif (err)
\t\t\t\t\t\treturn fail()
\t\t\t\t\tsetTimeout(write.bind(null, copies - 1), pieceDelay)
\t\t\t\t})
\t\t\t}
\t\t\twrite(totalCopies)
\t\t})
\t\treturn
\t}
\tnext()
})

app.use(express.static(path.join(__dirname, 'static')))

var port = parseInt(process.env.ZUUL_PORT) || 8199
console.log('Test server listening on port', port)
server.listen(port)
", "node_modules/stream-http/test/server/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/test/server/index.js");
    }
}
