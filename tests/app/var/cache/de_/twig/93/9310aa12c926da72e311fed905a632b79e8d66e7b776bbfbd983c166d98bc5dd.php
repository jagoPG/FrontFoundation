<?php

/* node_modules/babel-plugin-transform-es2015-shorthand-properties/README.md */
class __TwigTemplate_92156e253ed45f52a410b9a6b01467d878f608bebee3eb91016e9923d91915a7 extends Twig_Template
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
        $__internal_398ae3c6bcd31f3f8c583997a68aa407453d28585aaa28732056f7e59ce6671a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_398ae3c6bcd31f3f8c583997a68aa407453d28585aaa28732056f7e59ce6671a->enter($__internal_398ae3c6bcd31f3f8c583997a68aa407453d28585aaa28732056f7e59ce6671a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-shorthand-properties/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-shorthand-properties

> Compile ES2015 shorthand properties to ES5

## Example

**In**

```js
var o = { a, b, c };
```

**Out**

```js
var o = { a: a, b: b, c: c };
```

**In**

```js
var cat = {
  getName() {
    return name;
  }
};
```

**Out**

```js
var cat = {
  getName: function () {
    return name;
  }
};
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-shorthand-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-shorthand-properties\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-shorthand-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-shorthand-properties\"]
});
```
";
        
        $__internal_398ae3c6bcd31f3f8c583997a68aa407453d28585aaa28732056f7e59ce6671a->leave($__internal_398ae3c6bcd31f3f8c583997a68aa407453d28585aaa28732056f7e59ce6671a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-shorthand-properties/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-shorthand-properties

> Compile ES2015 shorthand properties to ES5

## Example

**In**

```js
var o = { a, b, c };
```

**Out**

```js
var o = { a: a, b: b, c: c };
```

**In**

```js
var cat = {
  getName() {
    return name;
  }
};
```

**Out**

```js
var cat = {
  getName: function () {
    return name;
  }
};
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-shorthand-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-shorthand-properties\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-shorthand-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-shorthand-properties\"]
});
```
", "node_modules/babel-plugin-transform-es2015-shorthand-properties/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-shorthand-properties/README.md");
    }
}
