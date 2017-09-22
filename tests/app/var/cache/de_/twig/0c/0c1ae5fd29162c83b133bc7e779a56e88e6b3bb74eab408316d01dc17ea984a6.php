<?php

/* node_modules/is-stream/readme.md */
class __TwigTemplate_785a5da7f1b17b67407f1696054b7757cd401939d9a879a624c1bafd9b96e2ab extends Twig_Template
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
        $__internal_24c44079230efaf95f0400402b09e41c90e7255187f1ffc0887156c915312b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24c44079230efaf95f0400402b09e41c90e7255187f1ffc0887156c915312b92->enter($__internal_24c44079230efaf95f0400402b09e41c90e7255187f1ffc0887156c915312b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/is-stream/readme.md"));

        // line 1
        echo "# is-stream [![Build Status](https://travis-ci.org/sindresorhus/is-stream.svg?branch=master)](https://travis-ci.org/sindresorhus/is-stream)

> Check if something is a [Node.js stream](https://nodejs.org/api/stream.html)


## Install

```
\$ npm install --save is-stream
```


## Usage

```js
const fs = require('fs');
const isStream = require('is-stream');

isStream(fs.createReadStream('unicorn.png'));
//=> true

isStream({});
//=> false
```


## API

### isStream(stream)

#### isStream.writable(stream)

#### isStream.readable(stream)

#### isStream.duplex(stream)

#### isStream.transform(stream)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_24c44079230efaf95f0400402b09e41c90e7255187f1ffc0887156c915312b92->leave($__internal_24c44079230efaf95f0400402b09e41c90e7255187f1ffc0887156c915312b92_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/is-stream/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# is-stream [![Build Status](https://travis-ci.org/sindresorhus/is-stream.svg?branch=master)](https://travis-ci.org/sindresorhus/is-stream)

> Check if something is a [Node.js stream](https://nodejs.org/api/stream.html)


## Install

```
\$ npm install --save is-stream
```


## Usage

```js
const fs = require('fs');
const isStream = require('is-stream');

isStream(fs.createReadStream('unicorn.png'));
//=> true

isStream({});
//=> false
```


## API

### isStream(stream)

#### isStream.writable(stream)

#### isStream.readable(stream)

#### isStream.duplex(stream)

#### isStream.transform(stream)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/is-stream/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/is-stream/readme.md");
    }
}
