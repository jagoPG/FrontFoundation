<?php

/* node_modules/is-callable/README.md */
class __TwigTemplate_af68a52b7689668b76bbce9bcda7ccbef167428bab7a0aad4902a4f010559b69 extends Twig_Template
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
        $__internal_ae69ce36571f2e2a5e8b872c977ea10170ec970390d7de55a9104da3c2edca4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae69ce36571f2e2a5e8b872c977ea10170ec970390d7de55a9104da3c2edca4f->enter($__internal_ae69ce36571f2e2a5e8b872c977ea10170ec970390d7de55a9104da3c2edca4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-callable/README.md"));

        // line 1
        echo "# is-callable <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this JS value callable? Works with Functions and GeneratorFunctions, despite ES6 @@toStringTag.

## Example

```js
var isCallable = require('is-callable');
var assert = require('assert');

assert.notOk(isCallable(undefined));
assert.notOk(isCallable(null));
assert.notOk(isCallable(false));
assert.notOk(isCallable(true));
assert.notOk(isCallable([]));
assert.notOk(isCallable({}));
assert.notOk(isCallable(/a/g));
assert.notOk(isCallable(new RegExp('a', 'g')));
assert.notOk(isCallable(new Date()));
assert.notOk(isCallable(42));
assert.notOk(isCallable(NaN));
assert.notOk(isCallable(Infinity));
assert.notOk(isCallable(new Number(42)));
assert.notOk(isCallable('foo'));
assert.notOk(isCallable(Object('foo')));

assert.ok(isCallable(function () {}));
assert.ok(isCallable(function* () {}));
assert.ok(isCallable(x => x * x));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-callable
[2]: http://versionbadg.es/ljharb/is-callable.svg
[3]: https://travis-ci.org/ljharb/is-callable.svg
[4]: https://travis-ci.org/ljharb/is-callable
[5]: https://david-dm.org/ljharb/is-callable.svg
[6]: https://david-dm.org/ljharb/is-callable
[7]: https://david-dm.org/ljharb/is-callable/dev-status.svg
[8]: https://david-dm.org/ljharb/is-callable#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-callable.png
[10]: https://ci.testling.com/ljharb/is-callable
[11]: https://nodei.co/npm/is-callable.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-callable.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-callable.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-callable
";
        
        $__internal_ae69ce36571f2e2a5e8b872c977ea10170ec970390d7de55a9104da3c2edca4f->leave($__internal_ae69ce36571f2e2a5e8b872c977ea10170ec970390d7de55a9104da3c2edca4f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-callable/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# is-callable <sup>[![Version Badge][2]][1]</sup>

[![Build Status][3]][4]
[![dependency status][5]][6]
[![dev dependency status][7]][8]
[![License][license-image]][license-url]
[![Downloads][downloads-image]][downloads-url]

[![npm badge][11]][1]

[![browser support][9]][10]

Is this JS value callable? Works with Functions and GeneratorFunctions, despite ES6 @@toStringTag.

## Example

```js
var isCallable = require('is-callable');
var assert = require('assert');

assert.notOk(isCallable(undefined));
assert.notOk(isCallable(null));
assert.notOk(isCallable(false));
assert.notOk(isCallable(true));
assert.notOk(isCallable([]));
assert.notOk(isCallable({}));
assert.notOk(isCallable(/a/g));
assert.notOk(isCallable(new RegExp('a', 'g')));
assert.notOk(isCallable(new Date()));
assert.notOk(isCallable(42));
assert.notOk(isCallable(NaN));
assert.notOk(isCallable(Infinity));
assert.notOk(isCallable(new Number(42)));
assert.notOk(isCallable('foo'));
assert.notOk(isCallable(Object('foo')));

assert.ok(isCallable(function () {}));
assert.ok(isCallable(function* () {}));
assert.ok(isCallable(x => x * x));
```

## Tests
Simply clone the repo, `npm install`, and run `npm test`

[1]: https://npmjs.org/package/is-callable
[2]: http://versionbadg.es/ljharb/is-callable.svg
[3]: https://travis-ci.org/ljharb/is-callable.svg
[4]: https://travis-ci.org/ljharb/is-callable
[5]: https://david-dm.org/ljharb/is-callable.svg
[6]: https://david-dm.org/ljharb/is-callable
[7]: https://david-dm.org/ljharb/is-callable/dev-status.svg
[8]: https://david-dm.org/ljharb/is-callable#info=devDependencies
[9]: https://ci.testling.com/ljharb/is-callable.png
[10]: https://ci.testling.com/ljharb/is-callable
[11]: https://nodei.co/npm/is-callable.png?downloads=true&stars=true
[license-image]: http://img.shields.io/npm/l/is-callable.svg
[license-url]: LICENSE
[downloads-image]: http://img.shields.io/npm/dm/is-callable.svg
[downloads-url]: http://npm-stat.com/charts.html?package=is-callable
", "node_modules/is-callable/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-callable/README.md");
    }
}
