<?php

/* node_modules/deep-extend/README.md */
class __TwigTemplate_80629b351e980bcd24d037647dcdcb65edb5af9f05d4c6731308a903f6492456 extends Twig_Template
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
        $__internal_67531fef2bae6f9d94e045d7b6b807a84650c80ed1bb5acdb1c84f110e204b73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67531fef2bae6f9d94e045d7b6b807a84650c80ed1bb5acdb1c84f110e204b73->enter($__internal_67531fef2bae6f9d94e045d7b6b807a84650c80ed1bb5acdb1c84f110e204b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/deep-extend/README.md"));

        // line 1
        echo "Deep Extend
===========

Recursive object extending.

[![NPM](https://nodei.co/npm/deep-extend.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/deep-extend/)
[![NPM](https://nodei.co/npm-dl/deep-extend.png?height=3)](https://nodei.co/npm/deep-extend/)

Install
-------

```bash
\$ npm install deep-extend
```

Usage
-----

```javascript
var deepExtend = require('deep-extend');
var obj1 = {
  a: 1,
  b: 2,
  d: {
    a: 1,
    b: [],
    c: { test1: 123, test2: 321 }
  },
  f: 5,
  g: 123,
  i: 321,
  j: [1, 2]
};
var obj2 = {
  b: 3,
  c: 5,
  d: {
    b: { first: 'one', second: 'two' },
    c: { test2: 222 }
  },
  e: { one: 1, two: 2 },
  f: [],
  g: (void 0),
  h: /abc/g,
  i: null,
  j: [3, 4]
};

deepExtend(obj1, obj2);

console.log(obj1);
/*
{ a: 1,
  b: 3,
  d:
   { a: 1,
     b: { first: 'one', second: 'two' },
     c: { test1: 123, test2: 222 } },
  f: [],
  g: undefined,
  c: 5,
  e: { one: 1, two: 2 },
  h: /abc/g,
  i: null,
  j: [3, 4] }
*/
```

Unit testing
------------

```bash
\$ npm test
```

Changelog
---------

[CHANGELOG.md](./CHANGELOG.md)

Any issues?
-----------

Please, report about issues
[here](https://github.com/unclechu/node-deep-extend/issues).

License
-------

[MIT](./LICENSE)
";
        
        $__internal_67531fef2bae6f9d94e045d7b6b807a84650c80ed1bb5acdb1c84f110e204b73->leave($__internal_67531fef2bae6f9d94e045d7b6b807a84650c80ed1bb5acdb1c84f110e204b73_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/deep-extend/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Deep Extend
===========

Recursive object extending.

[![NPM](https://nodei.co/npm/deep-extend.png?downloads=true&downloadRank=true&stars=true)](https://nodei.co/npm/deep-extend/)
[![NPM](https://nodei.co/npm-dl/deep-extend.png?height=3)](https://nodei.co/npm/deep-extend/)

Install
-------

```bash
\$ npm install deep-extend
```

Usage
-----

```javascript
var deepExtend = require('deep-extend');
var obj1 = {
  a: 1,
  b: 2,
  d: {
    a: 1,
    b: [],
    c: { test1: 123, test2: 321 }
  },
  f: 5,
  g: 123,
  i: 321,
  j: [1, 2]
};
var obj2 = {
  b: 3,
  c: 5,
  d: {
    b: { first: 'one', second: 'two' },
    c: { test2: 222 }
  },
  e: { one: 1, two: 2 },
  f: [],
  g: (void 0),
  h: /abc/g,
  i: null,
  j: [3, 4]
};

deepExtend(obj1, obj2);

console.log(obj1);
/*
{ a: 1,
  b: 3,
  d:
   { a: 1,
     b: { first: 'one', second: 'two' },
     c: { test1: 123, test2: 222 } },
  f: [],
  g: undefined,
  c: 5,
  e: { one: 1, two: 2 },
  h: /abc/g,
  i: null,
  j: [3, 4] }
*/
```

Unit testing
------------

```bash
\$ npm test
```

Changelog
---------

[CHANGELOG.md](./CHANGELOG.md)

Any issues?
-----------

Please, report about issues
[here](https://github.com/unclechu/node-deep-extend/issues).

License
-------

[MIT](./LICENSE)
", "node_modules/deep-extend/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/deep-extend/README.md");
    }
}
