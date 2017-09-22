<?php

/* node_modules/validate-npm-package-license/README.md */
class __TwigTemplate_745d44c69c893fc91d11d354e9620f252c0c5782f0981192e9264ba8db931c57 extends Twig_Template
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
        $__internal_008c82c1f25310ed2c3c2bc9b16c12249f3126e13022ca60c50e8e6b7215f092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008c82c1f25310ed2c3c2bc9b16c12249f3126e13022ca60c50e8e6b7215f092->enter($__internal_008c82c1f25310ed2c3c2bc9b16c12249f3126e13022ca60c50e8e6b7215f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/validate-npm-package-license/README.md"));

        // line 1
        echo "validate-npm-package-license
============================

Give me a string and I'll tell you if it's a valid npm package license string.

```javascript
var valid = require('validate-npm-package-license');
```

SPDX license identifiers are valid license strings:

```javascript

var assert = require('assert');
var validSPDXExpression = {
  validForNewPackages: true,
  validForOldPackages: true,
  spdx: true
};

assert.deepEqual(valid('MIT'), validSPDXExpression);
assert.deepEqual(valid('BSD-2-Clause'), validSPDXExpression);
assert.deepEqual(valid('Apache-2.0'), validSPDXExpression);
assert.deepEqual(valid('ISC'), validSPDXExpression);
```
The function will return a warning and suggestion for nearly-correct license identifiers:

```javascript
assert.deepEqual(
  valid('Apache 2.0'),
  {
    validForOldPackages: false,
    validForNewPackages: false,
    warnings: [
      'license should be ' +
      'a valid SPDX license expression (without \"LicenseRef\"), ' +
      '\"UNLICENSED\", or ' +
      '\"SEE LICENSE IN <filename>\"',
      'license is similar to the valid expression \"Apache-2.0\"'
    ]
  }
);
```

SPDX expressions are valid, too ...

```javascript
// Simple SPDX license expression for dual licensing
assert.deepEqual(
  valid('(GPL-3.0 OR BSD-2-Clause)'),
  validSPDXExpression
);
```

... except if they contain `LicenseRef`:

```javascript
var warningAboutLicenseRef = {
  validForOldPackages: false,
  validForNewPackages: false,
  spdx: true,
  warnings: [
    'license should be ' +
    'a valid SPDX license expression (without \"LicenseRef\"), ' +
    '\"UNLICENSED\", or ' +
    '\"SEE LICENSE IN <filename>\"',
  ]
};

assert.deepEqual(
  valid('LicenseRef-Made-Up'),
  warningAboutLicenseRef
);

assert.deepEqual(
  valid('(MIT OR LicenseRef-Made-Up)'),
  warningAboutLicenseRef
);
```

If you can't describe your licensing terms with standardized SPDX identifiers, put the terms in a file in the package and point users there:

```javascript
assert.deepEqual(
  valid('SEE LICENSE IN LICENSE.txt'),
  {
    validForNewPackages: true,
    validForOldPackages: true,
    inFile: 'LICENSE.txt'
  }
);

assert.deepEqual(
  valid('SEE LICENSE IN license.md'),
  {
    validForNewPackages: true,
    validForOldPackages: true,
    inFile: 'license.md'
  }
);
```

If there aren't any licensing terms, use `UNLICENSED`:

```javascript
var unlicensed = {
  validForNewPackages: true,
  validForOldPackages: true,
  unlicensed: true
};
assert.deepEqual(valid('UNLICENSED'), unlicensed);
assert.deepEqual(valid('UNLICENCED'), unlicensed);
```
";
        
        $__internal_008c82c1f25310ed2c3c2bc9b16c12249f3126e13022ca60c50e8e6b7215f092->leave($__internal_008c82c1f25310ed2c3c2bc9b16c12249f3126e13022ca60c50e8e6b7215f092_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/validate-npm-package-license/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("validate-npm-package-license
============================

Give me a string and I'll tell you if it's a valid npm package license string.

```javascript
var valid = require('validate-npm-package-license');
```

SPDX license identifiers are valid license strings:

```javascript

var assert = require('assert');
var validSPDXExpression = {
  validForNewPackages: true,
  validForOldPackages: true,
  spdx: true
};

assert.deepEqual(valid('MIT'), validSPDXExpression);
assert.deepEqual(valid('BSD-2-Clause'), validSPDXExpression);
assert.deepEqual(valid('Apache-2.0'), validSPDXExpression);
assert.deepEqual(valid('ISC'), validSPDXExpression);
```
The function will return a warning and suggestion for nearly-correct license identifiers:

```javascript
assert.deepEqual(
  valid('Apache 2.0'),
  {
    validForOldPackages: false,
    validForNewPackages: false,
    warnings: [
      'license should be ' +
      'a valid SPDX license expression (without \"LicenseRef\"), ' +
      '\"UNLICENSED\", or ' +
      '\"SEE LICENSE IN <filename>\"',
      'license is similar to the valid expression \"Apache-2.0\"'
    ]
  }
);
```

SPDX expressions are valid, too ...

```javascript
// Simple SPDX license expression for dual licensing
assert.deepEqual(
  valid('(GPL-3.0 OR BSD-2-Clause)'),
  validSPDXExpression
);
```

... except if they contain `LicenseRef`:

```javascript
var warningAboutLicenseRef = {
  validForOldPackages: false,
  validForNewPackages: false,
  spdx: true,
  warnings: [
    'license should be ' +
    'a valid SPDX license expression (without \"LicenseRef\"), ' +
    '\"UNLICENSED\", or ' +
    '\"SEE LICENSE IN <filename>\"',
  ]
};

assert.deepEqual(
  valid('LicenseRef-Made-Up'),
  warningAboutLicenseRef
);

assert.deepEqual(
  valid('(MIT OR LicenseRef-Made-Up)'),
  warningAboutLicenseRef
);
```

If you can't describe your licensing terms with standardized SPDX identifiers, put the terms in a file in the package and point users there:

```javascript
assert.deepEqual(
  valid('SEE LICENSE IN LICENSE.txt'),
  {
    validForNewPackages: true,
    validForOldPackages: true,
    inFile: 'LICENSE.txt'
  }
);

assert.deepEqual(
  valid('SEE LICENSE IN license.md'),
  {
    validForNewPackages: true,
    validForOldPackages: true,
    inFile: 'license.md'
  }
);
```

If there aren't any licensing terms, use `UNLICENSED`:

```javascript
var unlicensed = {
  validForNewPackages: true,
  validForOldPackages: true,
  unlicensed: true
};
assert.deepEqual(valid('UNLICENSED'), unlicensed);
assert.deepEqual(valid('UNLICENCED'), unlicensed);
```
", "node_modules/validate-npm-package-license/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/validate-npm-package-license/README.md");
    }
}
