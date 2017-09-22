<?php

/* node_modules/md5.js/node_modules/hash-base/README.md */
class __TwigTemplate_3086b532e5dd364cbdcd9dc58f296db144f4db05c404ca73804f16283a0652ee extends Twig_Template
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
        $__internal_551d552d13e27e670bf4ca1e64be54de3be6f3331d1df0ff38146c634067b1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_551d552d13e27e670bf4ca1e64be54de3be6f3331d1df0ff38146c634067b1c8->enter($__internal_551d552d13e27e670bf4ca1e64be54de3be6f3331d1df0ff38146c634067b1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/md5.js/node_modules/hash-base/README.md"));

        // line 1
        echo "# hash-base

[![NPM Package](https://img.shields.io/npm/v/hash-base.svg?style=flat-square)](https://www.npmjs.org/package/hash-base)
[![Build Status](https://img.shields.io/travis/crypto-browserify/hash-base.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/hash-base)
[![Dependency status](https://img.shields.io/david/crypto-browserify/hash-base.svg?style=flat-square)](https://david-dm.org/crypto-browserify/hash-base#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

Abstract base class to inherit from if you want to create streams implementing the same API as node crypto [Hash][1] (for [Cipher][2] / [Decipher][3] check [crypto-browserify/cipher-base][4]).

## Example

```js
const HashBase = require('hash-base')
const inherits = require('inherits')

// our hash function is XOR sum of all bytes
function MyHash () {
  HashBase.call(this, 1) // in bytes

  this._sum = 0x00
}

inherits(MyHash, HashBase)

MyHash.prototype._update = function () {
  for (let i = 0; i < this._block.length; ++i) this._sum ^= this._block[i]
}

MyHash.prototype._digest = function () {
  return this._sum
}

const data = Buffer.from([ 0x00, 0x42, 0x01 ])
const hash = new MyHash().update(data).digest()
console.log(hash) // => 67
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
        
        $__internal_551d552d13e27e670bf4ca1e64be54de3be6f3331d1df0ff38146c634067b1c8->leave($__internal_551d552d13e27e670bf4ca1e64be54de3be6f3331d1df0ff38146c634067b1c8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/md5.js/node_modules/hash-base/README.md";
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
const HashBase = require('hash-base')
const inherits = require('inherits')

// our hash function is XOR sum of all bytes
function MyHash () {
  HashBase.call(this, 1) // in bytes

  this._sum = 0x00
}

inherits(MyHash, HashBase)

MyHash.prototype._update = function () {
  for (let i = 0; i < this._block.length; ++i) this._sum ^= this._block[i]
}

MyHash.prototype._digest = function () {
  return this._sum
}

const data = Buffer.from([ 0x00, 0x42, 0x01 ])
const hash = new MyHash().update(data).digest()
console.log(hash) // => 67
```
You also can check [source code](index.js) or [crypto-browserify/md5.js][5]

## LICENSE

MIT

[1]: https://nodejs.org/api/crypto.html#crypto_class_hash
[2]: https://nodejs.org/api/crypto.html#crypto_class_cipher
[3]: https://nodejs.org/api/crypto.html#crypto_class_decipher
[4]: https://github.com/crypto-browserify/cipher-base
[5]: https://github.com/crypto-browserify/md5.js
", "node_modules/md5.js/node_modules/hash-base/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/md5.js/node_modules/hash-base/README.md");
    }
}
