<?php

/* node_modules/hash-base/README.md */
class __TwigTemplate_9709fa56d0a4142cff5c0ae9c3f55f4739e032f591b5eaa0c8bb604c0c936b0b extends Twig_Template
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
        $__internal_baa24ddcd73a60a509bd203a82ac6ee0c084f74d85227b5611a9c7c43e1553c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baa24ddcd73a60a509bd203a82ac6ee0c084f74d85227b5611a9c7c43e1553c8->enter($__internal_baa24ddcd73a60a509bd203a82ac6ee0c084f74d85227b5611a9c7c43e1553c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/hash-base/README.md"));

        // line 1
        echo "# hash-base

[![NPM Package](https://img.shields.io/npm/v/hash-base.svg?style=flat-square)](https://www.npmjs.org/package/hash-base)
[![Build Status](https://img.shields.io/travis/crypto-browserify/hash-base.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/hash-base)
[![Dependency status](https://img.shields.io/david/crypto-browserify/hash-base.svg?style=flat-square)](https://david-dm.org/crypto-browserify/hash-base#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Abstract base class to inherit from if you want to create streams implementing the same API as node crypto [Hash][1] (for [Cipher][2] / [Decipher][3] check [crypto-browserify/cipher-base][4]).

## Example

```js
function MyHash () {
  HashBase.call(64) // in bytes
}

inherti(MyHash, HashBase)

MyHash.prototype._update = function () {
  // hashing one block with buffer this._block
}

MyHash.prototype._digest = function () {
  // create padding and produce result
}
```
You also can check [source code](index.js) or [crypto-browserify/md5.js][5]

## LICENSE

MIT

[1]: https://nodejs.org/api/crypto.html#crypto_class_hash
[2]: https://nodejs.org/api/crypto.html#crypto_class_cipher
[3]: https://nodejs.org/api/crypto.html#crypto_class_decipher
[4]: https://github.com/crypto-browserify/cipher-base
[5]: https://github.com/crypto-browserify/md5.js
";
        
        $__internal_baa24ddcd73a60a509bd203a82ac6ee0c084f74d85227b5611a9c7c43e1553c8->leave($__internal_baa24ddcd73a60a509bd203a82ac6ee0c084f74d85227b5611a9c7c43e1553c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/hash-base/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# hash-base

[![NPM Package](https://img.shields.io/npm/v/hash-base.svg?style=flat-square)](https://www.npmjs.org/package/hash-base)
[![Build Status](https://img.shields.io/travis/crypto-browserify/hash-base.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/hash-base)
[![Dependency status](https://img.shields.io/david/crypto-browserify/hash-base.svg?style=flat-square)](https://david-dm.org/crypto-browserify/hash-base#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Abstract base class to inherit from if you want to create streams implementing the same API as node crypto [Hash][1] (for [Cipher][2] / [Decipher][3] check [crypto-browserify/cipher-base][4]).

## Example

```js
function MyHash () {
  HashBase.call(64) // in bytes
}

inherti(MyHash, HashBase)

MyHash.prototype._update = function () {
  // hashing one block with buffer this._block
}

MyHash.prototype._digest = function () {
  // create padding and produce result
}
```
You also can check [source code](index.js) or [crypto-browserify/md5.js][5]

## LICENSE

MIT

[1]: https://nodejs.org/api/crypto.html#crypto_class_hash
[2]: https://nodejs.org/api/crypto.html#crypto_class_cipher
[3]: https://nodejs.org/api/crypto.html#crypto_class_decipher
[4]: https://github.com/crypto-browserify/cipher-base
[5]: https://github.com/crypto-browserify/md5.js
", "node_modules/hash-base/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/hash-base/README.md");
    }
}
