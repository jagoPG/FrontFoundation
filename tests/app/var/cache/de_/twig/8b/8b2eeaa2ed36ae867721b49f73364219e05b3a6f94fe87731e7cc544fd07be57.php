<?php

/* node_modules/babel-plugin-transform-strict-mode/README.md */
class __TwigTemplate_1f2184e32a40b4802be67e7756a41f4a1c6637849afc5380c1b5ded952b40b72 extends Twig_Template
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
        $__internal_46e019ca705f7783108d3cf951447b3a01d594ffce7f01fe6bc4bc3035d24189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e019ca705f7783108d3cf951447b3a01d594ffce7f01fe6bc4bc3035d24189->enter($__internal_46e019ca705f7783108d3cf951447b3a01d594ffce7f01fe6bc4bc3035d24189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-strict-mode/README.md"));

        // line 1
        echo "# babel-plugin-transform-strict-mode

> This plugin places a `\"use strict\";` directive at the top of all files to enable [strict mode](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode).

This plugin may be enabled via `babel-plugin-transform-es2015-modules-commonjs`.
If you wish to disable it you can either turn `strict` off or pass
`strictMode: false` as an option to the commonjs transform.

## Example

**In**

```javascript
foo();
```

**Out**

```javascript
\"use strict\";

foo();
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-strict-mode
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-strict-mode\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-strict-mode\", {
      \"strict\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-strict-mode script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-strict-mode\"]
});
```
";
        
        $__internal_46e019ca705f7783108d3cf951447b3a01d594ffce7f01fe6bc4bc3035d24189->leave($__internal_46e019ca705f7783108d3cf951447b3a01d594ffce7f01fe6bc4bc3035d24189_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-strict-mode/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-strict-mode

> This plugin places a `\"use strict\";` directive at the top of all files to enable [strict mode](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Strict_mode).

This plugin may be enabled via `babel-plugin-transform-es2015-modules-commonjs`.
If you wish to disable it you can either turn `strict` off or pass
`strictMode: false` as an option to the commonjs transform.

## Example

**In**

```javascript
foo();
```

**Out**

```javascript
\"use strict\";

foo();
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-strict-mode
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-strict-mode\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-strict-mode\", {
      \"strict\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-strict-mode script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-strict-mode\"]
});
```
", "node_modules/babel-plugin-transform-strict-mode/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-strict-mode/README.md");
    }
}
