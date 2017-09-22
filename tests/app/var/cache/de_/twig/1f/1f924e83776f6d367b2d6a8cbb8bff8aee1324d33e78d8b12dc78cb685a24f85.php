<?php

/* node_modules/babel-plugin-transform-object-rest-spread/README.md */
class __TwigTemplate_84483873020dd97a1d5229564c760642831bcbca87d5c3b243182437ecfd57d9 extends Twig_Template
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
        $__internal_3606376c5c307d75ef8a01493db892db514d2330c80052cecbd3c6b8d2583878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3606376c5c307d75ef8a01493db892db514d2330c80052cecbd3c6b8d2583878->enter($__internal_3606376c5c307d75ef8a01493db892db514d2330c80052cecbd3c6b8d2583878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-object-rest-spread/README.md"));

        // line 1
        echo "# babel-plugin-transform-object-rest-spread

> This plugin allows Babel to transform rest properties for object destructuring assignment and spread properties for object literals.

## Example

### Rest Properties

```js
let { x, y, ...z } = { x: 1, y: 2, a: 3, b: 4 };
console.log(x); // 1
console.log(y); // 2
console.log(z); // { a: 3, b: 4 }
```

### Spread Properties

```js
let n = { x, y, ...z };
console.log(n); // { x: 1, y: 2, a: 3, b: 4 }
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-object-rest-spread
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-object-rest-spread\"]
}
```

### Via CLI

```sh
babel --plugins transform-object-rest-spread script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-object-rest-spread\"]
});
```

## Options

### `useBuiltIns`

`boolean`, defaults to `false`.

By default, this plugin uses Babel's `extends` helper which polyfills `Object.assign`. Enabling this option will use `Object.assign` directly.

**.babelrc**

```json
{
  \"plugins\": [
    [\"transform-object-rest-spread\", { \"useBuiltIns\": true }]
  ]
}
```

**In**

```js
z = { x, ...y };
```

**Out**

```js
z = Object.assign({ x }, y);
```

## References

* [Proposal: Object Rest/Spread Properties for ECMAScript](https://github.com/sebmarkbage/ecmascript-rest-spread)
* [Spec](http://sebmarkbage.github.io/ecmascript-rest-spread)
";
        
        $__internal_3606376c5c307d75ef8a01493db892db514d2330c80052cecbd3c6b8d2583878->leave($__internal_3606376c5c307d75ef8a01493db892db514d2330c80052cecbd3c6b8d2583878_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-object-rest-spread/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-object-rest-spread

> This plugin allows Babel to transform rest properties for object destructuring assignment and spread properties for object literals.

## Example

### Rest Properties

```js
let { x, y, ...z } = { x: 1, y: 2, a: 3, b: 4 };
console.log(x); // 1
console.log(y); // 2
console.log(z); // { a: 3, b: 4 }
```

### Spread Properties

```js
let n = { x, y, ...z };
console.log(n); // { x: 1, y: 2, a: 3, b: 4 }
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-object-rest-spread
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-object-rest-spread\"]
}
```

### Via CLI

```sh
babel --plugins transform-object-rest-spread script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-object-rest-spread\"]
});
```

## Options

### `useBuiltIns`

`boolean`, defaults to `false`.

By default, this plugin uses Babel's `extends` helper which polyfills `Object.assign`. Enabling this option will use `Object.assign` directly.

**.babelrc**

```json
{
  \"plugins\": [
    [\"transform-object-rest-spread\", { \"useBuiltIns\": true }]
  ]
}
```

**In**

```js
z = { x, ...y };
```

**Out**

```js
z = Object.assign({ x }, y);
```

## References

* [Proposal: Object Rest/Spread Properties for ECMAScript](https://github.com/sebmarkbage/ecmascript-rest-spread)
* [Spec](http://sebmarkbage.github.io/ecmascript-rest-spread)
", "node_modules/babel-plugin-transform-object-rest-spread/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-object-rest-spread/README.md");
    }
}
