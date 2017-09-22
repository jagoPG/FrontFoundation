<?php

/* node_modules/p-finally/readme.md */
class __TwigTemplate_8dacb93ea705f983003925b7d07cb25134f7cd69a69985b7c45680b49be1136f extends Twig_Template
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
        $__internal_038f13f1a35822a1e5236901108ddcc890ad1786914c24f9750f200a2b0ea806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038f13f1a35822a1e5236901108ddcc890ad1786914c24f9750f200a2b0ea806->enter($__internal_038f13f1a35822a1e5236901108ddcc890ad1786914c24f9750f200a2b0ea806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/p-finally/readme.md"));

        // line 1
        echo "# p-finally [![Build Status](https://travis-ci.org/sindresorhus/p-finally.svg?branch=master)](https://travis-ci.org/sindresorhus/p-finally)

> [`Promise#finally()`](https://github.com/tc39/proposal-promise-finally) [ponyfill](https://ponyfill.com) - Invoked when the promise is settled regardless of outcome

Useful for cleanup.


## Install

```
\$ npm install --save p-finally
```


## Usage

```js
const pFinally = require('p-finally');

const dir = createTempDir();

pFinally(write(dir), () => cleanup(dir));
```


## API

### pFinally(promise, [onFinally])

Returns a `Promise`.

#### onFinally

Type: `Function`

Note: Throwing or returning a rejected promise will reject `promise` with the rejection reason.


## Related

- [p-try](https://github.com/sindresorhus/p-try) - `Promise#try()` ponyfill - Starts a promise chain
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_038f13f1a35822a1e5236901108ddcc890ad1786914c24f9750f200a2b0ea806->leave($__internal_038f13f1a35822a1e5236901108ddcc890ad1786914c24f9750f200a2b0ea806_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/p-finally/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# p-finally [![Build Status](https://travis-ci.org/sindresorhus/p-finally.svg?branch=master)](https://travis-ci.org/sindresorhus/p-finally)

> [`Promise#finally()`](https://github.com/tc39/proposal-promise-finally) [ponyfill](https://ponyfill.com) - Invoked when the promise is settled regardless of outcome

Useful for cleanup.


## Install

```
\$ npm install --save p-finally
```


## Usage

```js
const pFinally = require('p-finally');

const dir = createTempDir();

pFinally(write(dir), () => cleanup(dir));
```


## API

### pFinally(promise, [onFinally])

Returns a `Promise`.

#### onFinally

Type: `Function`

Note: Throwing or returning a rejected promise will reject `promise` with the rejection reason.


## Related

- [p-try](https://github.com/sindresorhus/p-try) - `Promise#try()` ponyfill - Starts a promise chain
- [More…](https://github.com/sindresorhus/promise-fun)


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/p-finally/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/p-finally/readme.md");
    }
}
