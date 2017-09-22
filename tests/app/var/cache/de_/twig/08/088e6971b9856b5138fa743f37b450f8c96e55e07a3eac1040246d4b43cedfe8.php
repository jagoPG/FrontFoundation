<?php

/* node_modules/mimic-fn/readme.md */
class __TwigTemplate_8e6e8e53759cdddc216c9b858150a20fcd64db9ef4406d3dfa06d1b7893c8fe6 extends Twig_Template
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
        $__internal_4bc00d3bdedbf6d5def2ae137ee3e5c0d70eae28de48e229a927f50772bc473d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc00d3bdedbf6d5def2ae137ee3e5c0d70eae28de48e229a927f50772bc473d->enter($__internal_4bc00d3bdedbf6d5def2ae137ee3e5c0d70eae28de48e229a927f50772bc473d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/mimic-fn/readme.md"));

        // line 1
        echo "# mimic-fn [![Build Status](https://travis-ci.org/sindresorhus/mimic-fn.svg?branch=master)](https://travis-ci.org/sindresorhus/mimic-fn)

> Make a function mimic another one

Useful when you wrap a function in another function and like to preserve the original name and other properties.


## Install

```
\$ npm install --save mimic-fn
```


## Usage

```js
const mimicFn = require('mimic-fn');

function foo() {}
foo.unicorn = '🦄';

function wrapper() {
\treturn foo() {};
}

console.log(wrapper.name);
//=> 'wrapper'

mimicFn(wrapper, foo);

console.log(wrapper.name);
//=> 'foo'

console.log(wrapper.unicorn);
//=> '🦄'
```


## API

It will copy over the properties `name`, `length`, `displayName`, and any custom properties you may have set.

### mimicFn(to, from)

#### to

Type: `Function`

Mimicking function.

#### from

Type: `Function`

Function to mimic.


## Related

- [rename-fn](https://github.com/sindresorhus/rename-fn) - Rename a function


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_4bc00d3bdedbf6d5def2ae137ee3e5c0d70eae28de48e229a927f50772bc473d->leave($__internal_4bc00d3bdedbf6d5def2ae137ee3e5c0d70eae28de48e229a927f50772bc473d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/mimic-fn/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# mimic-fn [![Build Status](https://travis-ci.org/sindresorhus/mimic-fn.svg?branch=master)](https://travis-ci.org/sindresorhus/mimic-fn)

> Make a function mimic another one

Useful when you wrap a function in another function and like to preserve the original name and other properties.


## Install

```
\$ npm install --save mimic-fn
```


## Usage

```js
const mimicFn = require('mimic-fn');

function foo() {}
foo.unicorn = '🦄';

function wrapper() {
\treturn foo() {};
}

console.log(wrapper.name);
//=> 'wrapper'

mimicFn(wrapper, foo);

console.log(wrapper.name);
//=> 'foo'

console.log(wrapper.unicorn);
//=> '🦄'
```


## API

It will copy over the properties `name`, `length`, `displayName`, and any custom properties you may have set.

### mimicFn(to, from)

#### to

Type: `Function`

Mimicking function.

#### from

Type: `Function`

Function to mimic.


## Related

- [rename-fn](https://github.com/sindresorhus/rename-fn) - Rename a function


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/mimic-fn/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/mimic-fn/readme.md");
    }
}
