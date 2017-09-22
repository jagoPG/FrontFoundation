<?php

/* node_modules/fsevents/node_modules/ms/readme.md */
class __TwigTemplate_d515c47660daa4818a77d4964b0cf73e5130ba6b504d6542796266f86d50a699 extends Twig_Template
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
        $__internal_654da4e9b897b33989ac2f0530ae56b63ceaaeecef86bef542012800b24cef49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654da4e9b897b33989ac2f0530ae56b63ceaaeecef86bef542012800b24cef49->enter($__internal_654da4e9b897b33989ac2f0530ae56b63ceaaeecef86bef542012800b24cef49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ms/readme.md"));

        // line 1
        echo "# ms

[![Build Status](https://travis-ci.org/zeit/ms.svg?branch=master)](https://travis-ci.org/zeit/ms)
[![Slack Channel](http://zeit-slackin.now.sh/badge.svg)](https://zeit.chat/)

Use this package to easily convert various time formats to milliseconds.

## Examples

```js
ms('2 days')  // 172800000
ms('1d')      // 86400000
ms('10h')     // 36000000
ms('2.5 hrs') // 9000000
ms('2h')      // 7200000
ms('1m')      // 60000
ms('5s')      // 5000
ms('1y')      // 31557600000
ms('100')     // 100
```

### Convert from milliseconds

```js
ms(60000)             // \"1m\"
ms(2 * 60000)         // \"2m\"
ms(ms('10 hours'))    // \"10h\"
```

### Time format written-out

```js
ms(60000, { long: true })             // \"1 minute\"
ms(2 * 60000, { long: true })         // \"2 minutes\"
ms(ms('10 hours'), { long: true })    // \"10 hours\"
```

## Features

- Works both in [node](https://nodejs.org) and in the browser.
- If a number is supplied to `ms`, a string with a unit is returned.
- If a string that contains the number is supplied, it returns it as a number (e.g.: it returns `100` for `'100'`).
- If you pass a string with a number and a valid unit, the number of equivalent ms is returned.

## Caught a bug?

1. [Fork](https://help.github.com/articles/fork-a-repo/) this repository to your own GitHub account and then [clone](https://help.github.com/articles/cloning-a-repository/) it to your local device
2. Link the package to the global module directory: `npm link`
3. Within the module you want to test your local development instance of ms, just link it to the dependencies: `npm link ms`. Instead of the default one from npm, node will now use your clone of ms!

As always, you can run the tests using: `npm test`
";
        
        $__internal_654da4e9b897b33989ac2f0530ae56b63ceaaeecef86bef542012800b24cef49->leave($__internal_654da4e9b897b33989ac2f0530ae56b63ceaaeecef86bef542012800b24cef49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ms/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# ms

[![Build Status](https://travis-ci.org/zeit/ms.svg?branch=master)](https://travis-ci.org/zeit/ms)
[![Slack Channel](http://zeit-slackin.now.sh/badge.svg)](https://zeit.chat/)

Use this package to easily convert various time formats to milliseconds.

## Examples

```js
ms('2 days')  // 172800000
ms('1d')      // 86400000
ms('10h')     // 36000000
ms('2.5 hrs') // 9000000
ms('2h')      // 7200000
ms('1m')      // 60000
ms('5s')      // 5000
ms('1y')      // 31557600000
ms('100')     // 100
```

### Convert from milliseconds

```js
ms(60000)             // \"1m\"
ms(2 * 60000)         // \"2m\"
ms(ms('10 hours'))    // \"10h\"
```

### Time format written-out

```js
ms(60000, { long: true })             // \"1 minute\"
ms(2 * 60000, { long: true })         // \"2 minutes\"
ms(ms('10 hours'), { long: true })    // \"10 hours\"
```

## Features

- Works both in [node](https://nodejs.org) and in the browser.
- If a number is supplied to `ms`, a string with a unit is returned.
- If a string that contains the number is supplied, it returns it as a number (e.g.: it returns `100` for `'100'`).
- If you pass a string with a number and a valid unit, the number of equivalent ms is returned.

## Caught a bug?

1. [Fork](https://help.github.com/articles/fork-a-repo/) this repository to your own GitHub account and then [clone](https://help.github.com/articles/cloning-a-repository/) it to your local device
2. Link the package to the global module directory: `npm link`
3. Within the module you want to test your local development instance of ms, just link it to the dependencies: `npm link ms`. Instead of the default one from npm, node will now use your clone of ms!

As always, you can run the tests using: `npm test`
", "node_modules/fsevents/node_modules/ms/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ms/readme.md");
    }
}
