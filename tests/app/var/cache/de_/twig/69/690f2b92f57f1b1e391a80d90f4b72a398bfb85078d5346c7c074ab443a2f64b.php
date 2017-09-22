<?php

/* node_modules/fsevents/node_modules/hawk/test/crypto.js */
class __TwigTemplate_cc5e46b19950510f340cb05a962a18378a2d5161a0d24a9cc1cfb13d3822c432 extends Twig_Template
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
        $__internal_e3fb5a07928cfa7f8d03accd66dc12ca74c6ce9f6e17cf588b50357b8836008b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fb5a07928cfa7f8d03accd66dc12ca74c6ce9f6e17cf588b50357b8836008b->enter($__internal_e3fb5a07928cfa7f8d03accd66dc12ca74c6ce9f6e17cf588b50357b8836008b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/hawk/test/crypto.js"));

        // line 1
        echo "// Load modules

var Code = require('code');
var Hawk = require('../lib');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Crypto', function () {

    describe('generateNormalizedString()', function () {

        it('should return a valid normalized string', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\n\\n\\n');

            done();
        });

        it('should return a valid normalized string (ext)', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080,
                ext: 'this is some app data'
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\n\\nthis is some app data\\n');

            done();
        });

        it('should return a valid normalized string (payload + ext)', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080,
                hash: 'U4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=',
                ext: 'this is some app data'
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\nU4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=\\nthis is some app data\\n');

            done();
        });
    });
});
";
        
        $__internal_e3fb5a07928cfa7f8d03accd66dc12ca74c6ce9f6e17cf588b50357b8836008b->leave($__internal_e3fb5a07928cfa7f8d03accd66dc12ca74c6ce9f6e17cf588b50357b8836008b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/hawk/test/crypto.js";
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


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.experiment;
var it = lab.test;
var expect = Code.expect;


describe('Crypto', function () {

    describe('generateNormalizedString()', function () {

        it('should return a valid normalized string', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\n\\n\\n');

            done();
        });

        it('should return a valid normalized string (ext)', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080,
                ext: 'this is some app data'
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\n\\nthis is some app data\\n');

            done();
        });

        it('should return a valid normalized string (payload + ext)', function (done) {

            expect(Hawk.crypto.generateNormalizedString('header', {
                ts: 1357747017,
                nonce: 'k3k4j5',
                method: 'GET',
                resource: '/resource/something',
                host: 'example.com',
                port: 8080,
                hash: 'U4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=',
                ext: 'this is some app data'
            })).to.equal('hawk.1.header\\n1357747017\\nk3k4j5\\nGET\\n/resource/something\\nexample.com\\n8080\\nU4MKKSmiVxk37JCCrAVIjV/OhB3y+NdwoCr6RShbVkE=\\nthis is some app data\\n');

            done();
        });
    });
});
", "node_modules/fsevents/node_modules/hawk/test/crypto.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/hawk/test/crypto.js");
    }
}
