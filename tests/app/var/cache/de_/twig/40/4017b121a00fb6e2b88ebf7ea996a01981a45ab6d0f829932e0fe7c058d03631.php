<?php

/* node_modules/set-immediate-shim/readme.md */
class __TwigTemplate_75f1d1cda22f8eb7270f47c0e34c16053902919dc74b14ab5ce7415813fe983f extends Twig_Template
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
        $__internal_cd0bb3149c48d04ddc0ef21f9d52409caa1dab4af422bd1d3b35154114cd56fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0bb3149c48d04ddc0ef21f9d52409caa1dab4af422bd1d3b35154114cd56fa->enter($__internal_cd0bb3149c48d04ddc0ef21f9d52409caa1dab4af422bd1d3b35154114cd56fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/set-immediate-shim/readme.md"));

        // line 1
        echo "# set-immediate-shim [![Build Status](https://travis-ci.org/sindresorhus/set-immediate-shim.svg?branch=master)](https://travis-ci.org/sindresorhus/set-immediate-shim)

> Simple [`setImmediate`](https://developer.mozilla.org/en-US/docs/Web/API/Window.setImmediate) shim


## Install

```
\$ npm install --save set-immediate-shim
```


## Usage

```js
var setImmediateShim = require('set-immediate-shim');

setImmediateShim(function () {
\tconsole.log('2');
});

console.log('1');

//=> 1
//=> 2
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_cd0bb3149c48d04ddc0ef21f9d52409caa1dab4af422bd1d3b35154114cd56fa->leave($__internal_cd0bb3149c48d04ddc0ef21f9d52409caa1dab4af422bd1d3b35154114cd56fa_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/set-immediate-shim/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# set-immediate-shim [![Build Status](https://travis-ci.org/sindresorhus/set-immediate-shim.svg?branch=master)](https://travis-ci.org/sindresorhus/set-immediate-shim)

> Simple [`setImmediate`](https://developer.mozilla.org/en-US/docs/Web/API/Window.setImmediate) shim


## Install

```
\$ npm install --save set-immediate-shim
```


## Usage

```js
var setImmediateShim = require('set-immediate-shim');

setImmediateShim(function () {
\tconsole.log('2');
});

console.log('1');

//=> 1
//=> 2
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/set-immediate-shim/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/set-immediate-shim/readme.md");
    }
}
