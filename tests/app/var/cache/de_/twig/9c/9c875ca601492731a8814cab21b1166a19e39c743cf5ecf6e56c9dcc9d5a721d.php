<?php

/* node_modules/stream-http/index.js */
class __TwigTemplate_68d949f832f7684eef91a3c671d50071a0c58a51582a845cb19407b17edcf7c3 extends Twig_Template
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
        $__internal_5a56dee2948ad7569335fe04eab40e78898f7f6ebc6490a31f0f7d1fe4774b0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a56dee2948ad7569335fe04eab40e78898f7f6ebc6490a31f0f7d1fe4774b0b->enter($__internal_5a56dee2948ad7569335fe04eab40e78898f7f6ebc6490a31f0f7d1fe4774b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/stream-http/index.js"));

        // line 1
        echo "var ClientRequest = require('./lib/request')
var extend = require('xtend')
var statusCodes = require('builtin-status-codes')
var url = require('url')

var http = exports

http.request = function (opts, cb) {
\tif (typeof opts === 'string')
\t\topts = url.parse(opts)
\telse
\t\topts = extend(opts)

\t// Normally, the page is loaded from http or https, so not specifying a protocol
\t// will result in a (valid) protocol-relative url. However, this won't work if
\t// the protocol is something else, like 'file:'
\tvar defaultProtocol = global.location.protocol.search(/^https?:\$/) === -1 ? 'http:' : ''

\tvar protocol = opts.protocol || defaultProtocol
\tvar host = opts.hostname || opts.host
\tvar port = opts.port
\tvar path = opts.path || '/'

\t// Necessary for IPv6 addresses
\tif (host && host.indexOf(':') !== -1)
\t\thost = '[' + host + ']'

\t// This may be a relative url. The browser should always be able to interpret it correctly.
\topts.url = (host ? (protocol + '//' + host) : '') + (port ? ':' + port : '') + path
\topts.method = (opts.method || 'GET').toUpperCase()
\topts.headers = opts.headers || {}

\t// Also valid opts.auth, opts.mode

\tvar req = new ClientRequest(opts)
\tif (cb)
\t\treq.on('response', cb)
\treturn req
}

http.get = function get (opts, cb) {
\tvar req = http.request(opts, cb)
\treq.end()
\treturn req
}

http.Agent = function () {}
http.Agent.defaultMaxSockets = 4

http.STATUS_CODES = statusCodes

http.METHODS = [
\t'CHECKOUT',
\t'CONNECT',
\t'COPY',
\t'DELETE',
\t'GET',
\t'HEAD',
\t'LOCK',
\t'M-SEARCH',
\t'MERGE',
\t'MKACTIVITY',
\t'MKCOL',
\t'MOVE',
\t'NOTIFY',
\t'OPTIONS',
\t'PATCH',
\t'POST',
\t'PROPFIND',
\t'PROPPATCH',
\t'PURGE',
\t'PUT',
\t'REPORT',
\t'SEARCH',
\t'SUBSCRIBE',
\t'TRACE',
\t'UNLOCK',
\t'UNSUBSCRIBE'
]";
        
        $__internal_5a56dee2948ad7569335fe04eab40e78898f7f6ebc6490a31f0f7d1fe4774b0b->leave($__internal_5a56dee2948ad7569335fe04eab40e78898f7f6ebc6490a31f0f7d1fe4774b0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/stream-http/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var ClientRequest = require('./lib/request')
var extend = require('xtend')
var statusCodes = require('builtin-status-codes')
var url = require('url')

var http = exports

http.request = function (opts, cb) {
\tif (typeof opts === 'string')
\t\topts = url.parse(opts)
\telse
\t\topts = extend(opts)

\t// Normally, the page is loaded from http or https, so not specifying a protocol
\t// will result in a (valid) protocol-relative url. However, this won't work if
\t// the protocol is something else, like 'file:'
\tvar defaultProtocol = global.location.protocol.search(/^https?:\$/) === -1 ? 'http:' : ''

\tvar protocol = opts.protocol || defaultProtocol
\tvar host = opts.hostname || opts.host
\tvar port = opts.port
\tvar path = opts.path || '/'

\t// Necessary for IPv6 addresses
\tif (host && host.indexOf(':') !== -1)
\t\thost = '[' + host + ']'

\t// This may be a relative url. The browser should always be able to interpret it correctly.
\topts.url = (host ? (protocol + '//' + host) : '') + (port ? ':' + port : '') + path
\topts.method = (opts.method || 'GET').toUpperCase()
\topts.headers = opts.headers || {}

\t// Also valid opts.auth, opts.mode

\tvar req = new ClientRequest(opts)
\tif (cb)
\t\treq.on('response', cb)
\treturn req
}

http.get = function get (opts, cb) {
\tvar req = http.request(opts, cb)
\treq.end()
\treturn req
}

http.Agent = function () {}
http.Agent.defaultMaxSockets = 4

http.STATUS_CODES = statusCodes

http.METHODS = [
\t'CHECKOUT',
\t'CONNECT',
\t'COPY',
\t'DELETE',
\t'GET',
\t'HEAD',
\t'LOCK',
\t'M-SEARCH',
\t'MERGE',
\t'MKACTIVITY',
\t'MKCOL',
\t'MOVE',
\t'NOTIFY',
\t'OPTIONS',
\t'PATCH',
\t'POST',
\t'PROPFIND',
\t'PROPPATCH',
\t'PURGE',
\t'PUT',
\t'REPORT',
\t'SEARCH',
\t'SUBSCRIBE',
\t'TRACE',
\t'UNLOCK',
\t'UNSUBSCRIBE'
]", "node_modules/stream-http/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/stream-http/index.js");
    }
}
