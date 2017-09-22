<?php

/* node_modules/signal-exit/README.md */
class __TwigTemplate_1e273f69ec930ee3dd8217a070adab30af4c5588ead79cff21984242c449dc18 extends Twig_Template
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
        $__internal_6ecad24253540f4997211758094ad329a20d3f76f90eb0dbeeec1f87dfe099d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ecad24253540f4997211758094ad329a20d3f76f90eb0dbeeec1f87dfe099d6->enter($__internal_6ecad24253540f4997211758094ad329a20d3f76f90eb0dbeeec1f87dfe099d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/signal-exit/README.md"));

        // line 1
        echo "# signal-exit

[![Build Status](https://travis-ci.org/tapjs/signal-exit.png)](https://travis-ci.org/tapjs/signal-exit)
[![Coverage](https://coveralls.io/repos/tapjs/signal-exit/badge.svg?branch=master)](https://coveralls.io/r/tapjs/signal-exit?branch=master)
[![NPM version](https://img.shields.io/npm/v/signal-exit.svg)](https://www.npmjs.com/package/signal-exit)
[![Windows Tests](https://img.shields.io/appveyor/ci/bcoe/signal-exit/master.svg?label=Windows%20Tests)](https://ci.appveyor.com/project/bcoe/signal-exit)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

When you want to fire an event no matter how a process exits:

* reaching the end of execution.
* explicitly having `process.exit(code)` called.
* having `process.kill(pid, sig)` called.
* receiving a fatal signal from outside the process

Use `signal-exit`.

```js
var onExit = require('signal-exit')

onExit(function (code, signal) {
  console.log('process exited!')
})
```

## API

`var remove = onExit(function (code, signal) {}, options)`

The return value of the function is a function that will remove the
handler.

Note that the function *only* fires for signals if the signal would
cause the proces to exit.  That is, there are no other listeners, and
it is a fatal signal.

## Options

* `alwaysLast`: Run this handler after any other signal or exit
  handlers.  This causes `process.emit` to be monkeypatched.
";
        
        $__internal_6ecad24253540f4997211758094ad329a20d3f76f90eb0dbeeec1f87dfe099d6->leave($__internal_6ecad24253540f4997211758094ad329a20d3f76f90eb0dbeeec1f87dfe099d6_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/signal-exit/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# signal-exit

[![Build Status](https://travis-ci.org/tapjs/signal-exit.png)](https://travis-ci.org/tapjs/signal-exit)
[![Coverage](https://coveralls.io/repos/tapjs/signal-exit/badge.svg?branch=master)](https://coveralls.io/r/tapjs/signal-exit?branch=master)
[![NPM version](https://img.shields.io/npm/v/signal-exit.svg)](https://www.npmjs.com/package/signal-exit)
[![Windows Tests](https://img.shields.io/appveyor/ci/bcoe/signal-exit/master.svg?label=Windows%20Tests)](https://ci.appveyor.com/project/bcoe/signal-exit)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

When you want to fire an event no matter how a process exits:

* reaching the end of execution.
* explicitly having `process.exit(code)` called.
* having `process.kill(pid, sig)` called.
* receiving a fatal signal from outside the process

Use `signal-exit`.

```js
var onExit = require('signal-exit')

onExit(function (code, signal) {
  console.log('process exited!')
})
```

## API

`var remove = onExit(function (code, signal) {}, options)`

The return value of the function is a function that will remove the
handler.

Note that the function *only* fires for signals if the signal would
cause the proces to exit.  That is, there are no other listeners, and
it is a fatal signal.

## Options

* `alwaysLast`: Run this handler after any other signal or exit
  handlers.  This causes `process.emit` to be monkeypatched.
", "node_modules/signal-exit/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/signal-exit/README.md");
    }
}
