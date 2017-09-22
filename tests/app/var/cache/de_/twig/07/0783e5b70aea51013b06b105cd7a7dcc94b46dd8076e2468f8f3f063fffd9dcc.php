<?php

/* node_modules/babel-plugin-transform-es2015-modules-amd/README.md */
class __TwigTemplate_cdf340b18d90e0eae936dd26b0b9d026b141736e09e0283632218a2320834c55 extends Twig_Template
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
        $__internal_854473e33ccfd47edc43c3d7f0746f1bf3bb74a78c780b61bac7907cf2f10342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_854473e33ccfd47edc43c3d7f0746f1bf3bb74a78c780b61bac7907cf2f10342->enter($__internal_854473e33ccfd47edc43c3d7f0746f1bf3bb74a78c780b61bac7907cf2f10342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-plugin-transform-es2015-modules-amd/README.md"));

        // line 1
        echo "# babel-plugin-transform-es2015-modules-amd

> This plugin transforms ES2015 modules to [Asynchronous Module Definition (AMD)](https://github.com/amdjs/amdjs-api).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
define([\"exports\"], function (exports) {
  \"use strict\";

  Object.defineProperty(exports, \"__esModule\", {
    value: true
  });

  exports.default = 42;
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-amd
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-modules-amd\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-amd script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-amd\"]
});
```

### Options

See options for `babel-plugin-transform-es2015-commonjs`.
";
        
        $__internal_854473e33ccfd47edc43c3d7f0746f1bf3bb74a78c780b61bac7907cf2f10342->leave($__internal_854473e33ccfd47edc43c3d7f0746f1bf3bb74a78c780b61bac7907cf2f10342_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-plugin-transform-es2015-modules-amd/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-plugin-transform-es2015-modules-amd

> This plugin transforms ES2015 modules to [Asynchronous Module Definition (AMD)](https://github.com/amdjs/amdjs-api).

## Example

**In**

```javascript
export default 42;
```

**Out**

```javascript
define([\"exports\"], function (exports) {
  \"use strict\";

  Object.defineProperty(exports, \"__esModule\", {
    value: true
  });

  exports.default = 42;
});
```

## Installation

```sh
npm install --save-dev babel-plugin-transform-es2015-modules-amd
```

## Usage

### Via `.babelrc` (Recommended)

**.babelrc**

```json
{
  \"plugins\": [\"transform-es2015-modules-amd\"]
}
```

### Via CLI

```sh
babel --plugins transform-es2015-modules-amd script.js
```

### Via Node API

```javascript
require(\"babel-core\").transform(\"code\", {
  plugins: [\"transform-es2015-modules-amd\"]
});
```

### Options

See options for `babel-plugin-transform-es2015-commonjs`.
", "node_modules/babel-plugin-transform-es2015-modules-amd/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-plugin-transform-es2015-modules-amd/README.md");
    }
}
