<?php

/* node_modules/regjsparser/README.md */
class __TwigTemplate_f4733642b319d2de8bfbb3132ff35d0d762b0727578384bfaddf932916e33679 extends Twig_Template
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
        $__internal_4a1a594f43c868fa083b389447dfe719aabe8d9feaff62a1cdc0cd113ec239f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a1a594f43c868fa083b389447dfe719aabe8d9feaff62a1cdc0cd113ec239f5->enter($__internal_4a1a594f43c868fa083b389447dfe719aabe8d9feaff62a1cdc0cd113ec239f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regjsparser/README.md"));

        // line 1
        echo "# RegJSParser

Parsing the JavaScript's RegExp in JavaScript.

## Installation

```bash
npm install regjsparser
```

## Usage

```js
var parse = require('regjsparser').parse;

var parseTree = parse('^a'); // /^a/
console.log(parseTree);
```

## Testing

To run the tests, run the following command:

```bash
npm test
```

To create a new reference file, execute…

```bash
node test/update-fixtures.js
```

…from the repo top directory.
";
        
        $__internal_4a1a594f43c868fa083b389447dfe719aabe8d9feaff62a1cdc0cd113ec239f5->leave($__internal_4a1a594f43c868fa083b389447dfe719aabe8d9feaff62a1cdc0cd113ec239f5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regjsparser/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# RegJSParser

Parsing the JavaScript's RegExp in JavaScript.

## Installation

```bash
npm install regjsparser
```

## Usage

```js
var parse = require('regjsparser').parse;

var parseTree = parse('^a'); // /^a/
console.log(parseTree);
```

## Testing

To run the tests, run the following command:

```bash
npm test
```

To create a new reference file, execute…

```bash
node test/update-fixtures.js
```

…from the repo top directory.
", "node_modules/regjsparser/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regjsparser/README.md");
    }
}
