<?php

/* node_modules/require-main-filename/README.md */
class __TwigTemplate_e6f039bdb6eca663b31eb244dcab011d0a11dedb1022a74584276bcba73fedb4 extends Twig_Template
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
        $__internal_983476cf018b0ecd4c4f94553f2e1a226c72b62450a7b2e60808b072caa428ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_983476cf018b0ecd4c4f94553f2e1a226c72b62450a7b2e60808b072caa428ba->enter($__internal_983476cf018b0ecd4c4f94553f2e1a226c72b62450a7b2e60808b072caa428ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/require-main-filename/README.md"));

        // line 1
        echo "# require-main-filename

[![Build Status](https://travis-ci.org/yargs/require-main-filename.png)](https://travis-ci.org/yargs/require-main-filename)
[![Coverage Status](https://coveralls.io/repos/yargs/require-main-filename/badge.svg?branch=master)](https://coveralls.io/r/yargs/require-main-filename?branch=master)
[![NPM version](https://img.shields.io/npm/v/require-main-filename.svg)](https://www.npmjs.com/package/require-main-filename)

`require.main.filename` is great for figuring out the entry
point for the current application. This can be combined with a module like
[pkg-conf](https://www.npmjs.com/package/pkg-conf) to, _as if by magic_, load
top-level configuration.

Unfortunately, `require.main.filename` sometimes fails when an application is
executed with an alternative process manager, e.g., [iisnode](https://github.com/tjanczuk/iisnode).

`require-main-filename` is a shim that addresses this problem.

## Usage

```js
var main = require('require-main-filename')()
// use main as an alternative to require.main.filename.
```

## License

ISC
";
        
        $__internal_983476cf018b0ecd4c4f94553f2e1a226c72b62450a7b2e60808b072caa428ba->leave($__internal_983476cf018b0ecd4c4f94553f2e1a226c72b62450a7b2e60808b072caa428ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/require-main-filename/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# require-main-filename

[![Build Status](https://travis-ci.org/yargs/require-main-filename.png)](https://travis-ci.org/yargs/require-main-filename)
[![Coverage Status](https://coveralls.io/repos/yargs/require-main-filename/badge.svg?branch=master)](https://coveralls.io/r/yargs/require-main-filename?branch=master)
[![NPM version](https://img.shields.io/npm/v/require-main-filename.svg)](https://www.npmjs.com/package/require-main-filename)

`require.main.filename` is great for figuring out the entry
point for the current application. This can be combined with a module like
[pkg-conf](https://www.npmjs.com/package/pkg-conf) to, _as if by magic_, load
top-level configuration.

Unfortunately, `require.main.filename` sometimes fails when an application is
executed with an alternative process manager, e.g., [iisnode](https://github.com/tjanczuk/iisnode).

`require-main-filename` is a shim that addresses this problem.

## Usage

```js
var main = require('require-main-filename')()
// use main as an alternative to require.main.filename.
```

## License

ISC
", "node_modules/require-main-filename/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/require-main-filename/README.md");
    }
}
