<?php

/* node_modules/pbkdf2/README.md */
class __TwigTemplate_e15583fab573febce996b6affd16feffcfa2e83d361d131524af86c2e9effe18 extends Twig_Template
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
        $__internal_321d2829e2446985abe576203b1d9979d88a2f7d2715811a63739faaaf5669ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_321d2829e2446985abe576203b1d9979d88a2f7d2715811a63739faaaf5669ef->enter($__internal_321d2829e2446985abe576203b1d9979d88a2f7d2715811a63739faaaf5669ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/pbkdf2/README.md"));

        // line 1
        echo "# pbkdf2

[![NPM Package](https://img.shields.io/npm/v/pbkdf2.svg?style=flat-square)](https://www.npmjs.org/package/pbkdf2)
[![Build Status](https://img.shields.io/travis/crypto-browserify/pbkdf2.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/pbkdf2)
[![Dependency status](https://img.shields.io/david/crypto-browserify/pbkdf2.svg?style=flat-square)](https://david-dm.org/crypto-browserify/pbkdf2#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

This library provides the functionality of PBKDF2 with the ability to use any supported hashing algorithm returned from `crypto.getHashes()`


## Usage

```js
var pbkdf2 = require('pbkdf2')
var derivedKey = pbkdf2.pbkdf2Sync('password', 'salt', 1, 32, 'sha512')

...
```

For more information on the API,  please see the relevant [Node documentation](https://nodejs.org/api/crypto.html#crypto_crypto_pbkdf2_password_salt_iterations_keylen_digest_callback).


## Credits

This module is a derivative of [cryptocoinjs/pbkdf2-sha256](https://github.com/cryptocoinjs/pbkdf2-sha256/), so thanks to [JP Richardson](https://github.com/jprichardson/) for laying the ground work.

Thank you to [FangDun Cai](https://github.com/fundon) for donating the package name on npm, if you're looking for his previous module it is located at [fundon/pbkdf2](https://github.com/fundon/pbkdf2).
";
        
        $__internal_321d2829e2446985abe576203b1d9979d88a2f7d2715811a63739faaaf5669ef->leave($__internal_321d2829e2446985abe576203b1d9979d88a2f7d2715811a63739faaaf5669ef_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/pbkdf2/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# pbkdf2

[![NPM Package](https://img.shields.io/npm/v/pbkdf2.svg?style=flat-square)](https://www.npmjs.org/package/pbkdf2)
[![Build Status](https://img.shields.io/travis/crypto-browserify/pbkdf2.svg?branch=master&style=flat-square)](https://travis-ci.org/crypto-browserify/pbkdf2)
[![Dependency status](https://img.shields.io/david/crypto-browserify/pbkdf2.svg?style=flat-square)](https://david-dm.org/crypto-browserify/pbkdf2#info=dependencies)

[![js-standard-style](https://cdn.rawgit.com/feross/standard/master/badge.svg)](https://github.com/feross/standard)

This library provides the functionality of PBKDF2 with the ability to use any supported hashing algorithm returned from `crypto.getHashes()`


## Usage

```js
var pbkdf2 = require('pbkdf2')
var derivedKey = pbkdf2.pbkdf2Sync('password', 'salt', 1, 32, 'sha512')

...
```

For more information on the API,  please see the relevant [Node documentation](https://nodejs.org/api/crypto.html#crypto_crypto_pbkdf2_password_salt_iterations_keylen_digest_callback).


## Credits

This module is a derivative of [cryptocoinjs/pbkdf2-sha256](https://github.com/cryptocoinjs/pbkdf2-sha256/), so thanks to [JP Richardson](https://github.com/jprichardson/) for laying the ground work.

Thank you to [FangDun Cai](https://github.com/fundon) for donating the package name on npm, if you're looking for his previous module it is located at [fundon/pbkdf2](https://github.com/fundon/pbkdf2).
", "node_modules/pbkdf2/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/pbkdf2/README.md");
    }
}
