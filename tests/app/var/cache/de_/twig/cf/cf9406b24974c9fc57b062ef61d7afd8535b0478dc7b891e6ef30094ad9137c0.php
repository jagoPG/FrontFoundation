<?php

/* node_modules/babel-plugin-transform-es2015-classes/README.md */
class __TwigTemplate_6b32ed2094e5ece6606aff2fc35bc30286482165f184f991ae682a30f9042bd7 extends Twig_Template
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
        $__internal_7623e4f94da1882f3c9d2882d5ffb2bd3706632cbdc2e1ad441d8e7112525fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7623e4f94da1882f3c9d2882d5ffb2bd3706632cbdc2e1ad441d8e7112525fa6->enter($__internal_7623e4f94da1882f3c9d2882d5ffb2bd3706632cbdc2e1ad441d8e7112525fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-classes/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-classes

> Compile ES2015 classes to ES5

## Caveats

Built-in classes such as `Date`, `Array`, `DOM` etc cannot be properly subclassed
due to limitations in ES5 (for the [es2015-classes](http://babeljs.io/docs/plugins/transform-es2015-classes) plugin).
You can try to use [babel-plugin-transform-builtin-extend](https://github.com/loganfsmyth/babel-plugin-transform-builtin-extend) based on `Object.setPrototypeOf` and `Reflect.construct`, but it also has some limitations.

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-classes
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-classes\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-classes\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-classes script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-classes\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`.

#### Method enumerability

Please note that in loose mode class methods **are** enumerable. This is not in line
with the spec and you may run into issues.

#### Method assignment

Under loose mode, methods are defined on the class prototype with simple assignments
instead of being defined. This can result in the following not working:

```javascript
class Foo {
  set bar() {
    throw new Error(\"foo!\");
  }
}

class Bar extends Foo {
  bar() {
    // will throw an error when this method is defined
  }
}
```

When `Bar.prototype.foo` is defined it triggers the setter on `Foo`. This is a
case that is very unlikely to appear in production code however it's something
to keep in mind.
";
        
        $__internal_7623e4f94da1882f3c9d2882d5ffb2bd3706632cbdc2e1ad441d8e7112525fa6->leave($__internal_7623e4f94da1882f3c9d2882d5ffb2bd3706632cbdc2e1ad441d8e7112525fa6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-classes/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-classes

> Compile ES2015 classes to ES5

## Caveats

Built-in classes such as `Date`, `Array`, `DOM` etc cannot be properly subclassed
due to limitations in ES5 (for the [es2015-classes](http://babeljs.io/docs/plugins/transform-es2015-classes) plugin).
You can try to use [babel-plugin-transform-builtin-extend](https://github.com/loganfsmyth/babel-plugin-transform-builtin-extend) based on `Object.setPrototypeOf` and `Reflect.construct`, but it also has some limitations.

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-classes
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-classes\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-classes\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-classes script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-classes\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`.

#### Method enumerability

Please note that in loose mode class methods **are** enumerable. This is not in line
with the spec and you may run into issues.

#### Method assignment

Under loose mode, methods are defined on the class prototype with simple assignments
instead of being defined. This can result in the following not working:

```javascript
class Foo {
  set bar() {
    throw new Error(\"foo!\");
  }
}

class Bar extends Foo {
  bar() {
    // will throw an error when this method is defined
  }
}
```

When `Bar.prototype.foo` is defined it triggers the setter on `Foo`. This is a
case that is very unlikely to appear in production code however it's something
to keep in mind.
", "node_modules/babel-plugin-transform-es2015-classes/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-classes/README.md");
    }
}
