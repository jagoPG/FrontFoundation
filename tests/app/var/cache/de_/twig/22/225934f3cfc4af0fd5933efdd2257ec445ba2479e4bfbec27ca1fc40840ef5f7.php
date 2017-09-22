<?php

/* node_modules/read-pkg/readme.md */
class __TwigTemplate_9a911a8b3a27e7cf1b997df3b5cb1b4850e8643be83aad7be446e0267bd26416 extends Twig_Template
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
        $__internal_b025032e714494a52351cbb99d76bef50ef59fb3960f18fb53d252dbb72e1f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b025032e714494a52351cbb99d76bef50ef59fb3960f18fb53d252dbb72e1f76->enter($__internal_b025032e714494a52351cbb99d76bef50ef59fb3960f18fb53d252dbb72e1f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/read-pkg/readme.md"));

        // line 1
        echo "# read-pkg [![Build Status](https://travis-ci.org/sindresorhus/read-pkg.svg?branch=master)](https://travis-ci.org/sindresorhus/read-pkg)

> Read a package.json file


## Why

- [Gracefully handles filesystem issues](https://github.com/isaacs/node-graceful-fs)
- [Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom)
- [Throws more helpful JSON errors](https://github.com/sindresorhus/parse-json)
- [Normalizes the data](https://github.com/npm/normalize-package-data#what-normalization-currently-entails)


## Install

```
\$ npm install --save read-pkg
```


## Usage

```js
const readPkg = require('read-pkg');

readPkg().then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});

readPkg(__dirname).then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});

readPkg(path.join('unicorn', 'package.json')).then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});
```


## API

### readPkg([path], [options])

Returns a `Promise` for the parsed JSON.

### readPkg.sync([path], [options])

Returns the parsed JSON.

#### path

Type: `string`<br>
Default: `.`

Path to a `package.json` file or its directory.

#### options

##### normalize

Type: `boolean`<br>
Default: `true`

[Normalize](https://github.com/npm/normalize-package-data#what-normalization-currently-entails) the package data.


## Related

- [read-pkg-up](https://github.com/sindresorhus/read-pkg-up) - Read the closest package.json file
- [write-pkg](https://github.com/sindresorhus/write-pkg) - Write a `package.json` file
- [load-json-file](https://github.com/sindresorhus/load-json-file) - Read and parse a JSON file


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_b025032e714494a52351cbb99d76bef50ef59fb3960f18fb53d252dbb72e1f76->leave($__internal_b025032e714494a52351cbb99d76bef50ef59fb3960f18fb53d252dbb72e1f76_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/read-pkg/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# read-pkg [![Build Status](https://travis-ci.org/sindresorhus/read-pkg.svg?branch=master)](https://travis-ci.org/sindresorhus/read-pkg)

> Read a package.json file


## Why

- [Gracefully handles filesystem issues](https://github.com/isaacs/node-graceful-fs)
- [Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom)
- [Throws more helpful JSON errors](https://github.com/sindresorhus/parse-json)
- [Normalizes the data](https://github.com/npm/normalize-package-data#what-normalization-currently-entails)


## Install

```
\$ npm install --save read-pkg
```


## Usage

```js
const readPkg = require('read-pkg');

readPkg().then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});

readPkg(__dirname).then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});

readPkg(path.join('unicorn', 'package.json')).then(pkg => {
\tconsole.log(pkg);
\t//=> {name: 'read-pkg', ...}
});
```


## API

### readPkg([path], [options])

Returns a `Promise` for the parsed JSON.

### readPkg.sync([path], [options])

Returns the parsed JSON.

#### path

Type: `string`<br>
Default: `.`

Path to a `package.json` file or its directory.

#### options

##### normalize

Type: `boolean`<br>
Default: `true`

[Normalize](https://github.com/npm/normalize-package-data#what-normalization-currently-entails) the package data.


## Related

- [read-pkg-up](https://github.com/sindresorhus/read-pkg-up) - Read the closest package.json file
- [write-pkg](https://github.com/sindresorhus/write-pkg) - Write a `package.json` file
- [load-json-file](https://github.com/sindresorhus/load-json-file) - Read and parse a JSON file


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/read-pkg/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/read-pkg/readme.md");
    }
}
