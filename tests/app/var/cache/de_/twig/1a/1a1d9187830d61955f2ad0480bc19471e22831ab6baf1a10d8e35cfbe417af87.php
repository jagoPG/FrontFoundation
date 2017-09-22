<?php

/* node_modules/babel-plugin-transform-es2015-block-scoping/README.md */
class __TwigTemplate_083adbfed75a2725e55449cb8b87b96c4ba821d048103725d15e30ba737c31b7 extends Twig_Template
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
        $__internal_28feb3975208893d85fbc9224a861d6a03b73e3b04ac751d1ae5ef46b4e70fde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28feb3975208893d85fbc9224a861d6a03b73e3b04ac751d1ae5ef46b4e70fde->enter($__internal_28feb3975208893d85fbc9224a861d6a03b73e3b04ac751d1ae5ef46b4e70fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-block-scoping/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-block-scoping

> Compile ES2015 block scoping (const and let) to ES5

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-block-scoping
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-block-scoping\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-block-scoping\", {
      \"throwIfClosureRequired\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-block-scoping script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-block-scoping\"]
});
```

## Options `throwIfClosureRequired`

In cases such as the following it's impossible to rewrite let/const without adding an additional function and closure while transforming:

```javascript
for (let i = 0; i < 5; i++) {
  setTimeout(() => console.log(i), 1);
}
```

In extremely performance-sensitive code, this can be undesirable. If `\"throwIfClosureRequired\": true` is set, Babel throws when transforming these patterns instead of automatically adding an additional function.
";
        
        $__internal_28feb3975208893d85fbc9224a861d6a03b73e3b04ac751d1ae5ef46b4e70fde->leave($__internal_28feb3975208893d85fbc9224a861d6a03b73e3b04ac751d1ae5ef46b4e70fde_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-block-scoping/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-block-scoping

> Compile ES2015 block scoping (const and let) to ES5

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-block-scoping
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

Without options:

```json
{
  \"plugins\": [\"transform-es2015-block-scoping\"]
}
```

With options:

```json
{
  \"plugins\": [
    [\"transform-es2015-block-scoping\", {
      \"throwIfClosureRequired\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-block-scoping script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-block-scoping\"]
});
```

## Options `throwIfClosureRequired`

In cases such as the following it's impossible to rewrite let/const without adding an additional function and closure while transforming:

```javascript
for (let i = 0; i < 5; i++) {
  setTimeout(() => console.log(i), 1);
}
```

In extremely performance-sensitive code, this can be undesirable. If `\"throwIfClosureRequired\": true` is set, Babel throws when transforming these patterns instead of automatically adding an additional function.
", "node_modules/babel-plugin-transform-es2015-block-scoping/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-block-scoping/README.md");
    }
}
