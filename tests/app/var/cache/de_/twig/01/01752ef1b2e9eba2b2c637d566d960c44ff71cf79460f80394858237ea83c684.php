<?php

/* node_modules/fast-deep-equal/README.md */
class __TwigTemplate_494f631906d2223384b89969af4e03d8f6103ae4b96849ef961494a3633b33ed extends Twig_Template
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
        $__internal_ebff2a2fe50959f3df46006940539c6809d2581c4fc1ee09a1c4680752aecc73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebff2a2fe50959f3df46006940539c6809d2581c4fc1ee09a1c4680752aecc73->enter($__internal_ebff2a2fe50959f3df46006940539c6809d2581c4fc1ee09a1c4680752aecc73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fast-deep-equal/README.md"));

        // line 1
        echo "# fast-deep-equal
The fastest deep equal

[![Build Status](https://travis-ci.org/epoberezkin/fast-deep-equal.svg?branch=master)](https://travis-ci.org/epoberezkin/fast-deep-equal)
[![npm version](https://badge.fury.io/js/fast-deep-equal.svg)](http://badge.fury.io/js/fast-deep-equal)
[![Coverage Status](https://coveralls.io/repos/github/epoberezkin/fast-deep-equal/badge.svg?branch=master)](https://coveralls.io/github/epoberezkin/fast-deep-equal?branch=master)


## Install

```bash
npm install fast-deep-equal
```


## Features

- ES5 compatible
- works in node.js (0.10+) and browsers (IE9+)
- checks equality of Date and RegExp objects by value.


## Usage

```javascript
var equal = require('fast-deep-equal');
console.log(equal({foo: 'bar'}, {foo: 'bar'})); // true
```


## Performance benchmark

```
fast-deep-equal x 82,915 ops/sec ±0.63% (89 runs sampled)
nano-equal x 50,506 ops/sec ±2.23% (86 runs sampled)
shallow-equal-fuzzy x 14,873 ops/sec ±3.19% (83 runs sampled)
underscore.isEqual x 16,055 ops/sec ±2.29% (85 runs sampled)
lodash.isEqual x 10,740 ops/sec ±1.04% (89 runs sampled)
deep-equal x 12,276 ops/sec ±2.44% (84 runs sampled)
deep-eql x 10,565 ops/sec ±0.89% (90 runs sampled)
assert.deepStrictEqual x 965 ops/sec ±2.99% (81 runs sampled)
The fastest is fast-deep-equal
```

To run benchmark (requires node.js 6+):

```bash
npm install
node benchmark
```


## License

[MIT](https://github.com/epoberezkin/fast-deep-equal/blob/master/LICENSE)
";
        
        $__internal_ebff2a2fe50959f3df46006940539c6809d2581c4fc1ee09a1c4680752aecc73->leave($__internal_ebff2a2fe50959f3df46006940539c6809d2581c4fc1ee09a1c4680752aecc73_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fast-deep-equal/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# fast-deep-equal
The fastest deep equal

[![Build Status](https://travis-ci.org/epoberezkin/fast-deep-equal.svg?branch=master)](https://travis-ci.org/epoberezkin/fast-deep-equal)
[![npm version](https://badge.fury.io/js/fast-deep-equal.svg)](http://badge.fury.io/js/fast-deep-equal)
[![Coverage Status](https://coveralls.io/repos/github/epoberezkin/fast-deep-equal/badge.svg?branch=master)](https://coveralls.io/github/epoberezkin/fast-deep-equal?branch=master)


## Install

```bash
npm install fast-deep-equal
```


## Features

- ES5 compatible
- works in node.js (0.10+) and browsers (IE9+)
- checks equality of Date and RegExp objects by value.


## Usage

```javascript
var equal = require('fast-deep-equal');
console.log(equal({foo: 'bar'}, {foo: 'bar'})); // true
```


## Performance benchmark

```
fast-deep-equal x 82,915 ops/sec ±0.63% (89 runs sampled)
nano-equal x 50,506 ops/sec ±2.23% (86 runs sampled)
shallow-equal-fuzzy x 14,873 ops/sec ±3.19% (83 runs sampled)
underscore.isEqual x 16,055 ops/sec ±2.29% (85 runs sampled)
lodash.isEqual x 10,740 ops/sec ±1.04% (89 runs sampled)
deep-equal x 12,276 ops/sec ±2.44% (84 runs sampled)
deep-eql x 10,565 ops/sec ±0.89% (90 runs sampled)
assert.deepStrictEqual x 965 ops/sec ±2.99% (81 runs sampled)
The fastest is fast-deep-equal
```

To run benchmark (requires node.js 6+):

```bash
npm install
node benchmark
```


## License

[MIT](https://github.com/epoberezkin/fast-deep-equal/blob/master/LICENSE)
", "node_modules/fast-deep-equal/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fast-deep-equal/README.md");
    }
}
