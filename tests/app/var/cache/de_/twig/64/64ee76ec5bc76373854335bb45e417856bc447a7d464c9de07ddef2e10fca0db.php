<?php

/* node_modules/hawk/lib/utils.js */
class __TwigTemplate_88b08a878a5f36191caaec46b2e3a8f499c440563cbf9725fea3e80b297d9237 extends Twig_Template
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
        $__internal_6322af4fb9fea06811feac3e1d829622bfc42a93793bd822fc31730449f3dfaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6322af4fb9fea06811feac3e1d829622bfc42a93793bd822fc31730449f3dfaa->enter($__internal_6322af4fb9fea06811feac3e1d829622bfc42a93793bd822fc31730449f3dfaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/lib/utils.js"));

        // line 1
        echo "// Load modules

var Sntp = require('sntp');
var Boom = require('boom');


// Declare internals

var internals = {};


exports.version = function () {

    return require('../package.json').version;
};


exports.limits = {
    maxMatchLength: 4096            // Limit the length of uris and headers to avoid a DoS attack on string matching
};


// Extract host and port from request

//                                            \$1                            \$2
internals.hostHeaderRegex = /^(?:(?:\\r\\n)?\\s)*((?:[^:]+)|(?:\\[[^\\]]+\\]))(?::(\\d+))?(?:(?:\\r\\n)?\\s)*\$/;              // (IPv4, hostname)|(IPv6)


exports.parseHost = function (req, hostHeaderName) {

    hostHeaderName = (hostHeaderName ? hostHeaderName.toLowerCase() : 'host');
    var hostHeader = req.headers[hostHeaderName];
    if (!hostHeader) {
        return null;
    }

    if (hostHeader.length > exports.limits.maxMatchLength) {
        return null;
    }

    var hostParts = hostHeader.match(internals.hostHeaderRegex);
    if (!hostParts) {
        return null;
    }

    return {
        name: hostParts[1],
        port: (hostParts[2] ? hostParts[2] : (req.connection && req.connection.encrypted ? 443 : 80))
    };
};


// Parse Content-Type header content

exports.parseContentType = function (header) {

    if (!header) {
        return '';
    }

    return header.split(';')[0].trim().toLowerCase();
};


// Convert node's  to request configuration object

exports.parseRequest = function (req, options) {

    if (!req.headers) {
        return req;
    }

    // Obtain host and port information

    var host;
    if (!options.host ||
        !options.port) {

        host = exports.parseHost(req, options.hostHeaderName);
        if (!host) {
            return new Error('Invalid Host header');
        }
    }

    var request = {
        method: req.method,
        url: req.url,
        host: options.host || host.name,
        port: options.port || host.port,
        authorization: req.headers.authorization,
        contentType: req.headers['content-type'] || ''
    };

    return request;
};


exports.now = function (localtimeOffsetMsec) {

    return Sntp.now() + (localtimeOffsetMsec || 0);
};


exports.nowSecs = function (localtimeOffsetMsec) {

    return Math.floor(exports.now(localtimeOffsetMsec) / 1000);
};


internals.authHeaderRegex = /^(\\w+)(?:\\s+(.*))?\$/;                                      // Header: scheme[ something]
internals.attributeRegex = /^[ \\w\\!#\\\$%&'\\(\\)\\*\\+,\\-\\.\\/\\:;<\\=>\\?@\\[\\]\\^`\\{\\|\\}~]+\$/;   // !#\$%&'()*+,-./:;<=>?@[]^_`{|}~ and space, a-z, A-Z, 0-9


// Parse Hawk HTTP Authorization header

exports.parseAuthorizationHeader = function (header, keys) {

    keys = keys || ['id', 'ts', 'nonce', 'hash', 'ext', 'mac', 'app', 'dlg'];

    if (!header) {
        return Boom.unauthorized(null, 'Hawk');
    }

    if (header.length > exports.limits.maxMatchLength) {
        return Boom.badRequest('Header length too long');
    }

    var headerParts = header.match(internals.authHeaderRegex);
    if (!headerParts) {
        return Boom.badRequest('Invalid header syntax');
    }

    var scheme = headerParts[1];
    if (scheme.toLowerCase() !== 'hawk') {
        return Boom.unauthorized(null, 'Hawk');
    }

    var attributesString = headerParts[2];
    if (!attributesString) {
        return Boom.badRequest('Invalid header syntax');
    }

    var attributes = {};
    var errorMessage = '';
    var verify = attributesString.replace(/(\\w+)=\"([^\"\\\\]*)\"\\s*(?:,\\s*|\$)/g, function (\$0, \$1, \$2) {

        // Check valid attribute names

        if (keys.indexOf(\$1) === -1) {
            errorMessage = 'Unknown attribute: ' + \$1;
            return;
        }

        // Allowed attribute value characters

        if (\$2.match(internals.attributeRegex) === null) {
            errorMessage = 'Bad attribute value: ' + \$1;
            return;
        }

        // Check for duplicates

        if (attributes.hasOwnProperty(\$1)) {
            errorMessage = 'Duplicate attribute: ' + \$1;
            return;
        }

        attributes[\$1] = \$2;
        return '';
    });

    if (verify !== '') {
        return Boom.badRequest(errorMessage || 'Bad header format');
    }

    return attributes;
};


