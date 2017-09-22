<?php

/* node_modules/stream-http/lib/response.js */
class __TwigTemplate_09a869fc8ba44ffe3dc334dbb9df31a96356c5f0cbef83d828984560306ccb07 extends Twig_Template
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
        $__internal_ac73440184f3c5d2bfa9f84495a5c866973bb4461a551c3d0bf9d9b163b53bf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac73440184f3c5d2bfa9f84495a5c866973bb4461a551c3d0bf9d9b163b53bf8->enter($__internal_ac73440184f3c5d2bfa9f84495a5c866973bb4461a551c3d0bf9d9b163b53bf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/lib/response.js"));

        // line 1
        echo "var capability = require('./capability')
var inherits = require('inherits')
var stream = require('readable-stream')

var rStates = exports.readyStates = {
\tUNSENT: 0,
\tOPENED: 1,
\tHEADERS_RECEIVED: 2,
\tLOADING: 3,
\tDONE: 4
}

var IncomingMessage = exports.IncomingMessage = function (xhr, response, mode) {
\tvar self = this
\tstream.Readable.call(self)

\tself._mode = mode
\tself.headers = {}
\tself.rawHeaders = []
\tself.trailers = {}
\tself.rawTrailers = []

\t// Fake the 'close' event, but only once 'end' fires
\tself.on('end', function () {
\t\t// The nextTick is necessary to prevent the 'request' module from causing an infinite loop
\t\tprocess.nextTick(function () {
\t\t\tself.emit('close')
\t\t})
\t})

\tif (mode === 'fetch') {
\t\tself._fetchResponse = response

\t\tself.url = response.url
\t\tself.statusCode = response.status
\t\tself.statusMessage = response.statusText
\t\t
\t\tresponse.headers.forEach(function(header, key){
\t\t\tself.headers[key.toLowerCase()] = header
\t\t\tself.rawHeaders.push(key, header)
\t\t})


\t\t// TODO: this doesn't respect backpressure. Once WritableStream is available, this can be fixed
\t\tvar reader = response.body.getReader()
\t\tfunction read () {
\t\t\treader.read().then(function (result) {
\t\t\t\tif (self._destroyed)
\t\t\t\t\treturn
\t\t\t\tif (result.done) {
\t\t\t\t\tself.push(null)
\t\t\t\t\treturn
\t\t\t\t}
\t\t\t\tself.push(new Buffer(result.value))
\t\t\t\tread()
\t\t\t}).catch(function(err) {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t}
\t\tread()

\t} else {
\t\tself._xhr = xhr
\t\tself._pos = 0

\t\tself.url = xhr.responseURL
\t\tself.statusCode = xhr.status
\t\tself.statusMessage = xhr.statusText
\t\tvar headers = xhr.getAllResponseHeaders().split(/\\r?\\n/)
\t\theaders.forEach(function (header) {
\t\t\tvar matches = header.match(/^([^:]+):\\s*(.*)/)
\t\t\tif (matches) {
\t\t\t\tvar key = matches[1].toLowerCase()
\t\t\t\tif (key === 'set-cookie') {
\t\t\t\t\tif (self.headers[key] === undefined) {
\t\t\t\t\t\tself.headers[key] = []
\t\t\t\t\t}
\t\t\t\t\tself.headers[key].push(matches[2])
\t\t\t\t} else if (self.headers[key] !== undefined) {
\t\t\t\t\tself.headers[key] += ', ' + matches[2]
\t\t\t\t} else {
\t\t\t\t\tself.headers[key] = matches[2]
\t\t\t\t}
\t\t\t\tself.rawHeaders.push(matches[1], matches[2])
\t\t\t}
\t\t})

\t\tself._charset = 'x-user-defined'
\t\tif (!capability.overrideMimeType) {
\t\t\tvar mimeType = self.rawHeaders['mime-type']
\t\t\tif (mimeType) {
\t\t\t\tvar charsetMatch = mimeType.match(/;\\s*charset=([^;])(;|\$)/)
\t\t\t\tif (charsetMatch) {
\t\t\t\t\tself._charset = charsetMatch[1].toLowerCase()
\t\t\t\t}
\t\t\t}
\t\t\tif (!self._charset)
\t\t\t\tself._charset = 'utf-8' // best guess
\t\t}
\t}
}

inherits(IncomingMessage, stream.Readable)

IncomingMessage.prototype._read = function () {}

IncomingMessage.prototype._onXHRProgress = function () {
\tvar self = this

\tvar xhr = self._xhr

\tvar response = null
\tswitch (self._mode) {
\t\tcase 'text:vbarray': // For IE9
\t\t\tif (xhr.readyState !== rStates.DONE)
\t\t\t\tbreak
\t\t\ttry {
\t\t\t\t// This fails in IE8
\t\t\t\tresponse = new global.VBArray(xhr.responseBody).toArray()
\t\t\t} catch (e) {}
\t\t\tif (response !== null) {
\t\t\t\tself.push(new Buffer(response))
\t\t\t\tbreak
\t\t\t}
\t\t\t// Falls through in IE8\t
\t\tcase 'text':
\t\t\ttry { // This will fail when readyState = 3 in IE9. Switch mode and wait for readyState = 4
\t\t\t\tresponse = xhr.responseText
\t\t\t} catch (e) {
\t\t\t\tself._mode = 'text:vbarray'
\t\t\t\tbreak
\t\t\t}
\t\t\tif (response.length > self._pos) {
\t\t\t\tvar newData = response.substr(self._pos)
\t\t\t\tif (self._charset === 'x-user-defined') {
\t\t\t\t\tvar buffer = new Buffer(newData.length)
\t\t\t\t\tfor (var i = 0; i < newData.length; i++)
\t\t\t\t\t\tbuffer[i] = newData.charCodeAt(i) & 0xff

\t\t\t\t\tself.push(buffer)
\t\t\t\t} else {
\t\t\t\t\tself.push(newData, self._charset)
\t\t\t\t}
\t\t\t\tself._pos = response.length
\t\t\t}
\t\t\tbreak
\t\tcase 'arraybuffer':
\t\t\tif (xhr.readyState !== rStates.DONE || !xhr.response)
\t\t\t\tbreak
\t\t\tresponse = xhr.response
\t\t\tself.push(new Buffer(new Uint8Array(response)))
\t\t\tbreak
\t\tcase 'moz-chunked-arraybuffer': // take whole
\t\t\tresponse = xhr.response
\t\t\tif (xhr.readyState !== rStates.LOADING || !response)
\t\t\t\tbreak
\t\t\tself.push(new Buffer(new Uint8Array(response)))
\t\t\tbreak
\t\tcase 'ms-stream':
\t\t\tresponse = xhr.response
\t\t\tif (xhr.readyState !== rStates.LOADING)
\t\t\t\tbreak
\t\t\tvar reader = new global.MSStreamReader()
\t\t\treader.onprogress = function () {
\t\t\t\tif (reader.result.byteLength > self._pos) {
\t\t\t\t\tself.push(new Buffer(new Uint8Array(reader.result.slice(self._pos))))
\t\t\t\t\tself._pos = reader.result.byteLength
\t\t\t\t}
\t\t\t}
\t\t\treader.onload = function () {
\t\t\t\tself.push(null)
\t\t\t}
\t\t\t// reader.onerror = ??? // TODO: this
\t\t\treader.readAsArrayBuffer(response)
\t\t\tbreak
\t}

\t// The ms-stream case handles end separately in reader.onload()
\tif (self._xhr.readyState === rStates.DONE && self._mode !== 'ms-stream') {
\t\tself.push(null)
\t}
}
";
        
        $__internal_ac73440184f3c5d2bfa9f84495a5c866973bb4461a551c3d0bf9d9b163b53bf8->leave($__internal_ac73440184f3c5d2bfa9f84495a5c866973bb4461a551c3d0bf9d9b163b53bf8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/lib/response.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var capability = require('./capability')
var inherits = require('inherits')
var stream = require('readable-stream')

var rStates = exports.readyStates = {
\tUNSENT: 0,
\tOPENED: 1,
\tHEADERS_RECEIVED: 2,
\tLOADING: 3,
\tDONE: 4
}

var IncomingMessage = exports.IncomingMessage = function (xhr, response, mode) {
\tvar self = this
\tstream.Readable.call(self)

\tself._mode = mode
\tself.headers = {}
\tself.rawHeaders = []
\tself.trailers = {}
\tself.rawTrailers = []

\t// Fake the 'close' event, but only once 'end' fires
\tself.on('end', function () {
\t\t// The nextTick is necessary to prevent the 'request' module from causing an infinite loop
\t\tprocess.nextTick(function () {
\t\t\tself.emit('close')
\t\t})
\t})

\tif (mode === 'fetch') {
\t\tself._fetchResponse = response

\t\tself.url = response.url
\t\tself.statusCode = response.status
\t\tself.statusMessage = response.statusText
\t\t
\t\tresponse.headers.forEach(function(header, key){
\t\t\tself.headers[key.toLowerCase()] = header
\t\t\tself.rawHeaders.push(key, header)
\t\t})


\t\t// TODO: this doesn't respect backpressure. Once WritableStream is available, this can be fixed
\t\tvar reader = response.body.getReader()
\t\tfunction read () {
\t\t\treader.read().then(function (result) {
\t\t\t\tif (self._destroyed)
\t\t\t\t\treturn
\t\t\t\tif (result.done) {
\t\t\t\t\tself.push(null)
\t\t\t\t\treturn
\t\t\t\t}
\t\t\t\tself.push(new Buffer(result.value))
\t\t\t\tread()
\t\t\t}).catch(function(err) {
\t\t\t\tself.emit('error', err)
\t\t\t})
\t\t}
\t\tread()

\t} else {
\t\tself._xhr = xhr
\t\tself._pos = 0

\t\tself.url = xhr.responseURL
\t\tself.statusCode = xhr.status
\t\tself.statusMessage = xhr.statusText
\t\tvar headers = xhr.getAllResponseHeaders().split(/\\r?\\n/)
\t\theaders.forEach(function (header) {
\t\t\tvar matches = header.match(/^([^:]+):\\s*(.*)/)
\t\t\tif (matches) {
\t\t\t\tvar key = matches[1].toLowerCase()
\t\t\t\tif (key === 'set-cookie') {
\t\t\t\t\tif (self.headers[key] === undefined) {
\t\t\t\t\t\tself.headers[key] = []
\t\t\t\t\t}
\t\t\t\t\tself.headers[key].push(matches[2])
\t\t\t\t} else if (self.headers[key] !== undefined) {
\t\t\t\t\tself.headers[key] += ', ' + matches[2]
\t\t\t\t} else {
\t\t\t\t\tself.headers[key] = matches[2]
\t\t\t\t}
\t\t\t\tself.rawHeaders.push(matches[1], matches[2])
\t\t\t}
\t\t})

\t\tself._charset = 'x-user-defined'
\t\tif (!capability.overrideMimeType) {
\t\t\tvar mimeType = self.rawHeaders['mime-type']
\t\t\tif (mimeType) {
\t\t\t\tvar charsetMatch = mimeType.match(/;\\s*charset=([^;])(;|\$)/)
\t\t\t\tif (charsetMatch) {
\t\t\t\t\tself._charset = charsetMatch[1].toLowerCase()
\t\t\t\t}
\t\t\t}
\t\t\tif (!self._charset)
\t\t\t\tself._charset = 'utf-8' // best guess
\t\t}
\t}
}

inherits(IncomingMessage, stream.Readable)

IncomingMessage.prototype._read = function () {}

IncomingMessage.prototype._onXHRProgress = function () {
\tvar self = this

\tvar xhr = self._xhr

\tvar response = null
\tswitch (self._mode) {
\t\tcase 'text:vbarray': // For IE9
\t\t\tif (xhr.readyState !== rStates.DONE)
\t\t\t\tbreak
\t\t\ttry {
\t\t\t\t// This fails in IE8
\t\t\t\tresponse = new global.VBArray(xhr.responseBody).toArray()
\t\t\t} catch (e) {}
\t\t\tif (response !== null) {
\t\t\t\tself.push(new Buffer(response))
\t\t\t\tbreak
\t\t\t}
\t\t\t// Falls through in IE8\t
\t\tcase 'text':
\t\t\ttry { // This will fail when readyState = 3 in IE9. Switch mode and wait for readyState = 4
\t\t\t\tresponse = xhr.responseText
\t\t\t} catch (e) {
\t\t\t\tself._mode = 'text:vbarray'
\t\t\t\tbreak
\t\t\t}
\t\t\tif (response.length > self._pos) {
\t\t\t\tvar newData = response.substr(self._pos)
\t\t\t\tif (self._charset === 'x-user-defined') {
\t\t\t\t\tvar buffer = new Buffer(newData.length)
\t\t\t\t\tfor (var i = 0; i < newData.length; i++)
\t\t\t\t\t\tbuffer[i] = newData.charCodeAt(i) & 0xff

\t\t\t\t\tself.push(buffer)
\t\t\t\t} else {
\t\t\t\t\tself.push(newData, self._charset)
\t\t\t\t}
\t\t\t\tself._pos = response.length
\t\t\t}
\t\t\tbreak
\t\tcase 'arraybuffer':
\t\t\tif (xhr.readyState !== rStates.DONE || !xhr.response)
\t\t\t\tbreak
\t\t\tresponse = xhr.response
\t\t\tself.push(new Buffer(new Uint8Array(response)))
\t\t\tbreak
\t\tcase 'moz-chunked-arraybuffer': // take whole
\t\t\tresponse = xhr.response
\t\t\tif (xhr.readyState !== rStates.LOADING || !response)
\t\t\t\tbreak
\t\t\tself.push(new Buffer(new Uint8Array(response)))
\t\t\tbreak
\t\tcase 'ms-stream':
\t\t\tresponse = xhr.response
\t\t\tif (xhr.readyState !== rStates.LOADING)
\t\t\t\tbreak
\t\t\tvar reader = new global.MSStreamReader()
\t\t\treader.onprogress = function () {
\t\t\t\tif (reader.result.byteLength > self._pos) {
\t\t\t\t\tself.push(new Buffer(new Uint8Array(reader.result.slice(self._pos))))
\t\t\t\t\tself._pos = reader.result.byteLength
\t\t\t\t}
\t\t\t}
\t\t\treader.onload = function () {
\t\t\t\tself.push(null)
\t\t\t}
\t\t\t// reader.onerror = ??? // TODO: this
\t\t\treader.readAsArrayBuffer(response)
\t\t\tbreak
\t}

\t// The ms-stream case handles end separately in reader.onload()
\tif (self._xhr.readyState === rStates.DONE && self._mode !== 'ms-stream') {
\t\tself.push(null)
\t}
}
", "node_modules/stream-http/lib/response.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/lib/response.js");
    }
}
