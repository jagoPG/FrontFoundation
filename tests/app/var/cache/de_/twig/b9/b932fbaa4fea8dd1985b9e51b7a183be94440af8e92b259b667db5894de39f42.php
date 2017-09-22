<?php

/* node_modules/ansi-regex/readme.md */
class __TwigTemplate_8bc5db75347fbfbf1831e5b52473b6e6e73d4a3a91e6ead9ddbab9a9ef9b1a37 extends Twig_Template
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
        $__internal_403fc893872849b2996cb38f16a8abdbae2f4e89dbb55d830e39c2df3dfb547c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_403fc893872849b2996cb38f16a8abdbae2f4e89dbb55d830e39c2df3dfb547c->enter($__internal_403fc893872849b2996cb38f16a8abdbae2f4e89dbb55d830e39c2df3dfb547c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/ansi-regex/readme.md"));

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
        
        $__internal_403fc893872849b2996cb38f16a8abdbae2f4e89dbb55d830e39c2df3dfb547c->leave($__internal_403fc893872849b2996cb38f16a8abdbae2f4e89dbb55d830e39c2df3dfb547c_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/ansi-regex/readme.md";
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
", "node_modules/ansi-regex/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/ansi-regex/readme.md");
    }
}
