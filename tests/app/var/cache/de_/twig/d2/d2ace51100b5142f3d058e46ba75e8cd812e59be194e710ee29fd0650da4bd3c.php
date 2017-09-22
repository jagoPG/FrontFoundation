<?php

/* node_modules/babel-plugin-transform-es2015-for-of/README.md */
class __TwigTemplate_d3ef59ef6e441ba85ed41f16ae817565be569dfa3433aa0fa23e0d77b7bb9694 extends Twig_Template
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
        $__internal_1d969646df5a5b05ab8c1937d4ef758f09b61f9c10e0b1740dfd7bfa4e18fc34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d969646df5a5b05ab8c1937d4ef758f09b61f9c10e0b1740dfd7bfa4e18fc34->enter($__internal_1d969646df5a5b05ab8c1937d4ef758f09b61f9c10e0b1740dfd7bfa4e18fc34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-for-of/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-for-of

> Compile ES2015 for...of to ES5

## Example

**In**

```js
for (var i of foo) {}
```

**Out**

```js
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
  for (var _iterator = foo[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
    var i = _step.value;
  }
} catch (err) {
  _didIteratorError = true;
  _iteratorError = err;
} finally {
  try {
    if (!_iteratorNormalCompletion && _iterator.return) {
      _iterator.return();
    }
  } finally {
    if (_didIteratorError) {
      throw _iteratorError;
    }
  }
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-for-of
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-for-of\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-for-of\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-for-of script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-for-of\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`

In loose mode, arrays are put in a fast path, thus heavily increasing performance.
All other iterables will continue to work fine.

#### Example

**In**

```js
for (var i of foo) {}
```

**Out**

```js
for (var _iterator = foo, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : _iterator[Symbol.iterator]();;) {
  var _ref;

  if (_isArray) {
    if (_i >= _iterator.length) break;
    _ref = _iterator[_i++];
  } else {
    _i = _iterator.next();
    if (_i.done) break;
    _ref = _i.value;
  }

  var i = _ref;
}
```

#### Abrupt completions

In loose mode an iterator's `return` method will not be called on abrupt completions caused by thrown errors.

Please see [google/traceur-compiler#1773](https://github.com/google/traceur-compiler/issues/1773) and
[babel/babel#838](https://github.com/babel/babel/issues/838) for more information.

### Optimization

If a basic array is used, Babel will compile the for-of loop down to a regular for loop.

**In**

```js
for (let a of [1,2,3]) {}
```

**Out**

```js
var _arr = [1, 2, 3];
for (var _i = 0; _i < _arr.length; _i++) {
  var a = _arr[_i];
}
```
";
        
        $__internal_1d969646df5a5b05ab8c1937d4ef758f09b61f9c10e0b1740dfd7bfa4e18fc34->leave($__internal_1d969646df5a5b05ab8c1937d4ef758f09b61f9c10e0b1740dfd7bfa4e18fc34_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-for-of/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-for-of

> Compile ES2015 for...of to ES5

## Example

**In**

```js
for (var i of foo) {}
```

**Out**

```js
var _iteratorNormalCompletion = true;
var _didIteratorError = false;
var _iteratorError = undefined;

try {
  for (var _iterator = foo[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
    var i = _step.value;
  }
} catch (err) {
  _didIteratorError = true;
  _iteratorError = err;
} finally {
  try {
    if (!_iteratorNormalCompletion && _iterator.return) {
      _iterator.return();
    }
  } finally {
    if (_didIteratorError) {
      throw _iteratorError;
    }
  }
}
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-for-of
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-for-of\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-for-of\", {
      \"loose\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-for-of script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-for-of\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`

In loose mode, arrays are put in a fast path, thus heavily increasing performance.
All other iterables will continue to work fine.

#### Example

**In**

```js
for (var i of foo) {}
```

**Out**

```js
for (var _iterator = foo, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : _iterator[Symbol.iterator]();;) {
  var _ref;

  if (_isArray) {
    if (_i >= _iterator.length) break;
    _ref = _iterator[_i++];
  } else {
    _i = _iterator.next();
    if (_i.done) break;
    _ref = _i.value;
  }

  var i = _ref;
}
```

#### Abrupt completions

In loose mode an iterator's `return` method will not be called on abrupt completions caused by thrown errors.

Please see [google/traceur-compiler#1773](https://github.com/google/traceur-compiler/issues/1773) and
[babel/babel#838](https://github.com/babel/babel/issues/838) for more information.

### Optimization

If a basic array is used, Babel will compile the for-of loop down to a regular for loop.

**In**

```js
for (let a of [1,2,3]) {}
```

**Out**

```js
var _arr = [1, 2, 3];
for (var _i = 0; _i < _arr.length; _i++) {
  var a = _arr[_i];
}
```
", "node_modules/babel-plugin-transform-es2015-for-of/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-for-of/README.md");
    }
}
