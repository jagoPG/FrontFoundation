<?php

/* node_modules/hawk/test/crypto.js */
class __TwigTemplate_562847a0c73b7bbc917928a28af46273f936ee769a1e0d28ad9827b576dd604c extends Twig_Template
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
        $__internal_a6828cc0bdad6f86edd8045b074e764328d57997a3fe6dbaf630fe6b5d299bc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6828cc0bdad6f86edd8045b074e764328d57997a3fe6dbaf630fe6b5d299bc5->enter($__internal_a6828cc0bdad6f86edd8045b074e764328d57997a3fe6dbaf630fe6b5d299bc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hawk/test/crypto.js"));

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
        
        $__internal_a6828cc0bdad6f86edd8045b074e764328d57997a3fe6dbaf630fe6b5d299bc5->leave($__internal_a6828cc0bdad6f86edd8045b074e764328d57997a3fe6dbaf630fe6b5d299bc5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hawk/test/crypto.js";
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
", "node_modules/hawk/test/crypto.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hawk/test/crypto.js");
    }
}
