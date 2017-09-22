<?php

/* node_modules/methods/README.md */
class __TwigTemplate_fd5870fde70705bd9953fdea84e8553808632a1bb4652a2b51e95d4f632ea000 extends Twig_Template
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
        $__internal_1673245bb2d85c2dd619bba78aa958d5858d311a87c3266dbed1cb318a586244 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1673245bb2d85c2dd619bba78aa958d5858d311a87c3266dbed1cb318a586244->enter($__internal_1673245bb2d85c2dd619bba78aa958d5858d311a87c3266dbed1cb318a586244_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/methods/README.md"));

        // line 1
        echo "# Methods

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

HTTP verbs that Node.js core's HTTP parser supports.

This module provides an export that is just like `http.METHODS` from Node.js core,
with the following differences:

  * All method names are lower-cased.
  * Contains a fallback list of methods for Node.js versions that do not have a
    `http.METHODS` export (0.10 and lower).
  * Provides the fallback list when using tools like `browserify` without pulling
    in the `http` shim module.

## Install

```bash
\$ npm install methods
```

## API

```js
var methods = require('methods')
```

### methods

This is an array of lower-cased method names that Node.js supports. If Node.js
provides the `http.METHODS` export, then this is the same array lower-cased,
otherwise it is a snapshot of the verbs from Node.js 0.10.

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/methods.svg?style=flat
[npm-url]: https://npmjs.org/package/methods
[node-version-image]: https://img.shields.io/node/v/methods.svg?style=flat
[node-version-url]: https://nodejs.org/en/download/
[travis-image]: https://img.shields.io/travis/jshttp/methods.svg?style=flat
[travis-url]: https://travis-ci.org/jshttp/methods
[coveralls-image]: https://img.shields.io/coveralls/jshttp/methods.svg?style=flat
[coveralls-url]: https://coveralls.io/r/jshttp/methods?branch=master
[downloads-image]: https://img.shields.io/npm/dm/methods.svg?style=flat
[downloads-url]: https://npmjs.org/package/methods
";
        
        $__internal_1673245bb2d85c2dd619bba78aa958d5858d311a87c3266dbed1cb318a586244->leave($__internal_1673245bb2d85c2dd619bba78aa958d5858d311a87c3266dbed1cb318a586244_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/methods/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Methods

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

HTTP verbs that Node.js core's HTTP parser supports.

This module provides an export that is just like `http.METHODS` from Node.js core,
with the following differences:

  * All method names are lower-cased.
  * Contains a fallback list of methods for Node.js versions that do not have a
    `http.METHODS` export (0.10 and lower).
  * Provides the fallback list when using tools like `browserify` without pulling
    in the `http` shim module.

## Install

```bash
\$ npm install methods
```

## API

```js
var methods = require('methods')
```

### methods

This is an array of lower-cased method names that Node.js supports. If Node.js
provides the `http.METHODS` export, then this is the same array lower-cased,
otherwise it is a snapshot of the verbs from Node.js 0.10.

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/methods.svg?style=flat
[npm-url]: https://npmjs.org/package/methods
[node-version-image]: https://img.shields.io/node/v/methods.svg?style=flat
[node-version-url]: https://nodejs.org/en/download/
[travis-image]: https://img.shields.io/travis/jshttp/methods.svg?style=flat
[travis-url]: https://travis-ci.org/jshttp/methods
[coveralls-image]: https://img.shields.io/coveralls/jshttp/methods.svg?style=flat
[coveralls-url]: https://coveralls.io/r/jshttp/methods?branch=master
[downloads-image]: https://img.shields.io/npm/dm/methods.svg?style=flat
[downloads-url]: https://npmjs.org/package/methods
", "node_modules/methods/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/methods/README.md");
    }
}
