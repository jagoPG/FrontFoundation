<?php

/* node_modules/destroy/README.md */
class __TwigTemplate_ad03663b83433f19e0fc674f5177b4f80feec614f20111c82dc811916a479622 extends Twig_Template
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
        $__internal_4cf1cb086823610b9ead8b336c3a49cf413cfcb063de3d484039b60c26665a22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cf1cb086823610b9ead8b336c3a49cf413cfcb063de3d484039b60c26665a22->enter($__internal_4cf1cb086823610b9ead8b336c3a49cf413cfcb063de3d484039b60c26665a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/destroy/README.md"));

        // line 1
        echo "# Destroy

[![NPM version][npm-image]][npm-url]
[![Build status][travis-image]][travis-url]
[![Test coverage][coveralls-image]][coveralls-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]
[![Gittip][gittip-image]][gittip-url]

Destroy a stream.

This module is meant to ensure a stream gets destroyed, handling different APIs
and Node.js bugs.

## API

```js
var destroy = require('destroy')
```

### destroy(stream)

Destroy the given stream. In most cases, this is identical to a simple
`stream.destroy()` call. The rules are as follows for a given stream:

  1. If the `stream` is an instance of `ReadStream`, then call `stream.destroy()`
     and add a listener to the `open` event to call `stream.close()` if it is
     fired. This is for a Node.js bug that will leak a file descriptor if
     `.destroy()` is called before `open`.
  2. If the `stream` is not an instance of `Stream`, then nothing happens.
  3. If the `stream` has a `.destroy()` method, then call it.

The function returns the `stream` passed in as the argument.

## Example

```js
var destroy = require('destroy')

var fs = require('fs')
var stream = fs.createReadStream('package.json')

// ... and later
destroy(stream)
```

[npm-image]: https://img.shields.io/npm/v/destroy.svg?style=flat-square
[npm-url]: https://npmjs.org/package/destroy
[github-tag]: http://img.shields.io/github/tag/stream-utils/destroy.svg?style=flat-square
[github-url]: https://github.com/stream-utils/destroy/tags
[travis-image]: https://img.shields.io/travis/stream-utils/destroy.svg?style=flat-square
[travis-url]: https://travis-ci.org/stream-utils/destroy
[coveralls-image]: https://img.shields.io/coveralls/stream-utils/destroy.svg?style=flat-square
[coveralls-url]: https://coveralls.io/r/stream-utils/destroy?branch=master
[license-image]: http://img.shields.io/npm/l/destroy.svg?style=flat-square
[license-url]: LICENSE.md
[downloads-image]: http://img.shields.io/npm/dm/destroy.svg?style=flat-square
[downloads-url]: https://npmjs.org/package/destroy
[gittip-image]: https://img.shields.io/gittip/jonathanong.svg?style=flat-square
[gittip-url]: https://www.gittip.com/jonathanong/
";
        
        $__internal_4cf1cb086823610b9ead8b336c3a49cf413cfcb063de3d484039b60c26665a22->leave($__internal_4cf1cb086823610b9ead8b336c3a49cf413cfcb063de3d484039b60c26665a22_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/destroy/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Destroy

[![NPM version][npm-image]][npm-url]
[![Build status][travis-image]][travis-url]
[![Test coverage][coveralls-image]][coveralls-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]
[![Gittip][gittip-image]][gittip-url]

Destroy a stream.

This module is meant to ensure a stream gets destroyed, handling different APIs
and Node.js bugs.

## API

```js
var destroy = require('destroy')
```

### destroy(stream)

Destroy the given stream. In most cases, this is identical to a simple
`stream.destroy()` call. The rules are as follows for a given stream:

  1. If the `stream` is an instance of `ReadStream`, then call `stream.destroy()`
     and add a listener to the `open` event to call `stream.close()` if it is
     fired. This is for a Node.js bug that will leak a file descriptor if
     `.destroy()` is called before `open`.
  2. If the `stream` is not an instance of `Stream`, then nothing happens.
  3. If the `stream` has a `.destroy()` method, then call it.

The function returns the `stream` passed in as the argument.

## Example

```js
var destroy = require('destroy')

var fs = require('fs')
var stream = fs.createReadStream('package.json')

// ... and later
destroy(stream)
```

[npm-image]: https://img.shields.io/npm/v/destroy.svg?style=flat-square
[npm-url]: https://npmjs.org/package/destroy
[github-tag]: http://img.shields.io/github/tag/stream-utils/destroy.svg?style=flat-square
[github-url]: https://github.com/stream-utils/destroy/tags
[travis-image]: https://img.shields.io/travis/stream-utils/destroy.svg?style=flat-square
[travis-url]: https://travis-ci.org/stream-utils/destroy
[coveralls-image]: https://img.shields.io/coveralls/stream-utils/destroy.svg?style=flat-square
[coveralls-url]: https://coveralls.io/r/stream-utils/destroy?branch=master
[license-image]: http://img.shields.io/npm/l/destroy.svg?style=flat-square
[license-url]: LICENSE.md
[downloads-image]: http://img.shields.io/npm/dm/destroy.svg?style=flat-square
[downloads-url]: https://npmjs.org/package/destroy
[gittip-image]: https://img.shields.io/gittip/jonathanong.svg?style=flat-square
[gittip-url]: https://www.gittip.com/jonathanong/
", "node_modules/destroy/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/destroy/README.md");
    }
}
