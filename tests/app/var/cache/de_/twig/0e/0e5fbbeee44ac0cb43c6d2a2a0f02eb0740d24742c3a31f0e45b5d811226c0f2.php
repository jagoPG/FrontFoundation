<?php

/* node_modules/is-date-object/README.md */
class __TwigTemplate_c0e46e74d4c49531564a8dca77ee0d2c63ac3216c5c3bfeb1b1ae4825292311b extends Twig_Template
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
        $__internal_02985333a6dd0a26cbaa39b1df30292a1edcc833576b30baaa5c227d02f9418a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02985333a6dd0a26cbaa39b1df30292a1edcc833576b30baaa5c227d02f9418a->enter($__internal_02985333a6dd0a26cbaa39b1df30292a1edcc833576b30baaa5c227d02f9418a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-date-object/README.md"));

        // line 1
        echo "# is-date-object <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this value a JS Date object? This module works cross-realm/iframe, and despite ES6 @@toStringTag.

## Example

```js
var isDate = require('is-date-object');
var assert = require('assert');

assert.notOk(isDate(undefined));
assert.notOk(isDate(null));
assert.notOk(isDate(false));
assert.notOk(isDate(true));
assert.notOk(isDate(42));
assert.notOk(isDate('foo'));
assert.notOk(isDate(function () {}));
assert.notOk(isDate([]));
assert.notOk(isDate({}));
assert.notOk(isDate(/a/g));
assert.notOk(isDate(new RegExp('a', 'g')));

assert.ok(isDate(new Date()));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-date-object
[2]: http://versionbadg.es/ljharb/is-date-object.svg
[3]: https://travis-ci.org/ljharb/is-date-object.svg
[4]: https://travis-ci.org/ljharb/is-date-object
[5]: https://david-dm.org/ljharb/is-date-object.svg
[6]: https://david-dm.org/ljharb/is-date-object
[7]: https://david-dm.org/ljharb/is-date-object/dev-status.svg
[8]: https://david-dm.org/ljharb/is-date-object#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-date-object.png
[10]: https://ci.testling.com/ljharb/is-date-object
[11]: https://nodei.co/npm/is-date-object.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-date-object.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-date-object.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-date-object
";
        
        $__internal_02985333a6dd0a26cbaa39b1df30292a1edcc833576b30baaa5c227d02f9418a->leave($__internal_02985333a6dd0a26cbaa39b1df30292a1edcc833576b30baaa5c227d02f9418a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-date-object/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# is-date-object <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this value a JS Date object? This module works cross-realm/iframe, and despite ES6 @@toStringTag.

## Example

```js
var isDate = require('is-date-object');
var assert = require('assert');

assert.notOk(isDate(undefined));
assert.notOk(isDate(null));
assert.notOk(isDate(false));
assert.notOk(isDate(true));
assert.notOk(isDate(42));
assert.notOk(isDate('foo'));
assert.notOk(isDate(function () {}));
assert.notOk(isDate([]));
assert.notOk(isDate({}));
assert.notOk(isDate(/a/g));
assert.notOk(isDate(new RegExp('a', 'g')));

assert.ok(isDate(new Date()));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-date-object
[2]: http://versionbadg.es/ljharb/is-date-object.svg
[3]: https://travis-ci.org/ljharb/is-date-object.svg
[4]: https://travis-ci.org/ljharb/is-date-object
[5]: https://david-dm.org/ljharb/is-date-object.svg
[6]: https://david-dm.org/ljharb/is-date-object
[7]: https://david-dm.org/ljharb/is-date-object/dev-status.svg
[8]: https://david-dm.org/ljharb/is-date-object#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-date-object.png
[10]: https://ci.testling.com/ljharb/is-date-object
[11]: https://nodei.co/npm/is-date-object.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-date-object.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-date-object.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-date-object
", "node_modules/is-date-object/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-date-object/README.md");
    }
}
