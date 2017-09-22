<?php

/* node_modules/statuses/README.md */
class __TwigTemplate_f455436b1c1012b980b20c763a6800086f67763f981bd8abfa0e5a7c6f77b674 extends Twig_Template
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
        $__internal_70597b23c3b16d73bb3ac11035feee60e39457080aad6c511303dce2f3df2ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70597b23c3b16d73bb3ac11035feee60e39457080aad6c511303dce2f3df2ae3->enter($__internal_70597b23c3b16d73bb3ac11035feee60e39457080aad6c511303dce2f3df2ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/statuses/README.md"));

        // line 1
        echo "# Statuses

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

HTTP status utility for node.

## API

```js
var status = require('statuses')
```

### var code = status(Integer || String)

If `Integer` or `String` is a valid HTTP code or status message, then the appropriate `code` will be returned. Otherwise, an error will be thrown.

```js
status(403) // => 403
status('403') // => 403
status('forbidden') // => 403
status('Forbidden') // => 403
status(306) // throws, as it's not supported by node.js
```

### status.codes

Returns an array of all the status codes as `Integer`s.

### var msg = status[code]

Map of `code` to `status message`. `undefined` for invalid `code`s.

```js
status[404] // => 'Not Found'
```

### var code = status[msg]

Map of `status message` to `code`. `msg` can either be title-cased or lower-cased. `undefined` for invalid `status message`s.

```js
status['not found'] // => 404
status['Not Found'] // => 404
```

### status.redirect[code]

Returns `true` if a status code is a valid redirect status.

```js
status.redirect[200] // => undefined
status.redirect[301] // => true
```

### status.empty[code]

Returns `true` if a status code expects an empty body.

```js
status.empty[200] // => undefined
status.empty[204] // => true
status.empty[304] // => true
```

### status.retry[code]

Returns `true` if you should retry the rest.

```js
status.retry[501] // => undefined
status.retry[503] // => true
```

## Adding Status Codes

The status codes are primarily sourced from http://www.iana.org/assignments/http-status-codes/http-status-codes-1.csv.
Additionally, custom codes are added from http://en.wikipedia.org/wiki/List_of_HTTP_status_codes.
These are added manually in the `lib/*.json` files.
If you would like to add a status code, add it to the appropriate JSON file.

To rebuild `codes.json`, run the following:

```bash
# update src/iana.json
npm run fetch
# build codes.json
npm run build
```

[npm-image]: https://img.shields.io/npm/v/statuses.svg
[npm-url]: https://npmjs.org/package/statuses
[node-version-image]: https://img.shields.io/badge/node.js-%3E%3D_0.6-brightgreen.svg
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/statuses.svg
[travis-url]: https://travis-ci.org/jshttp/statuses
[coveralls-image]: https://img.shields.io/coveralls/jshttp/statuses.svg
[coveralls-url]: https://coveralls.io/r/jshttp/statuses?branch=master
[downloads-image]: https://img.shields.io/npm/dm/statuses.svg
[downloads-url]: https://npmjs.org/package/statuses
";
        
        $__internal_70597b23c3b16d73bb3ac11035feee60e39457080aad6c511303dce2f3df2ae3->leave($__internal_70597b23c3b16d73bb3ac11035feee60e39457080aad6c511303dce2f3df2ae3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/statuses/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Statuses

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

HTTP status utility for node.

## API

```js
var status = require('statuses')
```

### var code = status(Integer || String)

If `Integer` or `String` is a valid HTTP code or status message, then the appropriate `code` will be returned. Otherwise, an error will be thrown.

```js
status(403) // => 403
status('403') // => 403
status('forbidden') // => 403
status('Forbidden') // => 403
status(306) // throws, as it's not supported by node.js
```

### status.codes

Returns an array of all the status codes as `Integer`s.

### var msg = status[code]

Map of `code` to `status message`. `undefined` for invalid `code`s.

```js
status[404] // => 'Not Found'
```

### var code = status[msg]

Map of `status message` to `code`. `msg` can either be title-cased or lower-cased. `undefined` for invalid `status message`s.

```js
status['not found'] // => 404
status['Not Found'] // => 404
```

### status.redirect[code]

Returns `true` if a status code is a valid redirect status.

```js
status.redirect[200] // => undefined
status.redirect[301] // => true
```

### status.empty[code]

Returns `true` if a status code expects an empty body.

```js
status.empty[200] // => undefined
status.empty[204] // => true
status.empty[304] // => true
```

### status.retry[code]

Returns `true` if you should retry the rest.

```js
status.retry[501] // => undefined
status.retry[503] // => true
```

## Adding Status Codes

The status codes are primarily sourced from http://www.iana.org/assignments/http-status-codes/http-status-codes-1.csv.
Additionally, custom codes are added from http://en.wikipedia.org/wiki/List_of_HTTP_status_codes.
These are added manually in the `lib/*.json` files.
If you would like to add a status code, add it to the appropriate JSON file.

To rebuild `codes.json`, run the following:

```bash
# update src/iana.json
npm run fetch
# build codes.json
npm run build
```

[npm-image]: https://img.shields.io/npm/v/statuses.svg
[npm-url]: https://npmjs.org/package/statuses
[node-version-image]: https://img.shields.io/badge/node.js-%3E%3D_0.6-brightgreen.svg
[node-version-url]: https://nodejs.org/en/download
[travis-image]: https://img.shields.io/travis/jshttp/statuses.svg
[travis-url]: https://travis-ci.org/jshttp/statuses
[coveralls-image]: https://img.shields.io/coveralls/jshttp/statuses.svg
[coveralls-url]: https://coveralls.io/r/jshttp/statuses?branch=master
[downloads-image]: https://img.shields.io/npm/dm/statuses.svg
[downloads-url]: https://npmjs.org/package/statuses
", "node_modules/statuses/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/statuses/README.md");
    }
}
