<?php

/* node_modules/babel-plugin-transform-es2015-unicode-regex/README.md */
class __TwigTemplate_fcf9325c769b5d4ac8236b932a94f788812d5a73926940cb6b621b52a52c9187 extends Twig_Template
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
        $__internal_ae0cbeb4ef756b5051af3a5d38276878ec27a0262fc85324e5fc3ec587e024b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0cbeb4ef756b5051af3a5d38276878ec27a0262fc85324e5fc3ec587e024b6->enter($__internal_ae0cbeb4ef756b5051af3a5d38276878ec27a0262fc85324e5fc3ec587e024b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-unicode-regex/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-unicode-regex

> Compile ES2015 unicode regex to ES5

## Example

**In**

```js
var string = \"foo💩bar\";
var match = string.match(/foo(.)bar/u);
```

**Out**

```js
var string = \"foo💩bar\";
var match = string.match(/foo((?:[\\0-\\t\\x0B\\f\\x0E-\\u2027\\u202A-\\uD7FF\\uE000-\\uFFFF]|[\\uD800-\\uDBFF][\\uDC00-\\uDFFF]|[\\uD800-\\uDBFF](?![\\uDC00-\\uDFFF])|(?:[^\\uD800-\\uDBFF]|^)[\\uDC00-\\uDFFF]))bar/);
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-unicode-regex
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-unicode-regex\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-unicode-regex script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-unicode-regex\"]
});
```
";
        
        $__internal_ae0cbeb4ef756b5051af3a5d38276878ec27a0262fc85324e5fc3ec587e024b6->leave($__internal_ae0cbeb4ef756b5051af3a5d38276878ec27a0262fc85324e5fc3ec587e024b6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-unicode-regex/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-unicode-regex

> Compile ES2015 unicode regex to ES5

## Example

**In**

```js
var string = \"foo💩bar\";
var match = string.match(/foo(.)bar/u);
```

**Out**

```js
var string = \"foo💩bar\";
var match = string.match(/foo((?:[\\0-\\t\\x0B\\f\\x0E-\\u2027\\u202A-\\uD7FF\\uE000-\\uFFFF]|[\\uD800-\\uDBFF][\\uDC00-\\uDFFF]|[\\uD800-\\uDBFF](?![\\uDC00-\\uDFFF])|(?:[^\\uD800-\\uDBFF]|^)[\\uDC00-\\uDFFF]))bar/);
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-unicode-regex
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-unicode-regex\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-unicode-regex script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-unicode-regex\"]
});
```
", "node_modules/babel-plugin-transform-es2015-unicode-regex/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-unicode-regex/README.md");
    }
}
