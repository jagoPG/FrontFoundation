<?php

/* node_modules/fsevents/node_modules/ansi-regex/readme.md */
class __TwigTemplate_bcb35721c3e3a60ce5cee18ea98cf7cd60501503b3f02cc1b6ae0b7d07b565ac extends Twig_Template
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
        $__internal_5004c4dd6c057cdb72c9fbb90284e051a4e0b017ebe49f1e81fcc6ad09bec209 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5004c4dd6c057cdb72c9fbb90284e051a4e0b017ebe49f1e81fcc6ad09bec209->enter($__internal_5004c4dd6c057cdb72c9fbb90284e051a4e0b017ebe49f1e81fcc6ad09bec209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/ansi-regex/readme.md"));

        // line 1
        echo "# ansi-regex [![Build Status](https://travis-ci.org/chalk/ansi-regex.svg?branch=master)](https://travis-ci.org/chalk/ansi-regex)

> Regular expression for matching [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code)


## Install

```
\$ npm install --save ansi-regex
```


## Usage

```js
const ansiRegex = require('ansi-regex');

ansiRegex().test('\\u001b[4mcake\\u001b[0m');
//=> true

ansiRegex().test('cake');
//=> false

'\\u001b[4mcake\\u001b[0m'.match(ansiRegex());
//=> ['\\u001b[4m', '\\u001b[0m']
```

## FAQ

### Why do you test for codes not in the ECMA 48 standard?

Some of the codes we run as a test are codes that we acquired finding various lists of non-standard or manufacturer specific codes. If I recall correctly, we test for both standard and non-standard codes, as most of them follow the same or similar format and can be safely matched in strings without the risk of removing actual string content. There are a few non-standard control codes that do not follow the traditional format (i.e. they end in numbers) thus forcing us to exclude them from the test because we cannot reliably match them.

On the historical side, those ECMA standards were established in the early 90's whereas the VT100, for example, was designed in the mid/late 70's. At that point in time, control codes were still pretty ungoverned and engineers used them for a multitude of things, namely to activate hardware ports that may have been proprietary. Somewhere else you see a similar 'anarchy' of codes is in the x86 architecture for processors; there are a ton of \"interrupts\" that can mean different things on certain brands of processors, most of which have been phased out.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
";
        
        $__internal_5004c4dd6c057cdb72c9fbb90284e051a4e0b017ebe49f1e81fcc6ad09bec209->leave($__internal_5004c4dd6c057cdb72c9fbb90284e051a4e0b017ebe49f1e81fcc6ad09bec209_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/ansi-regex/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# ansi-regex [![Build Status](https://travis-ci.org/chalk/ansi-regex.svg?branch=master)](https://travis-ci.org/chalk/ansi-regex)

> Regular expression for matching [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code)


## Install

```
\$ npm install --save ansi-regex
```


## Usage

```js
const ansiRegex = require('ansi-regex');

ansiRegex().test('\\u001b[4mcake\\u001b[0m');
//=> true

ansiRegex().test('cake');
//=> false

'\\u001b[4mcake\\u001b[0m'.match(ansiRegex());
//=> ['\\u001b[4m', '\\u001b[0m']
```

## FAQ

### Why do you test for codes not in the ECMA 48 standard?

Some of the codes we run as a test are codes that we acquired finding various lists of non-standard or manufacturer specific codes. If I recall correctly, we test for both standard and non-standard codes, as most of them follow the same or similar format and can be safely matched in strings without the risk of removing actual string content. There are a few non-standard control codes that do not follow the traditional format (i.e. they end in numbers) thus forcing us to exclude them from the test because we cannot reliably match them.

On the historical side, those ECMA standards were established in the early 90's whereas the VT100, for example, was designed in the mid/late 70's. At that point in time, control codes were still pretty ungoverned and engineers used them for a multitude of things, namely to activate hardware ports that may have been proprietary. Somewhere else you see a similar 'anarchy' of codes is in the x86 architecture for processors; there are a ton of \"interrupts\" that can mean different things on certain brands of processors, most of which have been phased out.


## License

MIT © [Sindre Sorhus](http://sindresorhus.com)
", "node_modules/fsevents/node_modules/ansi-regex/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/ansi-regex/readme.md");
    }
}
