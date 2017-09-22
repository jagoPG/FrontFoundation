<?php

/* node_modules/fsevents/node_modules/delegates/Readme.md */
class __TwigTemplate_e72d3843582e2a95eed6a485360144bf98156175a5efc4c858b5ff0e2b117787 extends Twig_Template
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
        $__internal_f4598b00ed4fbb83bb1e817344b5cd19735d687b1bd770ee6f5a5d5a2345d7c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4598b00ed4fbb83bb1e817344b5cd19735d687b1bd770ee6f5a5d5a2345d7c7->enter($__internal_f4598b00ed4fbb83bb1e817344b5cd19735d687b1bd770ee6f5a5d5a2345d7c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/delegates/Readme.md"));

        // line 1
        echo "
# delegates

  Node method and accessor delegation utilty.

## Installation

```
\$ npm install delegates
```

## Example

```js
var delegate = require('delegates');

...

delegate(proto, 'request')
  .method('acceptsLanguages')
  .method('acceptsEncodings')
  .method('acceptsCharsets')
  .method('accepts')
  .method('is')
  .access('querystring')
  .access('idempotent')
  .access('socket')
  .access('length')
  .access('query')
  .access('search')
  .access('status')
  .access('method')
  .access('path')
  .access('body')
  .access('host')
  .access('url')
  .getter('subdomains')
  .getter('protocol')
  .getter('header')
  .getter('stale')
  .getter('fresh')
  .getter('secure')
  .getter('ips')
  .getter('ip')
```

# API

## Delegate(proto, prop)

Creates a delegator instance used to configure using the `prop` on the given
`proto` object. (which is usually a prototype)

## Delegate#method(name)

Allows the given method `name` to be accessed on the host.

## Delegate#getter(name)

Creates a \"getter\" for the property with the given `name` on the delegated
object.

## Delegate#setter(name)

Creates a \"setter\" for the property with the given `name` on the delegated
object.

## Delegate#access(name)

Creates an \"accessor\" (ie: both getter *and* setter) for the property with the
given `name` on the delegated object.

## Delegate#fluent(name)

A unique type of \"accessor\" that works for a \"fluent\" API. When called as a
getter, the method returns the expected value. However, if the method is called
with a value, it will return itself so it can be chained. For example:

```js
delegate(proto, 'request')
  .fluent('query')

// getter
var q = request.query();

// setter (chainable)
request
  .query({ a: 1 })
  .query({ b: 2 });
```

# License

  MIT
";
        
        $__internal_f4598b00ed4fbb83bb1e817344b5cd19735d687b1bd770ee6f5a5d5a2345d7c7->leave($__internal_f4598b00ed4fbb83bb1e817344b5cd19735d687b1bd770ee6f5a5d5a2345d7c7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/delegates/Readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
# delegates

  Node method and accessor delegation utilty.

## Installation

```
\$ npm install delegates
```

## Example

```js
var delegate = require('delegates');

...

delegate(proto, 'request')
  .method('acceptsLanguages')
  .method('acceptsEncodings')
  .method('acceptsCharsets')
  .method('accepts')
  .method('is')
  .access('querystring')
  .access('idempotent')
  .access('socket')
  .access('length')
  .access('query')
  .access('search')
  .access('status')
  .access('method')
  .access('path')
  .access('body')
  .access('host')
  .access('url')
  .getter('subdomains')
  .getter('protocol')
  .getter('header')
  .getter('stale')
  .getter('fresh')
  .getter('secure')
  .getter('ips')
  .getter('ip')
```

# API

## Delegate(proto, prop)

Creates a delegator instance used to configure using the `prop` on the given
`proto` object. (which is usually a prototype)

## Delegate#method(name)

Allows the given method `name` to be accessed on the host.

## Delegate#getter(name)

Creates a \"getter\" for the property with the given `name` on the delegated
object.

## Delegate#setter(name)

Creates a \"setter\" for the property with the given `name` on the delegated
object.

## Delegate#access(name)

Creates an \"accessor\" (ie: both getter *and* setter) for the property with the
given `name` on the delegated object.

## Delegate#fluent(name)

A unique type of \"accessor\" that works for a \"fluent\" API. When called as a
getter, the method returns the expected value. However, if the method is called
with a value, it will return itself so it can be chained. For example:

```js
delegate(proto, 'request')
  .fluent('query')

// getter
var q = request.query();

// setter (chainable)
request
  .query({ a: 1 })
  .query({ b: 2 });
```

# License

  MIT
", "node_modules/fsevents/node_modules/delegates/Readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/delegates/Readme.md");
    }
}
