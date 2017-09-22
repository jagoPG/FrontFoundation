<?php

/* node_modules/create-hash/readme.md */
class __TwigTemplate_130fbfdf68091ceae167d3b9dc33635cf12c5c9bf48508b52b47cd102cef2f01 extends Twig_Template
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
        $__internal_450cfe69abaaa56b1ef12009a8e6a1f88f82af76674497cc5ca8689011590160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_450cfe69abaaa56b1ef12009a8e6a1f88f82af76674497cc5ca8689011590160->enter($__internal_450cfe69abaaa56b1ef12009a8e6a1f88f82af76674497cc5ca8689011590160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/create-hash/readme.md"));

        // line 1
        echo "create-hash
===

[![Build Status](https://travis-ci.org/crypto-browserify/createHash.svg)](https://travis-ci.org/crypto-browserify/createHash)

Node style hashes for use in the browser, with native hash functions in node. Api is the same as hashes in node:

```js
var createHash = require('create-hash');
var hash = createHash('sha224');
hash.update('synchronous write'); //optional encoding parameter
hash.digest();// synchronously get result with optional encoding parameter

hash.write('write to it as a stream');
hash.end();//remember it's a stream
hash.read();//only if you ended it as a stream though
```

To get the JavaScript version even in node do `require('create-hash/browser');`";
        
        $__internal_450cfe69abaaa56b1ef12009a8e6a1f88f82af76674497cc5ca8689011590160->leave($__internal_450cfe69abaaa56b1ef12009a8e6a1f88f82af76674497cc5ca8689011590160_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/create-hash/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("create-hash
===

[![Build Status](https://travis-ci.org/crypto-browserify/createHash.svg)](https://travis-ci.org/crypto-browserify/createHash)

Node style hashes for use in the browser, with native hash functions in node. Api is the same as hashes in node:

```js
var createHash = require('create-hash');
var hash = createHash('sha224');
hash.update('synchronous write'); //optional encoding parameter
hash.digest();// synchronously get result with optional encoding parameter

hash.write('write to it as a stream');
hash.end();//remember it's a stream
hash.read();//only if you ended it as a stream though
```

To get the JavaScript version even in node do `require('create-hash/browser');`", "node_modules/create-hash/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/create-hash/readme.md");
    }
}
