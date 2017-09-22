<?php

/* node_modules/babel-plugin-transform-es2015-computed-properties/README.md */
class __TwigTemplate_cc53530b5ead42fef1f58a7add071ba6ba3026ce08a5827dd946926501a93aca extends Twig_Template
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
        $__internal_195909cd79566d5c2599718b1a0ab2ad3c3e8abe0134d6bab193013835f48410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_195909cd79566d5c2599718b1a0ab2ad3c3e8abe0134d6bab193013835f48410->enter($__internal_195909cd79566d5c2599718b1a0ab2ad3c3e8abe0134d6bab193013835f48410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-computed-properties/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-computed-properties

> Compile ES2015 computed properties to ES5

## Example

**In**

```js
var obj = {
  [\"x\" + foo]: \"heh\",
  [\"y\" + bar]: \"noo\",
  foo: \"foo\",
  bar: \"bar\"
};
```

**Out**

```js
var _obj;

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
}

var obj = (
  _obj = {},
  _defineProperty(_obj, \"x\" + foo, \"heh\"),
  _defineProperty(_obj, \"y\" + bar, \"noo\"),
  _defineProperty(_obj, \"foo\", \"foo\"),
  _defineProperty(_obj, \"bar\", \"bar\"),
  _obj
);
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-computed-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-computed-properties\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-computed-properties\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-computed-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-computed-properties\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`

Just like method assignment in classes, in loose mode, computed property names
use simple assignments instead of being defined. This is unlikely to be an issue
in production code.

#### Example

***In***

```js
var obj = {
  [\"x\" + foo]: \"heh\",
  [\"y\" + bar]: \"noo\",
  foo: \"foo\",
  bar: \"bar\"
};
```

***Out***

```js
var _obj;

var obj = (
  _obj = {},
  _obj[\"x\" + foo] = \"heh\",
  _obj[\"y\" + bar] = \"noo\",
  _obj.foo = \"foo\",
  _obj.bar = \"bar\",
  _obj
);
```
";
        
        $__internal_195909cd79566d5c2599718b1a0ab2ad3c3e8abe0134d6bab193013835f48410->leave($__internal_195909cd79566d5c2599718b1a0ab2ad3c3e8abe0134d6bab193013835f48410_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-computed-properties/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-computed-properties

> Compile ES2015 computed properties to ES5

## Example

**In**

```js
var obj = {
  [\"x\" + foo]: \"heh\",
  [\"y\" + bar]: \"noo\",
  foo: \"foo\",
  bar: \"bar\"
};
```

**Out**

```js
var _obj;

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
}

var obj = (
  _obj = {},
  _defineProperty(_obj, \"x\" + foo, \"heh\"),
  _defineProperty(_obj, \"y\" + bar, \"noo\"),
  _defineProperty(_obj, \"foo\", \"foo\"),
  _defineProperty(_obj, \"bar\", \"bar\"),
  _obj
);
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-computed-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-computed-properties\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-computed-properties\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-computed-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-computed-properties\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`

Just like method assignment in classes, in loose mode, computed property names
use simple assignments instead of being defined. This is unlikely to be an issue
in production code.

#### Example

***In***

```js
var obj = {
  [\"x\" + foo]: \"heh\",
  [\"y\" + bar]: \"noo\",
  foo: \"foo\",
  bar: \"bar\"
};
```

***Out***

```js
var _obj;

var obj = (
  _obj = {},
  _obj[\"x\" + foo] = \"heh\",
  _obj[\"y\" + bar] = \"noo\",
  _obj.foo = \"foo\",
  _obj.bar = \"bar\",
  _obj
);
```
", "node_modules/babel-plugin-transform-es2015-computed-properties/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-computed-properties/README.md");
    }
}
