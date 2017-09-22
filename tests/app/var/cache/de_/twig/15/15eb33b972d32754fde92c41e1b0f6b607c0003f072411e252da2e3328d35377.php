<?php

/* node_modules/define-properties/README.md */
class __TwigTemplate_5a22fc2881f9f349dd5259e9547e4564b3b6eae7c7abc402f2b19cfa4551037a extends Twig_Template
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
        $__internal_f34bac91f2fc9f74cdcaece94cd36c8772eb3cbf102786eed199ee2670c23d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f34bac91f2fc9f74cdcaece94cd36c8772eb3cbf102786eed199ee2670c23d98->enter($__internal_f34bac91f2fc9f74cdcaece94cd36c8772eb3cbf102786eed199ee2670c23d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/define-properties/README.md"));

        // line 1
        echo "#define-properties <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

Define multiple non-enumerable properties at once. Uses `Object.defineProperty` when available; falls back to standard assignment in older engines.
Existing properties are not overridden. Accepts a map of property names to a predicate that, when true, force-overrides.

## Example

```js
var define = require('define-properties');
var assert = require('assert');

var obj = define({ a: 1, b: 2 }, {
\ta: 10,
\tb: 20,
\tc: 30
});
assert(obj.a === 1);
assert(obj.b === 2);
assert(obj.c === 30);
if (define.supportsDescriptors) {
\tassert.deepEqual(Object.keys(obj), ['a', 'b']);
\tassert.deepEqual(Object.getOwnPropertyDescriptor(obj, 'c'), {
\t\tconfigurable: true,
\t\tenumerable: false,
\t\tvalue: 30,
\t\twritable: false
\t});
}
```

Then, with predicates:
```js
var define = require('define-properties');
var assert = require('assert');

var obj = define({ a: 1, b: 2, c: 3 }, {
\ta: 10,
\tb: 20,
\tc: 30
}, {
\ta: function () { return false; },
\tb: function () { return true; }
});
assert(obj.a === 1);
assert(obj.b === 20);
assert(obj.c === 3);
if (define.supportsDescriptors) {
\tassert.deepEqual(Object.keys(obj), ['a', 'c']);
\tassert.deepEqual(Object.getOwnPropertyDescriptor(obj, 'b'), {
\t\tconfigurable: true,
\t\tenumerable: false,
\t\tvalue: 20,
\t\twritable: false
\t});
}
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.org/package/define-properties
[npm-version-svg]: http://versionbadg.es/ljharb/define-properties.svg
[travis-svg]: https://travis-ci.org/ljharb/define-properties.svg
[travis-url]: https://travis-ci.org/ljharb/define-properties
[deps-svg]: https://david-dm.org/ljharb/define-properties.svg
[deps-url]: https://david-dm.org/ljharb/define-properties
[dev-deps-svg]: https://david-dm.org/ljharb/define-properties/dev-status.svg
[dev-deps-url]: https://david-dm.org/ljharb/define-properties#info=devDependencies
[testling-svg]: https://ci.testling.com/ljharb/define-properties.png
[testling-url]: https://ci.testling.com/ljharb/define-properties
[npm-badge-png]: https://nodei.co/npm/define-properties.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/define-properties.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/define-properties.svg
[downloads-url]: http://npm-stat.com/charts.html?package=define-properties

";
        
        $__internal_f34bac91f2fc9f74cdcaece94cd36c8772eb3cbf102786eed199ee2670c23d98->leave($__internal_f34bac91f2fc9f74cdcaece94cd36c8772eb3cbf102786eed199ee2670c23d98_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/define-properties/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#define-properties <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

Define multiple non-enumerable properties at once. Uses `Object.defineProperty` when available; falls back to standard assignment in older engines.
Existing properties are not overridden. Accepts a map of property names to a predicate that, when true, force-overrides.

## Example

```js
var define = require('define-properties');
var assert = require('assert');

var obj = define({ a: 1, b: 2 }, {
\ta: 10,
\tb: 20,
\tc: 30
});
assert(obj.a === 1);
assert(obj.b === 2);
assert(obj.c === 30);
if (define.supportsDescriptors) {
\tassert.deepEqual(Object.keys(obj), ['a', 'b']);
\tassert.deepEqual(Object.getOwnPropertyDescriptor(obj, 'c'), {
\t\tconfigurable: true,
\t\tenumerable: false,
\t\tvalue: 30,
\t\twritable: false
\t});
}
```

Then, with predicates:
```js
var define = require('define-properties');
var assert = require('assert');

var obj = define({ a: 1, b: 2, c: 3 }, {
\ta: 10,
\tb: 20,
\tc: 30
}, {
\ta: function () { return false; },
\tb: function () { return true; }
});
assert(obj.a === 1);
assert(obj.b === 20);
assert(obj.c === 3);
if (define.supportsDescriptors) {
\tassert.deepEqual(Object.keys(obj), ['a', 'c']);
\tassert.deepEqual(Object.getOwnPropertyDescriptor(obj, 'b'), {
\t\tconfigurable: true,
\t\tenumerable: false,
\t\tvalue: 20,
\t\twritable: false
\t});
}
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.org/package/define-properties
[npm-version-svg]: http://versionbadg.es/ljharb/define-properties.svg
[travis-svg]: https://travis-ci.org/ljharb/define-properties.svg
[travis-url]: https://travis-ci.org/ljharb/define-properties
[deps-svg]: https://david-dm.org/ljharb/define-properties.svg
[deps-url]: https://david-dm.org/ljharb/define-properties
[dev-deps-svg]: https://david-dm.org/ljharb/define-properties/dev-status.svg
[dev-deps-url]: https://david-dm.org/ljharb/define-properties#info=devDependencies
[testling-svg]: https://ci.testling.com/ljharb/define-properties.png
[testling-url]: https://ci.testling.com/ljharb/define-properties
[npm-badge-png]: https://nodei.co/npm/define-properties.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/define-properties.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/define-properties.svg
[downloads-url]: http://npm-stat.com/charts.html?package=define-properties

", "node_modules/define-properties/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/define-properties/README.md");
    }
}
