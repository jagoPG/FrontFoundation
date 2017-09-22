<?php

/* node_modules/babel-plugin-transform-async-to-generator/README.md */
class __TwigTemplate_5fc9dd33e706e3f6f56ea3b01e1b620a2b26feafe98c1458073221bcb0002196 extends Twig_Template
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
        $__internal_d1845a9b5d53c8d7ee8bdab51d96905e56b160b03c05f0afb455c649186af3a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1845a9b5d53c8d7ee8bdab51d96905e56b160b03c05f0afb455c649186af3a3->enter($__internal_d1845a9b5d53c8d7ee8bdab51d96905e56b160b03c05f0afb455c649186af3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-async-to-generator/README.md"));

        // line 1
        echo "# babel-plugin-transform-async-to-generator

> Turn async functions into ES2015 generators

## Example

**In**

```javascript
async function foo() {
  await bar();
}
```

**Out**

```javascript
var _asyncToGenerator = function (fn) {
  ...
};
var foo = _asyncToGenerator(function* () {
  yield bar();
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-async-to-generator
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-async-to-generator\"]
}
```

### Via CLI

```sh
babel --plugins transform-async-to-generator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-async-to-generator\"]
});
```

## References

* [Proposal: Async Functions for ECMAScript](https://github.com/tc39/ecmascript-asyncawait)
";
        
        $__internal_d1845a9b5d53c8d7ee8bdab51d96905e56b160b03c05f0afb455c649186af3a3->leave($__internal_d1845a9b5d53c8d7ee8bdab51d96905e56b160b03c05f0afb455c649186af3a3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-async-to-generator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-async-to-generator

> Turn async functions into ES2015 generators

## Example

**In**

```javascript
async function foo() {
  await bar();
}
```

**Out**

```javascript
var _asyncToGenerator = function (fn) {
  ...
};
var foo = _asyncToGenerator(function* () {
  yield bar();
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-async-to-generator
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-async-to-generator\"]
}
```

### Via CLI

```sh
babel --plugins transform-async-to-generator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-async-to-generator\"]
});
```

## References

* [Proposal: Async Functions for ECMAScript](https://github.com/tc39/ecmascript-asyncawait)
", "node_modules/babel-plugin-transform-async-to-generator/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-async-to-generator/README.md");
    }
}
