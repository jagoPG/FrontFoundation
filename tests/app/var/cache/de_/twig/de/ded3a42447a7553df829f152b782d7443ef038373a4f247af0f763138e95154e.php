<?php

/* node_modules/mem/readme.md */
class __TwigTemplate_26208b502a3e394bb8bfcf62baca2ac928c165ae5a379f9444da39b6c305d6c6 extends Twig_Template
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
        $__internal_b7a546d5d5349c2c3e46b90a811e57a28f0922e8ad0d35978c2d5a985bbc6b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7a546d5d5349c2c3e46b90a811e57a28f0922e8ad0d35978c2d5a985bbc6b11->enter($__internal_b7a546d5d5349c2c3e46b90a811e57a28f0922e8ad0d35978c2d5a985bbc6b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mem/readme.md"));

        // line 1
        echo "# mem [![Build Status](https://travis-ci.org/sindresorhus/mem.svg?branch=master)](https://travis-ci.org/sindresorhus/mem)

> [Memoize](https://en.wikipedia.org/wiki/Memoization) functions - An optimization used to speed up consecutive function calls by caching the result of calls with identical input


## Install

```
\$ npm install --save mem
```


## Usage

```js
const mem = require('mem');

let i = 0;
const counter = () => ++i;
const memoized = mem(counter);

memoized('foo');
//=> 1

// cached as it's the same arguments
memoized('foo');
//=> 1

// not cached anymore as the arguments changed
memoized('bar');
//=> 2

memoized('bar');
//=> 2
```

##### Works fine with promise returning functions

```js
const mem = require('mem');

let i = 0;
const counter = () => Promise.resolve(++i);
const memoized = mem(counter);

memoized().then(a => {
\tconsole.log(a);
\t//=> 1

\tmemoized().then(b => {
\t\t// the return value didn't increase as it's cached
\t\tconsole.log(b);
\t\t//=> 1
\t});
});
```

```js
const mem = require('mem');
const got = require('got');
const memGot = mem(got, {maxAge: 1000});

memGot('sindresorhus.com').then(() => {
\t// this call is cached
\tmemGot('sindresorhus.com').then(() => {
\t\tsetTimeout(() => {
\t\t\t// this call is not cached as the cache has expired
\t\t\tmemGot('sindresorhus.com').then(() => {});
\t\t}, 2000);
\t});
});
```


## API

### mem(fn, [options])

#### fn

Type: `Function`

Function to be memoized.

#### options

##### maxAge

Type: `number`<br>
Default: `Infinity`

Milliseconds until the cache expires.

##### cacheKey

Type: `Function`

Determines the cache key for storing the result based on the function arguments. By default, if there's only one argument and it's a [primitive](https://developer.mozilla.org/en-US/docs/Glossary/Primitive), it's used directly as a key, otherwise it's all the function arguments JSON stringified as an array.

You could for example change it to only cache on the first argument `x => JSON.stringify(x)`.

##### cache

Type: `Object`<br>
Default: `new Map()`

Use a different cache storage. Must implement the following methods: `.has(key)`, `.get(key)`, `.set(key, value)`, and optionally `.clear()`. You could for example use a `WeakMap` instead.

### mem.clear(fn)

Clear all cached data of a memoized function.

#### fn

Type: `Function`

Memoized function.


## Tips

### Cache statistics

If you want to know how many times your cache had a hit or a miss, you can make use of [stats-map](https://github.com/SamVerschueren/stats-map) as a replacement for the default cache.

#### Example

```js
const mem = require('mem');
const StatsMap = require('stats-map');
const got = require('got');

const cache = new StatsMap();
const memGot = mem(got, {cache});

memGot('sindresorhus.com')
\t.then(() => memGot('sindresorhus.com'))
\t.then(() => memGot('sindresorhus.com'));

console.log(cache.stats);
//=> {hits: 2, misses: 1}
```


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_b7a546d5d5349c2c3e46b90a811e57a28f0922e8ad0d35978c2d5a985bbc6b11->leave($__internal_b7a546d5d5349c2c3e46b90a811e57a28f0922e8ad0d35978c2d5a985bbc6b11_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mem/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# mem [![Build Status](https://travis-ci.org/sindresorhus/mem.svg?branch=master)](https://travis-ci.org/sindresorhus/mem)

> [Memoize](https://en.wikipedia.org/wiki/Memoization) functions - An optimization used to speed up consecutive function calls by caching the result of calls with identical input


## Install

```
\$ npm install --save mem
```


## Usage

```js
const mem = require('mem');

let i = 0;
const counter = () => ++i;
const memoized = mem(counter);

memoized('foo');
//=> 1

// cached as it's the same arguments
memoized('foo');
//=> 1

// not cached anymore as the arguments changed
memoized('bar');
//=> 2

memoized('bar');
//=> 2
```

##### Works fine with promise returning functions

```js
const mem = require('mem');

let i = 0;
const counter = () => Promise.resolve(++i);
const memoized = mem(counter);

memoized().then(a => {
\tconsole.log(a);
\t//=> 1

\tmemoized().then(b => {
\t\t// the return value didn't increase as it's cached
\t\tconsole.log(b);
\t\t//=> 1
\t});
});
```

```js
const mem = require('mem');
const got = require('got');
const memGot = mem(got, {maxAge: 1000});

memGot('sindresorhus.com').then(() => {
\t// this call is cached
\tmemGot('sindresorhus.com').then(() => {
\t\tsetTimeout(() => {
\t\t\t// this call is not cached as the cache has expired
\t\t\tmemGot('sindresorhus.com').then(() => {});
\t\t}, 2000);
\t});
});
```


## API

### mem(fn, [options])

#### fn

Type: `Function`

Function to be memoized.

#### options

##### maxAge

Type: `number`<br>
Default: `Infinity`

Milliseconds until the cache expires.

##### cacheKey

Type: `Function`

Determines the cache key for storing the result based on the function arguments. By default, if there's only one argument and it's a [primitive](https://developer.mozilla.org/en-US/docs/Glossary/Primitive), it's used directly as a key, otherwise it's all the function arguments JSON stringified as an array.

You could for example change it to only cache on the first argument `x => JSON.stringify(x)`.

##### cache

Type: `Object`<br>
Default: `new Map()`

Use a different cache storage. Must implement the following methods: `.has(key)`, `.get(key)`, `.set(key, value)`, and optionally `.clear()`. You could for example use a `WeakMap` instead.

### mem.clear(fn)

Clear all cached data of a memoized function.

#### fn

Type: `Function`

Memoized function.


## Tips

### Cache statistics

If you want to know how many times your cache had a hit or a miss, you can make use of [stats-map](https://github.com/SamVerschueren/stats-map) as a replacement for the default cache.

#### Example

```js
const mem = require('mem');
const StatsMap = require('stats-map');
const got = require('got');

const cache = new StatsMap();
const memGot = mem(got, {cache});

memGot('sindresorhus.com')
\t.then(() => memGot('sindresorhus.com'))
\t.then(() => memGot('sindresorhus.com'));

console.log(cache.stats);
//=> {hits: 2, misses: 1}
```


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/mem/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mem/readme.md");
    }
}
