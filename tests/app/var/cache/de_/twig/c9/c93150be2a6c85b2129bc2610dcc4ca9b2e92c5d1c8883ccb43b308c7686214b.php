<?php

/* node_modules/pbkdf2/lib/sync.js */
class __TwigTemplate_6e309301ddfb55e9f6831cfa76cf8f26947960d905e625f053ad67a67f11e5d4 extends Twig_Template
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
        $__internal_0a39051954dc0ae698673910a4b5fbd241f378b73b01af12b0fbfc974137b4cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a39051954dc0ae698673910a4b5fbd241f378b73b01af12b0fbfc974137b4cb->enter($__internal_0a39051954dc0ae698673910a4b5fbd241f378b73b01af12b0fbfc974137b4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/lib/sync.js"));

        // line 1
        echo "var sizes = {
  md5: 16,
  sha1: 20,
  sha224: 28,
  sha256: 32,
  sha384: 48,
  sha512: 64,
  rmd160: 20,
  ripemd160: 20
}

var createHmac = require('create-hmac')
var checkParameters = require('../lib/precondition')
var defaultEncoding = require('../lib/default-encoding')
var Buffer = require('safe-buffer').Buffer

function pbkdf2 (password, salt, iterations, keylen, digest) {
  if (!Buffer.isBuffer(password)) password = Buffer.from(password, defaultEncoding)
  if (!Buffer.isBuffer(salt)) salt = Buffer.from(salt, defaultEncoding)

  checkParameters(iterations, keylen)
  digest = digest || 'sha1'

  var DK = Buffer.allocUnsafe(keylen)
  var block1 = Buffer.allocUnsafe(salt.length + 4)
  salt.copy(block1, 0, 0, salt.length)

  var destPos = 0
  var hLen = sizes[digest]
  var l = Math.ceil(keylen / hLen)

  for (var i = 1; i <= l; i++) {
    block1.writeUInt32BE(i, salt.length)

    var T = createHmac(digest, password).update(block1).digest()
    var U = T

    for (var j = 1; j < iterations; j++) {
      U = createHmac(digest, password).update(U).digest()
      for (var k = 0; k < hLen; k++) T[k] ^= U[k]
    }

    T.copy(DK, destPos)
    destPos += hLen
  }

  return DK
}

module.exports = pbkdf2
";
        
        $__internal_0a39051954dc0ae698673910a4b5fbd241f378b73b01af12b0fbfc974137b4cb->leave($__internal_0a39051954dc0ae698673910a4b5fbd241f378b73b01af12b0fbfc974137b4cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/lib/sync.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var sizes = {
  md5: 16,
  sha1: 20,
  sha224: 28,
  sha256: 32,
  sha384: 48,
  sha512: 64,
  rmd160: 20,
  ripemd160: 20
}

var createHmac = require('create-hmac')
var checkParameters = require('../lib/precondition')
var defaultEncoding = require('../lib/default-encoding')
var Buffer = require('safe-buffer').Buffer

function pbkdf2 (password, salt, iterations, keylen, digest) {
  if (!Buffer.isBuffer(password)) password = Buffer.from(password, defaultEncoding)
  if (!Buffer.isBuffer(salt)) salt = Buffer.from(salt, defaultEncoding)

  checkParameters(iterations, keylen)
  digest = digest || 'sha1'

  var DK = Buffer.allocUnsafe(keylen)
  var block1 = Buffer.allocUnsafe(salt.length + 4)
  salt.copy(block1, 0, 0, salt.length)

  var destPos = 0
  var hLen = sizes[digest]
  var l = Math.ceil(keylen / hLen)

  for (var i = 1; i <= l; i++) {
    block1.writeUInt32BE(i, salt.length)

    var T = createHmac(digest, password).update(block1).digest()
    var U = T

    for (var j = 1; j < iterations; j++) {
      U = createHmac(digest, password).update(U).digest()
      for (var k = 0; k < hLen; k++) T[k] ^= U[k]
    }

    T.copy(DK, destPos)
    destPos += hLen
  }

  return DK
}

module.exports = pbkdf2
", "node_modules/pbkdf2/lib/sync.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/lib/sync.js");
    }
}
