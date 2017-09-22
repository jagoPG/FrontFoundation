<?php

/* node_modules/glob-base/README.md */
class __TwigTemplate_5b1de11c5306460f93676f641bb69fc8bb69c8e5817950cab46d7cc09a960c7b extends Twig_Template
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
        $__internal_1cac8381f63ab8a9543c70eba93d9c99a98d321d0054bc22c21607479596b18a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cac8381f63ab8a9543c70eba93d9c99a98d321d0054bc22c21607479596b18a->enter($__internal_1cac8381f63ab8a9543c70eba93d9c99a98d321d0054bc22c21607479596b18a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/glob-base/README.md"));

        // line 1
        echo "# glob-base [![NPM version](https://badge.fury.io/js/glob-base.svg)](http://badge.fury.io/js/glob-base)  [![Build Status](https://travis-ci.org/jonschlinkert/glob-base.svg)](https://travis-ci.org/jonschlinkert/glob-base) 

> Returns an object with the (non-glob) base path and the actual pattern.

Use [glob-parent](https://github.com/es128/glob-parent) if you just want the base path.

## Install with [npm](npmjs.org)

```bash
npm i glob-base --save
```

## Related projects
* [glob-parent](https://github.com/es128/glob-parent): Strips glob magic from a string to provide the parent path
* [micromatch](https://github.com/jonschlinkert/micromatch): Glob matching for javascript/node.js. A faster alternative to minimatch (10-45x faster on avg), with all the features you're used to using in your Grunt and gulp tasks.
* [parse-glob](https://github.com/jonschlinkert/parse-glob): Parse a glob pattern into an object of tokens.
* [is-glob](https://github.com/jonschlinkert/is-glob): Returns `true` if the given string looks like a glob pattern.
* [braces](https://github.com/jonschlinkert/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces specification.
* [fill-range](https://github.com/jonschlinkert/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to use.
* [expand-range](https://github.com/jonschlinkert/expand-range): Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See the benchmarks. Used by micromatch.

## Usage

```js
var globBase = require('glob-base');

globBase('a/b/.git/');
//=> { base: 'a/b/.git/', isGlob: false, glob: '' })

globBase('a/b/**/e');
//=> { base: 'a/b', isGlob: true, glob: '**/e' }

globBase('a/b/*.{foo,bar}');
//=> { base: 'a/b', isGlob: true, glob: '*.{foo,bar}' }

globBase('a/b/.git/**');
//=> { base: 'a/b/.git', isGlob: true, glob: '**' }

globBase('a/b/c/*.md');
//=> { base: 'a/b/c', isGlob: true, glob: '*.md' }

globBase('a/b/c/.*.md');
//=> { base: 'a/b/c', isGlob: true, glob: '.*.md' }

globBase('a/b/{c,d}');
//=> { base: 'a/b', isGlob: true, glob: '{c,d}' }

globBase('!*.min.js');
//=> { base: '.', isGlob: true, glob: '!*.min.js' }

globBase('!foo');
//=> { base: '.', isGlob: true, glob: '!foo' }

globBase('!foo/(a|b).min.js');
//=> { base: '.', isGlob: true, glob: '!foo/(a|b).min.js' }

globBase('');
//=> { base: '.', isGlob: false, glob: '' }

globBase('**/*.md');
//=> { base: '.', isGlob: true, glob: '**/*.md' }

globBase('**/*.min.js');
//=> { base: '.', isGlob: true, glob: '**/*.min.js' }

globBase('**/.*');
//=> { base: '.', isGlob: true, glob: '**/.*' }

globBase('**/d');
//=> { base: '.', isGlob: true, glob: '**/d' }

globBase('*.*');
//=> { base: '.', isGlob: true, glob: '*.*' }

globBase('*.min.js');
//=> { base: '.', isGlob: true, glob: '*.min.js' }

globBase('*/*');
//=> { base: '.', isGlob: true, glob: '*/*' }

globBase('*b');
//=> { base: '.', isGlob: true, glob: '*b' }

globBase('.');
//=> { base: '.', isGlob: false, glob: '.' }

globBase('.*');
//=> { base: '.', isGlob: true, glob: '.*' }

globBase('./*');
//=> { base: '.', isGlob: true, glob: '*' }

globBase('/a');
//=> { base: '/', isGlob: false, glob: 'a' }

globBase('@(a|b)/e.f.g/');
//=> { base: '.', isGlob: true, glob: '@(a|b)/e.f.g/' }

globBase('[a-c]b*');
//=> { base: '.', isGlob: true, glob: '[a-c]b*' }

globBase('a');
//=> { base: '.', isGlob: false, glob: 'a' }

globBase('a.min.js');
//=> { base: '.', isGlob: false, glob: 'a.min.js' }

globBase('a/');
//=> { base: 'a/', isGlob: false, glob: '' }

globBase('a/**/j/**/z/*.md');
//=> { base: 'a', isGlob: true, glob: '**/j/**/z/*.md' }

globBase('a/*/c/*.md');
//=> { base: 'a', isGlob: true, glob: '*/c/*.md' }

globBase('a/?/c.md');
//=> { base: 'a', isGlob: true, glob: '?/c.md' }

globBase('a/??/c.js');
//=> { base: 'a', isGlob: true, glob: '??/c.js' }

globBase('a?b');
//=> { base: '.', isGlob: true, glob: 'a?b' }

globBase('bb');
//=> { base: '.', isGlob: false, glob: 'bb' }

globBase('c.md');
//=> { base: '.', isGlob: false, glob: 'c.md' }
```

## Running tests
Install dev dependencies.

```bash
npm i -d && npm test
```


## Contributing
Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/glob-base/issues)


## Author

**Jon Schlinkert**
 
+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert) 

## License
Copyright (c) 2015 Jon Schlinkert  
Released under the MIT license

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on March 08, 2015._
";
        
        $__internal_1cac8381f63ab8a9543c70eba93d9c99a98d321d0054bc22c21607479596b18a->leave($__internal_1cac8381f63ab8a9543c70eba93d9c99a98d321d0054bc22c21607479596b18a_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/glob-base/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# glob-base [![NPM version](https://badge.fury.io/js/glob-base.svg)](http://badge.fury.io/js/glob-base)  [![Build Status](https://travis-ci.org/jonschlinkert/glob-base.svg)](https://travis-ci.org/jonschlinkert/glob-base) 

> Returns an object with the (non-glob) base path and the actual pattern.

Use [glob-parent](https://github.com/es128/glob-parent) if you just want the base path.

## Install with [npm](npmjs.org)

```bash
npm i glob-base --save
```

## Related projects
* [glob-parent](https://github.com/es128/glob-parent): Strips glob magic from a string to provide the parent path
* [micromatch](https://github.com/jonschlinkert/micromatch): Glob matching for javascript/node.js. A faster alternative to minimatch (10-45x faster on avg), with all the features you're used to using in your Grunt and gulp tasks.
* [parse-glob](https://github.com/jonschlinkert/parse-glob): Parse a glob pattern into an object of tokens.
* [is-glob](https://github.com/jonschlinkert/is-glob): Returns `true` if the given string looks like a glob pattern.
* [braces](https://github.com/jonschlinkert/braces): Fastest brace expansion for node.js, with the most complete support for the Bash 4.3 braces specification.
* [fill-range](https://github.com/jonschlinkert/fill-range): Fill in a range of numbers or letters, optionally passing an increment or multiplier to use.
* [expand-range](https://github.com/jonschlinkert/expand-range): Fast, bash-like range expansion. Expand a range of numbers or letters, uppercase or lowercase. See the benchmarks. Used by micromatch.

## Usage

```js
var globBase = require('glob-base');

globBase('a/b/.git/');
//=> { base: 'a/b/.git/', isGlob: false, glob: '' })

globBase('a/b/**/e');
//=> { base: 'a/b', isGlob: true, glob: '**/e' }

globBase('a/b/*.{foo,bar}');
//=> { base: 'a/b', isGlob: true, glob: '*.{foo,bar}' }

globBase('a/b/.git/**');
//=> { base: 'a/b/.git', isGlob: true, glob: '**' }

globBase('a/b/c/*.md');
//=> { base: 'a/b/c', isGlob: true, glob: '*.md' }

globBase('a/b/c/.*.md');
//=> { base: 'a/b/c', isGlob: true, glob: '.*.md' }

globBase('a/b/{c,d}');
//=> { base: 'a/b', isGlob: true, glob: '{c,d}' }

globBase('!*.min.js');
//=> { base: '.', isGlob: true, glob: '!*.min.js' }

globBase('!foo');
//=> { base: '.', isGlob: true, glob: '!foo' }

globBase('!foo/(a|b).min.js');
//=> { base: '.', isGlob: true, glob: '!foo/(a|b).min.js' }

globBase('');
//=> { base: '.', isGlob: false, glob: '' }

globBase('**/*.md');
//=> { base: '.', isGlob: true, glob: '**/*.md' }

globBase('**/*.min.js');
//=> { base: '.', isGlob: true, glob: '**/*.min.js' }

globBase('**/.*');
//=> { base: '.', isGlob: true, glob: '**/.*' }

globBase('**/d');
//=> { base: '.', isGlob: true, glob: '**/d' }

globBase('*.*');
//=> { base: '.', isGlob: true, glob: '*.*' }

globBase('*.min.js');
//=> { base: '.', isGlob: true, glob: '*.min.js' }

globBase('*/*');
//=> { base: '.', isGlob: true, glob: '*/*' }

globBase('*b');
//=> { base: '.', isGlob: true, glob: '*b' }

globBase('.');
//=> { base: '.', isGlob: false, glob: '.' }

globBase('.*');
//=> { base: '.', isGlob: true, glob: '.*' }

globBase('./*');
//=> { base: '.', isGlob: true, glob: '*' }

globBase('/a');
//=> { base: '/', isGlob: false, glob: 'a' }

globBase('@(a|b)/e.f.g/');
//=> { base: '.', isGlob: true, glob: '@(a|b)/e.f.g/' }

globBase('[a-c]b*');
//=> { base: '.', isGlob: true, glob: '[a-c]b*' }

globBase('a');
//=> { base: '.', isGlob: false, glob: 'a' }

globBase('a.min.js');
//=> { base: '.', isGlob: false, glob: 'a.min.js' }

globBase('a/');
//=> { base: 'a/', isGlob: false, glob: '' }

globBase('a/**/j/**/z/*.md');
//=> { base: 'a', isGlob: true, glob: '**/j/**/z/*.md' }

globBase('a/*/c/*.md');
//=> { base: 'a', isGlob: true, glob: '*/c/*.md' }

globBase('a/?/c.md');
//=> { base: 'a', isGlob: true, glob: '?/c.md' }

globBase('a/??/c.js');
//=> { base: 'a', isGlob: true, glob: '??/c.js' }

globBase('a?b');
//=> { base: '.', isGlob: true, glob: 'a?b' }

globBase('bb');
//=> { base: '.', isGlob: false, glob: 'bb' }

globBase('c.md');
//=> { base: '.', isGlob: false, glob: 'c.md' }
```

## Running tests
Install dev dependencies.

```bash
npm i -d && npm test
```


## Contributing
Pull requests and stars are always welcome. For bugs and feature requests, [please create an issue](https://github.com/jonschlinkert/glob-base/issues)


## Author

**Jon Schlinkert**
 
+ [github/jonschlinkert](https://github.com/jonschlinkert)
+ [twitter/jonschlinkert](http://twitter.com/jonschlinkert) 

## License
Copyright (c) 2015 Jon Schlinkert  
Released under the MIT license

***

_This file was generated by [verb-cli](https://github.com/assemble/verb-cli) on March 08, 2015._
", "node_modules/glob-base/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/glob-base/README.md");
    }
}