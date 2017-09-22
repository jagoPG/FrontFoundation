<?php

/* node_modules/path-key/readme.md */
class __TwigTemplate_9cd56b8e00cc35955e54e638aba6f9846dc3a530202ff40ca89d7db2049bba52 extends Twig_Template
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
        $__internal_ed0d571ba01eeeb23733d45e585ba070fcdc63e41a2aa8010ec06f7ecf80d419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d571ba01eeeb23733d45e585ba070fcdc63e41a2aa8010ec06f7ecf80d419->enter($__internal_ed0d571ba01eeeb23733d45e585ba070fcdc63e41a2aa8010ec06f7ecf80d419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-key/readme.md"));

        // line 1
        echo "# path-key [![Build Status](https://travis-ci.org/sindresorhus/path-key.svg?branch=master)](https://travis-ci.org/sindresorhus/path-key)

> Get the [PATH](https://en.wikipedia.org/wiki/PATH_(variable)) environment variable key cross-platform

It's usually `PATH`, but on Windows it can be any casing like `Path`...


## Install

```
\$ npm install --save path-key
```


## Usage

```js
const pathKey = require('path-key');

const key = pathKey();
//=> 'PATH'

const PATH = process.env[key];
//=> '/usr/local/bin:/usr/bin:/bin'
```


## API

### pathKey([options])

#### options

##### env

Type: `Object`<br>
Default: [`process.env`](https://nodejs.org/api/process.html#process_process_env)

Use a custom environment variables object.

#### platform

Type: `string`<br>
Default: [`process.platform`](https://nodejs.org/api/process.html#process_process_platform)

Get the PATH key for a specific platform.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_ed0d571ba01eeeb23733d45e585ba070fcdc63e41a2aa8010ec06f7ecf80d419->leave($__internal_ed0d571ba01eeeb23733d45e585ba070fcdc63e41a2aa8010ec06f7ecf80d419_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-key/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# path-key [![Build Status](https://travis-ci.org/sindresorhus/path-key.svg?branch=master)](https://travis-ci.org/sindresorhus/path-key)

> Get the [PATH](https://en.wikipedia.org/wiki/PATH_(variable)) environment variable key cross-platform

It's usually `PATH`, but on Windows it can be any casing like `Path`...


## Install

```
\$ npm install --save path-key
```


## Usage

```js
const pathKey = require('path-key');

const key = pathKey();
//=> 'PATH'

const PATH = process.env[key];
//=> '/usr/local/bin:/usr/bin:/bin'
```


## API

### pathKey([options])

#### options

##### env

Type: `Object`<br>
Default: [`process.env`](https://nodejs.org/api/process.html#process_process_env)

Use a custom environment variables object.

#### platform

Type: `string`<br>
Default: [`process.platform`](https://nodejs.org/api/process.html#process_process_platform)

Get the PATH key for a specific platform.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/path-key/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-key/readme.md");
    }
}
