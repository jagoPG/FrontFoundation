<?php

/* node_modules/public-encrypt/test/nodeTests.js */
class __TwigTemplate_c3a94d2bc1f41869b62ed568dbfc858b7821fb9893ca3a431c1128294b24e600 extends Twig_Template
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
        $__internal_c545c085e735a2456d426b328bc1f8872c8740fbe97f593450cd00717d1b7995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c545c085e735a2456d426b328bc1f8872c8740fbe97f593450cd00717d1b7995->enter($__internal_c545c085e735a2456d426b328bc1f8872c8740fbe97f593450cd00717d1b7995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/public-encrypt/test/nodeTests.js"));

        // line 1
        echo "var crypto = require('../browser');
var test = require('tape');
var fs = require('fs');

// Test RSA encryption/decryption
test('node tests', function (t) {
  var certPem = fs.readFileSync(__dirname + '/test_cert.pem', 'ascii');
  var keyPem = fs.readFileSync(__dirname + '/test_key.pem', 'ascii');
  var rsaPubPem = fs.readFileSync(__dirname + '/test_rsa_pubkey.pem',
      'ascii');
  var rsaKeyPem = fs.readFileSync(__dirname + '/test_rsa_privkey.pem',
      'ascii');
  var rsaKeyPemEncrypted = fs.readFileSync(
  __dirname + '/test_rsa_privkey_encrypted.pem', 'ascii');
  var input = 'I AM THE WALRUS';
  var bufferToEncrypt = new Buffer(input);

  var encryptedBuffer = crypto.publicEncrypt(rsaPubPem, bufferToEncrypt);

  var decryptedBuffer = crypto.privateDecrypt(rsaKeyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  var decryptedBufferWithPassword = crypto.privateDecrypt({
    key: rsaKeyPemEncrypted,
    passphrase: 'password'
  }, encryptedBuffer);
  t.equal(input, decryptedBufferWithPassword.toString());

  // encryptedBuffer = crypto.publicEncrypt(certPem, bufferToEncrypt);

  // decryptedBuffer = crypto.privateDecrypt(keyPem, encryptedBuffer);
  // t.equal(input, decryptedBuffer.toString());

  encryptedBuffer = crypto.publicEncrypt(keyPem, bufferToEncrypt);

  decryptedBuffer = crypto.privateDecrypt(keyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  encryptedBuffer = crypto.privateEncrypt(keyPem, bufferToEncrypt);

  decryptedBuffer = crypto.publicDecrypt(keyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  t.throws(function() {
    crypto.privateDecrypt({
      key: rsaKeyPemEncrypted,
      passphrase: 'wrong'
    }, encryptedBuffer);
  });
  t.end();
});";
        
        $__internal_c545c085e735a2456d426b328bc1f8872c8740fbe97f593450cd00717d1b7995->leave($__internal_c545c085e735a2456d426b328bc1f8872c8740fbe97f593450cd00717d1b7995_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/public-encrypt/test/nodeTests.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("var crypto = require('../browser');
var test = require('tape');
var fs = require('fs');

// Test RSA encryption/decryption
test('node tests', function (t) {
  var certPem = fs.readFileSync(__dirname + '/test_cert.pem', 'ascii');
  var keyPem = fs.readFileSync(__dirname + '/test_key.pem', 'ascii');
  var rsaPubPem = fs.readFileSync(__dirname + '/test_rsa_pubkey.pem',
      'ascii');
  var rsaKeyPem = fs.readFileSync(__dirname + '/test_rsa_privkey.pem',
      'ascii');
  var rsaKeyPemEncrypted = fs.readFileSync(
  __dirname + '/test_rsa_privkey_encrypted.pem', 'ascii');
  var input = 'I AM THE WALRUS';
  var bufferToEncrypt = new Buffer(input);

  var encryptedBuffer = crypto.publicEncrypt(rsaPubPem, bufferToEncrypt);

  var decryptedBuffer = crypto.privateDecrypt(rsaKeyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  var decryptedBufferWithPassword = crypto.privateDecrypt({
    key: rsaKeyPemEncrypted,
    passphrase: 'password'
  }, encryptedBuffer);
  t.equal(input, decryptedBufferWithPassword.toString());

  // encryptedBuffer = crypto.publicEncrypt(certPem, bufferToEncrypt);

  // decryptedBuffer = crypto.privateDecrypt(keyPem, encryptedBuffer);
  // t.equal(input, decryptedBuffer.toString());

  encryptedBuffer = crypto.publicEncrypt(keyPem, bufferToEncrypt);

  decryptedBuffer = crypto.privateDecrypt(keyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  encryptedBuffer = crypto.privateEncrypt(keyPem, bufferToEncrypt);

  decryptedBuffer = crypto.publicDecrypt(keyPem, encryptedBuffer);
  t.equal(input, decryptedBuffer.toString());

  t.throws(function() {
    crypto.privateDecrypt({
      key: rsaKeyPemEncrypted,
      passphrase: 'wrong'
    }, encryptedBuffer);
  });
  t.end();
});", "node_modules/public-encrypt/test/nodeTests.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/public-encrypt/test/nodeTests.js");
    }
}
