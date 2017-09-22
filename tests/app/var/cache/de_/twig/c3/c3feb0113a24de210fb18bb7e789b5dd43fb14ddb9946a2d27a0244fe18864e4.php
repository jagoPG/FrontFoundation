<?php

/* node_modules/is-regex/README.md */
class __TwigTemplate_ced9809d688b81bf7e170bac7e16262deacdf70edfbd3347377c759553670780 extends Twig_Template
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
        $__internal_d4cdfc3000ea1184635dec3de797a4ddd5f989b8824488e62f3036cbda3c3f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4cdfc3000ea1184635dec3de797a4ddd5f989b8824488e62f3036cbda3c3f44->enter($__internal_d4cdfc3000ea1184635dec3de797a4ddd5f989b8824488e62f3036cbda3c3f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-regex/README.md"));

        // line 1
        echo "#is-regex <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this value a JS regex?
This module works cross-realm/iframe, and despite ES6 @@toStringTag.

## Example

```js
var isRegex = require('is-regex');
var assert = require('assert');

assert.notOk(isRegex(undefined));
assert.notOk(isRegex(null));
assert.notOk(isRegex(false));
assert.notOk(isRegex(true));
assert.notOk(isRegex(42));
assert.notOk(isRegex('foo'));
assert.notOk(isRegex(function () {}));
assert.notOk(isRegex([]));
assert.notOk(isRegex({}));

assert.ok(isRegex(/a/g));
assert.ok(isRegex(new RegExp('a', 'g')));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-regex
[2]: http://versionbadg.es/ljharb/is-regex.svg
[3]: https://travis-ci.org/ljharb/is-regex.svg
[4]: https://travis-ci.org/ljharb/is-regex
[5]: https://david-dm.org/ljharb/is-regex.svg
[6]: https://david-dm.org/ljharb/is-regex
[7]: https://david-dm.org/ljharb/is-regex/dev-status.svg
[8]: https://david-dm.org/ljharb/is-regex#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-regex.png
[10]: https://ci.testling.com/ljharb/is-regex
[11]: https://nodei.co/npm/is-regex.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-regex.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-regex.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-regex

";
        
        $__internal_d4cdfc3000ea1184635dec3de797a4ddd5f989b8824488e62f3036cbda3c3f44->leave($__internal_d4cdfc3000ea1184635dec3de797a4ddd5f989b8824488e62f3036cbda3c3f44_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-regex/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("#is-regex <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this value a JS regex?
This module works cross-realm/iframe, and despite ES6 @@toStringTag.

## Example

```js
var isRegex = require('is-regex');
var assert = require('assert');

assert.notOk(isRegex(undefined));
assert.notOk(isRegex(null));
assert.notOk(isRegex(false));
assert.notOk(isRegex(true));
assert.notOk(isRegex(42));
assert.notOk(isRegex('foo'));
assert.notOk(isRegex(function () {}));
assert.notOk(isRegex([]));
assert.notOk(isRegex({}));

assert.ok(isRegex(/a/g));
assert.ok(isRegex(new RegExp('a', 'g')));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-regex
[2]: http://versionbadg.es/ljharb/is-regex.svg
[3]: https://travis-ci.org/ljharb/is-regex.svg
[4]: https://travis-ci.org/ljharb/is-regex
[5]: https://david-dm.org/ljharb/is-regex.svg
[6]: https://david-dm.org/ljharb/is-regex
[7]: https://david-dm.org/ljharb/is-regex/dev-status.svg
[8]: https://david-dm.org/ljharb/is-regex#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-regex.png
[10]: https://ci.testling.com/ljharb/is-regex
[11]: https://nodei.co/npm/is-regex.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-regex.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-regex.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-regex

", "node_modules/is-regex/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-regex/README.md");
    }
}
