<?php

/* node_modules/fsevents/node_modules/signal-exit/README.md */
class __TwigTemplate_a78620c5b8c40a354f62f540e75482afe216b27645074f6fe22b013699cb755f extends Twig_Template
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
        $__internal_2e9efa206a19975c45edb659da4c222eff1dea82ab306792adfff827d01c9065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e9efa206a19975c45edb659da4c222eff1dea82ab306792adfff827d01c9065->enter($__internal_2e9efa206a19975c45edb659da4c222eff1dea82ab306792adfff827d01c9065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/signal-exit/README.md"));

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
        
        $__internal_2e9efa206a19975c45edb659da4c222eff1dea82ab306792adfff827d01c9065->leave($__internal_2e9efa206a19975c45edb659da4c222eff1dea82ab306792adfff827d01c9065_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/signal-exit/README.md";
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
", "node_modules/fsevents/node_modules/signal-exit/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/signal-exit/README.md");
    }
}
