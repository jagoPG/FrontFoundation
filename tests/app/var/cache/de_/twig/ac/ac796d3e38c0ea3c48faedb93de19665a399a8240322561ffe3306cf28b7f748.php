<?php

/* node_modules/regjsgen/README.md */
class __TwigTemplate_596ea42daf54ab259a02e6268a44936218ef06fe7cc332006f1bdaf5f644f716 extends Twig_Template
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
        $__internal_31af6046eb2381183147734b578ca4d4ec4aa17be27aec12c570a978f755a120 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31af6046eb2381183147734b578ca4d4ec4aa17be27aec12c570a978f755a120->enter($__internal_31af6046eb2381183147734b578ca4d4ec4aa17be27aec12c570a978f755a120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/regjsgen/README.md"));

        // line 1
        echo "# RegJSGen

Generate `RegExp`s from [RegJSParser](https://github.com/jviereck/regjsparser)’s AST.

## Installation

```bash
npm install --save regjsgen
```

## Usage

```js
var regjsgen = require('regjsgen');
// With `regjsparser`
var regjsparser = require('regjsparser');
var regex = '^a\$';
var ast = regjsparser.parse(regex);
// Modify AST
// ...
// Regenerate `RegExp`
regex = regjsgen.generate(ast);
```

## See Also

 * [RegJSParser](https://github.com/jviereck/regjsparser)
 * [RegExp.js](https://github.com/jviereck/regexp.js)

## Testing

Run the command

```bash
npm test
```

To create a new reference file, execute

```bash
node test/update-fixture.js
```

from the repo top directory.

## Support

Tested in Node.js 0.8.26~0.10.30.

## Author

| [![twitter/demoneaux](http://gravatar.com/avatar/029b19dba521584d83398ada3ecf6131?s=70)](https://twitter.com/demoneaux \"Follow @demoneaux on Twitter\") |
|---|
| [Benjamin Tan](http://d10.github.io/) |

## Contributors

| [![twitter/mathias](http://gravatar.com/avatar/24e08a9ea84deb17ae121074d0f17125?s=70)](https://twitter.com/mathias \"Follow @mathias on Twitter\") |
|---|
| [Mathias Bynens](http://mathiasbynens.be/) |
";
        
        $__internal_31af6046eb2381183147734b578ca4d4ec4aa17be27aec12c570a978f755a120->leave($__internal_31af6046eb2381183147734b578ca4d4ec4aa17be27aec12c570a978f755a120_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/regjsgen/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# RegJSGen

Generate `RegExp`s from [RegJSParser](https://github.com/jviereck/regjsparser)’s AST.

## Installation

```bash
npm install --save regjsgen
```

## Usage

```js
var regjsgen = require('regjsgen');
// With `regjsparser`
var regjsparser = require('regjsparser');
var regex = '^a\$';
var ast = regjsparser.parse(regex);
// Modify AST
// ...
// Regenerate `RegExp`
regex = regjsgen.generate(ast);
```

## See Also

 * [RegJSParser](https://github.com/jviereck/regjsparser)
 * [RegExp.js](https://github.com/jviereck/regexp.js)

## Testing

Run the command

```bash
npm test
```

To create a new reference file, execute

```bash
node test/update-fixture.js
```

from the repo top directory.

## Support

Tested in Node.js 0.8.26~0.10.30.

## Author

| [![twitter/demoneaux](http://gravatar.com/avatar/029b19dba521584d83398ada3ecf6131?s=70)](https://twitter.com/demoneaux \"Follow @demoneaux on Twitter\") |
|---|
| [Benjamin Tan](http://d10.github.io/) |

## Contributors

| [![twitter/mathias](http://gravatar.com/avatar/24e08a9ea84deb17ae121074d0f17125?s=70)](https://twitter.com/mathias \"Follow @mathias on Twitter\") |
|---|
| [Mathias Bynens](http://mathiasbynens.be/) |
", "node_modules/regjsgen/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/regjsgen/README.md");
    }
}
