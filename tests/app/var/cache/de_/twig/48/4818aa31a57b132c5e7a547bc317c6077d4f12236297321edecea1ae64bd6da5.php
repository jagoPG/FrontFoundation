<?php

/* node_modules/regenerator-transform/README.md */
class __TwigTemplate_9c75860b2ef9ab2bbea2f9ab7eab039760c9896a52c69839a0162ccca289111e extends Twig_Template
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
        $__internal_93c81c67781ca24bc88284e2f08490569843e0cfab28253979d20dce80c09721 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93c81c67781ca24bc88284e2f08490569843e0cfab28253979d20dce80c09721->enter($__internal_93c81c67781ca24bc88284e2f08490569843e0cfab28253979d20dce80c09721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regenerator-transform/README.md"));

        // line 1
        echo "# regenerator-transform

Transform async/generator functions with [regenerator](https://github.com/facebook/regenerator)

## Installation

```sh
\$ npm install regenerator-transform
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"regenerator-transform\"]
}
// with options
{
  \"plugins\": [
    [\"regenerator-transform\", {
      asyncGenerators: false, // true by default
      generators: false, // true by default
      async: false // true by default
    }]
  ]
}
```

### Via CLI

```sh
\$ babel --plugins regenerator-transform script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"regenerator-transform\"]
});
```
";
        
        $__internal_93c81c67781ca24bc88284e2f08490569843e0cfab28253979d20dce80c09721->leave($__internal_93c81c67781ca24bc88284e2f08490569843e0cfab28253979d20dce80c09721_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regenerator-transform/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# regenerator-transform

Transform async/generator functions with [regenerator](https://github.com/facebook/regenerator)

## Installation

```sh
\$ npm install regenerator-transform
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"regenerator-transform\"]
}
// with options
{
  \"plugins\": [
    [\"regenerator-transform\", {
      asyncGenerators: false, // true by default
      generators: false, // true by default
      async: false // true by default
    }]
  ]
}
```

### Via CLI

```sh
\$ babel --plugins regenerator-transform script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"regenerator-transform\"]
});
```
", "node_modules/regenerator-transform/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regenerator-transform/README.md");
    }
}
