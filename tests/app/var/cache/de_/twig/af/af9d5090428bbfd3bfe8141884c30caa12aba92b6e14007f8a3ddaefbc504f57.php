<?php

/* node_modules/babel-plugin-transform-es2015-modules-systemjs/README.md */
class __TwigTemplate_1bede3b03948d6b076cbf3aa5481fcb868d1c49ac35ccf73bf87ac00220d8eb6 extends Twig_Template
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
        $__internal_45bd5d926f44e7e84fbea58c4401f207bf7d9032649e4e8897db45ffd1c13ca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45bd5d926f44e7e84fbea58c4401f207bf7d9032649e4e8897db45ffd1c13ca1->enter($__internal_45bd5d926f44e7e84fbea58c4401f207bf7d9032649e4e8897db45ffd1c13ca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-modules-systemjs/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-modules-systemjs

> This plugin transforms ES2015 modules to [SystemJS](https://github.com/systemjs/systemjs).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
System.register([], function (_export, _context) {
  return {
    setters: [],
    execute: function () {
      _export(\"default\", 42);
    }
  };
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-systemjs
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-modules-systemjs\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-modules-systemjs\", {
      // outputs SystemJS.register(...)
      \"systemGlobal\": \"SystemJS\"
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-systemjs script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-systemjs\"]
});
```
";
        
        $__internal_45bd5d926f44e7e84fbea58c4401f207bf7d9032649e4e8897db45ffd1c13ca1->leave($__internal_45bd5d926f44e7e84fbea58c4401f207bf7d9032649e4e8897db45ffd1c13ca1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-modules-systemjs/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-modules-systemjs

> This plugin transforms ES2015 modules to [SystemJS](https://github.com/systemjs/systemjs).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
System.register([], function (_export, _context) {
  return {
    setters: [],
    execute: function () {
      _export(\"default\", 42);
    }
  };
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-systemjs
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-modules-systemjs\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-modules-systemjs\", {
      // outputs SystemJS.register(...)
      \"systemGlobal\": \"SystemJS\"
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-systemjs script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-systemjs\"]
});
```
", "node_modules/babel-plugin-transform-es2015-modules-systemjs/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-modules-systemjs/README.md");
    }
}
