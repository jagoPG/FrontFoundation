<?php

/* node_modules/to-arraybuffer/README.md */
class __TwigTemplate_11ebb578e4f47e4fa94134fc570165da2faecebb9bbe0c8eec690fe7893c326d extends Twig_Template
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
        $__internal_5a3abbc4027ae6b6ef07bd1fca2e9c7081457a6f538fbc1fbf99a625134e1d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a3abbc4027ae6b6ef07bd1fca2e9c7081457a6f538fbc1fbf99a625134e1d20->enter($__internal_5a3abbc4027ae6b6ef07bd1fca2e9c7081457a6f538fbc1fbf99a625134e1d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/to-arraybuffer/README.md"));

        // line 1
        echo "# to-arraybuffer [![Build Status](https://travis-ci.org/jhiesey/to-arraybuffer.svg?branch=master)](https://travis-ci.org/jhiesey/to-arraybuffer)

[![Sauce Test Status](https://saucelabs.com/browser-matrix/to-arraybuffer.svg)](https://saucelabs.com/u/to-arraybuffer)

Convert from a Buffer to an ArrayBuffer as fast as possible.

Note that in some cases the returned ArrayBuffer is backed by the same memory as the original
Buffer (but in other cases it is a copy), so **modifying the ArrayBuffer is not recommended**.

This module is designed to work both in node.js and in all browsers with ArrayBuffer support
when using [the Buffer implementation provided by Browserify](https://www.npmjs.com/package/buffer).

## Usage

``` js
var toArrayBuffer = require('to-arraybuffer')

var buffer = new Buffer(100)
// Fill the buffer with some data

var ab = toArrayBuffer(buffer)
// `ab` now contains the same data as `buffer`
```

## License

MIT";
        
        $__internal_5a3abbc4027ae6b6ef07bd1fca2e9c7081457a6f538fbc1fbf99a625134e1d20->leave($__internal_5a3abbc4027ae6b6ef07bd1fca2e9c7081457a6f538fbc1fbf99a625134e1d20_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/to-arraybuffer/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# to-arraybuffer [![Build Status](https://travis-ci.org/jhiesey/to-arraybuffer.svg?branch=master)](https://travis-ci.org/jhiesey/to-arraybuffer)

[![Sauce Test Status](https://saucelabs.com/browser-matrix/to-arraybuffer.svg)](https://saucelabs.com/u/to-arraybuffer)

Convert from a Buffer to an ArrayBuffer as fast as possible.

Note that in some cases the returned ArrayBuffer is backed by the same memory as the original
Buffer (but in other cases it is a copy), so **modifying the ArrayBuffer is not recommended**.

This module is designed to work both in node.js and in all browsers with ArrayBuffer support
when using [the Buffer implementation provided by Browserify](https://www.npmjs.com/package/buffer).

## Usage

``` js
var toArrayBuffer = require('to-arraybuffer')

var buffer = new Buffer(100)
// Fill the buffer with some data

var ab = toArrayBuffer(buffer)
// `ab` now contains the same data as `buffer`
```

## License

MIT", "node_modules/to-arraybuffer/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/to-arraybuffer/README.md");
    }
}
