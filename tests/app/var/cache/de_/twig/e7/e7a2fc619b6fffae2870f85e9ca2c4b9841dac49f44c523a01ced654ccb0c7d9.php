<?php

/* node_modules/ansi-styles/readme.md */
class __TwigTemplate_0f798198b8200adc65347df58a68d3199624c95084fe5b57366bbc3358f82584 extends Twig_Template
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
        $__internal_5c2ff8ebbfea11d70c288aac8ccb05bf51a2f926eb932b405a235b42e06aac45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c2ff8ebbfea11d70c288aac8ccb05bf51a2f926eb932b405a235b42e06aac45->enter($__internal_5c2ff8ebbfea11d70c288aac8ccb05bf51a2f926eb932b405a235b42e06aac45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ansi-styles/readme.md"));

        // line 1
        echo "# ansi-styles [![Build Status](https://travis-ci.org/chalk/ansi-styles.svg?branch=master)](https://travis-ci.org/chalk/ansi-styles)

> [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code#Colors_and_Styles) for styling strings in the terminal

You probably want the higher-level [chalk](https://github.com/chalk/chalk) module for styling your strings.

![](screenshot.png)


## Install

```
\$ npm install --save ansi-styles
```


## Usage

```js
var ansi = require('ansi-styles');

console.log(ansi.green.open + 'Hello world!' + ansi.green.close);
```


## API

Each style has an `open` and `close` property.


## Styles

### Modifiers

- `reset`
- `bold`
- `dim`
- `italic` *(not widely supported)*
- `underline`
- `inverse`
- `hidden`
- `strikethrough` *(not widely supported)*

### Colors

- `black`
- `red`
- `green`
- `yellow`
- `blue`
- `magenta`
- `cyan`
- `white`
- `gray`

### Background colors

- `bgBlack`
- `bgRed`
- `bgGreen`
- `bgYellow`
- `bgBlue`
- `bgMagenta`
- `bgCyan`
- `bgWhite`


## Advanced usage

By default you get a map of styles, but the styles are also available as groups. They are non-enumerable so they don't show up unless you access them explicitly. This makes it easier to expose only a subset in a higher-level module.

- `ansi.modifiers`
- `ansi.colors`
- `ansi.bgColors`


###### Example

```js
console.log(ansi.colors.green.open);
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_5c2ff8ebbfea11d70c288aac8ccb05bf51a2f926eb932b405a235b42e06aac45->leave($__internal_5c2ff8ebbfea11d70c288aac8ccb05bf51a2f926eb932b405a235b42e06aac45_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ansi-styles/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# ansi-styles [![Build Status](https://travis-ci.org/chalk/ansi-styles.svg?branch=master)](https://travis-ci.org/chalk/ansi-styles)

> [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code#Colors_and_Styles) for styling strings in the terminal

You probably want the higher-level [chalk](https://github.com/chalk/chalk) module for styling your strings.

![](screenshot.png)


## Install

```
\$ npm install --save ansi-styles
```


## Usage

```js
var ansi = require('ansi-styles');

console.log(ansi.green.open + 'Hello world!' + ansi.green.close);
```


## API

Each style has an `open` and `close` property.


## Styles

### Modifiers

- `reset`
- `bold`
- `dim`
- `italic` *(not widely supported)*
- `underline`
- `inverse`
- `hidden`
- `strikethrough` *(not widely supported)*

### Colors

- `black`
- `red`
- `green`
- `yellow`
- `blue`
- `magenta`
- `cyan`
- `white`
- `gray`

### Background colors

- `bgBlack`
- `bgRed`
- `bgGreen`
- `bgYellow`
- `bgBlue`
- `bgMagenta`
- `bgCyan`
- `bgWhite`


## Advanced usage

By default you get a map of styles, but the styles are also available as groups. They are non-enumerable so they don't show up unless you access them explicitly. This makes it easier to expose only a subset in a higher-level module.

- `ansi.modifiers`
- `ansi.colors`
- `ansi.bgColors`


###### Example

```js
console.log(ansi.colors.green.open);
```


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/ansi-styles/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ansi-styles/readme.md");
    }
}
