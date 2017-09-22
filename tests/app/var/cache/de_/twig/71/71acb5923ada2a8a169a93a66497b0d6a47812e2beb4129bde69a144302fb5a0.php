<?php

/* node_modules/create-hmac/README.md */
class __TwigTemplate_35110c81594567744f0faf4e31a07606599ee7a350e4e8416d4ff01cebc168f2 extends Twig_Template
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
        $__internal_c1027bc5d346abaa3fee4d55617c073ec926d97701c29f3192884db30330bd0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1027bc5d346abaa3fee4d55617c073ec926d97701c29f3192884db30330bd0b->enter($__internal_c1027bc5d346abaa3fee4d55617c073ec926d97701c29f3192884db30330bd0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hmac/README.md"));

        // line 1
        echo "# create-hmac

[![NPM Package](https://img.shields.io/npm/v/create-hmac.svg?style=flat-square)](https://www.npmjs.org/package/create-hmac)
[![Build Status](https://img.shields.io/travis/crypto-browserify/createHmac.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/createHmac)
[![Dependency status](https://img.shields.io/david/crypto-browserify/createHmac.svg?style=flat-square)](https://david-dm.org/crypto-browserify/createHmac#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style HMACs for use in the browser, with native HMAC functions in node. API is the same as HMACs in node:

```js
var createHmac = require('create-hmac')
var hmac = createHmac('sha224', new Buffer(\"secret key\"))
hmac.update('synchronous write') //optional encoding parameter
hmac.digest() // synchronously get result with optional encoding parameter

hmac.write('write to it as a stream')
hmac.end() //remember it's a stream
hmac.read() //only if you ended it as a stream though
```
";
        
        $__internal_c1027bc5d346abaa3fee4d55617c073ec926d97701c29f3192884db30330bd0b->leave($__internal_c1027bc5d346abaa3fee4d55617c073ec926d97701c29f3192884db30330bd0b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hmac/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# create-hmac

[![NPM Package](https://img.shields.io/npm/v/create-hmac.svg?style=flat-square)](https://www.npmjs.org/package/create-hmac)
[![Build Status](https://img.shields.io/travis/crypto-browserify/createHmac.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/createHmac)
[![Dependency status](https://img.shields.io/david/crypto-browserify/createHmac.svg?style=flat-square)](https://david-dm.org/crypto-browserify/createHmac#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style HMACs for use in the browser, with native HMAC functions in node. API is the same as HMACs in node:

```js
var createHmac = require('create-hmac')
var hmac = createHmac('sha224', new Buffer(\"secret key\"))
hmac.update('synchronous write') //optional encoding parameter
hmac.digest() // synchronously get result with optional encoding parameter

hmac.write('write to it as a stream')
hmac.end() //remember it's a stream
hmac.read() //only if you ended it as a stream though
```
", "node_modules/create-hmac/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hmac/README.md");
    }
}
