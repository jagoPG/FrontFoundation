<?php

/* node_modules/randombytes/README.md */
class __TwigTemplate_431eaa0122cf847179a4e236c18fb154f33f327e5cd2d9c853f5a6bfa9038abd extends Twig_Template
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
        $__internal_724b5a0476e4619852dce6c6530de73c972e6c61b76ea9f08a62dc735523dada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_724b5a0476e4619852dce6c6530de73c972e6c61b76ea9f08a62dc735523dada->enter($__internal_724b5a0476e4619852dce6c6530de73c972e6c61b76ea9f08a62dc735523dada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/randombytes/README.md"));

        // line 1
        echo "randombytes
===

[![Version](http://img.shields.io/npm/v/randombytes.svg)](https://www.npmjs.org/package/randombytes) [![Build Status](https://travis-ci.org/crypto-browserify/randombytes.svg?branch=master)](https://travis-ci.org/crypto-browserify/randombytes)

randombytes from node that works in the browser.  In node you just get crypto.randomBytes, but in the browser it uses .crypto/msCrypto.getRandomValues

```js
var randomBytes = require('randombytes');
randomBytes(16);//get 16 random bytes
randomBytes(16, function (err, resp) {
  // resp is 16 random bytes
});
```
";
        
        $__internal_724b5a0476e4619852dce6c6530de73c972e6c61b76ea9f08a62dc735523dada->leave($__internal_724b5a0476e4619852dce6c6530de73c972e6c61b76ea9f08a62dc735523dada_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/randombytes/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("randombytes
===

[![Version](http://img.shields.io/npm/v/randombytes.svg)](https://www.npmjs.org/package/randombytes) [![Build Status](https://travis-ci.org/crypto-browserify/randombytes.svg?branch=master)](https://travis-ci.org/crypto-browserify/randombytes)

randombytes from node that works in the browser.  In node you just get crypto.randomBytes, but in the browser it uses .crypto/msCrypto.getRandomValues

```js
var randomBytes = require('randombytes');
randomBytes(16);//get 16 random bytes
randomBytes(16, function (err, resp) {
  // resp is 16 random bytes
});
```
", "node_modules/randombytes/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/randombytes/README.md");
    }
}
