<?php

/* node_modules/babel-plugin-transform-es2015-parameters/README.md */
class __TwigTemplate_3927c4429b6944ada2774fe8cc356aa20833f2cf6b32243246f37c3c0272038a extends Twig_Template
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
        $__internal_5e91627d6464cd0e82b9fdc40bb0bfc130c3eeca949cbe10f29e761ec467c1d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e91627d6464cd0e82b9fdc40bb0bfc130c3eeca949cbe10f29e761ec467c1d7->enter($__internal_5e91627d6464cd0e82b9fdc40bb0bfc130c3eeca949cbe10f29e761ec467c1d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-parameters/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-parameters

> Compile ES2015 default and rest parameters to ES5

This plugin transforms ES2015 parameters to ES5, this includes:

- Destructuring parameters
- Default parameters
- Rest parameters

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-parameters
```

## Caveats

Default parameters desugar into `let` declarations to retain proper semantics. If this is
not supported in your environment then you'll need the
[transform-block-scoping](http://babeljs.io/docs/plugins/transform-es2015-block-scoping) plugin.

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-parameters\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-parameters script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-parameters\"]
});
```
";
        
        $__internal_5e91627d6464cd0e82b9fdc40bb0bfc130c3eeca949cbe10f29e761ec467c1d7->leave($__internal_5e91627d6464cd0e82b9fdc40bb0bfc130c3eeca949cbe10f29e761ec467c1d7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-parameters/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-parameters

> Compile ES2015 default and rest parameters to ES5

This plugin transforms ES2015 parameters to ES5, this includes:

- Destructuring parameters
- Default parameters
- Rest parameters

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-parameters
```

## Caveats

Default parameters desugar into `let` declarations to retain proper semantics. If this is
not supported in your environment then you'll need the
[transform-block-scoping](http://babeljs.io/docs/plugins/transform-es2015-block-scoping) plugin.

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-parameters\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-parameters script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-parameters\"]
});
```
", "node_modules/babel-plugin-transform-es2015-parameters/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-parameters/README.md");
    }
}
