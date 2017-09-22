<?php

/* node_modules/babel-plugin-transform-es2015-typeof-symbol/README.md */
class __TwigTemplate_353427442f1fdf8d7e94db3eee4b9cba9c27452410227c29d908d268a5d070e2 extends Twig_Template
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
        $__internal_0a4539ce5e711131c8f9eccf3a6bb6d5ffef2c7d2b9c3131171e19bb0b9d5cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4539ce5e711131c8f9eccf3a6bb6d5ffef2c7d2b9c3131171e19bb0b9d5cc0->enter($__internal_0a4539ce5e711131c8f9eccf3a6bb6d5ffef2c7d2b9c3131171e19bb0b9d5cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-typeof-symbol/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-typeof-symbol

> ES6 introduces a new native type called [symbols](https://babeljs.io/learn-es2015/#ecmascript-2015-features-symbols). This transformer wraps all `typeof` expressions with a method that replicates native behaviour. (ie. returning \"symbol\" for symbols)

## Example

**In**

```javascript
typeof Symbol() === \"symbol\";
```

**Out**

```javascript
var _typeof = function (obj) {
  return obj && obj.constructor === Symbol ? \"symbol\" : typeof obj;
};

_typeof(Symbol()) === \"symbol\";
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-typeof-symbol
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-typeof-symbol\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-typeof-symbol script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-typeof-symbol\"]
});
```
";
        
        $__internal_0a4539ce5e711131c8f9eccf3a6bb6d5ffef2c7d2b9c3131171e19bb0b9d5cc0->leave($__internal_0a4539ce5e711131c8f9eccf3a6bb6d5ffef2c7d2b9c3131171e19bb0b9d5cc0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-typeof-symbol/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-typeof-symbol

> ES6 introduces a new native type called [symbols](https://babeljs.io/learn-es2015/#ecmascript-2015-features-symbols). This transformer wraps all `typeof` expressions with a method that replicates native behaviour. (ie. returning \"symbol\" for symbols)

## Example

**In**

```javascript
typeof Symbol() === \"symbol\";
```

**Out**

```javascript
var _typeof = function (obj) {
  return obj && obj.constructor === Symbol ? \"symbol\" : typeof obj;
};

_typeof(Symbol()) === \"symbol\";
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-typeof-symbol
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-typeof-symbol\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-typeof-symbol script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-typeof-symbol\"]
});
```
", "node_modules/babel-plugin-transform-es2015-typeof-symbol/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-typeof-symbol/README.md");
    }
}
