<?php

/* node_modules/md5.js/README.md */
class __TwigTemplate_f92d1ca30d5878b7c3f925389e34f699adae646e58675a448f3bc79f445f1894 extends Twig_Template
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
        $__internal_44a6d07c82d295f2df89fa3bb67b6cc26d0d58699f3d04164887e7c8f8c3b0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a6d07c82d295f2df89fa3bb67b6cc26d0d58699f3d04164887e7c8f8c3b0b5->enter($__internal_44a6d07c82d295f2df89fa3bb67b6cc26d0d58699f3d04164887e7c8f8c3b0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/md5.js/README.md"));

        // line 1
        echo "# md5.js

[![NPM Package](https://img.shields.io/npm/v/md5.js.svg?style=flat-square)](https://www.npmjs.org/package/md5.js)
[![Build Status](https://img.shields.io/travis/crypto-browserify/md5.js.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/md5.js)
[![Dependency status](https://img.shields.io/david/crypto-browserify/md5.js.svg?style=flat-square)](https://david-dm.org/crypto-browserify/md5.js#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style `md5` on pure JavaScript.

From [NIST SP 800-131A][1]: *md5 is no longer acceptable where collision resistance is required such as digital signatures.*

## Example

```js
var MD5 = require('md5.js')

console.log(new MD5().update('42').digest('hex'))
// => a1d0c6e83f027327d8461063f4ac58a6

var md5stream = new MD5()
md5stream.end('42')
console.log(md5stream.read().toString('hex'))
// => a1d0c6e83f027327d8461063f4ac58a6
```

## LICENSE

MIT

[1]: http://nvlpubs.nist.gov/nistpubs/SpecialPublications/NIST.SP.800-131Ar1.pdf
";
        
        $__internal_44a6d07c82d295f2df89fa3bb67b6cc26d0d58699f3d04164887e7c8f8c3b0b5->leave($__internal_44a6d07c82d295f2df89fa3bb67b6cc26d0d58699f3d04164887e7c8f8c3b0b5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/md5.js/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# md5.js

[![NPM Package](https://img.shields.io/npm/v/md5.js.svg?style=flat-square)](https://www.npmjs.org/package/md5.js)
[![Build Status](https://img.shields.io/travis/crypto-browserify/md5.js.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/md5.js)
[![Dependency status](https://img.shields.io/david/crypto-browserify/md5.js.svg?style=flat-square)](https://david-dm.org/crypto-browserify/md5.js#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Node style `md5` on pure JavaScript.

From [NIST SP 800-131A][1]: *md5 is no longer acceptable where collision resistance is required such as digital signatures.*

## Example

```js
var MD5 = require('md5.js')

console.log(new MD5().update('42').digest('hex'))
// => a1d0c6e83f027327d8461063f4ac58a6

var md5stream = new MD5()
md5stream.end('42')
console.log(md5stream.read().toString('hex'))
// => a1d0c6e83f027327d8461063f4ac58a6
```

## LICENSE

MIT

[1]: http://nvlpubs.nist.gov/nistpubs/SpecialPublications/NIST.SP.800-131Ar1.pdf
", "node_modules/md5.js/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/md5.js/README.md");
    }
}
