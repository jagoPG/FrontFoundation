<?php

/* node_modules/forwarded/README.md */
class __TwigTemplate_31d2fb88718b2d88496d4b65b2bcdac6d65f352a91f3825c6c7509205d57133f extends Twig_Template
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
        $__internal_6eff05caa3e4ed8c047fc11a1ac93cbefc6f9f3b87b5a3bdb7fdd57ed70e404f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6eff05caa3e4ed8c047fc11a1ac93cbefc6f9f3b87b5a3bdb7fdd57ed70e404f->enter($__internal_6eff05caa3e4ed8c047fc11a1ac93cbefc6f9f3b87b5a3bdb7fdd57ed70e404f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/forwarded/README.md"));

        // line 1
        echo "# forwarded

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Parse HTTP X-Forwarded-For header

## Installation

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally):

```sh
\$ npm install forwarded
```

## API

```js
var forwarded = require('forwarded')
```

### forwarded(req)

```js
var addresses = forwarded(req)
```

Parse the `X-Forwarded-For` header from the request. Returns an array
of the addresses, including the socket address for the `req`. In reverse
order (i.e. index `0` is the socket address and the last index is the
furthest address, typically the end-user).

## Testing

```sh
\$ npm test
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/forwarded.svg
[npm-url]: https://npmjs.org/package/forwarded
[node-version-image]: https://img.shields.io/node/v/forwarded.svg
[node-version-url]: http://nodejs.org/download/
[travis-image]: https://img.shields.io/travis/jshttp/forwarded/master.svg
[travis-url]: https://travis-ci.org/jshttp/forwarded
[coveralls-image]: https://img.shields.io/coveralls/jshttp/forwarded/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/forwarded?branch=master
[downloads-image]: https://img.shields.io/npm/dm/forwarded.svg
[downloads-url]: https://npmjs.org/package/forwarded
";
        
        $__internal_6eff05caa3e4ed8c047fc11a1ac93cbefc6f9f3b87b5a3bdb7fdd57ed70e404f->leave($__internal_6eff05caa3e4ed8c047fc11a1ac93cbefc6f9f3b87b5a3bdb7fdd57ed70e404f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/forwarded/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# forwarded

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Parse HTTP X-Forwarded-For header

## Installation

This is a [Node.js](https://nodejs.org/en/) module available through the
[npm registry](https://www.npmjs.com/). Installation is done using the
[`npm install` command](https://docs.npmjs.com/getting-started/installing-npm-packages-locally):

```sh
\$ npm install forwarded
```

## API

```js
var forwarded = require('forwarded')
```

### forwarded(req)

```js
var addresses = forwarded(req)
```

Parse the `X-Forwarded-For` header from the request. Returns an array
of the addresses, including the socket address for the `req`. In reverse
order (i.e. index `0` is the socket address and the last index is the
furthest address, typically the end-user).

## Testing

```sh
\$ npm test
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/forwarded.svg
[npm-url]: https://npmjs.org/package/forwarded
[node-version-image]: https://img.shields.io/node/v/forwarded.svg
[node-version-url]: http://nodejs.org/download/
[travis-image]: https://img.shields.io/travis/jshttp/forwarded/master.svg
[travis-url]: https://travis-ci.org/jshttp/forwarded
[coveralls-image]: https://img.shields.io/coveralls/jshttp/forwarded/master.svg
[coveralls-url]: https://coveralls.io/r/jshttp/forwarded?branch=master
[downloads-image]: https://img.shields.io/npm/dm/forwarded.svg
[downloads-url]: https://npmjs.org/package/forwarded
", "node_modules/forwarded/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/forwarded/README.md");
    }
}
