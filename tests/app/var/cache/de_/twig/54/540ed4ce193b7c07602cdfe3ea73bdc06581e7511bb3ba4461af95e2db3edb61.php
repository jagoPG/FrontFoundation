<?php

/* node_modules/remove-trailing-separator/readme.md */
class __TwigTemplate_be175b748bc90fca5e71eaf741b5704606907fc3998526ad7186854fd17e5d25 extends Twig_Template
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
        $__internal_f030c8fee1b7094450f63345d654318c3316f02ce9fad3feda81dc6a14153d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f030c8fee1b7094450f63345d654318c3316f02ce9fad3feda81dc6a14153d65->enter($__internal_f030c8fee1b7094450f63345d654318c3316f02ce9fad3feda81dc6a14153d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/remove-trailing-separator/readme.md"));

        // line 1
        echo "# remove-trailing-separator

[![NPM version][npm-img]][npm-url] [![Build Status: Linux][travis-img]][travis-url] [![Build Status: Windows][appveyor-img]][appveyor-url] [![Coverage Status][coveralls-img]][coveralls-url]

Removes all separators from the end of a string.

## Install

```
npm install remove-trailing-separator
```

## Examples

```js
const removeTrailingSeparator = require('remove-trailing-separator');

removeTrailingSeparator('/foo/bar/')   // '/foo/bar'
removeTrailingSeparator('/foo/bar///') // '/foo/bar'

// leaves only/last separator
removeTrailingSeparator('/')    // '/'
removeTrailingSeparator('///')  // '/'

// returns empty string
removeTrailingSeparator('') // ''
```

## Notable backslash, or win32 separator behavior

`\\` is considered a separator only on WIN32 systems. All POSIX compliant systems
see backslash as a valid file name character, so it would break POSIX compliance
to remove it there.

In practice, this means that this code will return different things depending on
what system it runs on:

```js
removeTrailingSeparator('\\\\foo\\\\')
// UNIX  => '\\\\foo\\\\'
// WIN32 => '\\\\foo'
```

[npm-url]: https://npmjs.org/package/remove-trailing-separator
[npm-img]: https://badge.fury.io/js/remove-trailing-separator.svg
[travis-url]: https://travis-ci.org/darsain/remove-trailing-separator
[travis-img]: https://travis-ci.org/darsain/remove-trailing-separator.svg?branch=master
[appveyor-url]: https://ci.appveyor.com/project/darsain/remove-trailing-separator/branch/master
[appveyor-img]: https://ci.appveyor.com/api/projects/status/wvg9a93rrq95n2xl/branch/master?svg=true
[coveralls-url]: https://coveralls.io/github/darsain/remove-trailing-separator?branch=master
[coveralls-img]: https://coveralls.io/repos/github/darsain/remove-trailing-separator/badge.svg?branch=master
";
        
        $__internal_f030c8fee1b7094450f63345d654318c3316f02ce9fad3feda81dc6a14153d65->leave($__internal_f030c8fee1b7094450f63345d654318c3316f02ce9fad3feda81dc6a14153d65_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/remove-trailing-separator/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# remove-trailing-separator

[![NPM version][npm-img]][npm-url] [![Build Status: Linux][travis-img]][travis-url] [![Build Status: Windows][appveyor-img]][appveyor-url] [![Coverage Status][coveralls-img]][coveralls-url]

Removes all separators from the end of a string.

## Install

```
npm install remove-trailing-separator
```

## Examples

```js
const removeTrailingSeparator = require('remove-trailing-separator');

removeTrailingSeparator('/foo/bar/')   // '/foo/bar'
removeTrailingSeparator('/foo/bar///') // '/foo/bar'

// leaves only/last separator
removeTrailingSeparator('/')    // '/'
removeTrailingSeparator('///')  // '/'

// returns empty string
removeTrailingSeparator('') // ''
```

## Notable backslash, or win32 separator behavior

`\\` is considered a separator only on WIN32 systems. All POSIX compliant systems
see backslash as a valid file name character, so it would break POSIX compliance
to remove it there.

In practice, this means that this code will return different things depending on
what system it runs on:

```js
removeTrailingSeparator('\\\\foo\\\\')
// UNIX  => '\\\\foo\\\\'
// WIN32 => '\\\\foo'
```

[npm-url]: https://npmjs.org/package/remove-trailing-separator
[npm-img]: https://badge.fury.io/js/remove-trailing-separator.svg
[travis-url]: https://travis-ci.org/darsain/remove-trailing-separator
[travis-img]: https://travis-ci.org/darsain/remove-trailing-separator.svg?branch=master
[appveyor-url]: https://ci.appveyor.com/project/darsain/remove-trailing-separator/branch/master
[appveyor-img]: https://ci.appveyor.com/api/projects/status/wvg9a93rrq95n2xl/branch/master?svg=true
[coveralls-url]: https://coveralls.io/github/darsain/remove-trailing-separator?branch=master
[coveralls-img]: https://coveralls.io/repos/github/darsain/remove-trailing-separator/badge.svg?branch=master
", "node_modules/remove-trailing-separator/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/remove-trailing-separator/readme.md");
    }
}
