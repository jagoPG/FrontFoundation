<?php

/* node_modules/gzip-size/readme.md */
class __TwigTemplate_32bd942e6e735877abe9ce67c3d47bb20062d3a324706ff20c895369cf59dfaf extends Twig_Template
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
        $__internal_1d94ff69a934e512a976ec522bf730d80bc0bfb03a6a72c102e2ff61cd33c27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d94ff69a934e512a976ec522bf730d80bc0bfb03a6a72c102e2ff61cd33c27a->enter($__internal_1d94ff69a934e512a976ec522bf730d80bc0bfb03a6a72c102e2ff61cd33c27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/gzip-size/readme.md"));

        // line 1
        echo "# gzip-size [![Build Status](https://travis-ci.org/sindresorhus/gzip-size.svg?branch=master)](https://travis-ci.org/sindresorhus/gzip-size)

> Get the gzipped size of a string or buffer


## Install

```
\$ npm install --save gzip-size
```


## Usage

```js
var gzipSize = require('gzip-size');
var string = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.';

console.log(string.length);
//=> 191

console.log(gzipSize.sync(string));
//=> 78
```


## API

### gzipSize(input, callback)
### gzipSize.sync(input)

#### input

Type: `string`, `buffer`

#### callback(error, size)

Type: `function`

### gzipSize.stream()

Returns a passthrough stream. The stream emits a `gzip-size` event and has a `gzipSize` property.


## Related

- [gzip-size-cli](https://github.com/sindresorhus/gzip-size-cli) - CLI for this module


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_1d94ff69a934e512a976ec522bf730d80bc0bfb03a6a72c102e2ff61cd33c27a->leave($__internal_1d94ff69a934e512a976ec522bf730d80bc0bfb03a6a72c102e2ff61cd33c27a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/gzip-size/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# gzip-size [![Build Status](https://travis-ci.org/sindresorhus/gzip-size.svg?branch=master)](https://travis-ci.org/sindresorhus/gzip-size)

> Get the gzipped size of a string or buffer


## Install

```
\$ npm install --save gzip-size
```


## Usage

```js
var gzipSize = require('gzip-size');
var string = 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.';

console.log(string.length);
//=> 191

console.log(gzipSize.sync(string));
//=> 78
```


## API

### gzipSize(input, callback)
### gzipSize.sync(input)

#### input

Type: `string`, `buffer`

#### callback(error, size)

Type: `function`

### gzipSize.stream()

Returns a passthrough stream. The stream emits a `gzip-size` event and has a `gzipSize` property.


## Related

- [gzip-size-cli](https://github.com/sindresorhus/gzip-size-cli) - CLI for this module


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/gzip-size/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/gzip-size/readme.md");
    }
}
