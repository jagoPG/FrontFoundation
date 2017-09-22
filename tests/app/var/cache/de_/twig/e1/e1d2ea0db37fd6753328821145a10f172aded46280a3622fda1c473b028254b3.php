<?php

/* node_modules/is-buffer/README.md */
class __TwigTemplate_1501101c0b3ad578ee12dbe45e8858758e76a55def49d0cb7eab32c9962013db extends Twig_Template
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
        $__internal_fe8ab833455e918cf863b094b502c76a87121ffd610557121185c809b68d2ae7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe8ab833455e918cf863b094b502c76a87121ffd610557121185c809b68d2ae7->enter($__internal_fe8ab833455e918cf863b094b502c76a87121ffd610557121185c809b68d2ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-buffer/README.md"));

        // line 1
        echo "# is-buffer [![travis][travis-image]][travis-url] [![npm][npm-image]][npm-url] [![downloads][downloads-image]][npm-url]

#### Determine if an object is a [`Buffer`](http://nodejs.org/api/buffer.html) (including the [browserify Buffer](https://github.com/feross/buffer))

[![saucelabs][saucelabs-image]][saucelabs-url]

[travis-image]: https://img.shields.io/travis/feross/is-buffer/master.svg
[travis-url]: https://travis-ci.org/feross/is-buffer
[npm-image]: https://img.shields.io/npm/v/is-buffer.svg
[npm-url]: https://npmjs.org/package/is-buffer
[downloads-image]: https://img.shields.io/npm/dm/is-buffer.svg
[saucelabs-image]: https://saucelabs.com/browser-matrix/is-buffer.svg
[saucelabs-url]: https://saucelabs.com/u/is-buffer

## Why not use `Buffer.isBuffer`?

This module lets you check if an object is a `Buffer` without using `Buffer.isBuffer` (which includes the whole [buffer](https://github.com/feross/buffer) module in [browserify](http://browserify.org/)).

It's future-proof and works in node too!

## install

```bash
npm install is-buffer
```

## usage

```js
var isBuffer = require('is-buffer')

isBuffer(new Buffer(4)) // true

isBuffer(undefined) // false
isBuffer(null) // false
isBuffer('') // false
isBuffer(true) // false
isBuffer(false) // false
isBuffer(0) // false
isBuffer(1) // false
isBuffer(1.0) // false
isBuffer('string') // false
isBuffer({}) // false
isBuffer(function foo () {}) // false
```

## license

MIT. Copyright (C) [Feross Aboukhadijeh](http://feross.org).
";
        
        $__internal_fe8ab833455e918cf863b094b502c76a87121ffd610557121185c809b68d2ae7->leave($__internal_fe8ab833455e918cf863b094b502c76a87121ffd610557121185c809b68d2ae7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-buffer/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# is-buffer [![travis][travis-image]][travis-url] [![npm][npm-image]][npm-url] [![downloads][downloads-image]][npm-url]

#### Determine if an object is a [`Buffer`](http://nodejs.org/api/buffer.html) (including the [browserify Buffer](https://github.com/feross/buffer))

[![saucelabs][saucelabs-image]][saucelabs-url]

[travis-image]: https://img.shields.io/travis/feross/is-buffer/master.svg
[travis-url]: https://travis-ci.org/feross/is-buffer
[npm-image]: https://img.shields.io/npm/v/is-buffer.svg
[npm-url]: https://npmjs.org/package/is-buffer
[downloads-image]: https://img.shields.io/npm/dm/is-buffer.svg
[saucelabs-image]: https://saucelabs.com/browser-matrix/is-buffer.svg
[saucelabs-url]: https://saucelabs.com/u/is-buffer

## Why not use `Buffer.isBuffer`?

This module lets you check if an object is a `Buffer` without using `Buffer.isBuffer` (which includes the whole [buffer](https://github.com/feross/buffer) module in [browserify](http://browserify.org/)).

It's future-proof and works in node too!

## install

```bash
npm install is-buffer
```

## usage

```js
var isBuffer = require('is-buffer')

isBuffer(new Buffer(4)) // true

isBuffer(undefined) // false
isBuffer(null) // false
isBuffer('') // false
isBuffer(true) // false
isBuffer(false) // false
isBuffer(0) // false
isBuffer(1) // false
isBuffer(1.0) // false
isBuffer('string') // false
isBuffer({}) // false
isBuffer(function foo () {}) // false
```

## license

MIT. Copyright (C) [Feross Aboukhadijeh](http://feross.org).
", "node_modules/is-buffer/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-buffer/README.md");
    }
}
