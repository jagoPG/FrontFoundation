<?php

/* node_modules/util-deprecate/README.md */
class __TwigTemplate_1aa917c420d94313f777fffcbd4c264a2560bf4b6400e864cc0b269e89102f6e extends Twig_Template
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
        $__internal_a18edc22db40b26cb1840aaaa4f2722220934d482905487c91fb85c9d9297c2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a18edc22db40b26cb1840aaaa4f2722220934d482905487c91fb85c9d9297c2c->enter($__internal_a18edc22db40b26cb1840aaaa4f2722220934d482905487c91fb85c9d9297c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/util-deprecate/README.md"));

        // line 1
        echo "util-deprecate
==============
### The Node.js `util.deprecate()` function with browser support

In Node.js, this module simply re-exports the `util.deprecate()` function.

In the web browser (i.e. via browserify), a browser-specific implementation
of the `util.deprecate()` function is used.


## API

A `deprecate()` function is the only thing exposed by this module.

``` javascript
// setup:
exports.foo = deprecate(foo, 'foo() is deprecated, use bar() instead');


// users see:
foo();
// foo() is deprecated, use bar() instead
foo();
foo();
```


## License

(The MIT License)

Copyright (c) 2014 Nathan Rajlich <nathan@tootallnate.net>

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the \"Software\"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
";
        
        $__internal_a18edc22db40b26cb1840aaaa4f2722220934d482905487c91fb85c9d9297c2c->leave($__internal_a18edc22db40b26cb1840aaaa4f2722220934d482905487c91fb85c9d9297c2c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/util-deprecate/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("util-deprecate
==============
### The Node.js `util.deprecate()` function with browser support

In Node.js, this module simply re-exports the `util.deprecate()` function.

In the web browser (i.e. via browserify), a browser-specific implementation
of the `util.deprecate()` function is used.


## API

A `deprecate()` function is the only thing exposed by this module.

``` javascript
// setup:
exports.foo = deprecate(foo, 'foo() is deprecated, use bar() instead');


// users see:
foo();
// foo() is deprecated, use bar() instead
foo();
foo();
```


## License

(The MIT License)

Copyright (c) 2014 Nathan Rajlich <nathan@tootallnate.net>

Permission is hereby granted, free of charge, to any person
obtaining a copy of this software and associated documentation
files (the \"Software\"), to deal in the Software without
restriction, including without limitation the rights to use,
copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the
Software is furnished to do so, subject to the following
conditions:

The above copyright notice and this permission notice shall be
included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED \"AS IS\", WITHOUT WARRANTY OF ANY KIND,
EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
OTHER DEALINGS IN THE SOFTWARE.
", "node_modules/util-deprecate/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/util-deprecate/README.md");
    }
}
