<?php

/* node_modules/load-json-file/readme.md */
class __TwigTemplate_4f9ea668e53bd10e409f009b9b8515edc439436a3c89b1f7861398492b11b2c9 extends Twig_Template
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
        $__internal_04707fa0c3d55fcc0c7c99cdc36b602fb8e4504ad873f16ac27d55553bf4f88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04707fa0c3d55fcc0c7c99cdc36b602fb8e4504ad873f16ac27d55553bf4f88e->enter($__internal_04707fa0c3d55fcc0c7c99cdc36b602fb8e4504ad873f16ac27d55553bf4f88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/load-json-file/readme.md"));

        // line 1
        echo "# load-json-file [![Build Status](https://travis-ci.org/sindresorhus/load-json-file.svg?branch=master)](https://travis-ci.org/sindresorhus/load-json-file)

> Read and parse a JSON file

[Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom), uses [`graceful-fs`](https://github.com/isaacs/node-graceful-fs), and throws more [helpful JSON errors](https://github.com/sindresorhus/parse-json).


## Install

```
\$ npm install --save load-json-file
```


## Usage

```js
const loadJsonFile = require('load-json-file');

loadJsonFile('foo.json').then(json => {
\tconsole.log(json);
\t//=> {foo: true}
});
```


## API

### loadJsonFile(filepath)

Returns a promise for the parsed JSON.

### loadJsonFile.sync(filepath)

Returns the parsed JSON.


## Related

- [write-json-file](https://github.com/sindresorhus/write-json-file) - Stringify and write JSON to a file atomically


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_04707fa0c3d55fcc0c7c99cdc36b602fb8e4504ad873f16ac27d55553bf4f88e->leave($__internal_04707fa0c3d55fcc0c7c99cdc36b602fb8e4504ad873f16ac27d55553bf4f88e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/load-json-file/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# load-json-file [![Build Status](https://travis-ci.org/sindresorhus/load-json-file.svg?branch=master)](https://travis-ci.org/sindresorhus/load-json-file)

> Read and parse a JSON file

[Strips UTF-8 BOM](https://github.com/sindresorhus/strip-bom), uses [`graceful-fs`](https://github.com/isaacs/node-graceful-fs), and throws more [helpful JSON errors](https://github.com/sindresorhus/parse-json).


## Install

```
\$ npm install --save load-json-file
```


## Usage

```js
const loadJsonFile = require('load-json-file');

loadJsonFile('foo.json').then(json => {
\tconsole.log(json);
\t//=> {foo: true}
});
```


## API

### loadJsonFile(filepath)

Returns a promise for the parsed JSON.

### loadJsonFile.sync(filepath)

Returns the parsed JSON.


## Related

- [write-json-file](https://github.com/sindresorhus/write-json-file) - Stringify and write JSON to a file atomically


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/load-json-file/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/load-json-file/readme.md");
    }
}
