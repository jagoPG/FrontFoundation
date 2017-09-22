<?php

/* node_modules/crypto-browserify/README.md */
class __TwigTemplate_da21d839a9093e6b81b9459be7d9f8592dd39f5f2a3b55c4202f7eeb59347651 extends Twig_Template
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
        $__internal_546ad62be410e62cfa2c51246982c11dcc6c081690b555ebb5994c5fbd405988 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546ad62be410e62cfa2c51246982c11dcc6c081690b555ebb5994c5fbd405988->enter($__internal_546ad62be410e62cfa2c51246982c11dcc6c081690b555ebb5994c5fbd405988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/crypto-browserify/README.md"));

        // line 1
        echo "# crypto-browserify

A port of node's `crypto` module to the browser.

[![Build Status](https://travis-ci.org/crypto-browserify/crypto-browserify.svg?branch=master)](https://travis-ci.org/crypto-browserify/crypto-browserify)
[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)
[![Sauce Test Status](https://saucelabs.com/browser-matrix/crypto-browserify.svg)](https://saucelabs.com/u/crypto-browserify)

The goal of this module is to reimplement node's crypto module,
in pure javascript so that it can run in the browser.

Here is the subset that is currently implemented:

* createHash (sha1, sha224, sha256, sha384, sha512, md5, rmd160)
* createHmac (sha1, sha224, sha256, sha384, sha512, md5, rmd160)
* pbkdf2
* pbkdf2Sync
* randomBytes
* pseudoRandomBytes
* createCipher (aes)
* createDecipher (aes)
* createDiffieHellman
* createSign (rsa, ecdsa)
* createVerify (rsa, ecdsa)
* createECDH (secp256k1)
* publicEncrypt/privateDecrypt (rsa)
* privateEncrypt/publicDecrypt (rsa)

## todo

these features from node's `crypto` are still unimplemented.

* createCredentials

## contributions

If you are interested in writing a feature, please implement as a new module,
which will be incorporated into crypto-browserify as a dependency.

All deps must be compatible with node's crypto
(generate example inputs and outputs with node,
and save base64 strings inside JSON, so that tests can run in the browser.
see [sha.js](https://github.com/dominictarr/sha.js)

Crypto is _extra serious_ so please do not hesitate to review the code,
and post comments if you do.

## License

MIT
";
        
        $__internal_546ad62be410e62cfa2c51246982c11dcc6c081690b555ebb5994c5fbd405988->leave($__internal_546ad62be410e62cfa2c51246982c11dcc6c081690b555ebb5994c5fbd405988_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/crypto-browserify/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# crypto-browserify

A port of node's `crypto` module to the browser.

[![Build Status](https://travis-ci.org/crypto-browserify/crypto-browserify.svg?branch=master)](https://travis-ci.org/crypto-browserify/crypto-browserify)
[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)
[![Sauce Test Status](https://saucelabs.com/browser-matrix/crypto-browserify.svg)](https://saucelabs.com/u/crypto-browserify)

The goal of this module is to reimplement node's crypto module,
in pure javascript so that it can run in the browser.

Here is the subset that is currently implemented:

* createHash (sha1, sha224, sha256, sha384, sha512, md5, rmd160)
* createHmac (sha1, sha224, sha256, sha384, sha512, md5, rmd160)
* pbkdf2
* pbkdf2Sync
* randomBytes
* pseudoRandomBytes
* createCipher (aes)
* createDecipher (aes)
* createDiffieHellman
* createSign (rsa, ecdsa)
* createVerify (rsa, ecdsa)
* createECDH (secp256k1)
* publicEncrypt/privateDecrypt (rsa)
* privateEncrypt/publicDecrypt (rsa)

## todo

these features from node's `crypto` are still unimplemented.

* createCredentials

## contributions

If you are interested in writing a feature, please implement as a new module,
which will be incorporated into crypto-browserify as a dependency.

All deps must be compatible with node's crypto
(generate example inputs and outputs with node,
and save base64 strings inside JSON, so that tests can run in the browser.
see [sha.js](https://github.com/dominictarr/sha.js)

Crypto is _extra serious_ so please do not hesitate to review the code,
and post comments if you do.

## License

MIT
", "node_modules/crypto-browserify/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/crypto-browserify/README.md");
    }
}