exports.unauthorized = function (message, attributes) {

    return Boom.unauthorized(message, 'Hawk', attributes);
};

";
        
        $__internal_6322af4fb9fea06811feac3e1d829622bfc42a93793bd822fc31730449f3dfaa->leave($__internal_6322af4fb9fea06811feac3e1d829622bfc42a93793bd822fc31730449f3dfaa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/lib/utils.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Sntp = require('sntp');
var Boom = require('boom');


// Declare internals

var internals = {};


exports.version = function () {

    return require('../package.json').version;
};


exports.limits = {
    maxMatchLength: 4096            // Limit the length of uris and headers to avoid a DoS attack on string matching
};


// Extract host and port from request

//                                            \$1                            \$2
internals.hostHeaderRegex = /^(?:(?:\\r\\n)?\\s)*((?:[^:]+)|(?:\\[[^\\]]+\\]))(?::(\\d+))?(?:(?:\\r\\n)?\\s)*\$/;              // (IPv4, hostname)|(IPv6)


exports.parseHost = function (req, hostHeaderName) {

    hostHeaderName = (hostHeaderName ? hostHeaderName.toLowerCase() : 'host');
    var hostHeader = req.headers[hostHeaderName];
    if (!hostHeader) {
        return null;
    }

    if (hostHeader.length > exports.limits.maxMatchLength) {
        return null;
    }

    var hostParts = hostHeader.match(internals.hostHeaderRegex);
    if (!hostParts) {
        return null;
    }

    return {
        name: hostParts[1],
        port: (hostParts[2] ? hostParts[2] : (req.connection && req.connection.encrypted ? 443 : 80))
    };
};


// Parse Content-Type header content

exports.parseContentType = function (header) {

    if (!header) {
        return '';
    }

    return header.split(';')[0].trim().toLowerCase();
};


// Convert node's  to request configuration object

exports.parseRequest = function (req, options) {

    if (!req.headers) {
        return req;
    }

    // Obtain host and port information

    var host;
    if (!options.host ||
        !options.port) {

        host = exports.parseHost(req, options.hostHeaderName);
        if (!host) {
            return new Error('Invalid Host header');
        }
    }

    var request = {
        method: req.method,
        url: req.url,
        host: options.host || host.name,
        port: options.port || host.port,
        authorization: req.headers.authorization,
        contentType: req.headers['content-type'] || ''
    };

    return request;
};


exports.now = function (localtimeOffsetMsec) {

    return Sntp.now() + (localtimeOffsetMsec || 0);
};


exports.nowSecs = function (localtimeOffsetMsec) {

    return Math.floor(exports.now(localtimeOffsetMsec) / 1000);
};


internals.authHeaderRegex = /^(\\w+)(?:\\s+(.*))?\$/;                                      // Header: scheme[ something]
internals.attributeRegex = /^[ \\w\\!#\\\$%&'\\(\\)\\*\\+,\\-\\.\\/\\:;<\\=>\\?@\\[\\]\\^`\\{\\|\\}~]+\$/;   // !#\$%&'()*+,-./:;<=>?@[]^_`{|}~ and space, a-z, A-Z, 0-9


// Parse Hawk HTTP Authorization header

exports.parseAuthorizationHeader = function (header, keys) {

    keys = keys || ['id', 'ts', 'nonce', 'hash', 'ext', 'mac', 'app', 'dlg'];

    if (!header) {
        return Boom.unauthorized(null, 'Hawk');
    }

    if (header.length > exports.limits.maxMatchLength) {
        return Boom.badRequest('Header length too long');
    }

    var headerParts = header.match(internals.authHeaderRegex);
    if (!headerParts) {
        return Boom.badRequest('Invalid header syntax');
    }

    var scheme = headerParts[1];
    if (scheme.toLowerCase() !== 'hawk') {
        return Boom.unauthorized(null, 'Hawk');
    }

    var attributesString = headerParts[2];
    if (!attributesString) {
        return Boom.badRequest('Invalid header syntax');
    }

    var attributes = {};
    var errorMessage = '';
    var verify = attributesString.replace(/(\\w+)=\"([^\"\\\\]*)\"\\s*(?:,\\s*|\$)/g, function (\$0, \$1, \$2) {

        // Check valid attribute names

        if (keys.indexOf(\$1) === -1) {
            errorMessage = 'Unknown attribute: ' + \$1;
            return;
        }

        // Allowed attribute value characters

        if (\$2.match(internals.attributeRegex) === null) {
            errorMessage = 'Bad attribute value: ' + \$1;
            return;
        }

        // Check for duplicates

        if (attributes.hasOwnProperty(\$1)) {
            errorMessage = 'Duplicate attribute: ' + \$1;
            return;
        }

        attributes[\$1] = \$2;
        return '';
    });

    if (verify !== '') {
        return Boom.badRequest(errorMessage || 'Bad header format');
    }

    return attributes;
};


exports.unauthorized = function (message, attributes) {

    return Boom.unauthorized(message, 'Hawk', attributes);
};

", "node_modules/hawk/lib/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/lib/utils.js");
    }
}
