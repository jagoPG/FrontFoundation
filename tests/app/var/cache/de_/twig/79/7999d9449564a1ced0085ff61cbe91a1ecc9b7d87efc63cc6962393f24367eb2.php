<?php

/* node_modules/content-type/README.md */
class __TwigTemplate_16153414f7ac0d60f347c12dc593301726a9697f2d887450311b44a4b431d54e extends Twig_Template
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
        $__internal_66a4ef4093f938725de52e4761e9518d415d1f0c456e4c27d1e646464ac5c649 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66a4ef4093f938725de52e4761e9518d415d1f0c456e4c27d1e646464ac5c649->enter($__internal_66a4ef4093f938725de52e4761e9518d415d1f0c456e4c27d1e646464ac5c649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/content-type/README.md"));

        // line 1
        echo "# content-type

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Create and parse HTTP Content-Type header according to RFC 7231

## Installation

```sh
\$ npm install content-type
```

## API

```js
var contentType = require('content-type')
```

### contentType.parse(string)

```js
var obj = contentType.parse('image/svg+xml; charset=utf-8')
```

Parse a content type string. This will return an object with the following
properties (examples are shown for the string `'image/svg+xml; charset=utf-8'`):

 - `type`: The media type (the type and subtype, always lower case).
   Example: `'image/svg+xml'`

 - `parameters`: An object of the parameters in the media type (name of parameter
   always lower case). Example: `{charset: 'utf-8'}`

Throws a `TypeError` if the string is missing or invalid.

### contentType.parse(req)

```js
var obj = contentType.parse(req)
```

Parse the `content-type` header from the given `req`. Short-cut for
`contentType.parse(req.headers['content-type'])`.

Throws a `TypeError` if the `Content-Type` header is missing or invalid.

### contentType.parse(res)

```js
var obj = contentType.parse(res)
```

Parse the `content-type` header set on the given `res`. Short-cut for
`contentType.parse(res.getHeader('content-type'))`.

Throws a `TypeError` if the `Content-Type` header is missing or invalid.

### contentType.format(obj)

```js
var str = contentType.format({type: 'image/svg+xml'})
```

Format an object into a content type string. This will return a string of the
content type for the given object with the following properties (examples are
shown that produce the string `'image/svg+xml; charset=utf-8'`):

 - `type`: The media type (will be lower-cased). Example: `'image/svg+xml'`

 - `parameters`: An object of the parameters in the media type (name of the
   parameter will be lower-cased). Example: `{charset: 'utf-8'}`

Throws a `TypeError` if the object contains an invalid type or parameter names.

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/content-type.svg
[npm-url]: https://npmjs.org/package/content-type
[node-version-image]: https://img.shields.io/node/v/content-type.svg
[node-version-url]: http://nodejs.org/download/
[travis-image]: https://img.shields.io/travis/jshttp/content-type/master.svg
[travis-url]: https://travis-ci.org/jshttp/content-type
[coveralls-image]: https://img.shields.io/coveralls/jshttp/content-type/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/content-type
[downloads-image]: https://img.shields.io/npm/dm/content-type.svg
[downloads-url]: https://npmjs.org/package/content-type
";
        
        $__internal_66a4ef4093f938725de52e4761e9518d415d1f0c456e4c27d1e646464ac5c649->leave($__internal_66a4ef4093f938725de52e4761e9518d415d1f0c456e4c27d1e646464ac5c649_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/content-type/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# content-type

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Create and parse HTTP Content-Type header according to RFC 7231

## Installation

```sh
\$ npm install content-type
```

## API

```js
var contentType = require('content-type')
```

### contentType.parse(string)

```js
var obj = contentType.parse('image/svg+xml; charset=utf-8')
```

Parse a content type string. This will return an object with the following
properties (examples are shown for the string `'image/svg+xml; charset=utf-8'`):

 - `type`: The media type (the type and subtype, always lower case).
   Example: `'image/svg+xml'`

 - `parameters`: An object of the parameters in the media type (name of parameter
   always lower case). Example: `{charset: 'utf-8'}`

Throws a `TypeError` if the string is missing or invalid.

### contentType.parse(req)

```js
var obj = contentType.parse(req)
```

Parse the `content-type` header from the given `req`. Short-cut for
`contentType.parse(req.headers['content-type'])`.

Throws a `TypeError` if the `Content-Type` header is missing or invalid.

### contentType.parse(res)

```js
var obj = contentType.parse(res)
```

Parse the `content-type` header set on the given `res`. Short-cut for
`contentType.parse(res.getHeader('content-type'))`.

Throws a `TypeError` if the `Content-Type` header is missing or invalid.

### contentType.format(obj)

```js
var str = contentType.format({type: 'image/svg+xml'})
```

Format an object into a content type string. This will return a string of the
content type for the given object with the following properties (examples are
shown that produce the string `'image/svg+xml; charset=utf-8'`):

 - `type`: The media type (will be lower-cased). Example: `'image/svg+xml'`

 - `parameters`: An object of the parameters in the media type (name of the
   parameter will be lower-cased). Example: `{charset: 'utf-8'}`

Throws a `TypeError` if the object contains an invalid type or parameter names.

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/content-type.svg
[npm-url]: https://npmjs.org/package/content-type
[node-version-image]: https://img.shields.io/node/v/content-type.svg
[node-version-url]: http://nodejs.org/download/
[travis-image]: https://img.shields.io/travis/jshttp/content-type/master.svg
[travis-url]: https://travis-ci.org/jshttp/content-type
[coveralls-image]: https://img.shields.io/coveralls/jshttp/content-type/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/content-type
[downloads-image]: https://img.shields.io/npm/dm/content-type.svg
[downloads-url]: https://npmjs.org/package/content-type
", "node_modules/content-type/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/content-type/README.md");
    }
}
