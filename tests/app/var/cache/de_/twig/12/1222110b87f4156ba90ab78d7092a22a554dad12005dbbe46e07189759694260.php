<?php

/* node_modules/defined/readme.markdown */
class __TwigTemplate_8e165c9e15b3bb8914cb4b573011aba8f3bae3991741a4f218d2dfba9c4d4a08 extends Twig_Template
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
        $__internal_7c72d3a067285390b9bea96cc7dfdf3542d19bbc8fc49c3e124333ff0ec7bf6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c72d3a067285390b9bea96cc7dfdf3542d19bbc8fc49c3e124333ff0ec7bf6e->enter($__internal_7c72d3a067285390b9bea96cc7dfdf3542d19bbc8fc49c3e124333ff0ec7bf6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/defined/readme.markdown"));

        // line 1
        echo "# defined

return the first argument that is `!== undefined`

[![browser support](http://ci.testling.com/substack/defined.png)](http://ci.testling.com/substack/defined)

[![build status](https://secure.travis-ci.org/substack/defined.png)](http://travis-ci.org/substack/defined)

Most of the time when I chain together `||`s, I actually just want the first
item that is not `undefined`, not the first non-falsy item.

This module is like the defined-or (`//`) operator in perl 5.10+.

# example

``` js
var defined = require('defined');
var opts = { y : false, w : 4 };
var x = defined(opts.x, opts.y, opts.w, 100);
console.log(x);
```

```
\$ node example/defined.js
false
```

The return value is `false` because `false` is the first item that is
`!== undefined`.

# methods

``` js
var defined = require('defined')
```

## var x = defined(a, b, c...)

Return the first item in the argument list `a, b, c...` that is `!== undefined`.

If all the items are `=== undefined`, return undefined.

# install

With [npm](https://npmjs.org) do:

```
npm install defined
```

# license

MIT
";
        
        $__internal_7c72d3a067285390b9bea96cc7dfdf3542d19bbc8fc49c3e124333ff0ec7bf6e->leave($__internal_7c72d3a067285390b9bea96cc7dfdf3542d19bbc8fc49c3e124333ff0ec7bf6e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/defined/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# defined

return the first argument that is `!== undefined`

[![browser support](http://ci.testling.com/substack/defined.png)](http://ci.testling.com/substack/defined)

[![build status](https://secure.travis-ci.org/substack/defined.png)](http://travis-ci.org/substack/defined)

Most of the time when I chain together `||`s, I actually just want the first
item that is not `undefined`, not the first non-falsy item.

This module is like the defined-or (`//`) operator in perl 5.10+.

# example

``` js
var defined = require('defined');
var opts = { y : false, w : 4 };
var x = defined(opts.x, opts.y, opts.w, 100);
console.log(x);
```

```
\$ node example/defined.js
false
```

The return value is `false` because `false` is the first item that is
`!== undefined`.

# methods

``` js
var defined = require('defined')
```

## var x = defined(a, b, c...)

Return the first item in the argument list `a, b, c...` that is `!== undefined`.

If all the items are `=== undefined`, return undefined.

# install

With [npm](https://npmjs.org) do:

```
npm install defined
```

# license

MIT
", "node_modules/defined/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/defined/readme.markdown");
    }
}
