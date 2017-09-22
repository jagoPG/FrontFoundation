<?php

/* node_modules/caseless/README.md */
class __TwigTemplate_e67972077ce27fbb7277957cf43a8de5ecc7849541fe8fa5d00d2777b94f55e1 extends Twig_Template
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
        $__internal_cfd1e3dc400a7fa709453516b7a9e1aaa48adce09038a116a5c614efce9eae55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd1e3dc400a7fa709453516b7a9e1aaa48adce09038a116a5c614efce9eae55->enter($__internal_cfd1e3dc400a7fa709453516b7a9e1aaa48adce09038a116a5c614efce9eae55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/caseless/README.md"));

        // line 1
        echo "## Caseless -- wrap an object to set and get property with caseless semantics but also preserve caseing.

This library is incredibly useful when working with HTTP headers. It allows you to get/set/check for headers in a caseless manner while also preserving the caseing of headers the first time they are set.

## Usage

```javascript
var headers = {}
  , c = caseless(headers)
  ;
c.set('a-Header', 'asdf')
c.get('a-header') === 'asdf'
```

## has(key)

Has takes a name and if it finds a matching header will return that header name with the preserved caseing it was set with.

```javascript
c.has('a-header') === 'a-Header'
```

## set(key, value[, clobber=true])

Set is fairly straight forward except that if the header exists and clobber is disabled it will add `','+value` to the existing header.

```javascript
c.set('a-Header', 'fdas')
c.set('a-HEADER', 'more', false)
c.get('a-header') === 'fdsa,more'
```

## swap(key)

Swaps the casing of a header with the new one that is passed in.

```javascript
var headers = {}
  , c = caseless(headers)
  ;
c.set('a-Header', 'fdas')
c.swap('a-HEADER')
c.has('a-header') === 'a-HEADER'
headers === {'a-HEADER': 'fdas'}
```
";
        
        $__internal_cfd1e3dc400a7fa709453516b7a9e1aaa48adce09038a116a5c614efce9eae55->leave($__internal_cfd1e3dc400a7fa709453516b7a9e1aaa48adce09038a116a5c614efce9eae55_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/caseless/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## Caseless -- wrap an object to set and get property with caseless semantics but also preserve caseing.

This library is incredibly useful when working with HTTP headers. It allows you to get/set/check for headers in a caseless manner while also preserving the caseing of headers the first time they are set.

## Usage

```javascript
var headers = {}
  , c = caseless(headers)
  ;
c.set('a-Header', 'asdf')
c.get('a-header') === 'asdf'
```

## has(key)

Has takes a name and if it finds a matching header will return that header name with the preserved caseing it was set with.

```javascript
c.has('a-header') === 'a-Header'
```

## set(key, value[, clobber=true])

Set is fairly straight forward except that if the header exists and clobber is disabled it will add `','+value` to the existing header.

```javascript
c.set('a-Header', 'fdas')
c.set('a-HEADER', 'more', false)
c.get('a-header') === 'fdsa,more'
```

## swap(key)

Swaps the casing of a header with the new one that is passed in.

```javascript
var headers = {}
  , c = caseless(headers)
  ;
c.set('a-Header', 'fdas')
c.swap('a-HEADER')
c.has('a-header') === 'a-HEADER'
headers === {'a-HEADER': 'fdas'}
```
", "node_modules/caseless/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/caseless/README.md");
    }
}
