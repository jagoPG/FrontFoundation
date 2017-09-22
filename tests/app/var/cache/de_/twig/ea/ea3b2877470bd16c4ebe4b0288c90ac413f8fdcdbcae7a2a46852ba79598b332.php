<?php

/* node_modules/babel-plugin-transform-exponentiation-operator/README.md */
class __TwigTemplate_1b383dc7e2d41856ee8e17ba33c9c662d15cdabb6e35ddcddd68fc93f40d1547 extends Twig_Template
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
        $__internal_3597484fef37cb7f1dc2a655eed31eb6deeaff7525d82773156441a9503d26db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3597484fef37cb7f1dc2a655eed31eb6deeaff7525d82773156441a9503d26db->enter($__internal_3597484fef37cb7f1dc2a655eed31eb6deeaff7525d82773156441a9503d26db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-exponentiation-operator/README.md"));

        // line 1
        echo "# babel-plugin-transform-exponentiation-operator

> Compile exponentiation operator to ES5

## Example

```js
// x ** y

let squared = 2 ** 2;
// same as: 2 * 2

let cubed = 2 ** 3;
// same as: 2 * 2 * 2


// x **= y

let a = 2;
a **= 2;
// same as: a = a * a;

let b = 3;
b **= 3;
// same as: b = b * b * b;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-exponentiation-operator
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-exponentiation-operator\"]
}
```

### Via CLI

```sh
babel --plugins transform-exponentiation-operator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-exponentiation-operator\"]
});
```

## References

* [Proposal: Exponentiation Operator](https://github.com/rwaldron/exponentiation-operator)
* [Spec: Exponential Operator](https://rwaldron.github.io/exponentiation-operator/)
";
        
        $__internal_3597484fef37cb7f1dc2a655eed31eb6deeaff7525d82773156441a9503d26db->leave($__internal_3597484fef37cb7f1dc2a655eed31eb6deeaff7525d82773156441a9503d26db_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-exponentiation-operator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-exponentiation-operator

> Compile exponentiation operator to ES5

## Example

```js
// x ** y

let squared = 2 ** 2;
// same as: 2 * 2

let cubed = 2 ** 3;
// same as: 2 * 2 * 2


// x **= y

let a = 2;
a **= 2;
// same as: a = a * a;

let b = 3;
b **= 3;
// same as: b = b * b * b;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-exponentiation-operator
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-exponentiation-operator\"]
}
```

### Via CLI

```sh
babel --plugins transform-exponentiation-operator script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-exponentiation-operator\"]
});
```

## References

* [Proposal: Exponentiation Operator](https://github.com/rwaldron/exponentiation-operator)
* [Spec: Exponential Operator](https://rwaldron.github.io/exponentiation-operator/)
", "node_modules/babel-plugin-transform-exponentiation-operator/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-exponentiation-operator/README.md");
    }
}
