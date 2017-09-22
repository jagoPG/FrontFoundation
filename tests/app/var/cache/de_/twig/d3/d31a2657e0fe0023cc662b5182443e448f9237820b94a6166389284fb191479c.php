<?php

/* node_modules/type-is/README.md */
class __TwigTemplate_deb318d1de4098c704980c90bc9fa90744f4c8ba9c58be41cd1fda7d8b8bdfe8 extends Twig_Template
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
        $__internal_a8fb899885dfa5ef5c1f66ac1865246741a91f1cd0b4ea0392821e1a5a786868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8fb899885dfa5ef5c1f66ac1865246741a91f1cd0b4ea0392821e1a5a786868->enter($__internal_a8fb899885dfa5ef5c1f66ac1865246741a91f1cd0b4ea0392821e1a5a786868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/type-is/README.md"));

        // line 1
        echo "# type-is

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Infer the content-type of a request.

### Install

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally):

```sh
\$ npm install type-is
```

## API

```js
var http = require('http')
var typeis = require('type-is')

http.createServer(function (req, res) {
  var istext = typeis(req, ['text/*'])
  res.end('you ' + (istext ? 'sent' : 'did not send') + ' me text')
})
```

### type = typeis(request, types)

`request` is the node HTTP request. `types` is an array of types.

<!-- eslint-disable no-undef -->

```js
// req.headers.content-type = 'application/json'

typeis(req, ['json'])             // 'json'
typeis(req, ['html', 'json'])     // 'json'
typeis(req, ['application/*'])    // 'application/json'
typeis(req, ['application/json']) // 'application/json'

typeis(req, ['html']) // false
```

### typeis.hasBody(request)

Returns a Boolean if the given `request` has a body, regardless of the
`Content-Type` header.

Having a body has no relation to how large the body is (it may be 0 bytes).
This is similar to how file existence works. If a body does exist, then this
indicates that there is data to read from the Node.js request stream.

<!-- eslint-disable no-undef -->

```js
if (typeis.hasBody(req)) {
  // read the body, since there is one

  req.on('data', function (chunk) {
    // ...
  })
}
```

### type = typeis.is(mediaType, types)

