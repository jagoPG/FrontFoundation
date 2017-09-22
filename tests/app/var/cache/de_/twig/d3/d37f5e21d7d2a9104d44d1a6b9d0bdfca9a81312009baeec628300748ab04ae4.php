<?php

/* node_modules/buffer-xor/README.md */
class __TwigTemplate_d56433e2042b50dd27b555732892324cdfedb65fa8c3ea6b35c6b20d9c7db009 extends Twig_Template
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
        $__internal_96858dd52ab3a6bab1227551e07d119fd5b9fdfc3899ca971a4476d8a24d074a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96858dd52ab3a6bab1227551e07d119fd5b9fdfc3899ca971a4476d8a24d074a->enter($__internal_96858dd52ab3a6bab1227551e07d119fd5b9fdfc3899ca971a4476d8a24d074a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/README.md"));

        // line 1
        echo "# buffer-xor

[![TRAVIS](https://secure.travis-ci.org/crypto-browserify/buffer-xor.png)](http://travis-ci.org/crypto-browserify/buffer-xor)
[![NPM](http://img.shields.io/npm/v/buffer-xor.svg)](https://www.npmjs.org/package/buffer-xor)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

A simple module for bitwise-xor on buffers.


## Examples

``` javascript
var xor = require(\"buffer-xor\")
var a = new Buffer('00ff0f', 'hex')
var b = new Buffer('f0f0', 'hex')

console.log(xor(a, b))
// => <Buffer f0 0f>
```


Or for those seeking those few extra cycles, perform the operation in place:

``` javascript
var xorInplace = require(\"buffer-xor/inplace\")
var a = new Buffer('00ff0f', 'hex')
var b = new Buffer('f0f0', 'hex')

console.log(xorInplace(a, b))
// => <Buffer f0 0f>
// NOTE: xorInplace will return the shorter slice of its parameters

// See that a has been mutated
console.log(a)
// => <Buffer f0 0f 0f>
```


## License [MIT](LICENSE)

";
        
        $__internal_96858dd52ab3a6bab1227551e07d119fd5b9fdfc3899ca971a4476d8a24d074a->leave($__internal_96858dd52ab3a6bab1227551e07d119fd5b9fdfc3899ca971a4476d8a24d074a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# buffer-xor

[![TRAVIS](https://secure.travis-ci.org/crypto-browserify/buffer-xor.png)](http://travis-ci.org/crypto-browserify/buffer-xor)
[![NPM](http://img.shields.io/npm/v/buffer-xor.svg)](https://www.npmjs.org/package/buffer-xor)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

A simple module for bitwise-xor on buffers.


## Examples

``` javascript
var xor = require(\"buffer-xor\")
var a = new Buffer('00ff0f', 'hex')
var b = new Buffer('f0f0', 'hex')

console.log(xor(a, b))
// => <Buffer f0 0f>
```


Or for those seeking those few extra cycles, perform the operation in place:

``` javascript
var xorInplace = require(\"buffer-xor/inplace\")
var a = new Buffer('00ff0f', 'hex')
var b = new Buffer('f0f0', 'hex')

console.log(xorInplace(a, b))
// => <Buffer f0 0f>
// NOTE: xorInplace will return the shorter slice of its parameters

// See that a has been mutated
console.log(a)
// => <Buffer f0 0f 0f>
```


## License [MIT](LICENSE)

", "node_modules/buffer-xor/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/README.md");
    }
}
