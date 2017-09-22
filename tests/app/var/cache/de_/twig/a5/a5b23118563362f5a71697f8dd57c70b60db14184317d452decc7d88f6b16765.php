<?php

/* node_modules/is-equal-shallow/README.md */
class __TwigTemplate_603c2347a3608f3dd70b221c7f9593b2d1b4443a95d3e2b2e81ba01e5befa69e extends Twig_Template
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
        $__internal_7b3934cdf9d5f3c0156d54f389cb9bb6a880b70eff33534e4464018dc9451112 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3934cdf9d5f3c0156d54f389cb9bb6a880b70eff33534e4464018dc9451112->enter($__internal_7b3934cdf9d5f3c0156d54f389cb9bb6a880b70eff33534e4464018dc9451112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-equal-shallow/README.md"));

        // line 1
        echo "# is-equal-shallow [![NPM version](https://badge.fury.io/js/is-equal-shallow.svg)](http://badge.fury.io/js/is-equal-shallow)  [![Build Status](https://travis-ci.org/jonschlinkert/is-equal-shallow.svg)](https://travis-ci.org/jonschlinkert/is-equal-shallow)

> Does a shallow comparison of two objects, returning false if the keys or values differ.

The purpose of this lib is to do the fastest comparison possible of two objects when the values will predictably be primitives.

* only compares objects.
* only compares the first level of each object
* values must be primitives. If a value is not a primitive, even if the values are the same, `false` is returned.

Install with [npm](https://www.npmjs.com/)

```sh
\$ npm i is-equal-shallow --save
```

## Usage

```js
var equals = require('is-equal-shallow');
equals(object_a, object_b);
```

**Examples**

```js
equals({a: true, b: true}, {a: true, b: true});
//=> 'true'

equals({a: true, b: false}, {c: false, b: false});
//=> 'false'

equals({a: true, b: false}, {a: false, b: false});
//=> 'false'
```

Strict comparison for equality:

```js
equals({a: true, b: true}, {a: true, b: 'true'});
//=> 'false'
```

When values are not primitives, `false` is always returned:

```js
equals({ b: {}}, { b: {}});
//=> 'false'

equals({ b: []}, { b: []});
//=> 'false'
```

## Related projects

Other object utils:

* [clone-deep](https://github.com/jonschlinkert/clone-deep): Recursively (deep) clone JavaScript native types, like Object, Array, RegExp, Date as well as primitives.
* [for-in](https://github.com/jonschlinkert/for-in): Iterate over the own and inherited enumerable properties of an objecte, and return an object… [more](https://github.com/jonschlinkert/for-in)
* [for-own](https://github.com/jonschlinkert/for-own): Iterate over the own enumerable properties of an object, and return an object with properties… [more](https://github.com/jonschlinkert/for-own)
* [is-plain-object](https://github.com/jonschlinkert/is-plain-object): Returns true if an object was created by the `Object` constructor.
* [isobject](https://github.com/jonschlinkert/isobject): Returns true if the value is an object and not an array or null.

## Running tests

Install dev dependencies:

```sh
\$ npm i -d && npm test
```

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/is-equal-shallow/issues/new)

## Author

**Jon Schlinkert**

+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2015 Jon Schlinkert
Released under the MIT license.

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on June 22, 2015._";
        
        $__internal_7b3934cdf9d5f3c0156d54f389cb9bb6a880b70eff33534e4464018dc9451112->leave($__internal_7b3934cdf9d5f3c0156d54f389cb9bb6a880b70eff33534e4464018dc9451112_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-equal-shallow/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# is-equal-shallow [![NPM version](https://badge.fury.io/js/is-equal-shallow.svg)](http://badge.fury.io/js/is-equal-shallow)  [![Build Status](https://travis-ci.org/jonschlinkert/is-equal-shallow.svg)](https://travis-ci.org/jonschlinkert/is-equal-shallow)

> Does a shallow comparison of two objects, returning false if the keys or values differ.

The purpose of this lib is to do the fastest comparison possible of two objects when the values will predictably be primitives.

* only compares objects.
* only compares the first level of each object
* values must be primitives. If a value is not a primitive, even if the values are the same, `false` is returned.

Install with [npm](https://www.npmjs.com/)

```sh
\$ npm i is-equal-shallow --save
```

## Usage

```js
var equals = require('is-equal-shallow');
equals(object_a, object_b);
```

**Examples**

```js
equals({a: true, b: true}, {a: true, b: true});
//=> 'true'

equals({a: true, b: false}, {c: false, b: false});
//=> 'false'

equals({a: true, b: false}, {a: false, b: false});
//=> 'false'
```

Strict comparison for equality:

```js
equals({a: true, b: true}, {a: true, b: 'true'});
//=> 'false'
```

When values are not primitives, `false` is always returned:

```js
equals({ b: {}}, { b: {}});
//=> 'false'

equals({ b: []}, { b: []});
//=> 'false'
```

## Related projects

Other object utils:

* [clone-deep](https://github.com/jonschlinkert/clone-deep): Recursively (deep) clone JavaScript native types, like Object, Array, RegExp, Date as well as primitives.
* [for-in](https://github.com/jonschlinkert/for-in): Iterate over the own and inherited enumerable properties of an objecte, and return an object… [more](https://github.com/jonschlinkert/for-in)
* [for-own](https://github.com/jonschlinkert/for-own): Iterate over the own enumerable properties of an object, and return an object with properties… [more](https://github.com/jonschlinkert/for-own)
* [is-plain-object](https://github.com/jonschlinkert/is-plain-object): Returns true if an object was created by the `Object` constructor.
* [isobject](https://github.com/jonschlinkert/isobject): Returns true if the value is an object and not an array or null.

## Running tests

Install dev dependencies:

```sh
\$ npm i -d && npm test
```

## Contributing

Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/is-equal-shallow/issues/new)

## Author

**Jon Schlinkert**

+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert)

## License

Copyright © 2015 Jon Schlinkert
Released under the MIT license.

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on June 22, 2015._", "node_modules/is-equal-shallow/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-equal-shallow/README.md");
    }
}