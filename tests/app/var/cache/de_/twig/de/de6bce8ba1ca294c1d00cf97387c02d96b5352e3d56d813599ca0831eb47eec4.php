<?php

/* node_modules/ripemd160/README.md */
class __TwigTemplate_dd50814c3d6cc3b40645fccbd990a0dd7cfb3f4a9f2182da290cb3c2148ffd27 extends Twig_Template
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
        $__internal_da85564281d807da96d50244f63944b47578c2db71a04bebf7d85da2e45e2bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da85564281d807da96d50244f63944b47578c2db71a04bebf7d85da2e45e2bdc->enter($__internal_da85564281d807da96d50244f63944b47578c2db71a04bebf7d85da2e45e2bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ripemd160/README.md"));

        // line 1
        echo "# ripemd160

[![NPM Package](https://img.shields.io/npm/v/ripemd160.svg?style=flat-square)](https://www.npmjs.org/package/ripemd160)
[![Build Status](https://img.shields.io/travis/crypto-browserify/ripemd160.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/ripemd160)
[![Dependency status](https://img.shields.io/david/crypto-browserify/ripemd160.svg?style=flat-square)](https://david-dm.org/crypto-browserify/ripemd160#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style `ripemd160` on pure JavaScript.

## Example

```js
var RIPEMD160 = require('ripemd160')

console.log(new RIPEMD160().update('42').digest('hex'))
// => 0df020ba32aa9b8b904471ff582ce6b579bf8bc8

var ripemd160stream = new RIPEMD160()
ripemd160stream.end('42')
console.log(ripemd160stream.read().toString('hex'))
// => 0df020ba32aa9b8b904471ff582ce6b579bf8bc8
```

## LICENSE

MIT
";
        
        $__internal_da85564281d807da96d50244f63944b47578c2db71a04bebf7d85da2e45e2bdc->leave($__internal_da85564281d807da96d50244f63944b47578c2db71a04bebf7d85da2e45e2bdc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ripemd160/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# ripemd160

[![NPM Package](https://img.shields.io/npm/v/ripemd160.svg?style=flat-square)](https://www.npmjs.org/package/ripemd160)
[![Build Status](https://img.shields.io/travis/crypto-browserify/ripemd160.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/ripemd160)
[![Dependency status](https://img.shields.io/david/crypto-browserify/ripemd160.svg?style=flat-square)](https://david-dm.org/crypto-browserify/ripemd160#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style `ripemd160` on pure JavaScript.

## Example

```js
var RIPEMD160 = require('ripemd160')

console.log(new RIPEMD160().update('42').digest('hex'))
// => 0df020ba32aa9b8b904471ff582ce6b579bf8bc8

var ripemd160stream = new RIPEMD160()
ripemd160stream.end('42')
console.log(ripemd160stream.read().toString('hex'))
// => 0df020ba32aa9b8b904471ff582ce6b579bf8bc8
```

## LICENSE

MIT
", "node_modules/ripemd160/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ripemd160/README.md");
    }
}
