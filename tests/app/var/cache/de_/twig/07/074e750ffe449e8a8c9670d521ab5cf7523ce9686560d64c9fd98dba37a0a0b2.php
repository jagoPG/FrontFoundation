<?php

/* node_modules/globals/readme.md */
class __TwigTemplate_4b3c1c99c51fca9622e62399c088121f2a579484eadb9486e6bcaeea3a7a8fe2 extends Twig_Template
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
        $__internal_40c8b9063286cc624b23dff09037b0982a3bd685c2f0a448ab382507f4b710a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40c8b9063286cc624b23dff09037b0982a3bd685c2f0a448ab382507f4b710a8->enter($__internal_40c8b9063286cc624b23dff09037b0982a3bd685c2f0a448ab382507f4b710a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/globals/readme.md"));

        // line 1
        echo "# globals [![Build Status](https://travis-ci.org/sindresorhus/globals.svg?branch=master)](https://travis-ci.org/sindresorhus/globals)

> Global identifiers from different JavaScript environments

Extracted from [JSHint](https://github.com/jshint/jshint/blob/3a8efa979dbb157bfb5c10b5826603a55a33b9ad/src/vars.js) and [ESLint](https://github.com/eslint/eslint/blob/b648406218f8a2d7302b98f5565e23199f44eb31/conf/environments.json) and merged.

It's just a [JSON file](globals.json), so use it in whatever environment you like.

**This module [no longer accepts](https://github.com/sindresorhus/globals/issues/82) new environments. If you need it for ESLint, just [create a plugin](http://eslint.org/docs/developer-guide/working-with-plugins#environments-in-plugins).**


## Install

```
\$ npm install --save globals
```


## Usage

```js
var globals = require('globals');

console.log(globals.browser);
/*
{
\taddEventListener: false,
\tapplicationCache: false,
\tArrayBuffer: false,
\tatob: false,
\t...
}
*/
```

Each global is given a value of `true` or `false`. A value of `true` indicates that the variable may be overwritten. A value of `false` indicates that the variable should be considered read-only. This information is used by static analysis tools to flag incorrect behavior. We assume all variables should be `false` unless we hear otherwise.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_40c8b9063286cc624b23dff09037b0982a3bd685c2f0a448ab382507f4b710a8->leave($__internal_40c8b9063286cc624b23dff09037b0982a3bd685c2f0a448ab382507f4b710a8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/globals/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# globals [![Build Status](https://travis-ci.org/sindresorhus/globals.svg?branch=master)](https://travis-ci.org/sindresorhus/globals)

> Global identifiers from different JavaScript environments

Extracted from [JSHint](https://github.com/jshint/jshint/blob/3a8efa979dbb157bfb5c10b5826603a55a33b9ad/src/vars.js) and [ESLint](https://github.com/eslint/eslint/blob/b648406218f8a2d7302b98f5565e23199f44eb31/conf/environments.json) and merged.

It's just a [JSON file](globals.json), so use it in whatever environment you like.

**This module [no longer accepts](https://github.com/sindresorhus/globals/issues/82) new environments. If you need it for ESLint, just [create a plugin](http://eslint.org/docs/developer-guide/working-with-plugins#environments-in-plugins).**


## Install

```
\$ npm install --save globals
```


## Usage

```js
var globals = require('globals');

console.log(globals.browser);
/*
{
\taddEventListener: false,
\tapplicationCache: false,
\tArrayBuffer: false,
\tatob: false,
\t...
}
*/
```

Each global is given a value of `true` or `false`. A value of `true` indicates that the variable may be overwritten. A value of `false` indicates that the variable should be considered read-only. This information is used by static analysis tools to flag incorrect behavior. We assume all variables should be `false` unless we hear otherwise.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/globals/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/globals/readme.md");
    }
}
