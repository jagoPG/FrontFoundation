<?php

/* node_modules/fsevents/node_modules/deep-extend/README.md */
class __TwigTemplate_bc2ff744f4615a12a7af8603cdaad45c2209a4a28937dde04d40e150714a7171 extends Twig_Template
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
        $__internal_ca12e4140fe6db4ba8d6e7743e0abc4ce928d5f8c6b9f76ef6cacbe1b5182cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca12e4140fe6db4ba8d6e7743e0abc4ce928d5f8c6b9f76ef6cacbe1b5182cc7->enter($__internal_ca12e4140fe6db4ba8d6e7743e0abc4ce928d5f8c6b9f76ef6cacbe1b5182cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/deep-extend/README.md"));

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
        
        $__internal_ca12e4140fe6db4ba8d6e7743e0abc4ce928d5f8c6b9f76ef6cacbe1b5182cc7->leave($__internal_ca12e4140fe6db4ba8d6e7743e0abc4ce928d5f8c6b9f76ef6cacbe1b5182cc7_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/deep-extend/README.md";
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
", "node_modules/fsevents/node_modules/deep-extend/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/deep-extend/README.md");
    }
}
