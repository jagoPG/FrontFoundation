<?php

/* node_modules/async-each/README.md */
class __TwigTemplate_77dd11ba7e35bff38c0bb0b2df3fba6b67535f535b2c8fcfed4d2f475a75ff09 extends Twig_Template
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
        $__internal_1298c81e61531c93f058bbdfb506982aaf684435f3563d8b966e31fc39cc79ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1298c81e61531c93f058bbdfb506982aaf684435f3563d8b966e31fc39cc79ca->enter($__internal_1298c81e61531c93f058bbdfb506982aaf684435f3563d8b966e31fc39cc79ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/async-each/README.md"));

        // line 1
        echo "# async-each

No-bullshit, ultra-simple, 35-lines-of-code async parallel forEach function for JavaScript.

We don't need junky 30K async libs. Really.

For browsers and node.js.

## Installation
* Just include async-each before your scripts.
* `npm install async-each` if you’re using node.js.
* `bower install async-each` if you’re using [Bower](http://bower.io).

## Usage

* `each(array, iterator, callback);` — `Array`, `Function`, `(optional) Function`
* `iterator(item, next)` receives current item and a callback that will mark the item as done. `next` callback receives optional `error, transformedItem` arguments.
* `callback(error, transformedArray)` optionally receives first error and transformed result `Array`.

Node.js:

```javascript
var each = require('async-each');
each(['a.js', 'b.js', 'c.js'], fs.readFile, function(error, contents) {
  if (error) console.error(error);
  console.log('Contents for a, b and c:', contents);
});
```

Browser:

```javascript
window.asyncEach(list, fn, callback);
```

## License

[The MIT License](https://raw.githubusercontent.com/paulmillr/mit/master/README.md)
";
        
        $__internal_1298c81e61531c93f058bbdfb506982aaf684435f3563d8b966e31fc39cc79ca->leave($__internal_1298c81e61531c93f058bbdfb506982aaf684435f3563d8b966e31fc39cc79ca_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/async-each/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# async-each

No-bullshit, ultra-simple, 35-lines-of-code async parallel forEach function for JavaScript.

We don't need junky 30K async libs. Really.

For browsers and node.js.

## Installation
* Just include async-each before your scripts.
* `npm install async-each` if you’re using node.js.
* `bower install async-each` if you’re using [Bower](http://bower.io).

## Usage

* `each(array, iterator, callback);` — `Array`, `Function`, `(optional) Function`
* `iterator(item, next)` receives current item and a callback that will mark the item as done. `next` callback receives optional `error, transformedItem` arguments.
* `callback(error, transformedArray)` optionally receives first error and transformed result `Array`.

Node.js:

```javascript
var each = require('async-each');
each(['a.js', 'b.js', 'c.js'], fs.readFile, function(error, contents) {
  if (error) console.error(error);
  console.log('Contents for a, b and c:', contents);
});
```

Browser:

```javascript
window.asyncEach(list, fn, callback);
```

## License

[The MIT License](https://raw.githubusercontent.com/paulmillr/mit/master/README.md)
", "node_modules/async-each/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/async-each/README.md");
    }
}
