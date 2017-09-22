<?php

/* node_modules/d/README.md */
class __TwigTemplate_eb9e3f8273f67fe10f5922c989dd6baad6f5220bdc7eb727e199b7a7d3a0ea3c extends Twig_Template
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
        $__internal_a2f44011bb20d50fa45c6f99069e839ab12ec3904a124cd1ef3bd7bb5d9508dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2f44011bb20d50fa45c6f99069e839ab12ec3904a124cd1ef3bd7bb5d9508dd->enter($__internal_a2f44011bb20d50fa45c6f99069e839ab12ec3904a124cd1ef3bd7bb5d9508dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/d/README.md"));

        // line 1
        echo "# D
## Property descriptor factory

_Originally derived from [es5-ext](https://github.com/medikoo/es5-ext) package._

Defining properties with descriptors is very verbose:

```javascript
var Account = function () {};
Object.defineProperties(Account.prototype, {
  deposit: { value: function () {
      /* ... */
    }, configurable: true, enumerable: false, writable: true },
  withdraw: { value: function () {
      /* ... */
    }, configurable: true, enumerable: false, writable: true },
  balance: { get: function () {
      /* ... */
    }, configurable: true, enumerable: false }
});
```

D cuts that to:

```javascript
var d = require('d');

var Account = function () {};
Object.defineProperties(Account.prototype, {
  deposit: d(function () {
    /* ... */
  }),
  withdraw: d(function () {
    /* ... */
  }),
  balance: d.gs(function () {
    /* ... */
  })
});
```

By default, created descriptor follow characteristics of native ES5 properties, and defines values as:

```javascript
{ configurable: true, enumerable: false, writable: true }
```

You can overwrite it by preceding _value_ argument with instruction:
```javascript
d('c', value); // { configurable: true, enumerable: false, writable: false }
d('ce', value); // { configurable: true, enumerable: true, writable: false }
d('e', value); // { configurable: false, enumerable: true, writable: false }

// Same way for get/set:
d.gs('e', value); // { configurable: false, enumerable: true }
```

### Installation

\t\$ npm install d
\t
To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

### Other utilities

#### autoBind(obj, props) _(d/auto-bind)_

Define methods which will be automatically bound to its instances

```javascript
var d = require('d');
var autoBind = require('d/auto-bind');

var Foo = function () { this._count = 0; };
Object.defineProperties(Foo.prototype, autoBind({
  increment: d(function () { ++this._count; });
}));

var foo = new Foo();

// Increment foo counter on each domEl click
domEl.addEventListener('click', foo.increment, false);
```

#### lazy(obj, props) _(d/lazy)_

Define lazy properties, which will be resolved on first access

```javascript
var d = require('d');
var lazy = require('d/lazy');

var Foo = function () {};
Object.defineProperties(Foo.prototype, lazy({
  items: d(function () { return []; })
}));

var foo = new Foo();
foo.items.push(1, 2); // foo.items array created and defined directly on foo
```

## Tests [![Build Status](https://travis-ci.org/medikoo/d.png)](https://travis-ci.org/medikoo/d)

\t\$ npm test
";
        
        $__internal_a2f44011bb20d50fa45c6f99069e839ab12ec3904a124cd1ef3bd7bb5d9508dd->leave($__internal_a2f44011bb20d50fa45c6f99069e839ab12ec3904a124cd1ef3bd7bb5d9508dd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/d/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# D
## Property descriptor factory

_Originally derived from [es5-ext](https://github.com/medikoo/es5-ext) package._

Defining properties with descriptors is very verbose:

```javascript
var Account = function () {};
Object.defineProperties(Account.prototype, {
  deposit: { value: function () {
      /* ... */
    }, configurable: true, enumerable: false, writable: true },
  withdraw: { value: function () {
      /* ... */
    }, configurable: true, enumerable: false, writable: true },
  balance: { get: function () {
      /* ... */
    }, configurable: true, enumerable: false }
});
```

D cuts that to:

```javascript
var d = require('d');

var Account = function () {};
Object.defineProperties(Account.prototype, {
  deposit: d(function () {
    /* ... */
  }),
  withdraw: d(function () {
    /* ... */
  }),
  balance: d.gs(function () {
    /* ... */
  })
});
```

By default, created descriptor follow characteristics of native ES5 properties, and defines values as:

```javascript
{ configurable: true, enumerable: false, writable: true }
```

You can overwrite it by preceding _value_ argument with instruction:
```javascript
d('c', value); // { configurable: true, enumerable: false, writable: false }
d('ce', value); // { configurable: true, enumerable: true, writable: false }
d('e', value); // { configurable: false, enumerable: true, writable: false }

// Same way for get/set:
d.gs('e', value); // { configurable: false, enumerable: true }
```

### Installation

\t\$ npm install d
\t
To port it to Browser or any other (non CJS) environment, use your favorite CJS bundler. No favorite yet? Try: [Browserify](http://browserify.org/), [Webmake](https://github.com/medikoo/modules-webmake) or [Webpack](http://webpack.github.io/)

### Other utilities

#### autoBind(obj, props) _(d/auto-bind)_

Define methods which will be automatically bound to its instances

```javascript
var d = require('d');
var autoBind = require('d/auto-bind');

var Foo = function () { this._count = 0; };
Object.defineProperties(Foo.prototype, autoBind({
  increment: d(function () { ++this._count; });
}));

var foo = new Foo();

// Increment foo counter on each domEl click
domEl.addEventListener('click', foo.increment, false);
```

#### lazy(obj, props) _(d/lazy)_

Define lazy properties, which will be resolved on first access

```javascript
var d = require('d');
var lazy = require('d/lazy');

var Foo = function () {};
Object.defineProperties(Foo.prototype, lazy({
  items: d(function () { return []; })
}));

var foo = new Foo();
foo.items.push(1, 2); // foo.items array created and defined directly on foo
```

## Tests [![Build Status](https://travis-ci.org/medikoo/d.png)](https://travis-ci.org/medikoo/d)

\t\$ npm test
", "node_modules/d/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/d/README.md");
    }
}
