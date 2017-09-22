<?php

/* node_modules/has/README.mkd */
class __TwigTemplate_4a6e3a7d57c66480493ea9cf8ffdc24ef6c1e755d8899e79b1803da8b1e47c2f extends Twig_Template
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
        $__internal_9d535356b555a5f91a295da01c5344323045c6f4a6be3f79fbf09b30907a42d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d535356b555a5f91a295da01c5344323045c6f4a6be3f79fbf09b30907a42d3->enter($__internal_9d535356b555a5f91a295da01c5344323045c6f4a6be3f79fbf09b30907a42d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has/README.mkd"));

        // line 1
        echo "# has

> Object.prototype.hasOwnProperty.call shortcut

## Installation

```sh
npm install --save has
```

## Usage

```js
var has = require('has');

has({}, 'hasOwnProperty'); // false
has(Object.prototype, 'hasOwnProperty'); // true
```
";
        
        $__internal_9d535356b555a5f91a295da01c5344323045c6f4a6be3f79fbf09b30907a42d3->leave($__internal_9d535356b555a5f91a295da01c5344323045c6f4a6be3f79fbf09b30907a42d3_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has/README.mkd";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# has

> Object.prototype.hasOwnProperty.call shortcut

## Installation

```sh
npm install --save has
```

## Usage

```js
var has = require('has');

has({}, 'hasOwnProperty'); // false
has(Object.prototype, 'hasOwnProperty'); // true
```
", "node_modules/has/README.mkd", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has/README.mkd");
    }
}
