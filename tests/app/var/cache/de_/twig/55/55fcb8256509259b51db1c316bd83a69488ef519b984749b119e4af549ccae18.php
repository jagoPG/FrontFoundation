<?php

/* node_modules/path-to-regexp/Readme.md */
class __TwigTemplate_4729d40028c2195c39eff68aed1b2abf19880a0fe4889a3d143243b9e4168208 extends Twig_Template
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
        $__internal_d834abd913887eb2b305e0acc37942778c3dee8a9147a2da257637dd448d397b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d834abd913887eb2b305e0acc37942778c3dee8a9147a2da257637dd448d397b->enter($__internal_d834abd913887eb2b305e0acc37942778c3dee8a9147a2da257637dd448d397b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-to-regexp/Readme.md"));

        // line 1
        echo "# Path-to-RegExp

Turn an Express-style path string such as `/user/:name` into a regular expression.

**Note:** This is a legacy branch. You should upgrade to `1.x`.

## Usage

```javascript
var pathToRegexp = require('path-to-regexp');
```

### pathToRegexp(path, keys, options)

 - **path** A string in the express format, an array of such strings, or a regular expression
 - **keys** An array to be populated with the keys present in the url.  Once the function completes, this will be an array of strings.
 - **options**
   - **options.sensitive** Defaults to false, set this to true to make routes case sensitive
   - **options.strict** Defaults to false, set this to true to make the trailing slash matter.
   - **options.end** Defaults to true, set this to false to only match the prefix of the URL.

```javascript
var keys = [];
var exp = pathToRegexp('/foo/:bar', keys);
//keys = ['bar']
//exp = /^\\/foo\\/(?:([^\\/]+?))\\/?\$/i
```

## Live Demo

You can see a live demo of this library in use at [express-route-tester](http://forbeslindesay.github.com/express-route-tester/).

## License

  MIT
";
        
        $__internal_d834abd913887eb2b305e0acc37942778c3dee8a9147a2da257637dd448d397b->leave($__internal_d834abd913887eb2b305e0acc37942778c3dee8a9147a2da257637dd448d397b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-to-regexp/Readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Path-to-RegExp

Turn an Express-style path string such as `/user/:name` into a regular expression.

**Note:** This is a legacy branch. You should upgrade to `1.x`.

## Usage

```javascript
var pathToRegexp = require('path-to-regexp');
```

### pathToRegexp(path, keys, options)

 - **path** A string in the express format, an array of such strings, or a regular expression
 - **keys** An array to be populated with the keys present in the url.  Once the function completes, this will be an array of strings.
 - **options**
   - **options.sensitive** Defaults to false, set this to true to make routes case sensitive
   - **options.strict** Defaults to false, set this to true to make the trailing slash matter.
   - **options.end** Defaults to true, set this to false to only match the prefix of the URL.

```javascript
var keys = [];
var exp = pathToRegexp('/foo/:bar', keys);
//keys = ['bar']
//exp = /^\\/foo\\/(?:([^\\/]+?))\\/?\$/i
```

## Live Demo

You can see a live demo of this library in use at [express-route-tester](http://forbeslindesay.github.com/express-route-tester/).

## License

  MIT
", "node_modules/path-to-regexp/Readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-to-regexp/Readme.md");
    }
}
