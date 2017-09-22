<?php

/* node_modules/date-now/README.md */
class __TwigTemplate_b4cedfa4ebd25529586f562f4d754830018e0f849f726b3e117869ef3db134cf extends Twig_Template
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
        $__internal_5e20270a9c0b1c97a5bf03e520488ef40c4f89997436c26f615a81d67e0e97ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e20270a9c0b1c97a5bf03e520488ef40c4f89997436c26f615a81d67e0e97ab->enter($__internal_5e20270a9c0b1c97a5bf03e520488ef40c4f89997436c26f615a81d67e0e97ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/date-now/README.md"));

        // line 1
        echo "# date-now

[![build status][1]][2]

[![browser support][3]][4]

A requirable version of Date.now()

Use-case is to be able to mock out Date.now() using require interception.

## Example

```js
var now = require(\"date-now\")

var ts = now()
var ts2 = Date.now()
assert.equal(ts, ts2)
```

## example of seed

```
var now = require(\"date-now/seed\")(timeStampFromServer)

// ts is in \"sync\" with the seed value from the server
// useful if your users have their local time being a few minutes
// out of your server time.
var ts = now()
```

## Installation

`npm install date-now`

## Contributors

 - Raynos

## MIT Licenced

  [1]: https://secure.travis-ci.org/Colingo/date-now.png
  [2]: http://travis-ci.org/Colingo/date-now
  [3]: http://ci.testling.com/Colingo/date-now.png
  [4]: http://ci.testling.com/Colingo/date-now
";
        
        $__internal_5e20270a9c0b1c97a5bf03e520488ef40c4f89997436c26f615a81d67e0e97ab->leave($__internal_5e20270a9c0b1c97a5bf03e520488ef40c4f89997436c26f615a81d67e0e97ab_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/date-now/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# date-now

[![build status][1]][2]

[![browser support][3]][4]

A requirable version of Date.now()

Use-case is to be able to mock out Date.now() using require interception.

## Example

```js
var now = require(\"date-now\")

var ts = now()
var ts2 = Date.now()
assert.equal(ts, ts2)
```

## example of seed

```
var now = require(\"date-now/seed\")(timeStampFromServer)

// ts is in \"sync\" with the seed value from the server
// useful if your users have their local time being a few minutes
// out of your server time.
var ts = now()
```

## Installation

`npm install date-now`

## Contributors

 - Raynos

## MIT Licenced

  [1]: https://secure.travis-ci.org/Colingo/date-now.png
  [2]: http://travis-ci.org/Colingo/date-now
  [3]: http://ci.testling.com/Colingo/date-now.png
  [4]: http://ci.testling.com/Colingo/date-now
", "node_modules/date-now/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/date-now/README.md");
    }
}
