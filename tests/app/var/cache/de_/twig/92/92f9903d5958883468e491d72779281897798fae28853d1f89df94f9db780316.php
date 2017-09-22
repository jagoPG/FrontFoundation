<?php

/* node_modules/stream-http/lib/request.js */
class __TwigTemplate_8d664f648a6e9593f91aa24954cdec13aac020a89b1683fc2489f1e7aad5c1f8 extends Twig_Template
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
        $__internal_de83071f400de4b3e5085a377c82e65acb4dd616ece8bf2b7ebfc5a3f1b802f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de83071f400de4b3e5085a377c82e65acb4dd616ece8bf2b7ebfc5a3f1b802f0->enter($__internal_de83071f400de4b3e5085a377c82e65acb4dd616ece8bf2b7ebfc5a3f1b802f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/lib/request.js"));

        // line 1
        echo "var capability = require('./capability')
var inherits = require('inherits')
var response = require('./response')
var stream = require('readable-stream')
var toArrayBuffer = require('to-arraybuffer')

var IncomingMessage = response.IncomingMessage
var rStates = response.readyStates

function decideMode (preferBinary, useFetch) {
\tif (capability.fetch && useFetch) {
\t\treturn 'fetch'
\t} else if (capability.mozchunkedarraybuffer) {
\t\treturn 'moz-chunked-arraybuffer'
\t} else if (capability.msstream) {
\t\treturn 'ms-stream'
\t} else if (capability.arraybuffer && preferBinary) {
\t\treturn 'arraybuffer'
\t} else if (capability.vbArray && preferBinary) {
\t\treturn 'text:vbarray'
\t} else {
\t\treturn 'text'
\t}
}

var ClientRequest = module.exports = function (opts) {
\tvar self = this
\tstream.Writable.call(self)

\tself._opts = opts
\tself._body = []
\tself._headers = {}
\tif (opts.auth)
\t\tself.setHeader('Authorization', 'Basic ' + new Buffer(opts.auth).toString('base64'))
\tObject.keys(opts.headers).forEach(function (name) {
\t\tself.setHeader(name, opts.headers[name])
\t})

\tvar preferBinary
\tvar useFetch = true
\tif (opts.mode === 'disable-fetch' || 'timeout' in opts) {
\t\t// If the use of XHR should be preferred and includes preserving the 'content-type' header.
\t\t// Force XHR to be used since the Fetch API does not yet support timeouts.
\t\tuseFetch = false
\t\tpreferBinary = true
\t} else if (opts.mode === 'prefer-streaming') {
\t\t// If streaming is a high priority but binary compatibility and
\t\t// the accuracy of the 'content-type' header aren't
\t\tpreferBinary = false
\t} else if (opts.mode === 'allow-wrong-content-type') {
\t\t// If streaming is more important than preserving the 'content-type' header
\t\tpreferBinary = !capability.overrideMimeType
\t} else if (!opts.mode || opts.mode === 'default' || opts.mode === 'prefer-fast') {
\t\t// Use binary if text streaming may corrupt data or the content-type header, or for speed
\t\tpreferBinary = true
\t} else {
\t\tthrow new Error('Invalid value for opts.mode')
\t}
\tself._mode = decideMode(preferBinary, useFetch)

\tself.on('finish', function () {
\t\tself._onFinish()
\t})
}

inherits(ClientRequest, stream.Writable)

ClientRequest.prototype.setHeader = function (name, value) {
\tvar self = this
\tvar lowerName = name.toLowerCase()
\t// This check is not necessary, but it prevents warnings from browsers about setting unsafe
\t// headers. To be honest I'm not entirely sure hiding these warnings is a good thing, but
\t// http-browserify did it, so I will too.
\tif (unsafeHeaders.indexOf(lowerName) !== -1)
\t\treturn

\tself._headers[lowerName] = {
\t\tname: name,
\t\tvalue: value
\t}
}

ClientRequest.prototype.getHeader = function (name) {
\tvar header = this._headers[name.toLowerCase()]
\tif (header)
\t\treturn header.value
\treturn null
}

ClientRequest.prototype.removeHeader = function (name) {
\tvar self = this
\tdelete self._headers[name.toLowerCase()]
}

ClientRequest.prototype._onFinish = function () {
\tvar self = this

\tif (self._destroyed)
\t\treturn
\tvar opts = self._opts

\tvar headersObj = self._headers
\tvar body = null
\tif (opts.method !== 'GET' && opts.method !== 'HEAD') {
\t\tif (capability.blobConstructor) {
\t\t\tbody = new global.Blob(self._body.map(function (buffer) {
\t\t\t\treturn toArrayBuffer(buffer)
\t\t\t}), {
\t\t\t\ttype: (headersObj['content-type'] || {}).value || ''
\t\t\t})
\t\t} else {
\t\t\t// get utf8 string
\t\t\tbody = Buffer.concat(self._body).toString()
\t\t}
\t}

\t// create flattened list of headers
\tvar headersList = []
\tObject.keys(headersObj).forEach(function (keyName) {
\t\tvar name = headersObj[keyName].name
\t\tvar value = headersObj[keyName].value
\t\tif (Array.isArray(value)) {
\t\t\tvalue.forEach(function (v) {
\t\t\t\theadersList.push([name, v])
\t\t\t})
\t\t} else {
\t\t\theadersList.push([name, value])
\t\t}
\t})

\tif (self._mode === 'fetch') {
\t\tglobal.fetch(self._opts.url, {
\t\t\tmethod: self._opts.method,
\t\t\theaders: headersList,
\t\t\tbody: body || undefined,
\t\t\tmode: 'cors',
\t\t\tcredentials: opts.withCredentials ? 'include' : 'same-origin'
\t\t}).then(function (response) {
\t\t\tself._fetchResponse = response
\t\t\tself._connect()
\t\t}, function (reason) {
\t\t\tself.emit('error', reason)
\t\t})
\t} else {
\t\tvar xhr = self._xhr = new global.XMLHttpRequest()
\t\ttry {
\t\t\txhr.open(self._opts.method, self._opts.url, true)
\t\t} catch (err) {
\t\t\tprocess.nextTick(function () {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t\treturn
\t\t}

\t\t// Can't set responseType on really old browsers
\t\tif ('responseType' in xhr)
\t\t\txhr.responseType = self._mode.split(':')[0]

\t\tif ('withCredentials' in xhr)
\t\t\txhr.withCredentials = !!opts.withCredentials

\t\tif (self._mode === 'text' && 'overrideMimeType' in xhr)
\t\t\txhr.overrideMimeType('text/plain; charset=x-user-defined')

\t\tif ('timeout' in opts) {
\t\t\txhr.timeout = opts.timeout
\t\t\txhr.ontimeout = function () {
\t\t\t\tself.emit('timeout')
\t\t\t}
\t\t}

\t\theadersList.forEach(function (header) {
\t\t\txhr.setRequestHeader(header[0], header[1])
\t\t})

\t\tself._response = null
\t\txhr.onreadystatechange = function () {
\t\t\tswitch (xhr.readyState) {
\t\t\t\tcase rStates.LOADING:
\t\t\t\tcase rStates.DONE:
\t\t\t\t\tself._onXHRProgress()
\t\t\t\t\tbreak
\t\t\t}
\t\t}
\t\t// Necessary for streaming in Firefox, since xhr.response is ONLY defined
\t\t// in onprogress, not in onreadystatechange with xhr.readyState = 3
\t\tif (self._mode === 'moz-chunked-arraybuffer') {
\t\t\txhr.onprogress = function () {
\t\t\t\tself._onXHRProgress()
\t\t\t}
\t\t}

\t\txhr.onerror = function () {
\t\t\tif (self._destroyed)
\t\t\t\treturn
\t\t\tself.emit('error', new Error('XHR error'))
\t\t}

\t\ttry {
\t\t\txhr.send(body)
\t\t} catch (err) {
\t\t\tprocess.nextTick(function () {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t\treturn
\t\t}
\t}
}

/**
 * Checks if xhr.status is readable and non-zero, indicating no error.
 * Even though the spec says it should be available in readyState 3,
 * accessing it throws an exception in IE8
 */
function statusValid (xhr) {
\ttry {
\t\tvar status = xhr.status
\t\treturn (status !== null && status !== 0)
\t} catch (e) {
\t\treturn false
\t}
}

ClientRequest.prototype._onXHRProgress = function () {
\tvar self = this

\tif (!statusValid(self._xhr) || self._destroyed)
\t\treturn

\tif (!self._response)
\t\tself._connect()

\tself._response._onXHRProgress()
}

ClientRequest.prototype._connect = function () {
\tvar self = this

\tif (self._destroyed)
\t\treturn

\tself._response = new IncomingMessage(self._xhr, self._fetchResponse, self._mode)
\tself._response.on('error', function(err) {
\t\tself.emit('error', err)
\t})

\tself.emit('response', self._response)
}

ClientRequest.prototype._write = function (chunk, encoding, cb) {
\tvar self = this

\tself._body.push(chunk)
\tcb()
}

ClientRequest.prototype.abort = ClientRequest.prototype.destroy = function () {
\tvar self = this
\tself._destroyed = true
\tif (self._response)
\t\tself._response._destroyed = true
\tif (self._xhr)
\t\tself._xhr.abort()
\t// Currently, there isn't a way to truly abort a fetch.
\t// If you like bikeshedding, see https://github.com/whatwg/fetch/issues/27
}

ClientRequest.prototype.end = function (data, encoding, cb) {
\tvar self = this
\tif (typeof data === 'function') {
\t\tcb = data
\t\tdata = undefined
\t}

\tstream.Writable.prototype.end.call(self, data, encoding, cb)
}

ClientRequest.prototype.flushHeaders = function () {}
ClientRequest.prototype.setTimeout = function () {}
ClientRequest.prototype.setNoDelay = function () {}
ClientRequest.prototype.setSocketKeepAlive = function () {}

// Taken from http://www.w3.org/TR/XMLHttpRequest/#the-setrequestheader%28%29-method
var unsafeHeaders = [
\t'accept-charset',
\t'accept-encoding',
\t'access-control-request-headers',
\t'access-control-request-method',
\t'connection',
\t'content-length',
\t'cookie',
\t'cookie2',
\t'date',
\t'dnt',
\t'expect',
\t'host',
\t'keep-alive',
\t'origin',
\t'referer',
\t'te',
\t'trailer',
\t'transfer-encoding',
\t'upgrade',
\t'user-agent',
\t'via'
]
";
        
        $__internal_de83071f400de4b3e5085a377c82e65acb4dd616ece8bf2b7ebfc5a3f1b802f0->leave($__internal_de83071f400de4b3e5085a377c82e65acb4dd616ece8bf2b7ebfc5a3f1b802f0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/lib/request.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var capability = require('./capability')
var inherits = require('inherits')
var response = require('./response')
var stream = require('readable-stream')
var toArrayBuffer = require('to-arraybuffer')

var IncomingMessage = response.IncomingMessage
var rStates = response.readyStates

function decideMode (preferBinary, useFetch) {
\tif (capability.fetch && useFetch) {
\t\treturn 'fetch'
\t} else if (capability.mozchunkedarraybuffer) {
\t\treturn 'moz-chunked-arraybuffer'
\t} else if (capability.msstream) {
\t\treturn 'ms-stream'
\t} else if (capability.arraybuffer && preferBinary) {
\t\treturn 'arraybuffer'
\t} else if (capability.vbArray && preferBinary) {
\t\treturn 'text:vbarray'
\t} else {
\t\treturn 'text'
\t}
}

var ClientRequest = module.exports = function (opts) {
\tvar self = this
\tstream.Writable.call(self)

\tself._opts = opts
\tself._body = []
\tself._headers = {}
\tif (opts.auth)
\t\tself.setHeader('Authorization', 'Basic ' + new Buffer(opts.auth).toString('base64'))
\tObject.keys(opts.headers).forEach(function (name) {
\t\tself.setHeader(name, opts.headers[name])
\t})

\tvar preferBinary
\tvar useFetch = true
\tif (opts.mode === 'disable-fetch' || 'timeout' in opts) {
\t\t// If the use of XHR should be preferred and includes preserving the 'content-type' header.
\t\t// Force XHR to be used since the Fetch API does not yet support timeouts.
\t\tuseFetch = false
\t\tpreferBinary = true
\t} else if (opts.mode === 'prefer-streaming') {
\t\t// If streaming is a high priority but binary compatibility and
\t\t// the accuracy of the 'content-type' header aren't
\t\tpreferBinary = false
\t} else if (opts.mode === 'allow-wrong-content-type') {
\t\t// If streaming is more important than preserving the 'content-type' header
\t\tpreferBinary = !capability.overrideMimeType
\t} else if (!opts.mode || opts.mode === 'default' || opts.mode === 'prefer-fast') {
\t\t// Use binary if text streaming may corrupt data or the content-type header, or for speed
\t\tpreferBinary = true
\t} else {
\t\tthrow new Error('Invalid value for opts.mode')
\t}
\tself._mode = decideMode(preferBinary, useFetch)

\tself.on('finish', function () {
\t\tself._onFinish()
\t})
}

inherits(ClientRequest, stream.Writable)

ClientRequest.prototype.setHeader = function (name, value) {
\tvar self = this
\tvar lowerName = name.toLowerCase()
\t// This check is not necessary, but it prevents warnings from browsers about setting unsafe
\t// headers. To be honest I'm not entirely sure hiding these warnings is a good thing, but
\t// http-browserify did it, so I will too.
\tif (unsafeHeaders.indexOf(lowerName) !== -1)
\t\treturn

\tself._headers[lowerName] = {
\t\tname: name,
\t\tvalue: value
\t}
}

ClientRequest.prototype.getHeader = function (name) {
\tvar header = this._headers[name.toLowerCase()]
\tif (header)
\t\treturn header.value
\treturn null
}

ClientRequest.prototype.removeHeader = function (name) {
\tvar self = this
\tdelete self._headers[name.toLowerCase()]
}

ClientRequest.prototype._onFinish = function () {
\tvar self = this

\tif (self._destroyed)
\t\treturn
\tvar opts = self._opts

\tvar headersObj = self._headers
\tvar body = null
\tif (opts.method !== 'GET' && opts.method !== 'HEAD') {
\t\tif (capability.blobConstructor) {
\t\t\tbody = new global.Blob(self._body.map(function (buffer) {
\t\t\t\treturn toArrayBuffer(buffer)
\t\t\t}), {
\t\t\t\ttype: (headersObj['content-type'] || {}).value || ''
\t\t\t})
\t\t} else {
\t\t\t// get utf8 string
\t\t\tbody = Buffer.concat(self._body).toString()
\t\t}
\t}

\t// create flattened list of headers
\tvar headersList = []
\tObject.keys(headersObj).forEach(function (keyName) {
\t\tvar name = headersObj[keyName].name
\t\tvar value = headersObj[keyName].value
\t\tif (Array.isArray(value)) {
\t\t\tvalue.forEach(function (v) {
\t\t\t\theadersList.push([name, v])
\t\t\t})
\t\t} else {
\t\t\theadersList.push([name, value])
\t\t}
\t})

\tif (self._mode === 'fetch') {
\t\tglobal.fetch(self._opts.url, {
\t\t\tmethod: self._opts.method,
\t\t\theaders: headersList,
\t\t\tbody: body || undefined,
\t\t\tmode: 'cors',
\t\t\tcredentials: opts.withCredentials ? 'include' : 'same-origin'
\t\t}).then(function (response) {
\t\t\tself._fetchResponse = response
\t\t\tself._connect()
\t\t}, function (reason) {
\t\t\tself.emit('error', reason)
\t\t})
\t} else {
\t\tvar xhr = self._xhr = new global.XMLHttpRequest()
\t\ttry {
\t\t\txhr.open(self._opts.method, self._opts.url, true)
\t\t} catch (err) {
\t\t\tprocess.nextTick(function () {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t\treturn
\t\t}

\t\t// Can't set responseType on really old browsers
\t\tif ('responseType' in xhr)
\t\t\txhr.responseType = self._mode.split(':')[0]

\t\tif ('withCredentials' in xhr)
\t\t\txhr.withCredentials = !!opts.withCredentials

\t\tif (self._mode === 'text' && 'overrideMimeType' in xhr)
\t\t\txhr.overrideMimeType('text/plain; charset=x-user-defined')

\t\tif ('timeout' in opts) {
\t\t\txhr.timeout = opts.timeout
\t\t\txhr.ontimeout = function () {
\t\t\t\tself.emit('timeout')
\t\t\t}
\t\t}

\t\theadersList.forEach(function (header) {
\t\t\txhr.setRequestHeader(header[0], header[1])
\t\t})

\t\tself._response = null
\t\txhr.onreadystatechange = function () {
\t\t\tswitch (xhr.readyState) {
\t\t\t\tcase rStates.LOADING:
\t\t\t\tcase rStates.DONE:
\t\t\t\t\tself._onXHRProgress()
\t\t\t\t\tbreak
\t\t\t}
\t\t}
\t\t// Necessary for streaming in Firefox, since xhr.response is ONLY defined
\t\t// in onprogress, not in onreadystatechange with xhr.readyState = 3
\t\tif (self._mode === 'moz-chunked-arraybuffer') {
\t\t\txhr.onprogress = function () {
\t\t\t\tself._onXHRProgress()
\t\t\t}
\t\t}

\t\txhr.onerror = function () {
\t\t\tif (self._destroyed)
\t\t\t\treturn
\t\t\tself.emit('error', new Error('XHR error'))
\t\t}

\t\ttry {
\t\t\txhr.send(body)
\t\t} catch (err) {
\t\t\tprocess.nextTick(function () {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t\treturn
\t\t}
\t}
}

/**
 * Checks if xhr.status is readable and non-zero, indicating no error.
 * Even though the spec says it should be available in readyState 3,
 * accessing it throws an exception in IE8
 */
function statusValid (xhr) {
\ttry {
\t\tvar status = xhr.status
\t\treturn (status !== null && status !== 0)
\t} catch (e) {
\t\treturn false
\t}
}

ClientRequest.prototype._onXHRProgress = function () {
\tvar self = this

\tif (!statusValid(self._xhr) || self._destroyed)
\t\treturn

\tif (!self._response)
\t\tself._connect()

\tself._response._onXHRProgress()
}

ClientRequest.prototype._connect = function () {
\tvar self = this

\tif (self._destroyed)
\t\treturn

\tself._response = new IncomingMessage(self._xhr, self._fetchResponse, self._mode)
\tself._response.on('error', function(err) {
\t\tself.emit('error', err)
\t})

\tself.emit('response', self._response)
}

ClientRequest.prototype._write = function (chunk, encoding, cb) {
\tvar self = this

\tself._body.push(chunk)
\tcb()
}

ClientRequest.prototype.abort = ClientRequest.prototype.destroy = function () {
\tvar self = this
\tself._destroyed = true
\tif (self._response)
\t\tself._response._destroyed = true
\tif (self._xhr)
\t\tself._xhr.abort()
\t// Currently, there isn't a way to truly abort a fetch.
\t// If you like bikeshedding, see https://github.com/whatwg/fetch/issues/27
}

ClientRequest.prototype.end = function (data, encoding, cb) {
\tvar self = this
\tif (typeof data === 'function') {
\t\tcb = data
\t\tdata = undefined
\t}

\tstream.Writable.prototype.end.call(self, data, encoding, cb)
}

ClientRequest.prototype.flushHeaders = function () {}
ClientRequest.prototype.setTimeout = function () {}
ClientRequest.prototype.setNoDelay = function () {}
ClientRequest.prototype.setSocketKeepAlive = function () {}

// Taken from http://www.w3.org/TR/XMLHttpRequest/#the-setrequestheader%28%29-method
var unsafeHeaders = [
\t'accept-charset',
\t'accept-encoding',
\t'access-control-request-headers',
\t'access-control-request-method',
\t'connection',
\t'content-length',
\t'cookie',
\t'cookie2',
\t'date',
\t'dnt',
\t'expect',
\t'host',
\t'keep-alive',
\t'origin',
\t'referer',
\t'te',
\t'trailer',
\t'transfer-encoding',
\t'upgrade',
\t'user-agent',
\t'via'
]
", "node_modules/stream-http/lib/request.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/lib/request.js");
    }
}
