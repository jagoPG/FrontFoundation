<?php

/* node_modules/spdx-expression-parse/README.md */
class __TwigTemplate_8d50bfef97d87399a5868079a65bdb1b558b6820e57957477c33acab18e1db17 extends Twig_Template
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
        $__internal_cd20c50566152a91b55faebf3c5e55bed8a60029cb1b4ba64a5c3df77774577d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd20c50566152a91b55faebf3c5e55bed8a60029cb1b4ba64a5c3df77774577d->enter($__internal_cd20c50566152a91b55faebf3c5e55bed8a60029cb1b4ba64a5c3df77774577d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/spdx-expression-parse/README.md"));

        // line 1
        echo "This package parses SPDX license expression strings describing license terms, like [package.json license strings](https://docs.npmjs.com/files/package.json#license), into consistently structured ECMAScript objects.  The npm command-line interface depends on this package, as do many automatic license-audit tools.

In a nutshell:

```javascript
var parse = require('spdx-expression-parse')
var assert = require('assert')

assert.deepEqual(
  // Licensed under the terms of the Two-Clause BSD License.
  parse('BSD-2-Clause'),
  {license: 'BSD-2-Clause'}
)

assert.throws(function () {
  // An invalid SPDX license expression.
  // Should be `Apache-2.0`.
  parse('Apache 2')
})

assert.deepEqual(
  // Dual licensed under LGPL 2.1 or a combination of the Three-Clause
  // BSD License and the MIT License.
  parse('(LGPL-2.1 OR BSD-3-Clause AND MIT)'),
  {
    left: {license: 'LGPL-2.1'},
    conjunction: 'or',
    right: {
      left: {license: 'BSD-3-Clause'},
      conjunction: 'and',
      right: {license: 'MIT'}
    }
  }
)
```

The syntax comes from the [Software Package Data eXchange (SPDX)](https://spdx.org/), a standard from the [Linux Foundation](https://www.linuxfoundation.org) for shareable data about software package license terms.  SPDX aims to make sharing and auditing license data easy, especially for users of open-source software.

The bulk of the SPDX standard describes syntax and semantics of XML metadata files.  This package implements two lightweight, plain-text components of that larger standard:

1.  The [license list](https://spdx.org/licenses), a mapping from specific string identifiers, like `Apache-2.0`, to standard form license texts and bolt-on license exceptions.  The [spdx-license-ids](https://www.npmjs.com/package/spdx-exceptions) and [spdx-exceptions](https://www.npmjs.com/package/spdx-license-ids) packages implement the license list.  They are development dependencies of this package.

    Any license identifier from the license list is a valid license expression:

    ```javascript
    require('spdx-license-ids').forEach(function (id) {
      assert.deepEqual(parse(id), {license: id})
    })
    ```

    So is any license identifier `WITH` a standardized license exception:

    ```javascript
    require('spdx-license-ids').forEach(function (id) {
      require('spdx-exceptions').forEach(function (e) {
        assert.deepEqual(
          parse(id + ' WITH ' + e),
          {license: id, exception: e}
        )
      })
    })
    ```

2.  The license expression language, for describing simple and complex license terms, like `MIT` for MIT-licensed and `(GPL-2.0 OR Apache-2.0)` for dual-licensing under GPL 2.0 and Apache 2.0.  This package implements the license expression language.

    ```javascript
    assert.deepEqual(
      // Licensed under a combination of the MIT License and a combination
      // of LGPL 2.1 (or a later version) and the Three-Clause BSD License.
      parse('(MIT AND (LGPL-2.1+ AND BSD-3-Clause))'),
      {
        left: {license: 'MIT'},
        conjunction: 'and',
        right: {
          left: {license: 'LGPL-2.1', plus: true},
          conjunction: 'and',
          right: {license: 'BSD-3-Clause'}
        }
      }
    )
    ```

The Linux Foundation and its contributors license the SPDX standard under the terms of [the Creative Commons Attribution License 3.0 Unported (SPDX: \"CC-BY-3.0\")](http://spdx.org/licenses/CC-BY-3.0).  \"SPDX\" is a United States federally registered trademark of the Linux Foundation.  The authors of this package license their work under the terms of the MIT License.
";
        
        $__internal_cd20c50566152a91b55faebf3c5e55bed8a60029cb1b4ba64a5c3df77774577d->leave($__internal_cd20c50566152a91b55faebf3c5e55bed8a60029cb1b4ba64a5c3df77774577d_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/spdx-expression-parse/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("This package parses SPDX license expression strings describing license terms, like [package.json license strings](https://docs.npmjs.com/files/package.json#license), into consistently structured ECMAScript objects.  The npm command-line interface depends on this package, as do many automatic license-audit tools.

In a nutshell:

```javascript
var parse = require('spdx-expression-parse')
var assert = require('assert')

assert.deepEqual(
  // Licensed under the terms of the Two-Clause BSD License.
  parse('BSD-2-Clause'),
  {license: 'BSD-2-Clause'}
)

assert.throws(function () {
  // An invalid SPDX license expression.
  // Should be `Apache-2.0`.
  parse('Apache 2')
})

assert.deepEqual(
  // Dual licensed under LGPL 2.1 or a combination of the Three-Clause
  // BSD License and the MIT License.
  parse('(LGPL-2.1 OR BSD-3-Clause AND MIT)'),
  {
    left: {license: 'LGPL-2.1'},
    conjunction: 'or',
    right: {
      left: {license: 'BSD-3-Clause'},
      conjunction: 'and',
      right: {license: 'MIT'}
    }
  }
)
```

The syntax comes from the [Software Package Data eXchange (SPDX)](https://spdx.org/), a standard from the [Linux Foundation](https://www.linuxfoundation.org) for shareable data about software package license terms.  SPDX aims to make sharing and auditing license data easy, especially for users of open-source software.

The bulk of the SPDX standard describes syntax and semantics of XML metadata files.  This package implements two lightweight, plain-text components of that larger standard:

1.  The [license list](https://spdx.org/licenses), a mapping from specific string identifiers, like `Apache-2.0`, to standard form license texts and bolt-on license exceptions.  The [spdx-license-ids](https://www.npmjs.com/package/spdx-exceptions) and [spdx-exceptions](https://www.npmjs.com/package/spdx-license-ids) packages implement the license list.  They are development dependencies of this package.

    Any license identifier from the license list is a valid license expression:

    ```javascript
    require('spdx-license-ids').forEach(function (id) {
      assert.deepEqual(parse(id), {license: id})
    })
    ```

    So is any license identifier `WITH` a standardized license exception:

    ```javascript
    require('spdx-license-ids').forEach(function (id) {
      require('spdx-exceptions').forEach(function (e) {
        assert.deepEqual(
          parse(id + ' WITH ' + e),
          {license: id, exception: e}
        )
      })
    })
    ```

2.  The license expression language, for describing simple and complex license terms, like `MIT` for MIT-licensed and `(GPL-2.0 OR Apache-2.0)` for dual-licensing under GPL 2.0 and Apache 2.0.  This package implements the license expression language.

    ```javascript
    assert.deepEqual(
      // Licensed under a combination of the MIT License and a combination
      // of LGPL 2.1 (or a later version) and the Three-Clause BSD License.
      parse('(MIT AND (LGPL-2.1+ AND BSD-3-Clause))'),
      {
        left: {license: 'MIT'},
        conjunction: 'and',
        right: {
          left: {license: 'LGPL-2.1', plus: true},
          conjunction: 'and',
          right: {license: 'BSD-3-Clause'}
        }
      }
    )
    ```

The Linux Foundation and its contributors license the SPDX standard under the terms of [the Creative Commons Attribution License 3.0 Unported (SPDX: \"CC-BY-3.0\")](http://spdx.org/licenses/CC-BY-3.0).  \"SPDX\" is a United States federally registered trademark of the Linux Foundation.  The authors of this package license their work under the terms of the MIT License.
", "node_modules/spdx-expression-parse/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/spdx-expression-parse/README.md");
    }
}
