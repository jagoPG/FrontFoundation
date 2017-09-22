<?php

/* node_modules/object-assign/readme.md */
class __TwigTemplate_9b2b796814f4ae5c506adb7ecc3fda69860f9aa4ab6d725d9b9f1ec2fef3b1c2 extends Twig_Template
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
        $__internal_073635d8557af8900be58582320860d2233a7a21799b18a33660e6209346e7a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073635d8557af8900be58582320860d2233a7a21799b18a33660e6209346e7a1->enter($__internal_073635d8557af8900be58582320860d2233a7a21799b18a33660e6209346e7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/object-assign/readme.md"));

        // line 1
        echo "# object-assign [![Build Status](https://travis-ci.org/sindresorhus/object-assign.svg?branch=master)](https://travis-ci.org/sindresorhus/object-assign)

> ES2015 [`Object.assign()`](http://www.2ality.com/2014/01/object-assign.html) [ponyfill](https://ponyfill.com)


## Use the built-in

Node.js 4 and up, as well as every evergreen browser (Chrome, Edge, Firefox, Opera, Safari),
support `Object.assign()` :tada:. If you target only those environments, then by all
means, use `Object.assign()` instead of this package.


## Install

```
\$ npm install --save object-assign
```


## Usage

```js
const objectAssign = require('object-assign');

objectAssign({foo: 0}, {bar: 1});
//=> {foo: 0, bar: 1}

// multiple sources
objectAssign({foo: 0}, {bar: 1}, {baz: 2});
//=> {foo: 0, bar: 1, baz: 2}

// overwrites equal keys
objectAssign({foo: 0}, {foo: 1}, {foo: 2});
//=> {foo: 2}

// ignores null and undefined sources
objectAssign({foo: 0}, null, {bar: 1}, undefined);
//=> {foo: 0, bar: 1}
```


## API

### objectAssign(target, [source, ...])

Assigns enumerable own properties of `source` objects to the `target` object and returns the `target` object. Additional `source` objects will overwrite previous ones.


## Resources

- [ES2015 spec - Object.assign](https://people.mozilla.org/~jorendorff/es6-draft.html#sec-object.assign)


## Related

- [deep-assign](https://github.com/sindresorhus/deep-assign) - Recursive `Object.assign()`


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_073635d8557af8900be58582320860d2233a7a21799b18a33660e6209346e7a1->leave($__internal_073635d8557af8900be58582320860d2233a7a21799b18a33660e6209346e7a1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/object-assign/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# object-assign [![Build Status](https://travis-ci.org/sindresorhus/object-assign.svg?branch=master)](https://travis-ci.org/sindresorhus/object-assign)

> ES2015 [`Object.assign()`](http://www.2ality.com/2014/01/object-assign.html) [ponyfill](https://ponyfill.com)


## Use the built-in

Node.js 4 and up, as well as every evergreen browser (Chrome, Edge, Firefox, Opera, Safari),
support `Object.assign()` :tada:. If you target only those environments, then by all
means, use `Object.assign()` instead of this package.


## Install

```
\$ npm install --save object-assign
```


## Usage

```js
const objectAssign = require('object-assign');

objectAssign({foo: 0}, {bar: 1});
//=> {foo: 0, bar: 1}

// multiple sources
objectAssign({foo: 0}, {bar: 1}, {baz: 2});
//=> {foo: 0, bar: 1, baz: 2}

// overwrites equal keys
objectAssign({foo: 0}, {foo: 1}, {foo: 2});
//=> {foo: 2}

// ignores null and undefined sources
objectAssign({foo: 0}, null, {bar: 1}, undefined);
//=> {foo: 0, bar: 1}
```


## API

### objectAssign(target, [source, ...])

Assigns enumerable own properties of `source` objects to the `target` object and returns the `target` object. Additional `source` objects will overwrite previous ones.


## Resources

- [ES2015 spec - Object.assign](https://people.mozilla.org/~jorendorff/es6-draft.html#sec-object.assign)


## Related

- [deep-assign](https://github.com/sindresorhus/deep-assign) - Recursive `Object.assign()`


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/object-assign/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/object-assign/readme.md");
    }
}
