<?php

/* node_modules/babel-plugin-transform-decorators/README.md */
class __TwigTemplate_7123b8ad08298cfbae6f39c5717442001dbb80107a4c0419d1c9e55fa68b4442 extends Twig_Template
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
        $__internal_59a4ddc224cf0dfaee373f50c4d8d9e8bf20ccb9dd346cd080db43f8fde19bd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a4ddc224cf0dfaee373f50c4d8d9e8bf20ccb9dd346cd080db43f8fde19bd0->enter($__internal_59a4ddc224cf0dfaee373f50c4d8d9e8bf20ccb9dd346cd080db43f8fde19bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-decorators/README.md"));

        // line 1
        echo "# babel-plugin-transform-decorators

> Compile class and object decorators to ES5

## Example

(examples are from proposal)

### Simple class decorator

```js
@annotation
class MyClass { }

function annotation(target) {
   target.annotated = true;
}
```

### Class decorator

```js
@isTestable(true)
class MyClass { }

function isTestable(value) {
   return function decorator(target) {
      target.isTestable = value;
   }
}
```

### Class function decorator

```js
class C {
  @enumerable(false)
  method() { }
}

function enumerable(value) {
  return function (target, key, descriptor) {
     descriptor.enumerable = value;
     return descriptor;
  }
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-decorators
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-decorators\"]
}
```

### Via CLI

```sh
babel --plugins transform-decorators script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-decorators\"]
});
```

## References

* [Proposal: Javascript Decorators](https://github.com/wycats/javascript-decorators/blob/master/README.md)
";
        
        $__internal_59a4ddc224cf0dfaee373f50c4d8d9e8bf20ccb9dd346cd080db43f8fde19bd0->leave($__internal_59a4ddc224cf0dfaee373f50c4d8d9e8bf20ccb9dd346cd080db43f8fde19bd0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-decorators/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-decorators

> Compile class and object decorators to ES5

## Example

(examples are from proposal)

### Simple class decorator

```js
@annotation
class MyClass { }

function annotation(target) {
   target.annotated = true;
}
```

### Class decorator

```js
@isTestable(true)
class MyClass { }

function isTestable(value) {
   return function decorator(target) {
      target.isTestable = value;
   }
}
```

### Class function decorator

```js
class C {
  @enumerable(false)
  method() { }
}

function enumerable(value) {
  return function (target, key, descriptor) {
     descriptor.enumerable = value;
     return descriptor;
  }
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-decorators
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-decorators\"]
}
```

### Via CLI

```sh
babel --plugins transform-decorators script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-decorators\"]
});
```

## References

* [Proposal: Javascript Decorators](https://github.com/wycats/javascript-decorators/blob/master/README.md)
", "node_modules/babel-plugin-transform-decorators/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-decorators/README.md");
    }
}
