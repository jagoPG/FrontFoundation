<?php

/* node_modules/es-to-primitive/README.md */
class __TwigTemplate_5c11a66618d80a524ae89903691e775ea19c32965da54167b5fcbc5cdeb4e6b8 extends Twig_Template
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
        $__internal_e980c706090364fae0e7bd6532cd85060bdd47833611f932ac28d977ade73b74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e980c706090364fae0e7bd6532cd85060bdd47833611f932ac28d977ade73b74->enter($__internal_e980c706090364fae0e7bd6532cd85060bdd47833611f932ac28d977ade73b74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es-to-primitive/README.md"));

        // line 1
        echo "# es-to-primitive <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

ECMAScript “ToPrimitive” algorithm. Provides ES5 and ES6 versions.
When different versions of the spec conflict, the default export will be the latest version of the abstract operation.
Alternative versions will also be available under an `es5`/`es6`/`es7` exported property if you require a specific version.

## Example

```js
var toPrimitive = require('es-to-primitive');
var assert = require('assert');

assert(toPrimitive(function () {}) === String(function () {}));

var date = new Date();
assert(toPrimitive(date) === String(date));

assert(toPrimitive({ valueOf: function () { return 3; } }) === 3);

assert(toPrimitive(['a', 'b', 3]) === String(['a', 'b', 3]));

var sym = Symbol();
assert(toPrimitive(Object(sym)) === sym);
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.org/package/es-to-primitive
[npm-version-svg]: http://versionbadg.es/ljharb/es-to-primitive.svg
[travis-svg]: https://travis-ci.org/ljharb/es-to-primitive.svg
[travis-url]: https://travis-ci.org/ljharb/es-to-primitive
[deps-svg]: https://david-dm.org/ljharb/es-to-primitive.svg
[deps-url]: https://david-dm.org/ljharb/es-to-primitive
[dev-deps-svg]: https://david-dm.org/ljharb/es-to-primitive/dev-status.svg
[dev-deps-url]: https://david-dm.org/ljharb/es-to-primitive#info=devDependencies
[testling-svg]: https://ci.testling.com/ljharb/es-to-primitive.png
[testling-url]: https://ci.testling.com/ljharb/es-to-primitive
[npm-badge-png]: https://nodei.co/npm/es-to-primitive.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/es-to-primitive.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/es-to-primitive.svg
[downloads-url]: http://npm-stat.com/charts.html?package=es-to-primitive
";
        
        $__internal_e980c706090364fae0e7bd6532cd85060bdd47833611f932ac28d977ade73b74->leave($__internal_e980c706090364fae0e7bd6532cd85060bdd47833611f932ac28d977ade73b74_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es-to-primitive/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# es-to-primitive <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

ECMAScript “ToPrimitive” algorithm. Provides ES5 and ES6 versions.
When different versions of the spec conflict, the default export will be the latest version of the abstract operation.
Alternative versions will also be available under an `es5`/`es6`/`es7` exported property if you require a specific version.

## Example

```js
var toPrimitive = require('es-to-primitive');
var assert = require('assert');

assert(toPrimitive(function () {}) === String(function () {}));

var date = new Date();
assert(toPrimitive(date) === String(date));

assert(toPrimitive({ valueOf: function () { return 3; } }) === 3);

assert(toPrimitive(['a', 'b', 3]) === String(['a', 'b', 3]));

var sym = Symbol();
assert(toPrimitive(Object(sym)) === sym);
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.org/package/es-to-primitive
[npm-version-svg]: http://versionbadg.es/ljharb/es-to-primitive.svg
[travis-svg]: https://travis-ci.org/ljharb/es-to-primitive.svg
[travis-url]: https://travis-ci.org/ljharb/es-to-primitive
[deps-svg]: https://david-dm.org/ljharb/es-to-primitive.svg
[deps-url]: https://david-dm.org/ljharb/es-to-primitive
[dev-deps-svg]: https://david-dm.org/ljharb/es-to-primitive/dev-status.svg
[dev-deps-url]: https://david-dm.org/ljharb/es-to-primitive#info=devDependencies
[testling-svg]: https://ci.testling.com/ljharb/es-to-primitive.png
[testling-url]: https://ci.testling.com/ljharb/es-to-primitive
[npm-badge-png]: https://nodei.co/npm/es-to-primitive.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/es-to-primitive.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/es-to-primitive.svg
[downloads-url]: http://npm-stat.com/charts.html?package=es-to-primitive
", "node_modules/es-to-primitive/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es-to-primitive/README.md");
    }
}
