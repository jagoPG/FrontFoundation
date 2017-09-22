<?php

/* node_modules/cryptiles/test/index.js */
class __TwigTemplate_731bbe3162e1b9cb873733fc9b1888725b96fa518dd7e5f4c5b460419a9401d4 extends Twig_Template
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
        $__internal_9f6065086f9f909b191d41e151a1be8e93c76eec03762f7eaf665368ffa45635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6065086f9f909b191d41e151a1be8e93c76eec03762f7eaf665368ffa45635->enter($__internal_9f6065086f9f909b191d41e151a1be8e93c76eec03762f7eaf665368ffa45635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cryptiles/test/index.js"));

        // line 1
        echo "// Load modules

var Code = require('code');
var Cryptiles = require('..');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.describe;
var it = lab.it;
var expect = Code.expect;


describe('randomString()', function () {

    it('should generate the right length string', function (done) {

        for (var i = 1; i <= 1000; ++i) {
            expect(Cryptiles.randomString(i).length).to.equal(i);
        }

        done();
    });

    it('returns an error on invalid bits size', function (done) {

        expect(Cryptiles.randomString(99999999999999999999).message).to.match(/Failed generating random bits/);
        done();
    });
});

describe('randomBits()', function () {

    it('returns an error on invalid input', function (done) {

        expect(Cryptiles.randomBits(0).message).to.equal('Invalid random bits count');
        done();
    });
});

describe('fixedTimeComparison()', function () {

    var a = Cryptiles.randomString(50000);
    var b = Cryptiles.randomString(150000);

    it('should take the same amount of time comparing different string sizes', function (done) {

        var now = Date.now();
        Cryptiles.fixedTimeComparison(b, a);
        var t1 = Date.now() - now;

        now = Date.now();
        Cryptiles.fixedTimeComparison(b, b);
        var t2 = Date.now() - now;

        expect(t2 - t1).to.be.within(-20, 20);
        done();
    });

    it('should return true for equal strings', function (done) {

        expect(Cryptiles.fixedTimeComparison(a, a)).to.equal(true);
        done();
    });

    it('should return false for different strings (size, a < b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a, a + 'x')).to.equal(false);
        done();
    });

    it('should return false for different strings (size, a > b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a + 'x', a)).to.equal(false);
        done();
    });

    it('should return false for different strings (size, a = b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a + 'x', a + 'y')).to.equal(false);
        done();
    });

    it('should return false when not a string', function (done) {

        expect(Cryptiles.fixedTimeComparison('x', null)).to.equal(false);
        done();
    });

    it('should return false when not a string (left)', function (done) {

        expect(Cryptiles.fixedTimeComparison(null, 'x')).to.equal(false);
        done();
    });
});
";
        
        $__internal_9f6065086f9f909b191d41e151a1be8e93c76eec03762f7eaf665368ffa45635->leave($__internal_9f6065086f9f909b191d41e151a1be8e93c76eec03762f7eaf665368ffa45635_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cryptiles/test/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Load modules

var Code = require('code');
var Cryptiles = require('..');
var Lab = require('lab');


// Declare internals

var internals = {};


// Test shortcuts

var lab = exports.lab = Lab.script();
var describe = lab.describe;
var it = lab.it;
var expect = Code.expect;


describe('randomString()', function () {

    it('should generate the right length string', function (done) {

        for (var i = 1; i <= 1000; ++i) {
            expect(Cryptiles.randomString(i).length).to.equal(i);
        }

        done();
    });

    it('returns an error on invalid bits size', function (done) {

        expect(Cryptiles.randomString(99999999999999999999).message).to.match(/Failed generating random bits/);
        done();
    });
});

describe('randomBits()', function () {

    it('returns an error on invalid input', function (done) {

        expect(Cryptiles.randomBits(0).message).to.equal('Invalid random bits count');
        done();
    });
});

describe('fixedTimeComparison()', function () {

    var a = Cryptiles.randomString(50000);
    var b = Cryptiles.randomString(150000);

    it('should take the same amount of time comparing different string sizes', function (done) {

        var now = Date.now();
        Cryptiles.fixedTimeComparison(b, a);
        var t1 = Date.now() - now;

        now = Date.now();
        Cryptiles.fixedTimeComparison(b, b);
        var t2 = Date.now() - now;

        expect(t2 - t1).to.be.within(-20, 20);
        done();
    });

    it('should return true for equal strings', function (done) {

        expect(Cryptiles.fixedTimeComparison(a, a)).to.equal(true);
        done();
    });

    it('should return false for different strings (size, a < b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a, a + 'x')).to.equal(false);
        done();
    });

    it('should return false for different strings (size, a > b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a + 'x', a)).to.equal(false);
        done();
    });

    it('should return false for different strings (size, a = b)', function (done) {

        expect(Cryptiles.fixedTimeComparison(a + 'x', a + 'y')).to.equal(false);
        done();
    });

    it('should return false when not a string', function (done) {

        expect(Cryptiles.fixedTimeComparison('x', null)).to.equal(false);
        done();
    });

    it('should return false when not a string (left)', function (done) {

        expect(Cryptiles.fixedTimeComparison(null, 'x')).to.equal(false);
        done();
    });
});
", "node_modules/cryptiles/test/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cryptiles/test/index.js");
    }
}
