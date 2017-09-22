<?php

/* node_modules/string-width/readme.md */
class __TwigTemplate_2ae238f6c956592df605376295ece879afd58404927db028d0a246e901936b5a extends Twig_Template
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
        $__internal_39bd1a5e043929959c4bed28dacd273a69c466874ea83a34e86d52e52bcfd5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39bd1a5e043929959c4bed28dacd273a69c466874ea83a34e86d52e52bcfd5e5->enter($__internal_39bd1a5e043929959c4bed28dacd273a69c466874ea83a34e86d52e52bcfd5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/string-width/readme.md"));

        // line 1
        echo "# string-width [![Build Status](https://travis-ci.org/sindresorhus/string-width.svg?branch=master)](https://travis-ci.org/sindresorhus/string-width)

> Get the visual width of a string - the number of columns required to display it

Some Unicode characters are [fullwidth](https://en.wikipedia.org/wiki/Halfwidth_and_fullwidth_forms) and use double the normal width. [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code) are stripped and doesn't affect the width.

Useful to be able to measure the actual width of command-line output.


## Install

```
\$ npm install --save string-width
```


## Usage

```js
const stringWidth = require('string-width');

stringWidth('古');
//=> 2

stringWidth('\\u001b[1m古\\u001b[22m');
//=> 2

stringWidth('a');
//=> 1
```


## Related

- [string-width-cli](https://github.com/sindresorhus/string-width-cli) - CLI for this module
- [string-length](https://github.com/sindresorhus/string-length) - Get the real length of a string
- [widest-line](https://github.com/sindresorhus/widest-line) - Get the visual width of the widest line in a string


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
";
        
        $__internal_39bd1a5e043929959c4bed28dacd273a69c466874ea83a34e86d52e52bcfd5e5->leave($__internal_39bd1a5e043929959c4bed28dacd273a69c466874ea83a34e86d52e52bcfd5e5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/string-width/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# string-width [![Build Status](https://travis-ci.org/sindresorhus/string-width.svg?branch=master)](https://travis-ci.org/sindresorhus/string-width)

> Get the visual width of a string - the number of columns required to display it

Some Unicode characters are [fullwidth](https://en.wikipedia.org/wiki/Halfwidth_and_fullwidth_forms) and use double the normal width. [ANSI escape codes](http://en.wikipedia.org/wiki/ANSI_escape_code) are stripped and doesn't affect the width.

Useful to be able to measure the actual width of command-line output.


## Install

```
\$ npm install --save string-width
```


## Usage

```js
const stringWidth = require('string-width');

stringWidth('古');
//=> 2

stringWidth('\\u001b[1m古\\u001b[22m');
//=> 2

stringWidth('a');
//=> 1
```


## Related

- [string-width-cli](https://github.com/sindresorhus/string-width-cli) - CLI for this module
- [string-length](https://github.com/sindresorhus/string-length) - Get the real length of a string
- [widest-line](https://github.com/sindresorhus/widest-line) - Get the visual width of the widest line in a string


## License

MIT © [Sindre Sorhus](https://sindresorhus.com)
", "node_modules/string-width/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/string-width/readme.md");
    }
}
