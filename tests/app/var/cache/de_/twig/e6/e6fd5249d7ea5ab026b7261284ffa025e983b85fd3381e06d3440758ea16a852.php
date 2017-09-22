<?php

/* node_modules/des.js/test/ede-test.js */
class __TwigTemplate_fd8f43592bd75f1e7116ab726638170bf75f21c74163d0aaef5bcc437e5584f7 extends Twig_Template
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
        $__internal_e007a9c5f4d15392f410e907a8cd7787c7b3598d23d96411018630a6bcbdc8ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e007a9c5f4d15392f410e907a8cd7787c7b3598d23d96411018630a6bcbdc8ab->enter($__internal_e007a9c5f4d15392f410e907a8cd7787c7b3598d23d96411018630a6bcbdc8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/des.js/test/ede-test.js"));

        // line 1
        echo "'use strict';

var assert = require('assert');
var crypto = require('crypto');
var Buffer = require('buffer').Buffer;

var des = require('../');

var fixtures = require('./fixtures');
var bin = fixtures.bin;

describe('DES-EDE-CBC', function() {
  var CBC = des.CBC.instantiate(des.EDE);

  describe('encryption/decryption', function() {
    var vectors = [
      {
        key: new Array(4).join('133457799bbcdff1'),
        iv: '0102030405060708',
        input: '0123456789abcdef'
      },
      {
        key: new Array(4).join('0000000000000000'),
        iv: 'ffffffffffffffff',
        input: '0000000000000000'
      },
      {
        key: new Array(4).join('a3a3a3a3b3b3b3b3'),
        iv: 'cdcdcdcdcdcdcdcd',
        input: 'cccccccccccccccc'
      },
      {
        key: new Array(4).join('deadbeefabbadead'),
        iv: 'a0da0da0da0da0da',
        input: '0102030405060708090a'
      },
      {
        key: 'aabbccddeeff0011' + '1111222233334444' + 'ffffeeeeddddcccc',
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

        var cipher = crypto.createCipheriv('des-ede3-cbc', key, iv);
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
        
        $__internal_e007a9c5f4d15392f410e907a8cd7787c7b3598d23d96411018630a6bcbdc8ab->leave($__internal_e007a9c5f4d15392f410e907a8cd7787c7b3598d23d96411018630a6bcbdc8ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/des.js/test/ede-test.js";
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

describe('DES-EDE-CBC', function() {
  var CBC = des.CBC.instantiate(des.EDE);

  describe('encryption/decryption', function() {
    var vectors = [
      {
        key: new Array(4).join('133457799bbcdff1'),
        iv: '0102030405060708',
        input: '0123456789abcdef'
      },
      {
        key: new Array(4).join('0000000000000000'),
        iv: 'ffffffffffffffff',
        input: '0000000000000000'
      },
      {
        key: new Array(4).join('a3a3a3a3b3b3b3b3'),
        iv: 'cdcdcdcdcdcdcdcd',
        input: 'cccccccccccccccc'
      },
      {
        key: new Array(4).join('deadbeefabbadead'),
        iv: 'a0da0da0da0da0da',
        input: '0102030405060708090a'
      },
      {
        key: 'aabbccddeeff0011' + '1111222233334444' + 'ffffeeeeddddcccc',
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

        var cipher = crypto.createCipheriv('des-ede3-cbc', key, iv);
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
", "node_modules/des.js/test/ede-test.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/des.js/test/ede-test.js");
    }
}
