<?php

/* node_modules/p-locate/readme.md */
class __TwigTemplate_e133cd9af1902317341c2af7f4090ee664cda4fbdb3ea06d142cd46807aa5762 extends Twig_Template
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
        $__internal_c3f348ffcc87a645f58724ffe52a2229cba93f9a99a7be9a5e20b010092d74ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f348ffcc87a645f58724ffe52a2229cba93f9a99a7be9a5e20b010092d74ff->enter($__internal_c3f348ffcc87a645f58724ffe52a2229cba93f9a99a7be9a5e20b010092d74ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-locate/readme.md"));

        // line 1
        echo "# p-locate [![Build Status](https://travis-ci.org/sindresorhus/p-locate.svg?branch=master)](https://travis-ci.org/sindresorhus/p-locate)

> Get the first fulfilled promise that satisfies the provided testing function

Think of it like an async version of [`Array#find`](https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Array/find).


## Install

```
\$ npm install --save p-locate
```


## Usage

Here we find the first file that exists on disk, in array order.

```js
const pathExists = require('path-exists');
const pLocate = require('p-locate');

const files = [
\t'unicorn.png',
\t'rainbow.png', // only this one actually exists on disk
\t'pony.png'
];

pLocate(files, file => pathExists(file)).then(foundPath => {
\tconsole.log(foundPath);
\t//=> 'rainbow'
});
```

*The above is just an example. Use [`locate-path`](https://github.com/sindresorhus/locate-path) if you need this.*


## API

### pLocate(input, tester, [options])

Returns a `Promise` that is fulfilled when `tester` resolves to `true` or the iterable is done, or rejects if any of the promises reject. The fulfilled value is the current iterable value or `undefined` if `tester` never resolved to `true`.

#### input

Type: `Iterable<Promise|any>`

#### tester(element)

Type: `Function`

Expected to return a `Promise<boolean>` or boolean.

#### options

Type: `Object`

##### concurrency

Type: `number`<br>
Default: `Infinity`<br>
Minimum: `1`

Number of concurrently pending promises returned by `tester`.

##### preserveOrder

Type: `boolean`<br>
Default: `true`

Preserve `input` order when searching.

Disable this to improve performance if you don't care about the order.


## Related

- [p-map](https://github.com/sindresorhus/p-map) - Map over promises concurrently
- [p-filter](https://github.com/sindresorhus/p-filter) - Filter promises concurrently
- [p-any](https://github.com/sindresorhus/p-any) - Wait for any promise to be fulfilled
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_c3f348ffcc87a645f58724ffe52a2229cba93f9a99a7be9a5e20b010092d74ff->leave($__internal_c3f348ffcc87a645f58724ffe52a2229cba93f9a99a7be9a5e20b010092d74ff_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-locate/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# p-locate [![Build Status](https://travis-ci.org/sindresorhus/p-locate.svg?branch=master)](https://travis-ci.org/sindresorhus/p-locate)

> Get the first fulfilled promise that satisfies the provided testing function

Think of it like an async version of [`Array#find`](https://developer.mozilla.org/en/docs/Web/JavaScript/Reference/Global_Objects/Array/find).


## Install

```
\$ npm install --save p-locate
```


## Usage

Here we find the first file that exists on disk, in array order.

```js
const pathExists = require('path-exists');
const pLocate = require('p-locate');

const files = [
\t'unicorn.png',
\t'rainbow.png', // only this one actually exists on disk
\t'pony.png'
];

pLocate(files, file => pathExists(file)).then(foundPath => {
\tconsole.log(foundPath);
\t//=> 'rainbow'
});
```

*The above is just an example. Use [`locate-path`](https://github.com/sindresorhus/locate-path) if you need this.*


## API

### pLocate(input, tester, [options])

Returns a `Promise` that is fulfilled when `tester` resolves to `true` or the iterable is done, or rejects if any of the promises reject. The fulfilled value is the current iterable value or `undefined` if `tester` never resolved to `true`.

#### input

Type: `Iterable<Promise|any>`

#### tester(element)

Type: `Function`

Expected to return a `Promise<boolean>` or boolean.

#### options

Type: `Object`

##### concurrency

Type: `number`<br>
Default: `Infinity`<br>
Minimum: `1`

Number of concurrently pending promises returned by `tester`.

##### preserveOrder

Type: `boolean`<br>
Default: `true`

Preserve `input` order when searching.

Disable this to improve performance if you don't care about the order.


## Related

- [p-map](https://github.com/sindresorhus/p-map) - Map over promises concurrently
- [p-filter](https://github.com/sindresorhus/p-filter) - Filter promises concurrently
- [p-any](https://github.com/sindresorhus/p-any) - Wait for any promise to be fulfilled
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/p-locate/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-locate/readme.md");
    }
}
