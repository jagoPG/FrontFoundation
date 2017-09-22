<?php

/* node_modules/babel-code-frame/README.md */
class __TwigTemplate_3145076ef505436e4fe6917ae127a6b4b0f608075c722a11038af4edcb764260 extends Twig_Template
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
        $__internal_939fa218a2c6d841d0cf32fa9e07e0fbbc84ab344e4914d4e4132085fb3dd620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939fa218a2c6d841d0cf32fa9e07e0fbbc84ab344e4914d4e4132085fb3dd620->enter($__internal_939fa218a2c6d841d0cf32fa9e07e0fbbc84ab344e4914d4e4132085fb3dd620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-code-frame/README.md"));

        // line 1
        echo "# babel-code-frame

> Generate errors that contain a code frame that point to source locations.

## Install

```sh
npm install --save-dev babel-code-frame
```

## Usage

```js
import codeFrame from 'babel-code-frame';

const rawLines = `class Foo {
  constructor()
}`;
const lineNumber = 2;
const colNumber = 16;

const result = codeFrame(rawLines, lineNumber, colNumber, { /* options */ });

console.log(result);
```

```sh
  1 | class Foo {
> 2 |   constructor()
    |                ^
  3 | }
```

If the column number is not known, you may pass `null` instead.

## Options

### `highlightCode`

`boolean`, defaults to `false`.

Toggles syntax highlighting the code as JavaScript for terminals.

### `linesAbove`

`number`, defaults to `2`.

Adjust the number of lines to show above the error.

### `linesBelow`

`number`, defaults to `3`.

Adjust the number of lines to show below the error.

### `forceColor`

`boolean`, defaults to `false`.

Enable this to forcibly syntax highlight the code as JavaScript (for non-terminals); overrides `highlightCode`.
";
        
        $__internal_939fa218a2c6d841d0cf32fa9e07e0fbbc84ab344e4914d4e4132085fb3dd620->leave($__internal_939fa218a2c6d841d0cf32fa9e07e0fbbc84ab344e4914d4e4132085fb3dd620_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-code-frame/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-code-frame

> Generate errors that contain a code frame that point to source locations.

## Install

```sh
npm install --save-dev babel-code-frame
```

## Usage

```js
import codeFrame from 'babel-code-frame';

const rawLines = `class Foo {
  constructor()
}`;
const lineNumber = 2;
const colNumber = 16;

const result = codeFrame(rawLines, lineNumber, colNumber, { /* options */ });

console.log(result);
```

```sh
  1 | class Foo {
> 2 |   constructor()
    |                ^
  3 | }
```

If the column number is not known, you may pass `null` instead.

## Options

### `highlightCode`

`boolean`, defaults to `false`.

Toggles syntax highlighting the code as JavaScript for terminals.

### `linesAbove`

`number`, defaults to `2`.

Adjust the number of lines to show above the error.

### `linesBelow`

`number`, defaults to `3`.

Adjust the number of lines to show below the error.

### `forceColor`

`boolean`, defaults to `false`.

Enable this to forcibly syntax highlight the code as JavaScript (for non-terminals); overrides `highlightCode`.
", "node_modules/babel-code-frame/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-code-frame/README.md");
    }
}
