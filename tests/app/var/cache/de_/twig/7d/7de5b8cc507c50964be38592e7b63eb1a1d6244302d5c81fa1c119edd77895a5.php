<?php

/* node_modules/inflight/README.md */
class __TwigTemplate_ce84f790247fc9ea202b3c28ea2aa59142bcc98705e2c399dcd3c745b4113661 extends Twig_Template
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
        $__internal_b59acc10fe3f854b91aacb68c1b0b4ca477f9f202528e763da13ac8ef48b6fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b59acc10fe3f854b91aacb68c1b0b4ca477f9f202528e763da13ac8ef48b6fa5->enter($__internal_b59acc10fe3f854b91aacb68c1b0b4ca477f9f202528e763da13ac8ef48b6fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/inflight/README.md"));

        // line 1
        echo "# inflight

Add callbacks to requests in flight to avoid async duplication

## USAGE

```javascript
var inflight = require('inflight')

// some request that does some stuff
function req(key, callback) {
  // key is any random string.  like a url or filename or whatever.
  //
  // will return either a falsey value, indicating that the
  // request for this key is already in flight, or a new callback
  // which when called will call all callbacks passed to inflightk
  // with the same key
  callback = inflight(key, callback)

  // If we got a falsey value back, then there's already a req going
  if (!callback) return

  // this is where you'd fetch the url or whatever
  // callback is also once()-ified, so it can safely be assigned
  // to multiple events etc.  First call wins.
  setTimeout(function() {
    callback(null, key)
  }, 100)
}

// only assigns a single setTimeout
// when it dings, all cbs get called
req('foo', cb1)
req('foo', cb2)
req('foo', cb3)
req('foo', cb4)
```
";
        
        $__internal_b59acc10fe3f854b91aacb68c1b0b4ca477f9f202528e763da13ac8ef48b6fa5->leave($__internal_b59acc10fe3f854b91aacb68c1b0b4ca477f9f202528e763da13ac8ef48b6fa5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/inflight/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# inflight

Add callbacks to requests in flight to avoid async duplication

## USAGE

```javascript
var inflight = require('inflight')

// some request that does some stuff
function req(key, callback) {
  // key is any random string.  like a url or filename or whatever.
  //
  // will return either a falsey value, indicating that the
  // request for this key is already in flight, or a new callback
  // which when called will call all callbacks passed to inflightk
  // with the same key
  callback = inflight(key, callback)

  // If we got a falsey value back, then there's already a req going
  if (!callback) return

  // this is where you'd fetch the url or whatever
  // callback is also once()-ified, so it can safely be assigned
  // to multiple events etc.  First call wins.
  setTimeout(function() {
    callback(null, key)
  }, 100)
}

// only assigns a single setTimeout
// when it dings, all cbs get called
req('foo', cb1)
req('foo', cb2)
req('foo', cb3)
req('foo', cb4)
```
", "node_modules/inflight/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/inflight/README.md");
    }
}
