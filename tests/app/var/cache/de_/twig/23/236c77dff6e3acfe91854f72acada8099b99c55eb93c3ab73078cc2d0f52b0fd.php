<?php

/* node_modules/escape-html/Readme.md */
class __TwigTemplate_d9b0ba7aedb9e1b0101f19912d1f91bd949d68e48c6d7e49eb83c0faabf410c0 extends Twig_Template
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
        $__internal_d56d1460001bfde8372661fd6a04e54288e44c6921279127932eab29a4f2efd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d56d1460001bfde8372661fd6a04e54288e44c6921279127932eab29a4f2efd1->enter($__internal_d56d1460001bfde8372661fd6a04e54288e44c6921279127932eab29a4f2efd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/escape-html/Readme.md"));

        // line 1
        echo "
# escape-html

  Escape string for use in HTML

## Example

```js
var escape = require('escape-html');
var html = escape('foo & bar');
// -> foo &amp; bar
```

## Benchmark

```
\$ npm run-script bench

> escape-html@1.0.3 bench nodejs-escape-html
> node benchmark/index.js


  http_parser@1.0
  node@0.10.33
  v8@3.14.5.9
  ares@1.9.0-DEV
  uv@0.10.29
  zlib@1.2.3
  modules@11
  openssl@1.0.1j

  1 test completed.
  2 tests completed.
  3 tests completed.

  no special characters    x 19,435,271 ops/sec ±0.85% (187 runs sampled)
  single special character x  6,132,421 ops/sec ±0.67% (194 runs sampled)
  many special characters  x  3,175,826 ops/sec ±0.65% (193 runs sampled)
```

## License

  MIT";
        
        $__internal_d56d1460001bfde8372661fd6a04e54288e44c6921279127932eab29a4f2efd1->leave($__internal_d56d1460001bfde8372661fd6a04e54288e44c6921279127932eab29a4f2efd1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/escape-html/Readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
# escape-html

  Escape string for use in HTML

## Example

```js
var escape = require('escape-html');
var html = escape('foo & bar');
// -> foo &amp; bar
```

## Benchmark

```
\$ npm run-script bench

> escape-html@1.0.3 bench nodejs-escape-html
> node benchmark/index.js


  http_parser@1.0
  node@0.10.33
  v8@3.14.5.9
  ares@1.9.0-DEV
  uv@0.10.29
  zlib@1.2.3
  modules@11
  openssl@1.0.1j

  1 test completed.
  2 tests completed.
  3 tests completed.

  no special characters    x 19,435,271 ops/sec ±0.85% (187 runs sampled)
  single special character x  6,132,421 ops/sec ±0.67% (194 runs sampled)
  many special characters  x  3,175,826 ops/sec ±0.65% (193 runs sampled)
```

## License

  MIT", "node_modules/escape-html/Readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/escape-html/Readme.md");
    }
}
