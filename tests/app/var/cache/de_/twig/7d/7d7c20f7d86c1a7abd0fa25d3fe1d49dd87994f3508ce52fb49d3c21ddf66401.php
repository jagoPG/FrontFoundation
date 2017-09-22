<?php

/* node_modules/os-locale/readme.md */
class __TwigTemplate_009e2d7756d6857ac48d102e92ebd0146c74f5aef41821492196779db1fa58e5 extends Twig_Template
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
        $__internal_c8ebf8241e7bed120426621cef31db01eb8e911ab55401913cf2dd4fc425cd96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8ebf8241e7bed120426621cef31db01eb8e911ab55401913cf2dd4fc425cd96->enter($__internal_c8ebf8241e7bed120426621cef31db01eb8e911ab55401913cf2dd4fc425cd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/os-locale/readme.md"));

        // line 1
        echo "# os-locale [![Build Status](https://travis-ci.org/sindresorhus/os-locale.svg?branch=master)](https://travis-ci.org/sindresorhus/os-locale)

> Get the system [locale](https://en.wikipedia.org/wiki/Locale_(computer_software))

Useful for localizing your module or app.

POSIX systems: The returned locale refers to the [`LC_MESSAGE`](http://www.gnu.org/software/libc/manual/html_node/Locale-Categories.html#Locale-Categories) category, suitable for selecting the language used in the user interface for message translation.


## Install

```
\$ npm install --save os-locale
```


## Usage

```js
const osLocale = require('os-locale');

osLocale().then(locale => {
\tconsole.log(locale);
\t//=> 'en_US'
});
```


## API

### osLocale([options])

Returns a `Promise` for the locale.

### osLocale.sync([options])

Returns the locale.

#### options

Type: `Object`

##### spawn

Type: `boolean`<br>
Default: `true`

Set to `false` to avoid spawning subprocesses and instead only resolve the locale from environment variables.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_c8ebf8241e7bed120426621cef31db01eb8e911ab55401913cf2dd4fc425cd96->leave($__internal_c8ebf8241e7bed120426621cef31db01eb8e911ab55401913cf2dd4fc425cd96_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/os-locale/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# os-locale [![Build Status](https://travis-ci.org/sindresorhus/os-locale.svg?branch=master)](https://travis-ci.org/sindresorhus/os-locale)

> Get the system [locale](https://en.wikipedia.org/wiki/Locale_(computer_software))

Useful for localizing your module or app.

POSIX systems: The returned locale refers to the [`LC_MESSAGE`](http://www.gnu.org/software/libc/manual/html_node/Locale-Categories.html#Locale-Categories) category, suitable for selecting the language used in the user interface for message translation.


## Install

```
\$ npm install --save os-locale
```


## Usage

```js
const osLocale = require('os-locale');

osLocale().then(locale => {
\tconsole.log(locale);
\t//=> 'en_US'
});
```


## API

### osLocale([options])

Returns a `Promise` for the locale.

### osLocale.sync([options])

Returns the locale.

#### options

Type: `Object`

##### spawn

Type: `boolean`<br>
Default: `true`

Set to `false` to avoid spawning subprocesses and instead only resolve the locale from environment variables.


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/os-locale/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/os-locale/readme.md");
    }
}
