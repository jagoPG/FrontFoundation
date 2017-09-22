<?php

/* node_modules/filesize/README.md */
class __TwigTemplate_326bcc97c5c34432a5a27aed37e78e5a301763a3f9cf16422fabc2a5c9337bbe extends Twig_Template
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
        $__internal_ddfdb0fcc4a3bcf2e6a78883ad1d1fc4998d0ff65ae06f8b064eba414b8da7d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddfdb0fcc4a3bcf2e6a78883ad1d1fc4998d0ff65ae06f8b064eba414b8da7d1->enter($__internal_ddfdb0fcc4a3bcf2e6a78883ad1d1fc4998d0ff65ae06f8b064eba414b8da7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/filesize/README.md"));

        // line 1
        echo "# filesize.js

[![build status](https://secure.travis-ci.org/avoidwork/filesize.js.svg)](http://travis-ci.org/avoidwork/filesize.js)  [![downloads](https://img.shields.io/npm/dt/filesize.svg)](https://www.npmjs.com/package/filesize)

filesize.js provides a simple way to get a human readable file size string from a number (float or integer) or string.

## Optional settings

`filesize()` accepts an optional descriptor Object as a second argument, so you can customize the output.

### base
_*(number)*_ Number base, default is `2`

### bits
_*(boolean)*_ Enables `bit` sizes, default is `false`

### exponent
_*(number)*_ Specifies the symbol via exponent, e.g. `2` is `MB` for base 2, default is `-1`

### fullform
_*(boolean)*_ Enables full form of unit of measure, default is `false`

### fullforms
_*(array)*_ Array of full form overrides, default is `[]`

### output
_*(string)*_ Output of function (`array`, `exponent`, `object`, or `string`), default is `string`

### round
_*(number)*_ Decimal place, default is `2`

### spacer
_*(string)*_ Character between the `result` and `suffix`, default is `\" \"`

### standard
_*(string)*_ Standard unit of measure, can be `iec` or `jedec`, default is `jedec`; can be overruled by `base`

### symbols
_*(object)*_ Dictionary of SI/JEDEC symbols to replace for localization, defaults to english if no match is found

### suffixes (deprecated: use 'symbols')
_*(object)*_ Dictionary of SI/JEDEC symbols to replace for localization, defaults to english if no match is found

### unix
_*(boolean)*_ Enables unix style human readable output, e.g `ls -lh`, default is `false`

## Examples

```javascript
filesize(500);                        // \"500 B\"
filesize(500, {bits: true});          // \"4 Kb\"
filesize(265318, {base: 10});         // \"265.32 kB\"
filesize(265318);                     // \"259.1 KB\"
filesize(265318, {round: 0});         // \"259 KB\"
filesize(265318, {output: \"array\"});  // [259.1, \"KB\"]
filesize(265318, {output: \"object\"}); // {value: 259.1, suffix: \"KB\", symbol: \"KB\"}
filesize(1, {symbols: {B: \"Б\"}});     // \"1 Б\"
filesize(1024);                       // \"1 KB\"
filesize(1024, {exponent: 0});        // \"1024 B\"
filesize(1024, {output: \"exponent\"}); // 1
filesize(265318, {standard: \"iec\"});  // \"259.1 KiB\"
filesize(265318, {standard: \"iec\", fullform: true}); // \"259.1 kibibytes\"
filesize(12, {fullform: true, fullforms: [\"байтов\"]});  // \"12 байтов\"
```

## Partial Application
`filesize.partial()` takes the second parameter of `filesize()` and returns a new function with the configuration applied 
upon execution. This can be used to reduce `Object` creation if you call `filesize()` without caching the `descriptor` 
in lexical scope.

```javascript
const size = filesize.partial({standard: \"iec\"});

size(265318); // \"259.1 KiB\"
```

## How can I load filesize.js?
filesize.js supports AMD loaders (require.js, curl.js, etc.), node.js & npm (```npm install filesize```), or using a script tag.

## License
Copyright (c) 2017 Jason Mulligan
Licensed under the BSD-3 license.
";
        
        $__internal_ddfdb0fcc4a3bcf2e6a78883ad1d1fc4998d0ff65ae06f8b064eba414b8da7d1->leave($__internal_ddfdb0fcc4a3bcf2e6a78883ad1d1fc4998d0ff65ae06f8b064eba414b8da7d1_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/filesize/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# filesize.js

[![build status](https://secure.travis-ci.org/avoidwork/filesize.js.svg)](http://travis-ci.org/avoidwork/filesize.js)  [![downloads](https://img.shields.io/npm/dt/filesize.svg)](https://www.npmjs.com/package/filesize)

filesize.js provides a simple way to get a human readable file size string from a number (float or integer) or string.

## Optional settings

`filesize()` accepts an optional descriptor Object as a second argument, so you can customize the output.

### base
_*(number)*_ Number base, default is `2`

### bits
_*(boolean)*_ Enables `bit` sizes, default is `false`

### exponent
_*(number)*_ Specifies the symbol via exponent, e.g. `2` is `MB` for base 2, default is `-1`

### fullform
_*(boolean)*_ Enables full form of unit of measure, default is `false`

### fullforms
_*(array)*_ Array of full form overrides, default is `[]`

### output
_*(string)*_ Output of function (`array`, `exponent`, `object`, or `string`), default is `string`

### round
_*(number)*_ Decimal place, default is `2`

### spacer
_*(string)*_ Character between the `result` and `suffix`, default is `\" \"`

### standard
_*(string)*_ Standard unit of measure, can be `iec` or `jedec`, default is `jedec`; can be overruled by `base`

### symbols
_*(object)*_ Dictionary of SI/JEDEC symbols to replace for localization, defaults to english if no match is found

### suffixes (deprecated: use 'symbols')
_*(object)*_ Dictionary of SI/JEDEC symbols to replace for localization, defaults to english if no match is found

### unix
_*(boolean)*_ Enables unix style human readable output, e.g `ls -lh`, default is `false`

## Examples

```javascript
filesize(500);                        // \"500 B\"
filesize(500, {bits: true});          // \"4 Kb\"
filesize(265318, {base: 10});         // \"265.32 kB\"
filesize(265318);                     // \"259.1 KB\"
filesize(265318, {round: 0});         // \"259 KB\"
filesize(265318, {output: \"array\"});  // [259.1, \"KB\"]
filesize(265318, {output: \"object\"}); // {value: 259.1, suffix: \"KB\", symbol: \"KB\"}
filesize(1, {symbols: {B: \"Б\"}});     // \"1 Б\"
filesize(1024);                       // \"1 KB\"
filesize(1024, {exponent: 0});        // \"1024 B\"
filesize(1024, {output: \"exponent\"}); // 1
filesize(265318, {standard: \"iec\"});  // \"259.1 KiB\"
filesize(265318, {standard: \"iec\", fullform: true}); // \"259.1 kibibytes\"
filesize(12, {fullform: true, fullforms: [\"байтов\"]});  // \"12 байтов\"
```

## Partial Application
`filesize.partial()` takes the second parameter of `filesize()` and returns a new function with the configuration applied 
upon execution. This can be used to reduce `Object` creation if you call `filesize()` without caching the `descriptor` 
in lexical scope.

```javascript
const size = filesize.partial({standard: \"iec\"});

size(265318); // \"259.1 KiB\"
```

## How can I load filesize.js?
filesize.js supports AMD loaders (require.js, curl.js, etc.), node.js & npm (```npm install filesize```), or using a script tag.

## License
Copyright (c) 2017 Jason Mulligan
Licensed under the BSD-3 license.
", "node_modules/filesize/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/filesize/README.md");
    }
}
