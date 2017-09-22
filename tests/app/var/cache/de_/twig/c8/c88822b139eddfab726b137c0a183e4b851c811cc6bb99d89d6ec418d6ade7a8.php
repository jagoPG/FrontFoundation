<?php

/* node_modules/invariant/README.md */
class __TwigTemplate_2a0e5a86ee902b18b3326df72d56694cd0a735cc8ce7cc44b2f4280374d424ba extends Twig_Template
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
        $__internal_a7acf43669d0967b6df1e20d580490700826f71ade1d584e93acd1931437094a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7acf43669d0967b6df1e20d580490700826f71ade1d584e93acd1931437094a->enter($__internal_a7acf43669d0967b6df1e20d580490700826f71ade1d584e93acd1931437094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/invariant/README.md"));

        // line 1
        echo "# invariant

[![Build Status](https://travis-ci.org/zertosh/invariant.svg?branch=master)](https://travis-ci.org/zertosh/invariant)

A mirror of Facebook's `invariant` (e.g. [React](https://github.com/facebook/react/blob/v0.13.3/src/vendor/core/invariant.js), [flux](https://github.com/facebook/flux/blob/2.0.2/src/invariant.js)).

A way to provide descriptive errors in development but generic errors in production.

## Install

With [npm](http://npmjs.org) do:

```sh
npm install invariant
```

## `invariant(condition, message)`

```js
var invariant = require('invariant');

invariant(someTruthyVal, 'This will not throw');
// No errors

invariant(someFalseyVal, 'This will throw an error with this message');
// Error: Invariant Violation: This will throw an error with this message
```

**Note:** When `process.env.NODE_ENV` is not `production`, the message is required. If omitted, `invariant` will throw regardless of the truthiness of the condition. When `process.env.NODE_ENV` is `production`, the message is optional – so they can be minified away.

### Browser

When used with [browserify](https://github.com/substack/node-browserify), it'll use `browser.js` (instead of `invariant.js`) and the [envify](https://github.com/hughsk/envify) transform will inline the value of `process.env.NODE_ENV`.

### Node

The node version is optimized around the performance implications of accessing `process.env`. The value of `process.env.NODE_ENV` is cached, and repeatedly used instead of reading `proces.env`. See [Server rendering is slower with npm react #812](https://github.com/facebook/react/issues/812)
";
        
        $__internal_a7acf43669d0967b6df1e20d580490700826f71ade1d584e93acd1931437094a->leave($__internal_a7acf43669d0967b6df1e20d580490700826f71ade1d584e93acd1931437094a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/invariant/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# invariant

[![Build Status](https://travis-ci.org/zertosh/invariant.svg?branch=master)](https://travis-ci.org/zertosh/invariant)

A mirror of Facebook's `invariant` (e.g. [React](https://github.com/facebook/react/blob/v0.13.3/src/vendor/core/invariant.js), [flux](https://github.com/facebook/flux/blob/2.0.2/src/invariant.js)).

A way to provide descriptive errors in development but generic errors in production.

## Install

With [npm](http://npmjs.org) do:

```sh
npm install invariant
```

## `invariant(condition, message)`

```js
var invariant = require('invariant');

invariant(someTruthyVal, 'This will not throw');
// No errors

invariant(someFalseyVal, 'This will throw an error with this message');
// Error: Invariant Violation: This will throw an error with this message
```

**Note:** When `process.env.NODE_ENV` is not `production`, the message is required. If omitted, `invariant` will throw regardless of the truthiness of the condition. When `process.env.NODE_ENV` is `production`, the message is optional – so they can be minified away.

### Browser

When used with [browserify](https://github.com/substack/node-browserify), it'll use `browser.js` (instead of `invariant.js`) and the [envify](https://github.com/hughsk/envify) transform will inline the value of `process.env.NODE_ENV`.

### Node

The node version is optimized around the performance implications of accessing `process.env`. The value of `process.env.NODE_ENV` is cached, and repeatedly used instead of reading `proces.env`. See [Server rendering is slower with npm react #812](https://github.com/facebook/react/issues/812)
", "node_modules/invariant/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/invariant/README.md");
    }
}
