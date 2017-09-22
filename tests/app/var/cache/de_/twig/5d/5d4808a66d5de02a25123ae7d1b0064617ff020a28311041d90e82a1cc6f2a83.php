<?php

/* node_modules/path-exists/readme.md */
class __TwigTemplate_fdf1b52e2fcb523099776bac537a16dd2b47728cb40979a4c2db565d2ab25f0b extends Twig_Template
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
        $__internal_9fc8c27b0b0fdbd441ac6cdfae53403d7779b0de1b5d639aef59d97b166f431b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fc8c27b0b0fdbd441ac6cdfae53403d7779b0de1b5d639aef59d97b166f431b->enter($__internal_9fc8c27b0b0fdbd441ac6cdfae53403d7779b0de1b5d639aef59d97b166f431b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/path-exists/readme.md"));

        // line 1
        echo "# path-exists [![Build Status](https://travis-ci.org/sindresorhus/path-exists.svg?branch=master)](https://travis-ci.org/sindresorhus/path-exists)

> Check if a path exists

Because [`fs.exists()`](https://nodejs.org/api/fs.html#fs_fs_exists_path_callback) is being [deprecated](https://github.com/iojs/io.js/issues/103), but there's still a genuine use-case of being able to check if a path exists for other purposes than doing IO with it.

Never use this before handling a file though:

> In particular, checking if a file exists before opening it is an anti-pattern that leaves you vulnerable to race conditions: another process may remove the file between the calls to `fs.exists()` and `fs.open()`. Just open the file and handle the error when it's not there.


## Install

```
\$ npm install --save path-exists
```


## Usage

```js
// foo.js
const pathExists = require('path-exists');

pathExists('foo.js').then(exists => {
\tconsole.log(exists);
\t//=> true
});
```


## API

### pathExists(path)

Returns a promise for a boolean of whether the path exists.

### pathExists.sync(path)

Returns a boolean of whether the path exists.


## Related

- [path-exists-cli](https://github.com/sindresorhus/path-exists-cli) - CLI for this module


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_9fc8c27b0b0fdbd441ac6cdfae53403d7779b0de1b5d639aef59d97b166f431b->leave($__internal_9fc8c27b0b0fdbd441ac6cdfae53403d7779b0de1b5d639aef59d97b166f431b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/path-exists/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# path-exists [![Build Status](https://travis-ci.org/sindresorhus/path-exists.svg?branch=master)](https://travis-ci.org/sindresorhus/path-exists)

> Check if a path exists

Because [`fs.exists()`](https://nodejs.org/api/fs.html#fs_fs_exists_path_callback) is being [deprecated](https://github.com/iojs/io.js/issues/103), but there's still a genuine use-case of being able to check if a path exists for other purposes than doing IO with it.

Never use this before handling a file though:

> In particular, checking if a file exists before opening it is an anti-pattern that leaves you vulnerable to race conditions: another process may remove the file between the calls to `fs.exists()` and `fs.open()`. Just open the file and handle the error when it's not there.


## Install

```
\$ npm install --save path-exists
```


## Usage

```js
// foo.js
const pathExists = require('path-exists');

pathExists('foo.js').then(exists => {
\tconsole.log(exists);
\t//=> true
});
```


## API

### pathExists(path)

Returns a promise for a boolean of whether the path exists.

### pathExists.sync(path)

Returns a boolean of whether the path exists.


## Related

- [path-exists-cli](https://github.com/sindresorhus/path-exists-cli) - CLI for this module


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/path-exists/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/path-exists/readme.md");
    }
}
