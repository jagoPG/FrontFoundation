<?php

/* node_modules/hawk/lib/crypto.js */
class __TwigTemplate_2b4db0b26a6008fa9defbbcc545aa4db674b1552f110e8611357d04501ecd088 extends Twig_Template
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
        $__internal_547f601a025dfe29936b2d44d5aa2e9f5e6662ed69a52b45d839baec610ce21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_547f601a025dfe29936b2d44d5aa2e9f5e6662ed69a52b45d839baec610ce21f->enter($__internal_547f601a025dfe29936b2d44d5aa2e9f5e6662ed69a52b45d839baec610ce21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/lib/crypto.js"));

        // line 1
        echo "// Load modules

var Crypto = require('crypto');
var Url = require('url');
var Utils = require('./utils');


// Declare internals

var internals = {};


// MAC normalization format version

exports.headerVersion = '1';                        // Prevent comparison of mac values generated with different normalized string formats


// Supported HMAC algorithms

exports.algorithms = ['sha1', 'sha256'];


// Calculate the request MAC

/*
    type: 'header',                                 // 'header', 'bewit', 'response'
    credentials: {
        key: 'aoijedoaijsdlaksjdl',
        algorithm: 'sha256'                         // 'sha1', 'sha256'
    },
    options: {
        method: 'GET',
        resource: '/resource?a=1&b=2',
        host: 'example.com',
        port: 8080,
        ts: 1357718381034,
        nonce: 'd3d345f',
        hash: 'U4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=',
        ext: 'app-specific-data',
        app: 'hf48hd83qwkj',                        // Application id (Oz)
        dlg: 'd8djwekds9cj'                         // Delegated by application id (Oz), requires options.app
    }
*/

exports.calculateMac = function (type, credentials, options) {

    var normalized = exports.generateNormalizedString(type, options);

    var hmac = Crypto.createHmac(credentials.algorithm, credentials.key).update(normalized);
    var digest = hmac.digest('base64');
    return digest;
};


exports.generateNormalizedString = function (type, options) {

    var resource = options.resource || '';
    if (resource &&
        resource[0] !== '/') {

        var url = Url.parse(resource, false);
        resource = url.path;                        // Includes query
    }

    var normalized = 'hawk.' + exports.headerVersion + '.' + type + '\\n' +
                     options.ts + '\\n' +
                     options.nonce + '\\n' +
                     (options.method || '').toUpperCase() + '\\n' +
                     resource + '\\n' +
                     options.host.toLowerCase() + '\\n' +
                     options.port + '\\n' +
                     (options.hash || '') + '\\n';

    if (options.ext) {
        normalized += options.ext.replace('\\\\', '\\\\\\\\').replace('\\n', '\\\\n');
    }

    normalized += '\\n';

    if (options.app) {
        normalized += options.app + '\\n' +
                      (options.dlg || '') + '\\n';
    }

    return normalized;
};


exports.calculatePayloadHash = function (payload, algorithm, contentType) {

    var hash = exports.initializePayloadHash(algorithm, contentType);
    hash.update(payload || '');
    return exports.finalizePayloadHash(hash);
};


exports.initializePayloadHash = function (algorithm, contentType) {

    var hash = Crypto.createHash(algorithm);
    hash.update('hawk.' + exports.headerVersion + '.payload\\n');
    hash.update(Utils.parseContentType(contentType) + '\\n');
    return hash;
};


exports.finalizePayloadHash = function (hash) {

    hash.update('\\n');
    return hash.digest('base64');
};


exports.calculateTsMac = function (ts, credentials) {

    var hmac = Crypto.createHmac(credentials.algorithm, credentials.key);
    hmac.update('hawk.' + exports.headerVersion + '.ts\\n' + ts + '\\n');
    return hmac.digest('base64');
};


exports.timestampMessage = function (credentials, localtimeOffsetMsec) {

    var now = Utils.nowSecs(localtimeOffsetMsec);
    var tsm = exports.calculateTsMac(now, credentials);
    return { ts: now, tsm: tsm };
};
";
        
        $__internal_547f601a025dfe29936b2d44d5aa2e9f5e6662ed69a52b45d839baec610ce21f->leave($__internal_547f601a025dfe29936b2d44d5aa2e9f5e6662ed69a52b45d839baec610ce21f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/lib/crypto.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Crypto = require('crypto');
var Url = require('url');
var Utils = require('./utils');


// Declare internals

var internals = {};


// MAC normalization format version

exports.headerVersion = '1';                        // Prevent comparison of mac values generated with different normalized string formats


// Supported HMAC algorithms

exports.algorithms = ['sha1', 'sha256'];


// Calculate the request MAC

/*
    type: 'header',                                 // 'header', 'bewit', 'response'
    credentials: {
        key: 'aoijedoaijsdlaksjdl',
        algorithm: 'sha256'                         // 'sha1', 'sha256'
    },
    options: {
        method: 'GET',
        resource: '/resource?a=1&b=2',
        host: 'example.com',
        port: 8080,
        ts: 1357718381034,
        nonce: 'd3d345f',
        hash: 'U4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=',
        ext: 'app-specific-data',
        app: 'hf48hd83qwkj',                        // Application id (Oz)
        dlg: 'd8djwekds9cj'                         // Delegated by application id (Oz), requires options.app
    }
*/

exports.calculateMac = function (type, credentials, options) {

    var normalized = exports.generateNormalizedString(type, options);

    var hmac = Crypto.createHmac(credentials.algorithm, credentials.key).update(normalized);
    var digest = hmac.digest('base64');
    return digest;
};


exports.generateNormalizedString = function (type, options) {

    var resource = options.resource || '';
    if (resource &&
        resource[0] !== '/') {

        var url = Url.parse(resource, false);
        resource = url.path;                        // Includes query
    }

    var normalized = 'hawk.' + exports.headerVersion + '.' + type + '\\n' +
                     options.ts + '\\n' +
                     options.nonce + '\\n' +
                     (options.method || '').toUpperCase() + '\\n' +
                     resource + '\\n' +
                     options.host.toLowerCase() + '\\n' +
                     options.port + '\\n' +
                     (options.hash || '') + '\\n';

    if (options.ext) {
        normalized += options.ext.replace('\\\\', '\\\\\\\\').replace('\\n', '\\\\n');
    }

    normalized += '\\n';

    if (options.app) {
        normalized += options.app + '\\n' +
                      (options.dlg || '') + '\\n';
    }

    return normalized;
};


exports.calculatePayloadHash = function (payload, algorithm, contentType) {

    var hash = exports.initializePayloadHash(algorithm, contentType);
    hash.update(payload || '');
    return exports.finalizePayloadHash(hash);
};


exports.initializePayloadHash = function (algorithm, contentType) {

    var hash = Crypto.createHash(algorithm);
    hash.update('hawk.' + exports.headerVersion + '.payload\\n');
    hash.update(Utils.parseContentType(contentType) + '\\n');
    return hash;
};


exports.finalizePayloadHash = function (hash) {

    hash.update('\\n');
    return hash.digest('base64');
};


exports.calculateTsMac = function (ts, credentials) {

    var hmac = Crypto.createHmac(credentials.algorithm, credentials.key);
    hmac.update('hawk.' + exports.headerVersion + '.ts\\n' + ts + '\\n');
    return hmac.digest('base64');
};


exports.timestampMessage = function (credentials, localtimeOffsetMsec) {

    var now = Utils.nowSecs(localtimeOffsetMsec);
    var tsm = exports.calculateTsMac(now, credentials);
    return { ts: now, tsm: tsm };
};
", "node_modules/hawk/lib/crypto.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/lib/crypto.js");
    }
}
