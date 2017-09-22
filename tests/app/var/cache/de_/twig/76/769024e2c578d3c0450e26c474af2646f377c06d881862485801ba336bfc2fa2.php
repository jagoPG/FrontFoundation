<?php

/* node_modules/hawk/example/usage.js */
class __TwigTemplate_187f507b8ea856b658258a731643e4f5f5b2edc6ed3a4d463b6e0aeac5aa19fa extends Twig_Template
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
        $__internal_e1431ae131470a7ff73e5e21a057d4d845884b27d69395b82cb2d52ff5419218 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1431ae131470a7ff73e5e21a057d4d845884b27d69395b82cb2d52ff5419218->enter($__internal_e1431ae131470a7ff73e5e21a057d4d845884b27d69395b82cb2d52ff5419218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/example/usage.js"));

        // line 1
        echo "// Load modules

var Http = require('http');
var Request = require('request');
var Hawk = require('../lib');


// Declare internals

var internals = {
    credentials: {
        dh37fgj492je: {
            id: 'dh37fgj492je',                                             // Required by Hawk.client.header
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: 'sha256',
            user: 'Steve'
        }
    }
};


// Credentials lookup function

var credentialsFunc = function (id, callback) {

    return callback(null, internals.credentials[id]);
};


// Create HTTP server

var handler = function (req, res) {

    Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials, artifacts) {

        var payload = (!err ? 'Hello ' + credentials.user + ' ' + artifacts.ext : 'Shoosh!');
        var headers = {
            'Content-Type': 'text/plain',
            'Server-Authorization': Hawk.server.header(credentials, artifacts, { payload: payload, contentType: 'text/plain' })
        };

        res.writeHead(!err ? 200 : 401, headers);
        res.end(payload);
    });
};

Http.createServer(handler).listen(8000, '127.0.0.1');


// Send unauthenticated request

Request('http://127.0.0.1:8000/resource/1?b=1&a=2', function (error, response, body) {

    console.log(response.statusCode + ': ' + body);
});


// Send authenticated request

credentialsFunc('dh37fgj492je', function (err, credentials) {

    var header = Hawk.client.header('http://127.0.0.1:8000/resource/1?b=1&a=2', 'GET', { credentials: credentials, ext: 'and welcome!' });
    var options = {
        uri: 'http://127.0.0.1:8000/resource/1?b=1&a=2',
        method: 'GET',
        headers: {
            authorization: header.field
        }
    };

    Request(options, function (error, response, body) {

        var isValid = Hawk.client.authenticate(response, credentials, header.artifacts, { payload: body });
        console.log(response.statusCode + ': ' + body + (isValid ? ' (valid)' : ' (invalid)'));
        process.exit(0);
    });
});

";
        
        $__internal_e1431ae131470a7ff73e5e21a057d4d845884b27d69395b82cb2d52ff5419218->leave($__internal_e1431ae131470a7ff73e5e21a057d4d845884b27d69395b82cb2d52ff5419218_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/example/usage.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Http = require('http');
var Request = require('request');
var Hawk = require('../lib');


// Declare internals

var internals = {
    credentials: {
        dh37fgj492je: {
            id: 'dh37fgj492je',                                             // Required by Hawk.client.header
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: 'sha256',
            user: 'Steve'
        }
    }
};


// Credentials lookup function

var credentialsFunc = function (id, callback) {

    return callback(null, internals.credentials[id]);
};


// Create HTTP server

var handler = function (req, res) {

    Hawk.server.authenticate(req, credentialsFunc, {}, function (err, credentials, artifacts) {

        var payload = (!err ? 'Hello ' + credentials.user + ' ' + artifacts.ext : 'Shoosh!');
        var headers = {
            'Content-Type': 'text/plain',
            'Server-Authorization': Hawk.server.header(credentials, artifacts, { payload: payload, contentType: 'text/plain' })
        };

        res.writeHead(!err ? 200 : 401, headers);
        res.end(payload);
    });
};

Http.createServer(handler).listen(8000, '127.0.0.1');


// Send unauthenticated request

Request('http://127.0.0.1:8000/resource/1?b=1&a=2', function (error, response, body) {

    console.log(response.statusCode + ': ' + body);
});


// Send authenticated request

credentialsFunc('dh37fgj492je', function (err, credentials) {

    var header = Hawk.client.header('http://127.0.0.1:8000/resource/1?b=1&a=2', 'GET', { credentials: credentials, ext: 'and welcome!' });
    var options = {
        uri: 'http://127.0.0.1:8000/resource/1?b=1&a=2',
        method: 'GET',
        headers: {
            authorization: header.field
        }
    };

    Request(options, function (error, response, body) {

        var isValid = Hawk.client.authenticate(response, credentials, header.artifacts, { payload: body });
        console.log(response.statusCode + ': ' + body + (isValid ? ' (valid)' : ' (invalid)'));
        process.exit(0);
    });
});

", "node_modules/hawk/example/usage.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/example/usage.js");
    }
}
