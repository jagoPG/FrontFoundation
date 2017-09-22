<?php

/* node_modules/babel-plugin-transform-es2015-duplicate-keys/README.md */
class __TwigTemplate_9daef26d25a95072db1de3078d1dcfe90e491e9dec1e170fa949ccbf9cb07b72 extends Twig_Template
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
        $__internal_f75dfdfd655cff0d61db730f50d4458ee60cc5b8f81ca291823f6e4830ca0599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f75dfdfd655cff0d61db730f50d4458ee60cc5b8f81ca291823f6e4830ca0599->enter($__internal_f75dfdfd655cff0d61db730f50d4458ee60cc5b8f81ca291823f6e4830ca0599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-duplicate-keys/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-duplicate-keys

> Compile objects with duplicate keys to valid strict ES5.

This plugin actually converts duplicate keys in objects to be computed properties, which then must be handled by the [transform-es2015-computed-properties](http://babeljs.io/docs/plugins/transform-es2015-computed-properties) plugin. The final result won't contain any object literals with duplicate keys.

## Example

**In**

```javascript
var x = { a: 5, a: 6 };
var y = {
  get a() {},
  set a(x) {},
  a: 3
};
```

**Out**

```javascript
var x = { a: 5, [\"a\"]: 6 };
var y = {
  get a() {},
  set a(x) {},
  [\"a\"]: 3
};
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-duplicate-keys
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-duplicate-keys\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-duplicate-keys script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-duplicate-keys\"]
});
```
";
        
        $__internal_f75dfdfd655cff0d61db730f50d4458ee60cc5b8f81ca291823f6e4830ca0599->leave($__internal_f75dfdfd655cff0d61db730f50d4458ee60cc5b8f81ca291823f6e4830ca0599_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-duplicate-keys/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-duplicate-keys

> Compile objects with duplicate keys to valid strict ES5.

This plugin actually converts duplicate keys in objects to be computed properties, which then must be handled by the [transform-es2015-computed-properties](http://babeljs.io/docs/plugins/transform-es2015-computed-properties) plugin. The final result won't contain any object literals with duplicate keys.

## Example

**In**

```javascript
var x = { a: 5, a: 6 };
var y = {
  get a() {},
  set a(x) {},
  a: 3
};
```

**Out**

```javascript
var x = { a: 5, [\"a\"]: 6 };
var y = {
  get a() {},
  set a(x) {},
  [\"a\"]: 3
};
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-duplicate-keys
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-duplicate-keys\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-duplicate-keys script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-duplicate-keys\"]
});
```
", "node_modules/babel-plugin-transform-es2015-duplicate-keys/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-duplicate-keys/README.md");
    }
}
