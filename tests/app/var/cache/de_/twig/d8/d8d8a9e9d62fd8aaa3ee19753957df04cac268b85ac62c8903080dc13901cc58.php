<?php

/* node_modules/supports-color/readme.md */
class __TwigTemplate_f3b5679626fd345101426f4a37a90885f4d45bbd2ef13e86ab6b785a824590a5 extends Twig_Template
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
        $__internal_3bb0c7e7d84c813c9592cec56c204a31a4e5536e429b156db843330f73027a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bb0c7e7d84c813c9592cec56c204a31a4e5536e429b156db843330f73027a58->enter($__internal_3bb0c7e7d84c813c9592cec56c204a31a4e5536e429b156db843330f73027a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/supports-color/readme.md"));

        // line 1
        echo "# supports-color [![Build Status](https://travis-ci.org/chalk/supports-color.svg?branch=master)](https://travis-ci.org/chalk/supports-color)

> Detect whether a terminal supports color


## Install

```
\$ npm install supports-color
```


## Usage

```js
const supportsColor = require('supports-color');

if (supportsColor) {
\tconsole.log('Terminal supports color');
}

if (supportsColor.has256) {
\tconsole.log('Terminal supports 256 colors');
}

if (supportsColor.has16m) {
\tconsole.log('Terminal supports 16 million colors (truecolor)');
}
```


## API

Returns an `Object`, or `false` if color is not supported.

The returned object specifies a level of support for color through a `.level` property and a corresponding flag:

- `.level = 1` and `.hasBasic = true`: Basic color support (16 colors)
- `.level = 2` and `.has256 = true`: 256 color support
- `.level = 3` and `.has16m = true`: Truecolor support (16 million colors)


## Info

It obeys the `--color` and `--no-color` CLI flags.

Can be overridden by the user with the flags `--color` and `--no-color`. For situations where using `--color` is not possible, add the environment variable `FORCE_COLOR=1` to forcefully enable color or `FORCE_COLOR=0` to forcefully disable. The use of `FORCE_COLOR` overrides all other color support checks.

Explicit 256/Truecolor mode can be enabled using the `--color=256` and `--color=16m` flags, respectively.


## Related

- [supports-color-cli](https://github.com/chalk/supports-color-cli) - CLI for this module
- [chalk](https://github.com/chalk/chalk) - Terminal string styling done right


## Maintainers

- [Sindre Sorhus](https://github.com/sindresorhus)
- [Josh Junon](https://github.com/qix-)


## License

MIT
";
        
        $__internal_3bb0c7e7d84c813c9592cec56c204a31a4e5536e429b156db843330f73027a58->leave($__internal_3bb0c7e7d84c813c9592cec56c204a31a4e5536e429b156db843330f73027a58_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/supports-color/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# supports-color [![Build Status](https://travis-ci.org/chalk/supports-color.svg?branch=master)](https://travis-ci.org/chalk/supports-color)

> Detect whether a terminal supports color


## Install

```
\$ npm install supports-color
```


## Usage

```js
const supportsColor = require('supports-color');

if (supportsColor) {
\tconsole.log('Terminal supports color');
}

if (supportsColor.has256) {
\tconsole.log('Terminal supports 256 colors');
}

if (supportsColor.has16m) {
\tconsole.log('Terminal supports 16 million colors (truecolor)');
}
```


## API

Returns an `Object`, or `false` if color is not supported.

The returned object specifies a level of support for color through a `.level` property and a corresponding flag:

- `.level = 1` and `.hasBasic = true`: Basic color support (16 colors)
- `.level = 2` and `.has256 = true`: 256 color support
- `.level = 3` and `.has16m = true`: Truecolor support (16 million colors)


## Info

It obeys the `--color` and `--no-color` CLI flags.

Can be overridden by the user with the flags `--color` and `--no-color`. For situations where using `--color` is not possible, add the environment variable `FORCE_COLOR=1` to forcefully enable color or `FORCE_COLOR=0` to forcefully disable. The use of `FORCE_COLOR` overrides all other color support checks.

Explicit 256/Truecolor mode can be enabled using the `--color=256` and `--color=16m` flags, respectively.


## Related

- [supports-color-cli](https://github.com/chalk/supports-color-cli) - CLI for this module
- [chalk](https://github.com/chalk/chalk) - Terminal string styling done right


## Maintainers

- [Sindre Sorhus](https://github.com/sindresorhus)
- [Josh Junon](https://github.com/qix-)


## License

MIT
", "node_modules/supports-color/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/supports-color/readme.md");
    }
}
