<?php

/* node_modules/fsevents/node_modules/strip-json-comments/readme.md */
class __TwigTemplate_206378426e8c4b3dbffa74515f9697e3d09d3248b4c03aafce610ede61a3e692 extends Twig_Template
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
        $__internal_b876ca08d0ce22061e2f86568bf03c8a63c9e4f186c5605c2f689741f5d3aad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b876ca08d0ce22061e2f86568bf03c8a63c9e4f186c5605c2f689741f5d3aad4->enter($__internal_b876ca08d0ce22061e2f86568bf03c8a63c9e4f186c5605c2f689741f5d3aad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/strip-json-comments/readme.md"));

        // line 1
        echo "# strip-json-comments [![Build Status](https://travis-ci.org/sindresorhus/strip-json-comments.svg?branch=master)](https://travis-ci.org/sindresorhus/strip-json-comments)

> Strip comments from JSON. Lets you use comments in your JSON files!

This is now possible:

```js
{
\t// rainbows
\t\"unicorn\": /* ❤ */ \"cake\"
}
```

It will replace single-line comments `//` and multi-line comments `/**/` with whitespace. This allows JSON error positions to remain as close as possible to the original source.

Also available as a [gulp](https://github.com/sindresorhus/gulp-strip-json-comments)/[grunt](https://github.com/sindresorhus/grunt-strip-json-comments)/[broccoli](https://github.com/sindresorhus/broccoli-strip-json-comments) plugin.


## Install

```
\$ npm install --save strip-json-comments
```


## Usage

```js
const json = '{/*rainbows*/\"unicorn\":\"cake\"}';

JSON.parse(stripJsonComments(json));
//=> {unicorn: 'cake'}
```


## API

### stripJsonComments(input, [options])

#### input

Type: `string`

Accepts a string with JSON and returns a string without comments.

#### options

##### whitespace

Type: `boolean`  
Default: `true`

Replace comments with whitespace instead of stripping them entirely.


## Related

- [strip-json-comments-cli](https://github.com/sindresorhus/strip-json-comments-cli) - CLI for this module
- [strip-css-comments](https://github.com/sindresorhus/strip-css-comments) - Strip comments from CSS


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_b876ca08d0ce22061e2f86568bf03c8a63c9e4f186c5605c2f689741f5d3aad4->leave($__internal_b876ca08d0ce22061e2f86568bf03c8a63c9e4f186c5605c2f689741f5d3aad4_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/strip-json-comments/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# strip-json-comments [![Build Status](https://travis-ci.org/sindresorhus/strip-json-comments.svg?branch=master)](https://travis-ci.org/sindresorhus/strip-json-comments)

> Strip comments from JSON. Lets you use comments in your JSON files!

This is now possible:

```js
{
\t// rainbows
\t\"unicorn\": /* ❤ */ \"cake\"
}
```

It will replace single-line comments `//` and multi-line comments `/**/` with whitespace. This allows JSON error positions to remain as close as possible to the original source.

Also available as a [gulp](https://github.com/sindresorhus/gulp-strip-json-comments)/[grunt](https://github.com/sindresorhus/grunt-strip-json-comments)/[broccoli](https://github.com/sindresorhus/broccoli-strip-json-comments) plugin.


## Install

```
\$ npm install --save strip-json-comments
```


## Usage

```js
const json = '{/*rainbows*/\"unicorn\":\"cake\"}';

JSON.parse(stripJsonComments(json));
//=> {unicorn: 'cake'}
```


## API

### stripJsonComments(input, [options])

#### input

Type: `string`

Accepts a string with JSON and returns a string without comments.

#### options

##### whitespace

Type: `boolean`  
Default: `true`

Replace comments with whitespace instead of stripping them entirely.


## Related

- [strip-json-comments-cli](https://github.com/sindresorhus/strip-json-comments-cli) - CLI for this module
- [strip-css-comments](https://github.com/sindresorhus/strip-css-comments) - Strip comments from CSS


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/fsevents/node_modules/strip-json-comments/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/strip-json-comments/readme.md");
    }
}
