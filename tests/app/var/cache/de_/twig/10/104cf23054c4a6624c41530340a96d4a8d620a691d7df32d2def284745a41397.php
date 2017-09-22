<?php

/* node_modules/locate-path/readme.md */
class __TwigTemplate_424bd3ad10ba37c538a3f27222a17235b29906b98eb786683c3508e989e8a791 extends Twig_Template
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
        $__internal_1a8ed98317f03998456d7a074fb30227ec0d1e6b83f8c2bef96e7aaba4fb7010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8ed98317f03998456d7a074fb30227ec0d1e6b83f8c2bef96e7aaba4fb7010->enter($__internal_1a8ed98317f03998456d7a074fb30227ec0d1e6b83f8c2bef96e7aaba4fb7010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/locate-path/readme.md"));

        // line 1
        echo "# locate-path [![Build Status](https://travis-ci.org/sindresorhus/locate-path.svg?branch=master)](https://travis-ci.org/sindresorhus/locate-path)

> Get the first path that exists on disk of multiple paths


## Install

```
\$ npm install --save locate-path
```


## Usage

Here we find the first file that exists on disk, in array order.

```js
const locatePath = require('locate-path');

const files = [
\t'unicorn.png',
\t'rainbow.png', // only this one actually exists on disk
\t'pony.png'
];

locatePath(files).then(foundPath => {
\tconsole.log(foundPath);
\t//=> 'rainbow'
});
```


## API

### locatePath(input, [options])

Returns a `Promise` for the first path that exists or `undefined` if none exists.

#### input

Type: `Iterable<string>`

Paths to check.

#### options

Type: `Object`

##### concurrency

Type: `number`<br>
Default: `Infinity`<br>
Minimum: `1`

Number of concurrently pending promises.

##### preserveOrder

Type: `boolean`<br>
Default: `true`

Preserve `input` order when searching.

Disable this to improve performance if you don't care about the order.

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Current working directory.

### locatePath.sync(input, [options])

Returns the first path that exists or `undefined` if none exists.

#### input

Type: `Iterable<string>`

Paths to check.

#### options

Type: `Object`

##### cwd

Same as above.


## Related

- [path-exists](https://github.com/sindresorhus/path-exists) - Check if a path exists


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_1a8ed98317f03998456d7a074fb30227ec0d1e6b83f8c2bef96e7aaba4fb7010->leave($__internal_1a8ed98317f03998456d7a074fb30227ec0d1e6b83f8c2bef96e7aaba4fb7010_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/locate-path/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# locate-path [![Build Status](https://travis-ci.org/sindresorhus/locate-path.svg?branch=master)](https://travis-ci.org/sindresorhus/locate-path)

> Get the first path that exists on disk of multiple paths


## Install

```
\$ npm install --save locate-path
```


## Usage

Here we find the first file that exists on disk, in array order.

```js
const locatePath = require('locate-path');

const files = [
\t'unicorn.png',
\t'rainbow.png', // only this one actually exists on disk
\t'pony.png'
];

locatePath(files).then(foundPath => {
\tconsole.log(foundPath);
\t//=> 'rainbow'
});
```


## API

### locatePath(input, [options])

Returns a `Promise` for the first path that exists or `undefined` if none exists.

#### input

Type: `Iterable<string>`

Paths to check.

#### options

Type: `Object`

##### concurrency

Type: `number`<br>
Default: `Infinity`<br>
Minimum: `1`

Number of concurrently pending promises.

##### preserveOrder

Type: `boolean`<br>
Default: `true`

Preserve `input` order when searching.

Disable this to improve performance if you don't care about the order.

##### cwd

Type: `string`<br>
Default: `process.cwd()`

Current working directory.

### locatePath.sync(input, [options])

Returns the first path that exists or `undefined` if none exists.

#### input

Type: `Iterable<string>`

Paths to check.

#### options

Type: `Object`

##### cwd

Same as above.


## Related

- [path-exists](https://github.com/sindresorhus/path-exists) - Check if a path exists


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/locate-path/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/locate-path/readme.md");
    }
}
