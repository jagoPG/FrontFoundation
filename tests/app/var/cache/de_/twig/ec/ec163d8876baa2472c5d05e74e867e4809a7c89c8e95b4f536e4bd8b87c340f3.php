<?php

/* node_modules/es6-set/README.md */
class __TwigTemplate_23fbd906a86ec2903ad0d3a26b613478f78188341b48641d0697d6112e430894 extends Twig_Template
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
        $__internal_4d70b3971b39d8a535ee9bc13ddc69648beed5cee4492012846761ae30f6dafc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d70b3971b39d8a535ee9bc13ddc69648beed5cee4492012846761ae30f6dafc->enter($__internal_4d70b3971b39d8a535ee9bc13ddc69648beed5cee4492012846761ae30f6dafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/es6-set/README.md"));

        // line 1
        echo "# es6-set
## Set collection as specified in ECMAScript6

__Warning:  
v0.1 version does not ensure O(1) algorithm complexity (but O(n)). This shortcoming will be addressed in v1.0__

### Usage

If you want to make sure your environment implements `Set`, do:

```javascript
require('es6-set/implement');
```

If you'd like to use native version when it exists and fallback to polyfill if it doesn't, but without implementing `Set` on global scope, do:

```javascript
var Set = require('es6-set');
```

If you strictly want to use polyfill even if native `Set` exists, do:

```javascript
var Set = require('es6-set/polyfill');
```

### Installation

\t\$ npm install es6-set

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-set-objects). Still if you want quick look, follow examples:

```javascript
var Set = require('es6-set');

var set = new Set(['raz', 'dwa', {}]);

set.size;          // 3
set.has('raz');    // true
set.has('foo');    // false
set.add('foo');    // set
set.size           // 4
set.has('foo');    // true
set.has('dwa');    // true
set.delete('dwa'); // true
set.size;          // 3

set.forEach(function (value) {
 // 'raz', {}, 'foo' iterated
});

// FF nightly only:
for (value of set) {
 // 'raz', {}, 'foo' iterated
}

var iterator = set.values();

iterator.next(); // { done: false, value: 'raz' }
iterator.next(); // { done: false, value: {} }
iterator.next(); // { done: false, value: 'foo' }
iterator.next(); // { done: true, value: undefined }

set.clear(); // undefined
set.size; // 0
```

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-set.png)](https://travis-ci.org/medikoo/es6-set)

\t\$ npm test
";
        
        $__internal_4d70b3971b39d8a535ee9bc13ddc69648beed5cee4492012846761ae30f6dafc->leave($__internal_4d70b3971b39d8a535ee9bc13ddc69648beed5cee4492012846761ae30f6dafc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/es6-set/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# es6-set
## Set collection as specified in ECMAScript6

__Warning:  
v0.1 version does not ensure O(1) algorithm complexity (but O(n)). This shortcoming will be addressed in v1.0__

### Usage

If you want to make sure your environment implements `Set`, do:

```javascript
require('es6-set/implement');
```

If you'd like to use native version when it exists and fallback to polyfill if it doesn't, but without implementing `Set` on global scope, do:

```javascript
var Set = require('es6-set');
```

If you strictly want to use polyfill even if native `Set` exists, do:

```javascript
var Set = require('es6-set/polyfill');
```

### Installation

\t\$ npm install es6-set

To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

#### API

Best is to refer to [specification](http://people.mozilla.org/~jorendorff/es6-draft.html#sec-set-objects). Still if you want quick look, follow examples:

```javascript
var Set = require('es6-set');

var set = new Set(['raz', 'dwa', {}]);

set.size;          // 3
set.has('raz');    // true
set.has('foo');    // false
set.add('foo');    // set
set.size           // 4
set.has('foo');    // true
set.has('dwa');    // true
set.delete('dwa'); // true
set.size;          // 3

set.forEach(function (value) {
 // 'raz', {}, 'foo' iterated
});

// FF nightly only:
for (value of set) {
 // 'raz', {}, 'foo' iterated
}

var iterator = set.values();

iterator.next(); // { done: false, value: 'raz' }
iterator.next(); // { done: false, value: {} }
iterator.next(); // { done: false, value: 'foo' }
iterator.next(); // { done: true, value: undefined }

set.clear(); // undefined
set.size; // 0
```

## Tests [![Build Status](https://travis-ci.org/medikoo/es6-set.png)](https://travis-ci.org/medikoo/es6-set)

\t\$ npm test
", "node_modules/es6-set/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/es6-set/README.md");
    }
}
