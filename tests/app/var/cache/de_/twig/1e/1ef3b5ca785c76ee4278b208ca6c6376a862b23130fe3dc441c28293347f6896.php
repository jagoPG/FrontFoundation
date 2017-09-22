<?php

/* node_modules/cliui/README.md */
class __TwigTemplate_afba55ac8194ab223dfbf88f28d5a5db485625066d2888bcd3505c746cf5b0c6 extends Twig_Template
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
        $__internal_1f1ebfa4396e3f2130679f5d2a449825317b6e33199a6c0b8bcd5f808b11e2cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1ebfa4396e3f2130679f5d2a449825317b6e33199a6c0b8bcd5f808b11e2cb->enter($__internal_1f1ebfa4396e3f2130679f5d2a449825317b6e33199a6c0b8bcd5f808b11e2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/cliui/README.md"));

        // line 1
        echo "# cliui

[![Build Status](https://travis-ci.org/yargs/cliui.svg)](https://travis-ci.org/yargs/cliui)
[![Coverage Status](https://coveralls.io/repos/yargs/cliui/badge.svg?branch=)](https://coveralls.io/r/yargs/cliui?branch=)
[![NPM version](https://img.shields.io/npm/v/cliui.svg)](https://www.npmjs.com/package/cliui)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

easily create complex multi-column command-line-interfaces.

## Example

```js
var ui = require('cliui')({
  width: 80
})

ui.div('Usage: \$0 [command] [options]')

ui.div({
  text: 'Options:',
  padding: [2, 0, 2, 0]
})

ui.div(
  {
    text: \"-f, --file\",
    width: 20,
    padding: [0, 4, 0, 4]
  },
  {
    text: \"the file to load.\" +
      chalk.green(\"(if this description is long it wraps).\")
    ,
    width: 20
  },
  {
    text: chalk.red(\"[required]\"),
    align: 'right'
  }
)

console.log(ui.toString())
```

<img width=\"500\" src=\"screenshot.png\">

## Layout DSL

cliui exposes a simple layout DSL:

If you create a single `ui.row`, passing a string rather than an
object:

* `\\n`: characters will be interpreted as new rows.
* `\\t`: characters will be interpreted as new columns.
* `\\s`: characters will be interpreted as padding.

**as an example...**

```js
var ui = require('./')({
  width: 60
})

ui.div(
  'Usage: node ./bin/foo.js\\n' +
  '  <regex>\\t  provide a regex\\n' +
  '  <glob>\\t  provide a glob\\t [required]'
)

console.log(ui.toString())
```

**will output:**

```shell
Usage: node ./bin/foo.js
  <regex>  provide a regex
  <glob>   provide a glob          [required]
```

## Methods

```js
cliui = require('cliui')
```

### cliui({width: integer})

Specify the maximum width of the UI being generated.

### cliui({wrap: boolean})

Enable or disable the wrapping of text in a column.

### cliui.div(column, column, column)

Create a row with any number of columns, a column
can either be a string, or an object with the following
options:

* **width:** the width of a column.
* **align:** alignment, `right` or `center`.
* **padding:** `[top, right, bottom, left]`.
* **border:** should a border be placed around the div?

### cliui.span(column, column, column)

Similar to `div`, except the next row will be appended without
a new line being created.
";
        
        $__internal_1f1ebfa4396e3f2130679f5d2a449825317b6e33199a6c0b8bcd5f808b11e2cb->leave($__internal_1f1ebfa4396e3f2130679f5d2a449825317b6e33199a6c0b8bcd5f808b11e2cb_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/cliui/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# cliui

[![Build Status](https://travis-ci.org/yargs/cliui.svg)](https://travis-ci.org/yargs/cliui)
[![Coverage Status](https://coveralls.io/repos/yargs/cliui/badge.svg?branch=)](https://coveralls.io/r/yargs/cliui?branch=)
[![NPM version](https://img.shields.io/npm/v/cliui.svg)](https://www.npmjs.com/package/cliui)
[![Standard Version](https://img.shields.io/badge/release-standard%20version-brightgreen.svg)](https://github.com/conventional-changelog/standard-version)

easily create complex multi-column command-line-interfaces.

## Example

```js
var ui = require('cliui')({
  width: 80
})

ui.div('Usage: \$0 [command] [options]')

ui.div({
  text: 'Options:',
  padding: [2, 0, 2, 0]
})

ui.div(
  {
    text: \"-f, --file\",
    width: 20,
    padding: [0, 4, 0, 4]
  },
  {
    text: \"the file to load.\" +
      chalk.green(\"(if this description is long it wraps).\")
    ,
    width: 20
  },
  {
    text: chalk.red(\"[required]\"),
    align: 'right'
  }
)

console.log(ui.toString())
```

<img width=\"500\" src=\"screenshot.png\">

## Layout DSL

cliui exposes a simple layout DSL:

If you create a single `ui.row`, passing a string rather than an
object:

* `\\n`: characters will be interpreted as new rows.
* `\\t`: characters will be interpreted as new columns.
* `\\s`: characters will be interpreted as padding.

**as an example...**

```js
var ui = require('./')({
  width: 60
})

ui.div(
  'Usage: node ./bin/foo.js\\n' +
  '  <regex>\\t  provide a regex\\n' +
  '  <glob>\\t  provide a glob\\t [required]'
)

console.log(ui.toString())
```

**will output:**

```shell
Usage: node ./bin/foo.js
  <regex>  provide a regex
  <glob>   provide a glob          [required]
```

## Methods

```js
cliui = require('cliui')
```

### cliui({width: integer})

Specify the maximum width of the UI being generated.

### cliui({wrap: boolean})

Enable or disable the wrapping of text in a column.

### cliui.div(column, column, column)

Create a row with any number of columns, a column
can either be a string, or an object with the following
options:

* **width:** the width of a column.
* **align:** alignment, `right` or `center`.
* **padding:** `[top, right, bottom, left]`.
* **border:** should a border be placed around the div?

### cliui.span(column, column, column)

Similar to `div`, except the next row will be appended without
a new line being created.
", "node_modules/cliui/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/cliui/README.md");
    }
}
