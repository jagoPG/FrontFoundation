<?php

/* node_modules/p-limit/readme.md */
class __TwigTemplate_1d13c4e7f4f75b3cffedc536cb4a1f83120fe339f06166855c257d3f9049173b extends Twig_Template
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
        $__internal_6cac48958dddfa25b2220ab5a1ecc5d2f45275a64b8f3077dc7946dccedc1fb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cac48958dddfa25b2220ab5a1ecc5d2f45275a64b8f3077dc7946dccedc1fb2->enter($__internal_6cac48958dddfa25b2220ab5a1ecc5d2f45275a64b8f3077dc7946dccedc1fb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-limit/readme.md"));

        // line 1
        echo "# p-limit [![Build Status](https://travis-ci.org/sindresorhus/p-limit.svg?branch=master)](https://travis-ci.org/sindresorhus/p-limit)

> Run multiple promise-returning & async functions with limited concurrency


## Install

```
\$ npm install --save p-limit
```


## Usage

```js
const pLimit = require('p-limit');

const limit = pLimit(1);

const input = [
\tlimit(() => fetchSomething('foo')),
\tlimit(() => fetchSomething('bar')),
\tlimit(() => doSomething())
];

// only one promise is run at once
Promise.all(input).then(result => {
\tconsole.log(result);
});
```


## API

### pLimit(concurrency)

Returns a `limit` function.

#### concurrency

Type: `number`<br>
Minimum: `1`

Concurrency limit.

### limit(fn)

Returns the promise returned by calling `fn`.

#### fn

Type: `Function`

Promise-returning/async function.


## Related

- [p-queue](https://github.com/sindresorhus/p-queue) - Promise queue with concurrency control
- [p-throttle](https://github.com/sindresorhus/p-throttle) - Throttle promise-returning & async functions
- [p-debounce](https://github.com/sindresorhus/p-debounce) - Debounce promise-returning & async functions
- [p-all](https://github.com/sindresorhus/p-all) - Run promise-returning & async functions concurrently with optional limited concurrency
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_6cac48958dddfa25b2220ab5a1ecc5d2f45275a64b8f3077dc7946dccedc1fb2->leave($__internal_6cac48958dddfa25b2220ab5a1ecc5d2f45275a64b8f3077dc7946dccedc1fb2_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-limit/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# p-limit [![Build Status](https://travis-ci.org/sindresorhus/p-limit.svg?branch=master)](https://travis-ci.org/sindresorhus/p-limit)

> Run multiple promise-returning & async functions with limited concurrency


## Install

```
\$ npm install --save p-limit
```


## Usage

```js
const pLimit = require('p-limit');

const limit = pLimit(1);

const input = [
\tlimit(() => fetchSomething('foo')),
\tlimit(() => fetchSomething('bar')),
\tlimit(() => doSomething())
];

// only one promise is run at once
Promise.all(input).then(result => {
\tconsole.log(result);
});
```


## API

### pLimit(concurrency)

Returns a `limit` function.

#### concurrency

Type: `number`<br>
Minimum: `1`

Concurrency limit.

### limit(fn)

Returns the promise returned by calling `fn`.

#### fn

Type: `Function`

Promise-returning/async function.


## Related

- [p-queue](https://github.com/sindresorhus/p-queue) - Promise queue with concurrency control
- [p-throttle](https://github.com/sindresorhus/p-throttle) - Throttle promise-returning & async functions
- [p-debounce](https://github.com/sindresorhus/p-debounce) - Debounce promise-returning & async functions
- [p-all](https://github.com/sindresorhus/p-all) - Run promise-returning & async functions concurrently with optional limited concurrency
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/p-limit/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-limit/readme.md");
    }
}
