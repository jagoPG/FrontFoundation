<?php

/* node_modules/strip-json-comments/readme.md */
class __TwigTemplate_0330c2ffc6e1fb7b3aa904c436966b6cc2cab7a322013808f76fb028669f1067 extends Twig_Template
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
        $__internal_78e09c912c6c44e44dea48dad23b849d79463079a868bb80ef583ca1649032ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e09c912c6c44e44dea48dad23b849d79463079a868bb80ef583ca1649032ba->enter($__internal_78e09c912c6c44e44dea48dad23b849d79463079a868bb80ef583ca1649032ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/strip-json-comments/readme.md"));

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
        
        $__internal_78e09c912c6c44e44dea48dad23b849d79463079a868bb80ef583ca1649032ba->leave($__internal_78e09c912c6c44e44dea48dad23b849d79463079a868bb80ef583ca1649032ba_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/strip-json-comments/readme.md";
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
", "node_modules/strip-json-comments/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/strip-json-comments/readme.md");
    }
}
