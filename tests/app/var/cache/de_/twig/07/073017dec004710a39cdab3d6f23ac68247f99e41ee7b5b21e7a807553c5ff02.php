<?php

/* node_modules/prr/README.md */
class __TwigTemplate_29e02fdc50fc671acb075ad29ab86950db528ddc0b1c228c11bf0d6334bb6e29 extends Twig_Template
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
        $__internal_105cd78f4393bb44cb7f0d7de2b0df654ed137196f4c9af41e61f03c0c7edddd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105cd78f4393bb44cb7f0d7de2b0df654ed137196f4c9af41e61f03c0c7edddd->enter($__internal_105cd78f4393bb44cb7f0d7de2b0df654ed137196f4c9af41e61f03c0c7edddd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/prr/README.md"));

        // line 1
        echo "# prr [![Build Status](https://secure.travis-ci.org/rvagg/prr.png)](http://travis-ci.org/rvagg/prr)

An sensible alternative to `Object.defineProperty()`. Available in npm and Ender as **prr**.

## Usage

Set the property `'foo'` (`obj.foo`) to have the value `'bar'` with default options (*enumerable, configurable and writable are all false*):

```js
prr(obj, 'foo', 'bar')
```

Adjust the default options:

```js
prr(obj, 'foo', 'bar', { enumerable: true, writable: true })
```

Do the same operation for multiple properties:

```js
prr(obj, { one: 'one', two: 'two' })
// or with options:
prr(obj, { one: 'one', two: 'two' }, { enumerable: true, writable: true })
```

But obviously, having to write out the full options object makes it nearly as bad as the original `Object.defineProperty()` so we can **simplify**.

As an alternative method we can use an options string where each character represents a option: `'e'=='enumerable'`, `'c'=='configurable'` and `'w'=='writable'`:

```js
prr(obj, 'foo', 'bar', 'ew') // enumerable and writable but not configurable
// muliple properties:
prr(obj, { one: 'one', two: 'two' }, 'ewc') // configurable too
```

## Where can I use it?

Anywhere! For pre-ES5 environments *prr* will simply fall-back to an `object[property] = value` so you can get close to what you want.

*prr* is Ender-compatible so you can include it in your Ender build and `\$.prr(...)` or `var prr = require('prr'); prr(...)`.

## Licence

prr is Copyright (c) 2013 Rod Vagg [@rvagg](https://twitter.com/rvagg) and licensed under the MIT licence. All rights not explicitly granted in the MIT license are reserved. See the included LICENSE file for more details.";
        
        $__internal_105cd78f4393bb44cb7f0d7de2b0df654ed137196f4c9af41e61f03c0c7edddd->leave($__internal_105cd78f4393bb44cb7f0d7de2b0df654ed137196f4c9af41e61f03c0c7edddd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/prr/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# prr [![Build Status](https://secure.travis-ci.org/rvagg/prr.png)](http://travis-ci.org/rvagg/prr)

An sensible alternative to `Object.defineProperty()`. Available in npm and Ender as **prr**.

## Usage

Set the property `'foo'` (`obj.foo`) to have the value `'bar'` with default options (*enumerable, configurable and writable are all false*):

```js
prr(obj, 'foo', 'bar')
```

Adjust the default options:

```js
prr(obj, 'foo', 'bar', { enumerable: true, writable: true })
```

Do the same operation for multiple properties:

```js
prr(obj, { one: 'one', two: 'two' })
// or with options:
prr(obj, { one: 'one', two: 'two' }, { enumerable: true, writable: true })
```

But obviously, having to write out the full options object makes it nearly as bad as the original `Object.defineProperty()` so we can **simplify**.

As an alternative method we can use an options string where each character represents a option: `'e'=='enumerable'`, `'c'=='configurable'` and `'w'=='writable'`:

```js
prr(obj, 'foo', 'bar', 'ew') // enumerable and writable but not configurable
// muliple properties:
prr(obj, { one: 'one', two: 'two' }, 'ewc') // configurable too
```

## Where can I use it?

Anywhere! For pre-ES5 environments *prr* will simply fall-back to an `object[property] = value` so you can get close to what you want.

*prr* is Ender-compatible so you can include it in your Ender build and `\$.prr(...)` or `var prr = require('prr'); prr(...)`.

## Licence

prr is Copyright (c) 2013 Rod Vagg [@rvagg](https://twitter.com/rvagg) and licensed under the MIT licence. All rights not explicitly granted in the MIT license are reserved. See the included LICENSE file for more details.", "node_modules/prr/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/prr/README.md");
    }
}
