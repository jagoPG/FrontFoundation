<?php

/* node_modules/babel-plugin-transform-class-properties/README.md */
class __TwigTemplate_372e5a2263dbfa3b767e9dd830b687432ea09deee8d3015b473141b6a3ab8083 extends Twig_Template
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
        $__internal_65eff8a3c1f8b71aec1e3a960e8c12fedb6aa8c1402948421434641c93d37ca8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65eff8a3c1f8b71aec1e3a960e8c12fedb6aa8c1402948421434641c93d37ca8->enter($__internal_65eff8a3c1f8b71aec1e3a960e8c12fedb6aa8c1402948421434641c93d37ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-class-properties/README.md"));

        // line 1
        echo "# babel-plugin-transform-class-properties

> This plugin transforms es2015 static class properties as well as properties declared with the es2016 property initializer syntax.

## Example

Below is a class with four class properties which will be transformed.

```js
  class Bork {
    //Property initializer syntax
    instanceProperty = \"bork\";
    boundFunction = () => {
      return this.instanceProperty;
    }

    //Static class properties
    static staticProperty = \"babelIsCool\";
    static staticFunction = function() {
      return Bork.staticProperty;
    }
  }

  let myBork = new Bork;

  //Property initializers are not on the prototype.
  console.log(myBork.prototype.boundFunction); // > undefined

  //Bound functions are bound to the class instance.
  console.log(myBork.boundFunction.call(undefined)); // > \"bork\"

  //Static function exists on the class.
  console.log(Bork.staticFunction()); // > \"babelIsCool\"
```


## Installation

```sh
npm install --save-dev babel-plugin-transform-class-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
// without options
{
  \"plugins\": [\"transform-class-properties\"]
}

// with options
{
  \"plugins\": [
    [\"transform-class-properties\", { \"spec\": true }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-class-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-class-properties\"]
});
```

## Options

### `spec`

`boolean`, defaults to `false`.

Class properties are compiled to use `Object.defineProperty`. Static fields are now defined even if they are not initialized.

## References

* [Proposal: ES Class Fields & Static Properties](https://github.com/jeffmo/es-class-static-properties-and-fields)
";
        
        $__internal_65eff8a3c1f8b71aec1e3a960e8c12fedb6aa8c1402948421434641c93d37ca8->leave($__internal_65eff8a3c1f8b71aec1e3a960e8c12fedb6aa8c1402948421434641c93d37ca8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-class-properties/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-class-properties

> This plugin transforms es2015 static class properties as well as properties declared with the es2016 property initializer syntax.

## Example

Below is a class with four class properties which will be transformed.

```js
  class Bork {
    //Property initializer syntax
    instanceProperty = \"bork\";
    boundFunction = () => {
      return this.instanceProperty;
    }

    //Static class properties
    static staticProperty = \"babelIsCool\";
    static staticFunction = function() {
      return Bork.staticProperty;
    }
  }

  let myBork = new Bork;

  //Property initializers are not on the prototype.
  console.log(myBork.prototype.boundFunction); // > undefined

  //Bound functions are bound to the class instance.
  console.log(myBork.boundFunction.call(undefined)); // > \"bork\"

  //Static function exists on the class.
  console.log(Bork.staticFunction()); // > \"babelIsCool\"
```


## Installation

```sh
npm install --save-dev babel-plugin-transform-class-properties
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
// without options
{
  \"plugins\": [\"transform-class-properties\"]
}

// with options
{
  \"plugins\": [
    [\"transform-class-properties\", { \"spec\": true }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-class-properties script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-class-properties\"]
});
```

## Options

### `spec`

`boolean`, defaults to `false`.

Class properties are compiled to use `Object.defineProperty`. Static fields are now defined even if they are not initialized.

## References

* [Proposal: ES Class Fields & Static Properties](https://github.com/jeffmo/es-class-static-properties-and-fields)
", "node_modules/babel-plugin-transform-class-properties/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-class-properties/README.md");
    }
}
