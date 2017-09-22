<?php

/* node_modules/babel-plugin-transform-es2015-literals/README.md */
class __TwigTemplate_888f10b057d9f8bcbca6d15efe1b60ecf163379d5dfb14c555c9c0b524f58b2b extends Twig_Template
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
        $__internal_df6e45f92e9f5c162800e8a58ded4deb3eece47c86e164a854313907f23f50c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6e45f92e9f5c162800e8a58ded4deb3eece47c86e164a854313907f23f50c0->enter($__internal_df6e45f92e9f5c162800e8a58ded4deb3eece47c86e164a854313907f23f50c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-literals/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-literals

> Compile ES2015 unicode string and number literals to ES5

## Example

**In**

```js
var b = 0b11; // binary integer literal
var o = 0o7; // octal integer literal
const u = 'Hello\\u{000A}\\u{0009}!'; // unicode string literals, newline and tab
```

**Out**

```js
var b = 3; // binary integer literal
var o = 7; // octal integer literal
const u = 'Hello\\n\\t!'; // unicode string literals, newline and tab
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-literals
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-literals\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-literals script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-literals\"]
});
```
";
        
        $__internal_df6e45f92e9f5c162800e8a58ded4deb3eece47c86e164a854313907f23f50c0->leave($__internal_df6e45f92e9f5c162800e8a58ded4deb3eece47c86e164a854313907f23f50c0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-literals/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-literals

> Compile ES2015 unicode string and number literals to ES5

## Example

**In**

```js
var b = 0b11; // binary integer literal
var o = 0o7; // octal integer literal
const u = 'Hello\\u{000A}\\u{0009}!'; // unicode string literals, newline and tab
```

**Out**

```js
var b = 3; // binary integer literal
var o = 7; // octal integer literal
const u = 'Hello\\n\\t!'; // unicode string literals, newline and tab
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-literals
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-literals\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-literals script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-literals\"]
});
```
", "node_modules/babel-plugin-transform-es2015-literals/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-literals/README.md");
    }
}
