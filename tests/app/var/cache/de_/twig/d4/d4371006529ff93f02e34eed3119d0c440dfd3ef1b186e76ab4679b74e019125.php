<?php

/* node_modules/range-parser/README.md */
class __TwigTemplate_18ff7e90b991e7c40a3138fb854d43f3ca7226258d938c171d38707700072107 extends Twig_Template
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
        $__internal_04517de1ed3183c70b0a4e3f9ac2ffcac18ea7d7df8b4f5892c45ece9962d048 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04517de1ed3183c70b0a4e3f9ac2ffcac18ea7d7df8b4f5892c45ece9962d048->enter($__internal_04517de1ed3183c70b0a4e3f9ac2ffcac18ea7d7df8b4f5892c45ece9962d048_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/range-parser/README.md"));

        // line 1
        echo "# range-parser

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Range header field parser.

## Installation

```
\$ npm install range-parser
```

## API

```js
var parseRange = require('range-parser')
```

### parseRange(size, header, options)

Parse the given `header` string where `size` is the maximum size of the resource.
An array of ranges will be returned or negative numbers indicating an error parsing.

  * `-2` signals a malformed header string
  * `-1` signals an unsatisfiable range

```js
// parse header from request
var range = parseRange(size, req.headers.range)

// the type of the range
if (range.type === 'bytes') {
  // the ranges
  range.forEach(function (r) {
    // do something with r.start and r.end
  })
}
```

#### Options

These properties are accepted in the options object.

##### combine

Specifies if overlapping & adjacent ranges should be combined, defaults to `false`.
When `true`, ranges will be combined and returned as if they were specified that
way in the header.

```js
parseRange(100, 'bytes=50-55,0-10,5-10,56-60', { combine: true })
// => [
//      { start: 0,  end: 10 },
//      { start: 50, end: 60 }
//    ]
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/range-parser.svg
[npm-url]: https://npmjs.org/package/range-parser
[node-version-image]: https://img.shields.io/node/v/range-parser.svg
[node-version-url]: https://nodejs.org/endownload
[travis-image]: https://img.shields.io/travis/jshttp/range-parser.svg
[travis-url]: https://travis-ci.org/jshttp/range-parser
[coveralls-image]: https://img.shields.io/coveralls/jshttp/range-parser.svg
[coveralls-url]: https://coveralls.io/r/jshttp/range-parser
[downloads-image]: https://img.shields.io/npm/dm/range-parser.svg
[downloads-url]: https://npmjs.org/package/range-parser
";
        
        $__internal_04517de1ed3183c70b0a4e3f9ac2ffcac18ea7d7df8b4f5892c45ece9962d048->leave($__internal_04517de1ed3183c70b0a4e3f9ac2ffcac18ea7d7df8b4f5892c45ece9962d048_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/range-parser/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# range-parser

[![NPM Version][npm-image]][npm-url]
[![NPM Downloads][downloads-image]][downloads-url]
[![Node.js Version][node-version-image]][node-version-url]
[![Build Status][travis-image]][travis-url]
[![Test Coverage][coveralls-image]][coveralls-url]

Range header field parser.

## Installation

```
\$ npm install range-parser
```

## API

```js
var parseRange = require('range-parser')
```

### parseRange(size, header, options)

Parse the given `header` string where `size` is the maximum size of the resource.
An array of ranges will be returned or negative numbers indicating an error parsing.

  * `-2` signals a malformed header string
  * `-1` signals an unsatisfiable range

```js
// parse header from request
var range = parseRange(size, req.headers.range)

// the type of the range
if (range.type === 'bytes') {
  // the ranges
  range.forEach(function (r) {
    // do something with r.start and r.end
  })
}
```

#### Options

These properties are accepted in the options object.

##### combine

Specifies if overlapping & adjacent ranges should be combined, defaults to `false`.
When `true`, ranges will be combined and returned as if they were specified that
way in the header.

```js
parseRange(100, 'bytes=50-55,0-10,5-10,56-60', { combine: true })
// => [
//      { start: 0,  end: 10 },
//      { start: 50, end: 60 }
//    ]
```

## License

[MIT](LICENSE)

[npm-image]: https://img.shields.io/npm/v/range-parser.svg
[npm-url]: https://npmjs.org/package/range-parser
[node-version-image]: https://img.shields.io/node/v/range-parser.svg
[node-version-url]: https://nodejs.org/endownload
[travis-image]: https://img.shields.io/travis/jshttp/range-parser.svg
[travis-url]: https://travis-ci.org/jshttp/range-parser
[coveralls-image]: https://img.shields.io/coveralls/jshttp/range-parser.svg
[coveralls-url]: https://coveralls.io/r/jshttp/range-parser
[downloads-image]: https://img.shields.io/npm/dm/range-parser.svg
[downloads-url]: https://npmjs.org/package/range-parser
", "node_modules/range-parser/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/range-parser/README.md");
    }
}
