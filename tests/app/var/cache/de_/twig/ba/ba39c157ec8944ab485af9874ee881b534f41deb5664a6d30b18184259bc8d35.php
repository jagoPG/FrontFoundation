<?php

/* node_modules/hawk/test/readme.js */
class __TwigTemplate_38c0a30473a0958d34bcc9d981c13f59a3d40e2fad5fea561f03cfef1978da85 extends Twig_Template
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
        $__internal_7f40b77bb681b042966d1ae8c8a1aaf30cd6e81557c1015c383e1af9e83cd09f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f40b77bb681b042966d1ae8c8a1aaf30cd6e81557c1015c383e1af9e83cd09f->enter($__internal_7f40b77bb681b042966d1ae8c8a1aaf30cd6e81557c1015c383e1af9e83cd09f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/test/readme.js"));

        // line 1
        echo "// Load modules

var Code = require('code');
var Hawk = require('../lib');
var Hoek = require('hoek');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('README', function () {

    describe('core', function () {

        var credentials = {
            id: 'dh37fgj492je',
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: 'sha256'
        };

        var options = {
            credentials: credentials,
            timestamp: 1353832234,
            nonce: 'j4h3g2',
            ext: 'some-app-ext-data'
        };

        it('should generate a header protocol example', function (done) {

            var header = Hawk.client.header('http://example.com:8000/resource/1?b=1&a=2', 'GET', options).field;

            expect(header).to.equal('Hawk id=\"dh37fgj492je\", ts=\"1353832234\", nonce=\"j4h3g2\", ext=\"some-app-ext-data\", mac=\"6R4rV5iE+NPoym+WwjeHzjAGXUtLNIxmo1vpMofpLAE=\"');
            done();
        });

        it('should generate a normalized string protocol example', function (done) {

            var normalized = Hawk.crypto.generateNormalizedString('header', {
                credentials: credentials,
                ts: options.timestamp,
                nonce: options.nonce,
                method: 'GET',
                resource: '/resource?a=1&b=2',
                host: 'example.com',
                port: 8000,
                ext: options.ext
            });

            expect(normalized).to.equal('hawk.1.header\\n1353832234\\nj4h3g2\\nGET\\n/resource?a=1&b=2\\nexample.com\\n8000\\n\\nsome-app-ext-data\\n');
            done();
        });

        var payloadOptions = Hoek.clone(options);
        payloadOptions.payload = 'Thank you for flying Hawk';
        payloadOptions.contentType = 'text/plain';

        it('should generate a header protocol example (with payload)', function (done) {

            var header = Hawk.client.header('http://example.com:8000/resource/1?b=1&a=2', 'POST', payloadOptions).field;

            expect(header).to.equal('Hawk id=\"dh37fgj492je\", ts=\"1353832234\", nonce=\"j4h3g2\", hash=\"Yi9LfIIFRtBEPt74PVmbTF/xVAwPn7ub15ePICfgnuY=\", ext=\"some-app-ext-data\", mac=\"aSe1DERmZuRl3pI36/9BdZmnErTw3sNzOOAUlfeKjVw=\"');
            done();
        });

        it('should generate a normalized string protocol example (with payload)', function (done) {

            var normalized = Hawk.crypto.generateNormalizedString('header', {
                credentials: credentials,
                ts: options.timestamp,
                nonce: options.nonce,
                method: 'POST',
                resource: '/resource?a=1&b=2',
                host: 'example.com',
                port: 8000,
                hash: Hawk.crypto.calculatePayloadHash(payloadOptions.payload, credentials.algorithm, payloadOptions.contentType),
                ext: options.ext
            });

            expect(normalized).to.equal('hawk.1.header\\n1353832234\\nj4h3g2\\nPOST\\n/resource?a=1&b=2\\nexample.com\\n8000\\nYi9LfIIFRtBEPt74PVmbTF/xVAwPn7ub15ePICfgnuY=\\nsome-app-ext-data\\n');
            done();
        });
    });
});

";
        
        $__internal_7f40b77bb681b042966d1ae8c8a1aaf30cd6e81557c1015c383e1af9e83cd09f->leave($__internal_7f40b77bb681b042966d1ae8c8a1aaf30cd6e81557c1015c383e1af9e83cd09f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/test/readme.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Code = require('code');
var Hawk = require('../lib');
var Hoek = require('hoek');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('README', function () {

    describe('core', function () {

        var credentials = {
            id: 'dh37fgj492je',
            key: 'werxhqb98rpaxn39848xrunpaw3489ruxnpa98w4rxn',
            algorithm: 'sha256'
        };

        var options = {
            credentials: credentials,
            timestamp: 1353832234,
            nonce: 'j4h3g2',
            ext: 'some-app-ext-data'
        };

        it('should generate a header protocol example', function (done) {

            var header = Hawk.client.header('http://example.com:8000/resource/1?b=1&a=2', 'GET', options).field;

            expect(header).to.equal('Hawk id=\"dh37fgj492je\", ts=\"1353832234\", nonce=\"j4h3g2\", ext=\"some-app-ext-data\", mac=\"6R4rV5iE+NPoym+WwjeHzjAGXUtLNIxmo1vpMofpLAE=\"');
            done();
        });

        it('should generate a normalized string protocol example', function (done) {

            var normalized = Hawk.crypto.generateNormalizedString('header', {
                credentials: credentials,
                ts: options.timestamp,
                nonce: options.nonce,
                method: 'GET',
                resource: '/resource?a=1&b=2',
                host: 'example.com',
                port: 8000,
                ext: options.ext
            });

            expect(normalized).to.equal('hawk.1.header\\n1353832234\\nj4h3g2\\nGET\\n/resource?a=1&b=2\\nexample.com\\n8000\\n\\nsome-app-ext-data\\n');
            done();
        });

        var payloadOptions = Hoek.clone(options);
        payloadOptions.payload = 'Thank you for flying Hawk';
        payloadOptions.contentType = 'text/plain';

        it('should generate a header protocol example (with payload)', function (done) {

            var header = Hawk.client.header('http://example.com:8000/resource/1?b=1&a=2', 'POST', payloadOptions).field;

            expect(header).to.equal('Hawk id=\"dh37fgj492je\", ts=\"1353832234\", nonce=\"j4h3g2\", hash=\"Yi9LfIIFRtBEPt74PVmbTF/xVAwPn7ub15ePICfgnuY=\", ext=\"some-app-ext-data\", mac=\"aSe1DERmZuRl3pI36/9BdZmnErTw3sNzOOAUlfeKjVw=\"');
            done();
        });

        it('should generate a normalized string protocol example (with payload)', function (done) {

            var normalized = Hawk.crypto.generateNormalizedString('header', {
                credentials: credentials,
                ts: options.timestamp,
                nonce: options.nonce,
                method: 'POST',
                resource: '/resource?a=1&b=2',
                host: 'example.com',
                port: 8000,
                hash: Hawk.crypto.calculatePayloadHash(payloadOptions.payload, credentials.algorithm, payloadOptions.contentType),
                ext: options.ext
            });

            expect(normalized).to.equal('hawk.1.header\\n1353832234\\nj4h3g2\\nPOST\\n/resource?a=1&b=2\\nexample.com\\n8000\\nYi9LfIIFRtBEPt74PVmbTF/xVAwPn7ub15ePICfgnuY=\\nsome-app-ext-data\\n');
            done();
        });
    });
});

", "node_modules/hawk/test/readme.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/test/readme.js");
    }
}
