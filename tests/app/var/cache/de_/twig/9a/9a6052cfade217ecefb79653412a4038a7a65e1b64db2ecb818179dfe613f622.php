<?php

/* node_modules/deep-equal/readme.markdown */
class __TwigTemplate_9a477a9f20dff5b3f933bbceca6fd5a58f12bba5170e8e364686df0356e6b267 extends Twig_Template
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
        $__internal_24d9b333e4b8ccb3861e357742779078b02b1d068c668aaa1a8b8d25c987eb6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d9b333e4b8ccb3861e357742779078b02b1d068c668aaa1a8b8d25c987eb6f->enter($__internal_24d9b333e4b8ccb3861e357742779078b02b1d068c668aaa1a8b8d25c987eb6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-equal/readme.markdown"));

        // line 1
        echo "# deep-equal

Node's `assert.deepEqual() algorithm` as a standalone module.

This module is around [5 times faster](https://gist.github.com/2790507)
than wrapping `assert.deepEqual()` in a `try/catch`.

[![browser support](https://ci.testling.com/substack/node-deep-equal.png)](https://ci.testling.com/substack/node-deep-equal)

[![build status](https://secure.travis-ci.org/substack/node-deep-equal.png)](https://travis-ci.org/substack/node-deep-equal)

# example

``` js
var equal = require('deep-equal');
console.dir([
    equal(
        { a : [ 2, 3 ], b : [ 4 ] },
        { a : [ 2, 3 ], b : [ 4 ] }
    ),
    equal(
        { x : 5, y : [6] },
        { x : 5, y : 6 }
    )
]);
```

# methods

``` js
var deepEqual = require('deep-equal')
```

## deepEqual(a, b, opts)

Compare objects `a` and `b`, returning whether they are equal according to a
recursive equality algorithm.

If `opts.strict` is `true`, use strict equality (`===`) to compare leaf nodes.
The default is to use coercive equality (`==`) because that's how
`assert.deepEqual()` works by default.

# install

With [npm](http://npmjs.org) do:

```
npm install deep-equal
```

# test

With [npm](http://npmjs.org) do:

```
npm test
```

# license

MIT. Derived largely from node's assert module.
";
        
        $__internal_24d9b333e4b8ccb3861e357742779078b02b1d068c668aaa1a8b8d25c987eb6f->leave($__internal_24d9b333e4b8ccb3861e357742779078b02b1d068c668aaa1a8b8d25c987eb6f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-equal/readme.markdown";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# deep-equal

Node's `assert.deepEqual() algorithm` as a standalone module.

This module is around [5 times faster](https://gist.github.com/2790507)
than wrapping `assert.deepEqual()` in a `try/catch`.

[![browser support](https://ci.testling.com/substack/node-deep-equal.png)](https://ci.testling.com/substack/node-deep-equal)

[![build status](https://secure.travis-ci.org/substack/node-deep-equal.png)](https://travis-ci.org/substack/node-deep-equal)

# example

``` js
var equal = require('deep-equal');
console.dir([
    equal(
        { a : [ 2, 3 ], b : [ 4 ] },
        { a : [ 2, 3 ], b : [ 4 ] }
    ),
    equal(
        { x : 5, y : [6] },
        { x : 5, y : 6 }
    )
]);
```

# methods

``` js
var deepEqual = require('deep-equal')
```

## deepEqual(a, b, opts)

Compare objects `a` and `b`, returning whether they are equal according to a
recursive equality algorithm.

If `opts.strict` is `true`, use strict equality (`===`) to compare leaf nodes.
The default is to use coercive equality (`==`) because that's how
`assert.deepEqual()` works by default.

# install

With [npm](http://npmjs.org) do:

```
npm install deep-equal
```

# test

With [npm](http://npmjs.org) do:

```
npm test
```

# license

MIT. Derived largely from node's assert module.
", "node_modules/deep-equal/readme.markdown", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-equal/readme.markdown");
    }
}
