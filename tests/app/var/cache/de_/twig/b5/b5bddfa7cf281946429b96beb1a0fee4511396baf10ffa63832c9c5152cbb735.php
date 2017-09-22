<?php

/* node_modules/set-blocking/README.md */
class __TwigTemplate_1f1322d239edd960d08e8babb0b33b34110f00bf4abdee46d1d17d9b65e5df85 extends Twig_Template
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
        $__internal_2c46519bd1bd52448ddd0c52d2448eddcd9c011f974be258c546c45f1059a4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c46519bd1bd52448ddd0c52d2448eddcd9c011f974be258c546c45f1059a4ea->enter($__internal_2c46519bd1bd52448ddd0c52d2448eddcd9c011f974be258c546c45f1059a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/set-blocking/README.md"));

        // line 1
        echo "# set-blocking

[![Build Status](https://travis-ci.org/yargs/set-blocking.svg)](https://travis-ci.org/yargs/set-blocking)
[![NPM version](https://img.shields.io/npm/v/set-blocking.svg)](https://www.npmjs.com/package/set-blocking)
[![Coverage Status](https://coveralls.io/repos/yargs/set-blocking/badge.svg?branch=)](https://coveralls.io/r/yargs/set-blocking?branch=master)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

set blocking `stdio` and `stderr` ensuring that terminal output does not truncate.

```js
const setBlocking = require('set-blocking')
setBlocking(true)
console.log(someLargeStringToOutput)
```

## Historical Context/Word of Warning

This was created as a shim to address the bug discussed in [node #6456](https://github.com/nodejs/node/issues/6456). This bug crops up on
newer versions of Node.js (`0.12+`), truncating terminal output.

You should be mindful of the side-effects caused by using `set-blocking`:

* if your module sets blocking to `true`, it will effect other modules
  consuming your library. In [yargs](https://github.com/yargs/yargs/blob/master/yargs.js#L653) we only call
  `setBlocking(true)` once we already know we are about to call `process.exit(code)`.
* this patch will not apply to subprocesses spawned with `isTTY = true`, this is
  the [default `spawn()` behavior](https://nodejs.org/api/child_process.html#child_process_child_process_spawn_command_args_options).

## License

ISC
";
        
        $__internal_2c46519bd1bd52448ddd0c52d2448eddcd9c011f974be258c546c45f1059a4ea->leave($__internal_2c46519bd1bd52448ddd0c52d2448eddcd9c011f974be258c546c45f1059a4ea_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/set-blocking/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# set-blocking

[![Build Status](https://travis-ci.org/yargs/set-blocking.svg)](https://travis-ci.org/yargs/set-blocking)
[![NPM version](https://img.shields.io/npm/v/set-blocking.svg)](https://www.npmjs.com/package/set-blocking)
[![Coverage Status](https://coveralls.io/repos/yargs/set-blocking/badge.svg?branch=)](https://coveralls.io/r/yargs/set-blocking?branch=master)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

set blocking `stdio` and `stderr` ensuring that terminal output does not truncate.

```js
const setBlocking = require('set-blocking')
setBlocking(true)
console.log(someLargeStringToOutput)
```

## Historical Context/Word of Warning

This was created as a shim to address the bug discussed in [node #6456](https://github.com/nodejs/node/issues/6456). This bug crops up on
newer versions of Node.js (`0.12+`), truncating terminal output.

You should be mindful of the side-effects caused by using `set-blocking`:

* if your module sets blocking to `true`, it will effect other modules
  consuming your library. In [yargs](https://github.com/yargs/yargs/blob/master/yargs.js#L653) we only call
  `setBlocking(true)` once we already know we are about to call `process.exit(code)`.
* this patch will not apply to subprocesses spawned with `isTTY = true`, this is
  the [default `spawn()` behavior](https://nodejs.org/api/child_process.html#child_process_child_process_spawn_command_args_options).

## License

ISC
", "node_modules/set-blocking/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/set-blocking/README.md");
    }
}