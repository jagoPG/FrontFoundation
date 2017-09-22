<?php

/* node_modules/to-fast-properties/readme.md */
class __TwigTemplate_e785779c147aba385a620f5f84b8db4c1b3c994a14712b8f8c6fa1ccbd858bae extends Twig_Template
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
        $__internal_9fada11e9f256b7c0ee65d337af43d39d593362e438956ba7c8e886c3904459a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fada11e9f256b7c0ee65d337af43d39d593362e438956ba7c8e886c3904459a->enter($__internal_9fada11e9f256b7c0ee65d337af43d39d593362e438956ba7c8e886c3904459a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/to-fast-properties/readme.md"));

        // line 1
        echo "# to-fast-properties [![Build Status](https://travis-ci.org/sindresorhus/to-fast-properties.svg?branch=master)](https://travis-ci.org/sindresorhus/to-fast-properties)

> Force V8 to use fast properties for an object

[Read more.](http://stackoverflow.com/questions/24987896/)

Use `%HasFastProperties(object)` and `--allow-natives-syntax` to check whether an object already has fast properties.


## Install

```
\$ npm install --save to-fast-properties
```


## Usage

```js
const toFastProperties = require('to-fast-properties');

const obj = {
\tfoo: true,
\tbar: true
};

delete obj.foo;
// `obj` now has slow properties

toFastProperties(obj);
// `obj` now has fast properties
```


## License

MIT © Petka Antonov, Sindre Sorhus
";
        
        $__internal_9fada11e9f256b7c0ee65d337af43d39d593362e438956ba7c8e886c3904459a->leave($__internal_9fada11e9f256b7c0ee65d337af43d39d593362e438956ba7c8e886c3904459a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/to-fast-properties/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# to-fast-properties [![Build Status](https://travis-ci.org/sindresorhus/to-fast-properties.svg?branch=master)](https://travis-ci.org/sindresorhus/to-fast-properties)

> Force V8 to use fast properties for an object

[Read more.](http://stackoverflow.com/questions/24987896/)

Use `%HasFastProperties(object)` and `--allow-natives-syntax` to check whether an object already has fast properties.


## Install

```
\$ npm install --save to-fast-properties
```


## Usage

```js
const toFastProperties = require('to-fast-properties');

const obj = {
\tfoo: true,
\tbar: true
};

delete obj.foo;
// `obj` now has slow properties

toFastProperties(obj);
// `obj` now has fast properties
```


## License

MIT © Petka Antonov, Sindre Sorhus
", "node_modules/to-fast-properties/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/to-fast-properties/readme.md");
    }
}
