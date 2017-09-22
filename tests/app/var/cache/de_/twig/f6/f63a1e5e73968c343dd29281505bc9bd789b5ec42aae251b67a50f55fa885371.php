<?php

/* node_modules/des.js/test/cbc-test.js */
class __TwigTemplate_17b6cc0ce3b7b369de78e3212414ef470ee8ebb71e8a886c89509e733890bc5d extends Twig_Template
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
        $__internal_0c51e88221398b8af4b610f06a63888d44dfbba081bbca950753ad8eb707c43e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c51e88221398b8af4b610f06a63888d44dfbba081bbca950753ad8eb707c43e->enter($__internal_0c51e88221398b8af4b610f06a63888d44dfbba081bbca950753ad8eb707c43e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/des.js/test/cbc-test.js"));

        // line 1
        echo "'use strict';

var assert = require('assert');
var crypto = require('crypto');
var Buffer = require('buffer').Buffer;

var des = require('../');

var fixtures = require('./fixtures');
var bin = fixtures.bin;

describe('DES-CBC', function() {
  var CBC = des.CBC.instantiate(des.DES);

  describe('encryption/decryption', function() {
    var vectors = [
      {
        key: '133457799bbcdff1',
        iv: '0102030405060708',
        input: '0123456789abcdef'
      },
      {
        key: '0000000000000000',
        iv: 'ffffffffffffffff',
        input: '0000000000000000'
      },
      {
        key: 'a3a3a3a3b3b3b3b3',
        iv: 'cdcdcdcdcdcdcdcd',
        input: 'cccccccccccccccc'
      },
      {
        key: 'deadbeefabbadead',
        iv: 'a0da0da0da0da0da',
        input: '0102030405060708090a'
      },
      {
        key: 'aabbccddeeff0011',
        iv: 'fefefefefefefefe',
        input: '0102030405060708090a0102030405060708090a0102030405060708090a' +
               '0102030405060708090a0102030405060607080a0102030405060708090a'
      }
    ];

    vectors.forEach(function(vec, i) {
      it('should encrypt vector ' + i, function() {
        var key = new Buffer(vec.key, 'hex');
        var iv = new Buffer(vec.iv, 'hex');
        var input = new Buffer(vec.input, 'hex');

        var enc = CBC.create({
          type: 'encrypt',
          key: key,
          iv: iv
        });
        var out = new Buffer(enc.update(input).concat(enc.final()));

        var cipher = crypto.createCipheriv('des-cbc', key, iv);
        var expected = Buffer.concat([ cipher.update(input), cipher.final() ]);

        assert.deepEqual(out, expected);

        var dec = CBC.create({
          type: 'decrypt',
          key: key,
          iv: iv
        });
        assert.deepEqual(new Buffer(dec.update(out).concat(dec.final())),
                         input);
      });
    });
  });
});
";
        
        $__internal_0c51e88221398b8af4b610f06a63888d44dfbba081bbca950753ad8eb707c43e->leave($__internal_0c51e88221398b8af4b610f06a63888d44dfbba081bbca950753ad8eb707c43e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/des.js/test/cbc-test.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("'use strict';

var assert = require('assert');
var crypto = require('crypto');
var Buffer = require('buffer').Buffer;

var des = require('../');

var fixtures = require('./fixtures');
var bin = fixtures.bin;

describe('DES-CBC', function() {
  var CBC = des.CBC.instantiate(des.DES);

  describe('encryption/decryption', function() {
    var vectors = [
      {
        key: '133457799bbcdff1',
        iv: '0102030405060708',
        input: '0123456789abcdef'
      },
      {
        key: '0000000000000000',
        iv: 'ffffffffffffffff',
        input: '0000000000000000'
      },
      {
        key: 'a3a3a3a3b3b3b3b3',
        iv: 'cdcdcdcdcdcdcdcd',
        input: 'cccccccccccccccc'
      },
      {
        key: 'deadbeefabbadead',
        iv: 'a0da0da0da0da0da',
        input: '0102030405060708090a'
      },
      {
        key: 'aabbccddeeff0011',
        iv: 'fefefefefefefefe',
        input: '0102030405060708090a0102030405060708090a0102030405060708090a' +
               '0102030405060708090a0102030405060607080a0102030405060708090a'
      }
    ];

    vectors.forEach(function(vec, i) {
      it('should encrypt vector ' + i, function() {
        var key = new Buffer(vec.key, 'hex');
        var iv = new Buffer(vec.iv, 'hex');
        var input = new Buffer(vec.input, 'hex');

        var enc = CBC.create({
          type: 'encrypt',
          key: key,
          iv: iv
        });
        var out = new Buffer(enc.update(input).concat(enc.final()));

        var cipher = crypto.createCipheriv('des-cbc', key, iv);
        var expected = Buffer.concat([ cipher.update(input), cipher.final() ]);

        assert.deepEqual(out, expected);

        var dec = CBC.create({
          type: 'decrypt',
          key: key,
          iv: iv
        });
        assert.deepEqual(new Buffer(dec.update(out).concat(dec.final())),
                         input);
      });
    });
  });
});
", "node_modules/des.js/test/cbc-test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/des.js/test/cbc-test.js");
    }
}
