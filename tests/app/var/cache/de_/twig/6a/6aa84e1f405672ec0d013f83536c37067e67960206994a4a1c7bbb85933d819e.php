<?php

/* node_modules/path-type/readme.md */
class __TwigTemplate_5cdf7ce1cb38e4e852ab534790c64b56dca32849250b9089fa803f0d085e31a3 extends Twig_Template
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
        $__internal_2ce2bfb09dbed11437d8a435c021fc1ed80df715c3aebd22cae9d0965e832705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce2bfb09dbed11437d8a435c021fc1ed80df715c3aebd22cae9d0965e832705->enter($__internal_2ce2bfb09dbed11437d8a435c021fc1ed80df715c3aebd22cae9d0965e832705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-type/readme.md"));

        // line 1
        echo "# path-type [![Build Status](https://travis-ci.org/sindresorhus/path-type.svg?branch=master)](https://travis-ci.org/sindresorhus/path-type)

> Check if a path is a file, directory, or symlink


## Install

```
\$ npm install --save path-type
```


## Usage

```js
const pathType = require('path-type');

pathType.file('package.json').then(isFile => {
\tconsole.log(isFile);
\t//=> true
})
```


## API

### .file(path)
### .dir(path)
### .symlink(path)

Returns a `Promise` for a `boolean` of whether the path is the checked type.

### .fileSync(path)
### .dirSync(path)
### .symlinkSync(path)

Returns a `boolean` of whether the path is the checked type.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_2ce2bfb09dbed11437d8a435c021fc1ed80df715c3aebd22cae9d0965e832705->leave($__internal_2ce2bfb09dbed11437d8a435c021fc1ed80df715c3aebd22cae9d0965e832705_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-type/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# path-type [![Build Status](https://travis-ci.org/sindresorhus/path-type.svg?branch=master)](https://travis-ci.org/sindresorhus/path-type)

> Check if a path is a file, directory, or symlink


## Install

```
\$ npm install --save path-type
```


## Usage

```js
const pathType = require('path-type');

pathType.file('package.json').then(isFile => {
\tconsole.log(isFile);
\t//=> true
})
```


## API

### .file(path)
### .dir(path)
### .symlink(path)

Returns a `Promise` for a `boolean` of whether the path is the checked type.

### .fileSync(path)
### .dirSync(path)
### .symlinkSync(path)

Returns a `boolean` of whether the path is the checked type.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/path-type/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-type/readme.md");
    }
}
