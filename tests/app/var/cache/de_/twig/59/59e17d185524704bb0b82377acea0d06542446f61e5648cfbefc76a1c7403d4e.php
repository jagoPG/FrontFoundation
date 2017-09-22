<?php

/* node_modules/es6-weak-map/README.md */
class __TwigTemplate_742f98d0a9353f10473920ffb3b009c4ba3f164dac08e67b7b18b4230dc18870 extends Twig_Template
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
        $__internal_158d8baae0fcb4d9d3d8fca1ba409662363efa928ce1f08ca1a78560b555fb49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158d8baae0fcb4d9d3d8fca1ba409662363efa928ce1f08ca1a78560b555fb49->enter($__internal_158d8baae0fcb4d9d3d8fca1ba409662363efa928ce1f08ca1a78560b555fb49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-weak-map/README.md"));

        // line 1
        echo "# es6-weak-map
## WeakMap collection as specified in ECMAScript6

_Roughly inspired by Mark Miller's and Kris Kowal's [WeakMap implementation](https://github.com/drses/weak-map)_.

Differences are:
- Assumes compliant ES5 environment (no weird ES3 workarounds or hacks)
- Well modularized CJS style
- Based on one solution.

### Limitations

- Will fail on non extensible objects provided as keys

### Installation

\t\$ npm install es6-weak-map

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

### Usage

If you want to make sure your environment implements `WeakMap`, do:

```javascript
require('es6-weak-map/implement');
```

If you'd like to use native version when it exists and fallback to polyfill if it doesn't, but without implementing `WeakMap` on global scope, do:

```javascript
var WeakMap = require('es6-weak-map');
```

If you strictly want to use polyfill even if native `WeakMap` exists, do:

```javascript
var WeakMap = require('es6-weak-map/polyfill');
```

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-weakmap-objects). Still if you want quick look, follow example:

```javascript
var WeakMap = require('es6-weak-map');

var map = new WeakMap();
var obj = {};

map.set(obj, 'foo'); // map
map.get(obj);        // 'foo'
map.has(obj);        // true
map.delete(obj);     // true
map.get(obj);        // undefined
map.has(obj);        // false
map.set(obj, 'bar'); // map
map.has(obj);        // false
```

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-weak-map.svg)](https://travis-ci.org/medikoo/es6-weak-map)

\t\$ npm test
";
        
        $__internal_158d8baae0fcb4d9d3d8fca1ba409662363efa928ce1f08ca1a78560b555fb49->leave($__internal_158d8baae0fcb4d9d3d8fca1ba409662363efa928ce1f08ca1a78560b555fb49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-weak-map/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# es6-weak-map
## WeakMap collection as specified in ECMAScript6

_Roughly inspired by Mark Miller's and Kris Kowal's [WeakMap implementation](https://github.com/drses/weak-map)_.

Differences are:
- Assumes compliant ES5 environment (no weird ES3 workarounds or hacks)
- Well modularized CJS style
- Based on one solution.

### Limitations

- Will fail on non extensible objects provided as keys

### Installation

\t\$ npm install es6-weak-map

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

### Usage

If you want to make sure your environment implements `WeakMap`, do:

```javascript
require('es6-weak-map/implement');
```

If you'd like to use native version when it exists and fallback to polyfill if it doesn't, but without implementing `WeakMap` on global scope, do:

```javascript
var WeakMap = require('es6-weak-map');
```

If you strictly want to use polyfill even if native `WeakMap` exists, do:

```javascript
var WeakMap = require('es6-weak-map/polyfill');
```

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-weakmap-objects). Still if you want quick look, follow example:

```javascript
var WeakMap = require('es6-weak-map');

var map = new WeakMap();
var obj = {};

map.set(obj, 'foo'); // map
map.get(obj);        // 'foo'
map.has(obj);        // true
map.delete(obj);     // true
map.get(obj);        // undefined
map.has(obj);        // false
map.set(obj, 'bar'); // map
map.has(obj);        // false
```

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-weak-map.svg)](https://travis-ci.org/medikoo/es6-weak-map)

\t\$ npm test
", "node_modules/es6-weak-map/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-weak-map/README.md");
    }
}
