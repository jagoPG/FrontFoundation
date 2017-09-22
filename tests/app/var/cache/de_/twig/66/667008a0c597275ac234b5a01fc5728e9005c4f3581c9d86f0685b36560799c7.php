<?php

/* node_modules/babel-plugin-transform-regenerator/README.md */
class __TwigTemplate_b1956d6111735fe555d52673c8fb8259167f2382b665de5d65cedbba165320b7 extends Twig_Template
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
        $__internal_58f4303ade1cc1a3653d9a60c1053ad87cdb19112d54461bf805e3f415d761f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f4303ade1cc1a3653d9a60c1053ad87cdb19112d54461bf805e3f415d761f8->enter($__internal_58f4303ade1cc1a3653d9a60c1053ad87cdb19112d54461bf805e3f415d761f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-regenerator/README.md"));

        // line 1
        echo "# babel-plugin-transform-regenerator

> Transform async/generator functions with [regenerator](https://github.com/facebook/regenerator)

## Example

**In**

```javascript
function* a() {
  yield 1;
}
```

**Out**

```javascript
var _marked = [a].map(regeneratorRuntime.mark);

function a() {
  return regeneratorRuntime.wrap(function a\$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return 1;

        case 2:
        case \"end\":
          return _context.stop();
      }
    }
  }, _marked[0], this);
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-regenerator
```

## Usage

### Via `.babelrc` (Recommended)

Without options:

```json
{
  \"plugins\": [\"transform-regenerator\"]
}
```

With options:

|name|default value|
|---|---|
|asyncGenerators|true|
|generators|true|
|async|true|

```json
{
  \"plugins\": [
    [\"transform-regenerator\", {
      \"asyncGenerators\": false,
      \"generators\": false,
      \"async\": false
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-regenerator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-regenerator\"]
});
```
";
        
        $__internal_58f4303ade1cc1a3653d9a60c1053ad87cdb19112d54461bf805e3f415d761f8->leave($__internal_58f4303ade1cc1a3653d9a60c1053ad87cdb19112d54461bf805e3f415d761f8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-regenerator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-regenerator

> Transform async/generator functions with [regenerator](https://github.com/facebook/regenerator)

## Example

**In**

```javascript
function* a() {
  yield 1;
}
```

**Out**

```javascript
var _marked = [a].map(regeneratorRuntime.mark);

function a() {
  return regeneratorRuntime.wrap(function a\$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return 1;

        case 2:
        case \"end\":
          return _context.stop();
      }
    }
  }, _marked[0], this);
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-regenerator
```

## Usage

### Via `.babelrc` (Recommended)

Without options:

```json
{
  \"plugins\": [\"transform-regenerator\"]
}
```

With options:

|name|default value|
|---|---|
|asyncGenerators|true|
|generators|true|
|async|true|

```json
{
  \"plugins\": [
    [\"transform-regenerator\", {
      \"asyncGenerators\": false,
      \"generators\": false,
      \"async\": false
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-regenerator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-regenerator\"]
});
```
", "node_modules/babel-plugin-transform-regenerator/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-regenerator/README.md");
    }
}