`mediaType` is the [media type](https://tools.ietf.org/html/rfc6838) string. `types` is an array of types.

<!-- eslint-disable no-undef -->

```js
var mediaType = 'application/json'

typeis.is(mediaType, ['json'])             // 'json'
typeis.is(mediaType, ['html', 'json'])     // 'json'
typeis.is(mediaType, ['application/*'])    // 'application/json'
typeis.is(mediaType, ['application/json']) // 'application/json'

typeis.is(mediaType, ['html']) // false
```

### Each type can be:

- An extension name such as `json`. This name will be returned if matched.
- A mime type such as `application/json`.
- A mime type with a wildcard such as `*/*` or `*/json` or `application/*`. The full mime type will be returned if matched.
- A suffix such as `+json`. This can be combined with a wildcard such as `*/vnd+json` or `application/*+json`. The full mime type will be returned if matched.

`false` will be returned if no type matches or the content type is invalid.

`null` will be returned if the request does not have a body.

## Examples

### Example body parser

```js
var express = require('express')
var typeis = require('type-is')

var app = express()

app.use(function bodyParser (req, res, next) {
  if (!typeis.hasBody(req)) {
    return next()
  }

  switch (typeis(req, ['urlencoded', 'json', 'multipart'])) {
    case 'urlencoded':
      // parse urlencoded body
      throw new Error('implement urlencoded body parsing')
    case 'json':
      // parse json body
      throw new Error('implement json body parsing')
    case 'multipart':
      // parse multipart body
      throw new Error('implement multipart body parsing')
    default:
      // 415 error code
      res.statusCode = 415
      res.end()
      break
  }
})
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/type-is.svg
[npm-url]: https://npmjs.org/package/type-is
[node-version-image]: https://img.shields.io/node/v/type-is.svg
[node-version-url]: https://nodejs.org/en/download/
[travis-image]: https://img.shields.io/travis/jshttp/type-is/master.svg
[travis-url]: https://travis-ci.org/jshttp/type-is
[coveralls-image]: https://img.shields.io/coveralls/jshttp/type-is/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/type-is?branch=master
[downloads-image]: https://img.shields.io/npm/dm/type-is.svg
[downloads-url]: https://npmjs.org/package/type-is
";
        
        $__internal_a8fb899885dfa5ef5c1f66ac1865246741a91f1cd0b4ea0392821e1a5a786868->leave($__internal_a8fb899885dfa5ef5c1f66ac1865246741a91f1cd0b4ea0392821e1a5a786868_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/type-is/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# type-is

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Infer the content-type of a request.

### Install

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally):

```sh
\$ npm install type-is
```

## API

```js
var http = require('http')
var typeis = require('type-is')

http.createServer(function (req, res) {
  var istext = typeis(req, ['text/*'])
  res.end('you ' + (istext ? 'sent' : 'did not send') + ' me text')
})
```

### type = typeis(request, types)

`request` is the node HTTP request. `types` is an array of types.

<!-- eslint-disable no-undef -->

```js
// req.headers.content-type = 'application/json'

typeis(req, ['json'])             // 'json'
typeis(req, ['html', 'json'])     // 'json'
typeis(req, ['application/*'])    // 'application/json'
typeis(req, ['application/json']) // 'application/json'

typeis(req, ['html']) // false
```

### typeis.hasBody(request)

Returns a Boolean if the given `request` has a body, regardless of the
`Content-Type` header.

Having a body has no relation to how large the body is (it may be 0 bytes).
This is similar to how file existence works. If a body does exist, then this
indicates that there is data to read from the Node.js request stream.

<!-- eslint-disable no-undef -->

```js
if (typeis.hasBody(req)) {
  // read the body, since there is one

  req.on('data', function (chunk) {
    // ...
  })
}
```

### type = typeis.is(mediaType, types)

`mediaType` is the [media type](https://tools.ietf.org/html/rfc6838) string. `types` is an array of types.

<!-- eslint-disable no-undef -->

```js
var mediaType = 'application/json'

typeis.is(mediaType, ['json'])             // 'json'
typeis.is(mediaType, ['html', 'json'])     // 'json'
typeis.is(mediaType, ['application/*'])    // 'application/json'
typeis.is(mediaType, ['application/json']) // 'application/json'

typeis.is(mediaType, ['html']) // false
```

### Each type can be:

- An extension name such as `json`. This name will be returned if matched.
- A mime type such as `application/json`.
- A mime type with a wildcard such as `*/*` or `*/json` or `application/*`. The full mime type will be returned if matched.
- A suffix such as `+json`. This can be combined with a wildcard such as `*/vnd+json` or `application/*+json`. The full mime type will be returned if matched.

`false` will be returned if no type matches or the content type is invalid.

`null` will be returned if the request does not have a body.

## Examples

### Example body parser

```js
var express = require('express')
var typeis = require('type-is')

var app = express()

app.use(function bodyParser (req, res, next) {
  if (!typeis.hasBody(req)) {
    return next()
  }

  switch (typeis(req, ['urlencoded', 'json', 'multipart'])) {
    case 'urlencoded':
      // parse urlencoded body
      throw new Error('implement urlencoded body parsing')
    case 'json':
      // parse json body
      throw new Error('implement json body parsing')
    case 'multipart':
      // parse multipart body
      throw new Error('implement multipart body parsing')
    default:
      // 415 error code
      res.statusCode = 415
      res.end()
      break
  }
})
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/type-is.svg
[npm-url]: https://npmjs.org/package/type-is
[node-version-image]: https://img.shields.io/node/v/type-is.svg
[node-version-url]: https://nodejs.org/en/download/
[travis-image]: https://img.shields.io/travis/jshttp/type-is/master.svg
[travis-url]: https://travis-ci.org/jshttp/type-is
[coveralls-image]: https://img.shields.io/coveralls/jshttp/type-is/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/type-is?branch=master
[downloads-image]: https://img.shields.io/npm/dm/type-is.svg
[downloads-url]: https://npmjs.org/package/type-is
", "node_modules/type-is/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/type-is/README.md");
    }
}
