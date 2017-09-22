<?php

/* node_modules/parse-asn1/fixProc.js */
class __TwigTemplate_c3e80e6ab0d45ceed26b02595686aa07ef61801a22ac03aa8513798647c81cee extends Twig_Template
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
        $__internal_b668ca276c362cfb4e8ef000768c7eefd1147908e7947e2ce5a88764331ff92d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b668ca276c362cfb4e8ef000768c7eefd1147908e7947e2ce5a88764331ff92d->enter($__internal_b668ca276c362cfb4e8ef000768c7eefd1147908e7947e2ce5a88764331ff92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parse-asn1/fixProc.js"));

        // line 1
        echo "// adapted from https://github.com/apatil/pemstrip
var findProc = /Proc-Type: 4,ENCRYPTED\\n\\r?DEK-Info: AES-((?:128)|(?:192)|(?:256))-CBC,([0-9A-H]+)\\n\\r?\\n\\r?([0-9A-z\\n\\r\\+\\/\\=]+)\\n\\r?/m
var startRegex = /^-----BEGIN ((?:.* KEY)|CERTIFICATE)-----\\n/m
var fullRegex = /^-----BEGIN ((?:.* KEY)|CERTIFICATE)-----\\n\\r?([0-9A-z\\n\\r\\+\\/\\=]+)\\n\\r?-----END \\1-----\$/m
var evp = require('evp_bytestokey')
var ciphers = require('browserify-aes')
module.exports = function (okey, password) {
  var key = okey.toString()
  var match = key.match(findProc)
  var decrypted
  if (!match) {
    var match2 = key.match(fullRegex)
    decrypted = new Buffer(match2[2].replace(/\\r?\\n/g, ''), 'base64')
  } else {
    var suite = 'aes' + match[1]
    var iv = new Buffer(match[2], 'hex')
    var cipherText = new Buffer(match[3].replace(/\\r?\\n/g, ''), 'base64')
    var cipherKey = evp(password, iv.slice(0, 8), parseInt(match[1], 10)).key
    var out = []
    var cipher = ciphers.createDecipheriv(suite, cipherKey, iv)
    out.push(cipher.update(cipherText))
    out.push(cipher.final())
    decrypted = Buffer.concat(out)
  }
  var tag = key.match(startRegex)[1]
  return {
    tag: tag,
    data: decrypted
  }
}
";
        
        $__internal_b668ca276c362cfb4e8ef000768c7eefd1147908e7947e2ce5a88764331ff92d->leave($__internal_b668ca276c362cfb4e8ef000768c7eefd1147908e7947e2ce5a88764331ff92d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parse-asn1/fixProc.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// adapted from https://github.com/apatil/pemstrip
var findProc = /Proc-Type: 4,ENCRYPTED\\n\\r?DEK-Info: AES-((?:128)|(?:192)|(?:256))-CBC,([0-9A-H]+)\\n\\r?\\n\\r?([0-9A-z\\n\\r\\+\\/\\=]+)\\n\\r?/m
var startRegex = /^-----BEGIN ((?:.* KEY)|CERTIFICATE)-----\\n/m
var fullRegex = /^-----BEGIN ((?:.* KEY)|CERTIFICATE)-----\\n\\r?([0-9A-z\\n\\r\\+\\/\\=]+)\\n\\r?-----END \\1-----\$/m
var evp = require('evp_bytestokey')
var ciphers = require('browserify-aes')
module.exports = function (okey, password) {
  var key = okey.toString()
  var match = key.match(findProc)
  var decrypted
  if (!match) {
    var match2 = key.match(fullRegex)
    decrypted = new Buffer(match2[2].replace(/\\r?\\n/g, ''), 'base64')
  } else {
    var suite = 'aes' + match[1]
    var iv = new Buffer(match[2], 'hex')
    var cipherText = new Buffer(match[3].replace(/\\r?\\n/g, ''), 'base64')
    var cipherKey = evp(password, iv.slice(0, 8), parseInt(match[1], 10)).key
    var out = []
    var cipher = ciphers.createDecipheriv(suite, cipherKey, iv)
    out.push(cipher.update(cipherText))
    out.push(cipher.final())
    decrypted = Buffer.concat(out)
  }
  var tag = key.match(startRegex)[1]
  return {
    tag: tag,
    data: decrypted
  }
}
", "node_modules/parse-asn1/fixProc.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parse-asn1/fixProc.js");
    }
}
