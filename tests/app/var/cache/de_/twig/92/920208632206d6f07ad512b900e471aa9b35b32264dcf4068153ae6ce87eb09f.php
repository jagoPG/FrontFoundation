<?php

/* node_modules/vm-browserify/readme.markdown */
class __TwigTemplate_5edf0e461d03ffcb071a40ae8186326cf9d8e877fd4cfb83445e5b56f25cb69c extends Twig_Template
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
        $__internal_0684043350212f5491708e08ec6a8358131588ef015dd87399d64bb5383a0f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0684043350212f5491708e08ec6a8358131588ef015dd87399d64bb5383a0f26->enter($__internal_0684043350212f5491708e08ec6a8358131588ef015dd87399d64bb5383a0f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/vm-browserify/readme.markdown"));

        // line 1
        echo "# vm-browserify

emulate node's vm module for the browser

[![testling badge](https://ci.testling.com/substack/vm-browserify.png)](https://ci.testling.com/substack/vm-browserify)

# example

Just write some client-side javascript:

``` js
var vm = require('vm');

\$(function () {
    var res = vm.runInNewContext('a + 5', { a : 100 });
    \$('#res').text(res);
});
```

compile it with [browserify](http://github.com/substack/node-browserify):

```
browserify entry.js -o bundle.js
```

then whip up some html:

``` html
<html>
  <head>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
    <script src=\"/bundle.js\"></script>
  </head>
  <body>
    result = <span id=\"res\"></span>
  </body>
</html>
```

and when you load the page you should see:

```
result = 105
```

# methods

## vm.runInNewContext(code, context={})

Evaluate some `code` in a new iframe with a `context`.

Contexts are like wrapping your code in a `with()` except slightly less terrible
because the code is sandboxed into a new iframe.

# install

This module is depended upon by browserify, so you should just be able to
`require('vm')` and it will just work. However if you want to use this module
directly you can install it with [npm](http://npmjs.org):

```
npm install vm-browserify
```

# license

MIT
";
        
        $__internal_0684043350212f5491708e08ec6a8358131588ef015dd87399d64bb5383a0f26->leave($__internal_0684043350212f5491708e08ec6a8358131588ef015dd87399d64bb5383a0f26_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/vm-browserify/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# vm-browserify

emulate node's vm module for the browser

[![testling badge](https://ci.testling.com/substack/vm-browserify.png)](https://ci.testling.com/substack/vm-browserify)

# example

Just write some client-side javascript:

``` js
var vm = require('vm');

\$(function () {
    var res = vm.runInNewContext('a + 5', { a : 100 });
    \$('#res').text(res);
});
```

compile it with [browserify](http://github.com/substack/node-browserify):

```
browserify entry.js -o bundle.js
```

then whip up some html:

``` html
<html>
  <head>
    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
    <script src=\"/bundle.js\"></script>
  </head>
  <body>
    result = <span id=\"res\"></span>
  </body>
</html>
```

and when you load the page you should see:

```
result = 105
```

# methods

## vm.runInNewContext(code, context={})

Evaluate some `code` in a new iframe with a `context`.

Contexts are like wrapping your code in a `with()` except slightly less terrible
because the code is sandboxed into a new iframe.

# install

This module is depended upon by browserify, so you should just be able to
`require('vm')` and it will just work. However if you want to use this module
directly you can install it with [npm](http://npmjs.org):

```
npm install vm-browserify
```

# license

MIT
", "node_modules/vm-browserify/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/vm-browserify/readme.markdown");
    }
}
