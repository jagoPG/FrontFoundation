<?php

/* node_modules/jquery/README.md */
class __TwigTemplate_57c3c380e837b99c6e088e7f397cffe064e92018e462f52cdb3ff94a96a9396b extends Twig_Template
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
        $__internal_c9799f15e17339d214102e21d14d338f00080710e7e3f4f89f864e0e11d3c197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9799f15e17339d214102e21d14d338f00080710e7e3f4f89f864e0e11d3c197->enter($__internal_c9799f15e17339d214102e21d14d338f00080710e7e3f4f89f864e0e11d3c197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/jquery/README.md"));

        // line 1
        echo "# jQuery

> jQuery is a fast, small, and feature-rich JavaScript library.

For information on how to get started and how to use jQuery, please see [jQuery's documentation](http://api.jquery.com/).
For source files and issues, please visit the [jQuery repo](https://github.com/jquery/jquery).

If upgrading, please see the [blog post for 3.2.1](https://blog.jquery.com/2017/03/20/jquery-3-2-1-now-available/). This includes notable differences from the previous version and a more readable changelog.

## Including jQuery

Below are some of the most common ways to include jQuery.

### Browser

#### Script tag

```html
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
```

#### Babel

[Babel](http://babeljs.io/) is a next generation JavaScript compiler. One of the features is the ability to use ES6/ES2015 modules now, even though browsers do not yet support this feature natively.

```js
import \$ from \"jquery\";
```

#### Browserify/Webpack

There are several ways to use [Browserify](http://browserify.org/) and [Webpack](https://webpack.github.io/). For more information on using these tools, please refer to the corresponding project's documention. In the script, including jQuery will usually look like this...

```js
var \$ = require(\"jquery\");
```

#### AMD (Asynchronous Module Definition)

AMD is a module format built for the browser. For more information, we recommend [require.js' documentation](http://requirejs.org/docs/whyamd.html).

```js
define([\"jquery\"], function(\$) {

});
```

### Node

To include jQuery in [Node](nodejs.org), first install with npm.

```sh
npm install jquery
```

For jQuery to work in Node, a window with a document is required. Since no such window exists natively in Node, one can be mocked by tools such as [jsdom](https://github.com/tmpvar/jsdom). This can be useful for testing purposes.

```js
require(\"jsdom\").env(\"\", function(err, window) {
\tif (err) {
\t\tconsole.error(err);
\t\treturn;
\t}

\tvar \$ = require(\"jquery\")(window);
});
```
";
        
        $__internal_c9799f15e17339d214102e21d14d338f00080710e7e3f4f89f864e0e11d3c197->leave($__internal_c9799f15e17339d214102e21d14d338f00080710e7e3f4f89f864e0e11d3c197_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/jquery/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# jQuery

> jQuery is a fast, small, and feature-rich JavaScript library.

For information on how to get started and how to use jQuery, please see [jQuery's documentation](http://api.jquery.com/).
For source files and issues, please visit the [jQuery repo](https://github.com/jquery/jquery).

If upgrading, please see the [blog post for 3.2.1](https://blog.jquery.com/2017/03/20/jquery-3-2-1-now-available/). This includes notable differences from the previous version and a more readable changelog.

## Including jQuery

Below are some of the most common ways to include jQuery.

### Browser

#### Script tag

```html
<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>
```

#### Babel

[Babel](http://babeljs.io/) is a next generation JavaScript compiler. One of the features is the ability to use ES6/ES2015 modules now, even though browsers do not yet support this feature natively.

```js
import \$ from \"jquery\";
```

#### Browserify/Webpack

There are several ways to use [Browserify](http://browserify.org/) and [Webpack](https://webpack.github.io/). For more information on using these tools, please refer to the corresponding project's documention. In the script, including jQuery will usually look like this...

```js
var \$ = require(\"jquery\");
```

#### AMD (Asynchronous Module Definition)

AMD is a module format built for the browser. For more information, we recommend [require.js' documentation](http://requirejs.org/docs/whyamd.html).

```js
define([\"jquery\"], function(\$) {

});
```

### Node

To include jQuery in [Node](nodejs.org), first install with npm.

```sh
npm install jquery
```

For jQuery to work in Node, a window with a document is required. Since no such window exists natively in Node, one can be mocked by tools such as [jsdom](https://github.com/tmpvar/jsdom). This can be useful for testing purposes.

```js
require(\"jsdom\").env(\"\", function(err, window) {
\tif (err) {
\t\tconsole.error(err);
\t\treturn;
\t}

\tvar \$ = require(\"jquery\")(window);
});
```
", "node_modules/jquery/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/jquery/README.md");
    }
}
