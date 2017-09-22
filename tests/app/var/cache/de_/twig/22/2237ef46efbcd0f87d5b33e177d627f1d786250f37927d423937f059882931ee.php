<?php

/* node_modules/pify/readme.md */
class __TwigTemplate_c4c4ed8e5510572d00f349307def89899748fd41c7b854e6ce02c0725fa405a5 extends Twig_Template
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
        $__internal_0e6053dc2afa6475ef7d19e1f1744f9a56d52ffee029f3f19c7317f590f28d6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e6053dc2afa6475ef7d19e1f1744f9a56d52ffee029f3f19c7317f590f28d6c->enter($__internal_0e6053dc2afa6475ef7d19e1f1744f9a56d52ffee029f3f19c7317f590f28d6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pify/readme.md"));

        // line 1
        echo "# pify [![Build Status](https://travis-ci.org/sindresorhus/pify.svg?branch=master)](https://travis-ci.org/sindresorhus/pify)

> Promisify a callback-style function


## Install

```
\$ npm install --save pify
```


## Usage

```js
const fs = require('fs');
const pify = require('pify');

// promisify a single function

pify(fs.readFile)('package.json', 'utf8').then(data => {
\tconsole.log(JSON.parse(data).name);
\t//=> 'pify'
});

// or promisify all methods in a module

pify(fs).readFile('package.json', 'utf8').then(data => {
\tconsole.log(JSON.parse(data).name);
\t//=> 'pify'
});
```


## API

### pify(input, [promiseModule], [options])

Returns a promise wrapped version of the supplied function or module.

#### input

Type: `function`, `object`

Callback-style function or module whose methods you want to promisify.

#### promiseModule

Type: `function`

Custom promise module to use instead of the native one.

Check out [`pinkie-promise`](https://github.com/floatdrop/pinkie-promise) if you need a tiny promise polyfill.

#### options

##### multiArgs

Type: `boolean`  
Default: `false`

By default, the promisified function will only return the second argument from the callback, which works fine for most APIs. This option can be useful for modules like `request` that return multiple arguments. Turning this on will make it return an array of all arguments from the callback, excluding the error argument, instead of just the second argument.

```js
const request = require('request');
const pify = require('pify');

pify(request, {multiArgs: true})('https://sindresorhus.com').then(result => {
\tconst [httpResponse, body] = result;
});
```

##### include

Type: `array` of (`string`|`regex`)

Methods in a module to promisify. Remaining methods will be left untouched.

##### exclude

Type: `array` of (`string`|`regex`)  
Default: `[/.+Sync\$/]`

Methods in a module **not** to promisify. Methods with names ending with `'Sync'` are excluded by default.

##### excludeMain

Type: `boolean`  
Default: `false`

By default, if given module is a function itself, this function will be promisified. Turn this option on if you want to promisify only methods of the module.

```js
const pify = require('pify');

function fn() {
\treturn true;
}

fn.method = (data, callback) => {
\tsetImmediate(() => {
\t\tcallback(data, null);
\t});
};

// promisify methods but not fn()
const promiseFn = pify(fn, {excludeMain: true});

if (promiseFn()) {
\tpromiseFn.method('hi').then(data => {
\t\tconsole.log(data);
\t});
}
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_0e6053dc2afa6475ef7d19e1f1744f9a56d52ffee029f3f19c7317f590f28d6c->leave($__internal_0e6053dc2afa6475ef7d19e1f1744f9a56d52ffee029f3f19c7317f590f28d6c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pify/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# pify [![Build Status](https://travis-ci.org/sindresorhus/pify.svg?branch=master)](https://travis-ci.org/sindresorhus/pify)

> Promisify a callback-style function


## Install

```
\$ npm install --save pify
```


## Usage

```js
const fs = require('fs');
const pify = require('pify');

// promisify a single function

pify(fs.readFile)('package.json', 'utf8').then(data => {
\tconsole.log(JSON.parse(data).name);
\t//=> 'pify'
});

// or promisify all methods in a module

pify(fs).readFile('package.json', 'utf8').then(data => {
\tconsole.log(JSON.parse(data).name);
\t//=> 'pify'
});
```


## API

### pify(input, [promiseModule], [options])

Returns a promise wrapped version of the supplied function or module.

#### input

Type: `function`, `object`

Callback-style function or module whose methods you want to promisify.

#### promiseModule

Type: `function`

Custom promise module to use instead of the native one.

Check out [`pinkie-promise`](https://github.com/floatdrop/pinkie-promise) if you need a tiny promise polyfill.

#### options

##### multiArgs

Type: `boolean`  
Default: `false`

By default, the promisified function will only return the second argument from the callback, which works fine for most APIs. This option can be useful for modules like `request` that return multiple arguments. Turning this on will make it return an array of all arguments from the callback, excluding the error argument, instead of just the second argument.

```js
const request = require('request');
const pify = require('pify');

pify(request, {multiArgs: true})('https://sindresorhus.com').then(result => {
\tconst [httpResponse, body] = result;
});
```

##### include

Type: `array` of (`string`|`regex`)

Methods in a module to promisify. Remaining methods will be left untouched.

##### exclude

Type: `array` of (`string`|`regex`)  
Default: `[/.+Sync\$/]`

Methods in a module **not** to promisify. Methods with names ending with `'Sync'` are excluded by default.

##### excludeMain

Type: `boolean`  
Default: `false`

By default, if given module is a function itself, this function will be promisified. Turn this option on if you want to promisify only methods of the module.

```js
const pify = require('pify');

function fn() {
\treturn true;
}

fn.method = (data, callback) => {
\tsetImmediate(() => {
\t\tcallback(data, null);
\t});
};

// promisify methods but not fn()
const promiseFn = pify(fn, {excludeMain: true});

if (promiseFn()) {
\tpromiseFn.method('hi').then(data => {
\t\tconsole.log(data);
\t});
}
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/pify/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pify/readme.md");
    }
}
