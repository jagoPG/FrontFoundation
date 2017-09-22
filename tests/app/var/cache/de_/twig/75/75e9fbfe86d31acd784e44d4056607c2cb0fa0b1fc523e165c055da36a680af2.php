<?php

/* node_modules/sha.js/README.md */
class __TwigTemplate_72d6f78235c9d5a0d8eed65c74829c3cc518bad34c4c25b0efa594810ebc6c8e extends Twig_Template
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
        $__internal_d198cf34d0ca9598ab24225aad285f2159168e82c837cdf25336071b8d1213d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d198cf34d0ca9598ab24225aad285f2159168e82c837cdf25336071b8d1213d6->enter($__internal_d198cf34d0ca9598ab24225aad285f2159168e82c837cdf25336071b8d1213d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/sha.js/README.md"));

        // line 1
        echo "# sha.js

Streamable SHA hashes in pure javascript.

[![build status](https://secure.travis-ci.org/crypto-browserify/sha.js.png)](http://travis-ci.org/crypto-browserify/sha.js)
[![NPM](http://img.shields.io/npm/v/sha.js.svg)](https://www.npmjs.org/package/sha.js)


## Example

``` js
var createHash = require('sha.js')

var sha256 = createHash('sha256')
var sha512 = createHash('sha512')

var h = sha256.update('abc', 'utf8').digest('hex')
console.log(h) //ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad

//LEGACY, do not use in new systems:
var sha0 = createHash('sha')
var sha1 = createHash('sha1')


```

## supported hashes

sha.js currently implements:


* sha256
* sha512
* sha1 (legacy, no not use in new systems)
* sha (legacy, no not use in new systems)

## Note

Note, this doesn't actually implement a stream, but wrapping this in a stream is trivial.
but is does update incrementally, so you can hash things larger than ram, and also, since it reuses
the typedarrays, it uses a constant amount of memory (except when using base64 or utf8 encoding,
see code comments)


## Acknowledgements

This work is derived from Paul Johnston's [\"A JavaScript implementation of the Secure Hash Algorithm\"]
(http://pajhome.org.uk/crypt/md5/sha1.html)



## License

MIT
";
        
        $__internal_d198cf34d0ca9598ab24225aad285f2159168e82c837cdf25336071b8d1213d6->leave($__internal_d198cf34d0ca9598ab24225aad285f2159168e82c837cdf25336071b8d1213d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/sha.js/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# sha.js

Streamable SHA hashes in pure javascript.

[![build status](https://secure.travis-ci.org/crypto-browserify/sha.js.png)](http://travis-ci.org/crypto-browserify/sha.js)
[![NPM](http://img.shields.io/npm/v/sha.js.svg)](https://www.npmjs.org/package/sha.js)


## Example

``` js
var createHash = require('sha.js')

var sha256 = createHash('sha256')
var sha512 = createHash('sha512')

var h = sha256.update('abc', 'utf8').digest('hex')
console.log(h) //ba7816bf8f01cfea414140de5dae2223b00361a396177a9cb410ff61f20015ad

//LEGACY, do not use in new systems:
var sha0 = createHash('sha')
var sha1 = createHash('sha1')


```

## supported hashes

sha.js currently implements:


* sha256
* sha512
* sha1 (legacy, no not use in new systems)
* sha (legacy, no not use in new systems)

## Note

Note, this doesn't actually implement a stream, but wrapping this in a stream is trivial.
but is does update incrementally, so you can hash things larger than ram, and also, since it reuses
the typedarrays, it uses a constant amount of memory (except when using base64 or utf8 encoding,
see code comments)


## Acknowledgements

This work is derived from Paul Johnston's [\"A JavaScript implementation of the Secure Hash Algorithm\"]
(http://pajhome.org.uk/crypt/md5/sha1.html)



## License

MIT
", "node_modules/sha.js/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/sha.js/README.md");
    }
}
