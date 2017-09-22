<?php

/* node_modules/babel-plugin-transform-es2015-modules-commonjs/README.md */
class __TwigTemplate_04fd2d2f6e37782f3cc5805fd37321c736a1f40fbea11eb38939e01489b789ce extends Twig_Template
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
        $__internal_18b091856240aec8842f7ff4c4e3c1875294269c5ccfc7c479f2165c918c074f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18b091856240aec8842f7ff4c4e3c1875294269c5ccfc7c479f2165c918c074f->enter($__internal_18b091856240aec8842f7ff4c4e3c1875294269c5ccfc7c479f2165c918c074f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-modules-commonjs/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-modules-commonjs

> This plugin transforms ES2015 modules to [CommonJS](http://wiki.commonjs.org/wiki/Modules/1.1).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
Object.defineProperty(exports, \"__esModule\", {
  value: true
});

exports.default = 42;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-commonjs
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-modules-commonjs\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-modules-commonjs\", {
      \"allowTopLevelThis\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-commonjs script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-commonjs\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`.

As per the spec, `import` and `export` are only allowed to be used at the top
level. When in loose mode these are allowed to be used anywhere.

And by default, when using exports with babel a non-enumerable `__esModule` property
is exported.

```javascript
var foo = exports.foo = 5;

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
```

In environments that don't support this you can enable loose mode on `babel-plugin-transform-es2015-modules-commonjs`
and instead of using `Object.defineProperty` an assignment will be used instead.

```javascript
var foo = exports.foo = 5;
exports.__esModule = true;
```

### `strict`

`boolean`, defaults to `false`

By default, when using exports with babel a non-enumerable `__esModule` property
is exported. In some cases this property is used to determine if the import _is_ the
default export or if it _contains_ the default export.

```javascript
var foo = exports.foo = 5;

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
```

In order to prevent the `__esModule` property from being exported, you can set
the `strict` option to `true`.

### `noInterop`

`boolean`, defaults to `false`

By default, when using exports with babel a non-enumerable `__esModule` property
is exported. This property is then used to determine if the import _is_ the default
export or if it _contains_ the default export.

```javascript
\"use strict\";

var _foo = require(\"foo\");

var _foo2 = _interopRequireDefault(_foo);

function _interopRequireDefault(obj) {
  return obj && obj.__esModule ? obj : { default: obj };
}
```

In cases where the auto-unwrapping of `default` is not needed, you can set the
`noInterop` option to `true` to avoid the usage of the `interopRequireDefault`
helper (shown in inline form above).
";
        
        $__internal_18b091856240aec8842f7ff4c4e3c1875294269c5ccfc7c479f2165c918c074f->leave($__internal_18b091856240aec8842f7ff4c4e3c1875294269c5ccfc7c479f2165c918c074f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-modules-commonjs/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-modules-commonjs

> This plugin transforms ES2015 modules to [CommonJS](http://wiki.commonjs.org/wiki/Modules/1.1).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
Object.defineProperty(exports, \"__esModule\", {
  value: true
});

exports.default = 42;
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-commonjs
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```js
// without options
{
  \"plugins\": [\"transform-es2015-modules-commonjs\"]
}

// with options
{
  \"plugins\": [
    [\"transform-es2015-modules-commonjs\", {
      \"allowTopLevelThis\": true
    }]
  ]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-commonjs script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-commonjs\"]
});
```

## Options

### `loose`

`boolean`, defaults to `false`.

As per the spec, `import` and `export` are only allowed to be used at the top
level. When in loose mode these are allowed to be used anywhere.

And by default, when using exports with babel a non-enumerable `__esModule` property
is exported.

```javascript
var foo = exports.foo = 5;

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
```

In environments that don't support this you can enable loose mode on `babel-plugin-transform-es2015-modules-commonjs`
and instead of using `Object.defineProperty` an assignment will be used instead.

```javascript
var foo = exports.foo = 5;
exports.__esModule = true;
```

### `strict`

`boolean`, defaults to `false`

By default, when using exports with babel a non-enumerable `__esModule` property
is exported. In some cases this property is used to determine if the import _is_ the
default export or if it _contains_ the default export.

```javascript
var foo = exports.foo = 5;

Object.defineProperty(exports, \"__esModule\", {
  value: true
});
```

In order to prevent the `__esModule` property from being exported, you can set
the `strict` option to `true`.

### `noInterop`

`boolean`, defaults to `false`

By default, when using exports with babel a non-enumerable `__esModule` property
is exported. This property is then used to determine if the import _is_ the default
export or if it _contains_ the default export.

```javascript
\"use strict\";

var _foo = require(\"foo\");

var _foo2 = _interopRequireDefault(_foo);

function _interopRequireDefault(obj) {
  return obj && obj.__esModule ? obj : { default: obj };
}
```

In cases where the auto-unwrapping of `default` is not needed, you can set the
`noInterop` option to `true` to avoid the usage of the `interopRequireDefault`
helper (shown in inline form above).
", "node_modules/babel-plugin-transform-es2015-modules-commonjs/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-modules-commonjs/README.md");
    }
}
