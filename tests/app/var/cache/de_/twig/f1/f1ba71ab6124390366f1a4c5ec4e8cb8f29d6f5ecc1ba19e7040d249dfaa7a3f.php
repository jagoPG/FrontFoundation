<?php

/* node_modules/acorn-dynamic-import/README.md */
class __TwigTemplate_13e40b5ccd234ed67bb619f0d37753d0cafb2b3d69451796e204c12e24793952 extends Twig_Template
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
        $__internal_ec35cacf8243d06adb2ec0526d416c0d4e83e9cbe63fbb0a992680b967617ddc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec35cacf8243d06adb2ec0526d416c0d4e83e9cbe63fbb0a992680b967617ddc->enter($__internal_ec35cacf8243d06adb2ec0526d416c0d4e83e9cbe63fbb0a992680b967617ddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/acorn-dynamic-import/README.md"));

        // line 1
        echo "# Dynamic import support in acorn

This is plugin for [Acorn](http://marijnhaverbeke.nl/acorn/) - a tiny, fast JavaScript parser, written completely in JavaScript.

For more information, check out the [proposal repo](https://github.com/tc39/proposal-dynamic-import).

## Usage

You can use this module directly in order to get Acorn instance with plugin installed:

```js
import acorn from 'acorn-dynamic-import';
// or...
const acorn = require('acorn-dynamic-import').default;
```

Or you can use `inject.js` for injecting plugin into your own version of Acorn like this:

```js
const acorn = require('acorn-dynamic-import/lib/inject').default(require('./custom-acorn'));
```

Then, use the `plugins` option whenever you need to support dynamicImport while parsing:

```js
const ast = acorn.parse(code, {
  plugins: { dynamicImport: true }
});
```

## License

This plugin is issued under the [MIT license](./LICENSE).
";
        
        $__internal_ec35cacf8243d06adb2ec0526d416c0d4e83e9cbe63fbb0a992680b967617ddc->leave($__internal_ec35cacf8243d06adb2ec0526d416c0d4e83e9cbe63fbb0a992680b967617ddc_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/acorn-dynamic-import/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Dynamic import support in acorn

This is plugin for [Acorn](http://marijnhaverbeke.nl/acorn/) - a tiny, fast JavaScript parser, written completely in JavaScript.

For more information, check out the [proposal repo](https://github.com/tc39/proposal-dynamic-import).

## Usage

You can use this module directly in order to get Acorn instance with plugin installed:

```js
import acorn from 'acorn-dynamic-import';
// or...
const acorn = require('acorn-dynamic-import').default;
```

Or you can use `inject.js` for injecting plugin into your own version of Acorn like this:

```js
const acorn = require('acorn-dynamic-import/lib/inject').default(require('./custom-acorn'));
```

Then, use the `plugins` option whenever you need to support dynamicImport while parsing:

```js
const ast = acorn.parse(code, {
  plugins: { dynamicImport: true }
});
```

## License

This plugin is issued under the [MIT license](./LICENSE).
", "node_modules/acorn-dynamic-import/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/acorn-dynamic-import/README.md");
    }
}
