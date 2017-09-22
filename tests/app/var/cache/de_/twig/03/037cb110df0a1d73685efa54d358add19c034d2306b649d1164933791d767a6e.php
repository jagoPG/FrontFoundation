<?php

/* node_modules/string.prototype.trim/README.md */
class __TwigTemplate_35b3278a40c087e3bb7e0d5b095ace1f988e3c1c751bb9554ed0ef696c961aca extends Twig_Template
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
        $__internal_0ac9ff3916632ad7a2b5ea6757f3fb1bdfa65951ce4bd9734b9941ea50ea1cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac9ff3916632ad7a2b5ea6757f3fb1bdfa65951ce4bd9734b9941ea50ea1cfb->enter($__internal_0ac9ff3916632ad7a2b5ea6757f3fb1bdfa65951ce4bd9734b9941ea50ea1cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string.prototype.trim/README.md"));

        // line 1
        echo "String.prototype.trim <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

An ES5 spec-compliant `String.prototype.trim` shim. Invoke its \"shim\" method to shim `String.prototype.trim` if it is unavailable.

This package implements the [es-shim API](https://github.com/es-shims/api) interface. It works in an ES3-supported environment and complies with the [spec](http://www.ecma-international.org/ecma-262/5.1/#sec-15.5.4.20).

Most common usage:

```js
var assert = require('assert');
var trim = require('string.prototype.trim');

assert(trim(' \\t\\na \\t\\n') === 'a');

trim.shim(); // will be a no-op if not needed

assert(trim(' \\t\\na \\t\\n') === ' \\t\\na \\t\\n'.trim());
```

## Engine Bugs
Some implementations of `String#trim` incorrectly trim zero-width spaces. This shim detects and corrects this behavior.

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.com/package/string.prototype.trim
[npm-version-svg]: http://versionbadg.es/es-shims/String.prototype.trim.svg
[travis-svg]: https://travis-ci.org/es-shims/String.prototype.trim.svg
[travis-url]: https://travis-ci.org/es-shims/String.prototype.trim
[deps-svg]: https://david-dm.org/es-shims/String.prototype.trim.svg
[deps-url]: https://david-dm.org/es-shims/String.prototype.trim
[dev-deps-svg]: https://david-dm.org/es-shims/String.prototype.trim/dev-status.svg
[dev-deps-url]: https://david-dm.org/es-shims/String.prototype.trim#info=devDependencies
[testling-svg]: https://ci.testling.com/es-shims/String.prototype.trim.png
[testling-url]: https://ci.testling.com/es-shims/String.prototype.trim
[npm-badge-png]: https://nodei.co/npm/string.prototype.trim.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/string.prototype.trim.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/string.prototype.trim.svg
[downloads-url]: http://npm-stat.com/charts.html?package=string.prototype.trim
";
        
        $__internal_0ac9ff3916632ad7a2b5ea6757f3fb1bdfa65951ce4bd9734b9941ea50ea1cfb->leave($__internal_0ac9ff3916632ad7a2b5ea6757f3fb1bdfa65951ce4bd9734b9941ea50ea1cfb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string.prototype.trim/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("String.prototype.trim <sup>[![Version Badge][npm-version-svg]][package-url]</sup>

[![Build Status][travis-svg]][travis-url]
[![dependency status][deps-svg]][deps-url]
[![dev dependency status][dev-deps-svg]][dev-deps-url]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][npm-badge-png]][package-url]

[![browser support][testling-svg]][testling-url]

An ES5 spec-compliant `String.prototype.trim` shim. Invoke its \"shim\" method to shim `String.prototype.trim` if it is unavailable.

This package implements the [es-shim API](https://github.com/es-shims/api) interface. It works in an ES3-supported environment and complies with the [spec](http://www.ecma-international.org/ecma-262/5.1/#sec-15.5.4.20).

Most common usage:

```js
var assert = require('assert');
var trim = require('string.prototype.trim');

assert(trim(' \\t\\na \\t\\n') === 'a');

trim.shim(); // will be a no-op if not needed

assert(trim(' \\t\\na \\t\\n') === ' \\t\\na \\t\\n'.trim());
```

## Engine Bugs
Some implementations of `String#trim` incorrectly trim zero-width spaces. This shim detects and corrects this behavior.

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[package-url]: https://npmjs.com/package/string.prototype.trim
[npm-version-svg]: http://versionbadg.es/es-shims/String.prototype.trim.svg
[travis-svg]: https://travis-ci.org/es-shims/String.prototype.trim.svg
[travis-url]: https://travis-ci.org/es-shims/String.prototype.trim
[deps-svg]: https://david-dm.org/es-shims/String.prototype.trim.svg
[deps-url]: https://david-dm.org/es-shims/String.prototype.trim
[dev-deps-svg]: https://david-dm.org/es-shims/String.prototype.trim/dev-status.svg
[dev-deps-url]: https://david-dm.org/es-shims/String.prototype.trim#info=devDependencies
[testling-svg]: https://ci.testling.com/es-shims/String.prototype.trim.png
[testling-url]: https://ci.testling.com/es-shims/String.prototype.trim
[npm-badge-png]: https://nodei.co/npm/string.prototype.trim.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/string.prototype.trim.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/string.prototype.trim.svg
[downloads-url]: http://npm-stat.com/charts.html?package=string.prototype.trim
", "node_modules/string.prototype.trim/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string.prototype.trim/README.md");
    }
}
