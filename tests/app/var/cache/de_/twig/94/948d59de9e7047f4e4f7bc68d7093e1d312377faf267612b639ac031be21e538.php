<?php

/* node_modules/babel-plugin-transform-es2015-template-literals/README.md */
class __TwigTemplate_da34ddfa5b9aa33f4120f3d3023d755f642a13309229b19f553092edb1b33d6b extends Twig_Template
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
        $__internal_aa403fff277311dadcc334ec01725e8ca3b5345d273b88ce76edab11bed1242e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa403fff277311dadcc334ec01725e8ca3b5345d273b88ce76edab11bed1242e->enter($__internal_aa403fff277311dadcc334ec01725e8ca3b5345d273b88ce76edab11bed1242e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-template-literals/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-template-literals

> Compile ES2015 template literals to ES5

## Example

**In**

```javascript
`foo\${bar}`;
```

**Out**

```javascript
\"foo\" + bar;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-template-literals
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-template-literals\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-template-literals\", {
      \"loose\": true,
      \"spec\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-template-literals script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-template-literals\"]
});
```

## Options

### `loose`
In loose mode, tagged template literal objects aren't frozen.


### `spec`
This option wraps all template literal expressions with `String`. See [babel/babel#1065](https://github.com/babel/babel/issues/1065) for more info.

**In**

```javascript
`foo\${bar}`;
```

**Out**

```javascript
\"foo\" + String(bar);
```
";
        
        $__internal_aa403fff277311dadcc334ec01725e8ca3b5345d273b88ce76edab11bed1242e->leave($__internal_aa403fff277311dadcc334ec01725e8ca3b5345d273b88ce76edab11bed1242e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-template-literals/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-template-literals

> Compile ES2015 template literals to ES5

## Example

**In**

```javascript
`foo\${bar}`;
```

**Out**

```javascript
\"foo\" + bar;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-template-literals
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-template-literals\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-template-literals\", {
      \"loose\": true,
      \"spec\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-template-literals script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-template-literals\"]
});
```

## Options

### `loose`
In loose mode, tagged template literal objects aren't frozen.


### `spec`
This option wraps all template literal expressions with `String`. See [babel/babel#1065](https://github.com/babel/babel/issues/1065) for more info.

**In**

```javascript
`foo\${bar}`;
```

**Out**

```javascript
\"foo\" + String(bar);
```
", "node_modules/babel-plugin-transform-es2015-template-literals/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-template-literals/README.md");
    }
}
