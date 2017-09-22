<?php

/* node_modules/read-pkg-up/readme.md */
class __TwigTemplate_07835b0ff35bd81305d8c560380a3200d0a15224eb9adb7b7ad7cacc280a781f extends Twig_Template
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
        $__internal_0f5c6f2e87058db2f868905065124be951d341f4a06e9c5bea66a81fa6b85654 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5c6f2e87058db2f868905065124be951d341f4a06e9c5bea66a81fa6b85654->enter($__internal_0f5c6f2e87058db2f868905065124be951d341f4a06e9c5bea66a81fa6b85654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/read-pkg-up/readme.md"));

        // line 1
        echo "# read-pkg-up [![Build Status](https://travis-ci.org/sindresorhus/read-pkg-up.svg?branch=master)](https://travis-ci.org/sindresorhus/read-pkg-up)

> Read the closest package.json file


## Why

- [Finds the closest package.json](https://github.com/sindresorhus/find-up)
- [Gracefully handles filesystem issues](https://github.com/isaacs/node-graceful-fs)
- [Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom)
- [Throws more helpful JSON errors](https://github.com/sindresorhus/parse-json)
- [Normalizes the data](https://github.com/npm/normalize-package-data#what-normalization-currently-entails)


## Install

```
\$ npm install --save read-pkg-up
```


## Usage

```js
const readPkgUp = require('read-pkg-up');

readPkgUp().then(result => {
\tconsole.log(result);
\t/*
\t{
\t\tpkg: {
\t\t\tname: 'awesome-package',
\t\t\tversion: '1.0.0',
\t\t\t...
\t\t},
\t\tpath: '/Users/sindresorhus/dev/awesome-package/package.json'
\t}
\t*/
});
```


## API

### readPkgUp([options])

Returns a `Promise` for the result object.

### readPkgUp.sync([options])

Returns the result object.

#### options

##### cwd

Type: `string`<br>
Default: `.`

Directory to start looking for a package.json file.

##### normalize

Type: `boolean`<br>
Default: `true`

[Normalize](https://github.com/npm/normalize-package-data#what-normalization-currently-entails) the package data.


## Related

- [read-pkg](https://github.com/sindresorhus/read-pkg) - Read a package.json file
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [find-up](https://github.com/sindresorhus/find-up) - Find a file by walking up parent directories
- [pkg-conf](https://github.com/sindresorhus/pkg-conf) - Get namespaced config from the closest package.json


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_0f5c6f2e87058db2f868905065124be951d341f4a06e9c5bea66a81fa6b85654->leave($__internal_0f5c6f2e87058db2f868905065124be951d341f4a06e9c5bea66a81fa6b85654_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/read-pkg-up/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# read-pkg-up [![Build Status](https://travis-ci.org/sindresorhus/read-pkg-up.svg?branch=master)](https://travis-ci.org/sindresorhus/read-pkg-up)

> Read the closest package.json file


## Why

- [Finds the closest package.json](https://github.com/sindresorhus/find-up)
- [Gracefully handles filesystem issues](https://github.com/isaacs/node-graceful-fs)
- [Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom)
- [Throws more helpful JSON errors](https://github.com/sindresorhus/parse-json)
- [Normalizes the data](https://github.com/npm/normalize-package-data#what-normalization-currently-entails)


## Install

```
\$ npm install --save read-pkg-up
```


## Usage

```js
const readPkgUp = require('read-pkg-up');

readPkgUp().then(result => {
\tconsole.log(result);
\t/*
\t{
\t\tpkg: {
\t\t\tname: 'awesome-package',
\t\t\tversion: '1.0.0',
\t\t\t...
\t\t},
\t\tpath: '/Users/sindresorhus/dev/awesome-package/package.json'
\t}
\t*/
});
```


## API

### readPkgUp([options])

Returns a `Promise` for the result object.

### readPkgUp.sync([options])

Returns the result object.

#### options

##### cwd

Type: `string`<br>
Default: `.`

Directory to start looking for a package.json file.

##### normalize

Type: `boolean`<br>
Default: `true`

[Normalize](https://github.com/npm/normalize-package-data#what-normalization-currently-entails) the package data.


## Related

- [read-pkg](https://github.com/sindresorhus/read-pkg) - Read a package.json file
- [pkg-up](https://github.com/sindresorhus/pkg-up) - Find the closest package.json file
- [find-up](https://github.com/sindresorhus/find-up) - Find a file by walking up parent directories
- [pkg-conf](https://github.com/sindresorhus/pkg-conf) - Get namespaced config from the closest package.json


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/read-pkg-up/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/read-pkg-up/readme.md");
    }
}
