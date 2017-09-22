<?php

/* node_modules/loose-envify/README.md */
class __TwigTemplate_68ab75720b7287f96feeadfd2cf23c4df4d541a9992f7719a92a460c12d6ade5 extends Twig_Template
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
        $__internal_bfd4e33bb06f79fe9064532e5c3a19a6d37b99f5322e67e82e1f38a43398ff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfd4e33bb06f79fe9064532e5c3a19a6d37b99f5322e67e82e1f38a43398ff9c->enter($__internal_bfd4e33bb06f79fe9064532e5c3a19a6d37b99f5322e67e82e1f38a43398ff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/loose-envify/README.md"));

        // line 1
        echo "# loose-envify

[![Build Status](https://travis-ci.org/zertosh/loose-envify.svg?branch=master)](https://travis-ci.org/zertosh/loose-envify)

Fast (and loose) selective `process.env` replacer using [js-tokens](https://github.com/lydell/js-tokens) instead of an AST. Works just like [envify](https://github.com/hughsk/envify) but much faster.

## Gotchas

* Doesn't handle broken syntax.
* Doesn't look inside embedded expressions in template strings.
  - **this won't work:**
  ```js
  console.log(`the current env is \${process.env.NODE_ENV}`);
  ```
* Doesn't replace oddly-spaced or oddly-commented expressions.
  - **this won't work:**
  ```js
  console.log(process./*won't*/env./*work*/NODE_ENV);
  ```

## Usage/Options

loose-envify has the exact same interface as [envify](https://github.com/hughsk/envify), including the CLI.

## Benchmark

```
envify:

  \$ for i in {1..5}; do node bench/bench.js 'envify'; done
  708ms
  727ms
  791ms
  719ms
  720ms

loose-envify:

  \$ for i in {1..5}; do node bench/bench.js '../'; done
  51ms
  52ms
  52ms
  52ms
  52ms
```
";
        
        $__internal_bfd4e33bb06f79fe9064532e5c3a19a6d37b99f5322e67e82e1f38a43398ff9c->leave($__internal_bfd4e33bb06f79fe9064532e5c3a19a6d37b99f5322e67e82e1f38a43398ff9c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/loose-envify/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# loose-envify

[![Build Status](https://travis-ci.org/zertosh/loose-envify.svg?branch=master)](https://travis-ci.org/zertosh/loose-envify)

Fast (and loose) selective `process.env` replacer using [js-tokens](https://github.com/lydell/js-tokens) instead of an AST. Works just like [envify](https://github.com/hughsk/envify) but much faster.

## Gotchas

* Doesn't handle broken syntax.
* Doesn't look inside embedded expressions in template strings.
  - **this won't work:**
  ```js
  console.log(`the current env is \${process.env.NODE_ENV}`);
  ```
* Doesn't replace oddly-spaced or oddly-commented expressions.
  - **this won't work:**
  ```js
  console.log(process./*won't*/env./*work*/NODE_ENV);
  ```

## Usage/Options

loose-envify has the exact same interface as [envify](https://github.com/hughsk/envify), including the CLI.

## Benchmark

```
envify:

  \$ for i in {1..5}; do node bench/bench.js 'envify'; done
  708ms
  727ms
  791ms
  719ms
  720ms

loose-envify:

  \$ for i in {1..5}; do node bench/bench.js '../'; done
  51ms
  52ms
  52ms
  52ms
  52ms
```
", "node_modules/loose-envify/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/loose-envify/README.md");
    }
}
