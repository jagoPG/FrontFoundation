<?php

/* node_modules/fsevents/node_modules/hawk/test/utils.js */
class __TwigTemplate_9574c9ceff3d13cfdfdeac00c567f3c279861f6d9ac3a6316976771f05851de2 extends Twig_Template
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
        $__internal_11575447174a2b47c8368664da03f1ab17b11402c70989d59dcec852095b6e5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11575447174a2b47c8368664da03f1ab17b11402c70989d59dcec852095b6e5c->enter($__internal_11575447174a2b47c8368664da03f1ab17b11402c70989d59dcec852095b6e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/hawk/test/utils.js"));

        // line 1
        echo "// Load modules

var Code = require('code');
var Hawk = require('../lib');
var Lab = require('lab');
var Package = require('../package.json');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Utils', function () {

    describe('parseHost()', function () {

        it('returns port 80 for non tls node request', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: 'example.com',
                    'content-type': 'text/plain;x=y'
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(80);
            done();
        });

        it('returns port 443 for non tls node request', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: 'example.com',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(443);
            done();
        });

        it('returns port 443 for non tls node request (IPv6)', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: '[123:123:123]',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(443);
            done();
        });

        it('parses IPv6 headers', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: '[123:123:123]:8000',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            var host = Hawk.utils.parseHost(req, 'Host');
            expect(host.port).to.equal('8000');
            expect(host.name).to.equal('[123:123:123]');
            done();
        });

        it('errors on header too long', function (done) {

            var long = '';
            for (var i = 0; i < 5000; ++i) {
                long += 'x';
            }

            expect(Hawk.utils.parseHost({ headers: { host: long } })).to.be.null();
            done();
        });
    });

    describe('parseAuthorizationHeader()', function () {

        it('errors on header too long', function (done) {

            var long = 'Scheme a=\"';
            for (var i = 0; i < 5000; ++i) {
                long += 'x';
            }
            long += '\"';

            var err = Hawk.utils.parseAuthorizationHeader(long, ['a']);
            expect(err).to.be.instanceof(Error);
            expect(err.message).to.equal('Header length too long');
            done();
        });
    });

    describe('version()', function () {

        it('returns the correct package version number', function (done) {

            expect(Hawk.utils.version()).to.equal(Package.version);
            done();
        });
    });

    describe('unauthorized()', function () {

        it('returns a hawk 401', function (done) {

            expect(Hawk.utils.unauthorized('kaboom').output.headers['WWW-Authenticate']).to.equal('Hawk error=\"kaboom\"');
            done();
        });

        it('supports attributes', function (done) {

            expect(Hawk.utils.unauthorized('kaboom', { a: 'b' }).output.headers['WWW-Authenticate']).to.equal('Hawk a=\"b\", error=\"kaboom\"');
            done();
        });
    });
});
";
        
        $__internal_11575447174a2b47c8368664da03f1ab17b11402c70989d59dcec852095b6e5c->leave($__internal_11575447174a2b47c8368664da03f1ab17b11402c70989d59dcec852095b6e5c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/hawk/test/utils.js";
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
var Lab = require('lab');
var Package = require('../package.json');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Utils', function () {

    describe('parseHost()', function () {

        it('returns port 80 for non tls node request', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: 'example.com',
                    'content-type': 'text/plain;x=y'
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(80);
            done();
        });

        it('returns port 443 for non tls node request', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: 'example.com',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(443);
            done();
        });

        it('returns port 443 for non tls node request (IPv6)', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: '[123:123:123]',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            expect(Hawk.utils.parseHost(req, 'Host').port).to.equal(443);
            done();
        });

        it('parses IPv6 headers', function (done) {

            var req = {
                method: 'POST',
                url: '/resource/4?filter=a',
                headers: {
                    host: '[123:123:123]:8000',
                    'content-type': 'text/plain;x=y'
                },
                connection: {
                    encrypted: true
                }
            };

            var host = Hawk.utils.parseHost(req, 'Host');
            expect(host.port).to.equal('8000');
            expect(host.name).to.equal('[123:123:123]');
            done();
        });

        it('errors on header too long', function (done) {

            var long = '';
            for (var i = 0; i < 5000; ++i) {
                long += 'x';
            }

            expect(Hawk.utils.parseHost({ headers: { host: long } })).to.be.null();
            done();
        });
    });

    describe('parseAuthorizationHeader()', function () {

        it('errors on header too long', function (done) {

            var long = 'Scheme a=\"';
            for (var i = 0; i < 5000; ++i) {
                long += 'x';
            }
            long += '\"';

            var err = Hawk.utils.parseAuthorizationHeader(long, ['a']);
            expect(err).to.be.instanceof(Error);
            expect(err.message).to.equal('Header length too long');
            done();
        });
    });

    describe('version()', function () {

        it('returns the correct package version number', function (done) {

            expect(Hawk.utils.version()).to.equal(Package.version);
            done();
        });
    });

    describe('unauthorized()', function () {

        it('returns a hawk 401', function (done) {

            expect(Hawk.utils.unauthorized('kaboom').output.headers['WWW-Authenticate']).to.equal('Hawk error=\"kaboom\"');
            done();
        });

        it('supports attributes', function (done) {

            expect(Hawk.utils.unauthorized('kaboom', { a: 'b' }).output.headers['WWW-Authenticate']).to.equal('Hawk a=\"b\", error=\"kaboom\"');
            done();
        });
    });
});
", "node_modules/fsevents/node_modules/hawk/test/utils.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/hawk/test/utils.js");
    }
}
