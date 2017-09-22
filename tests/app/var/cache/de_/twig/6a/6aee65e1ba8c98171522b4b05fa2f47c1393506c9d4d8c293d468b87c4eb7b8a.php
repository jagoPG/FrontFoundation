<?php

/* node_modules/fsevents/node_modules/getpass/README.md */
class __TwigTemplate_2706915f613dd848a09c60911fe24ac926e461b1a78a5b19c6812fc30bee4042 extends Twig_Template
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
        $__internal_86db93d148ab51d85df174e7ef207365fd35c4ab61652d271a2dbbedb93b6bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86db93d148ab51d85df174e7ef207365fd35c4ab61652d271a2dbbedb93b6bcd->enter($__internal_86db93d148ab51d85df174e7ef207365fd35c4ab61652d271a2dbbedb93b6bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/getpass/README.md"));

        // line 1
        echo "## getpass

Get a password from the terminal. Sounds simple? Sounds like the `readline`
module should be able to do it? NOPE.

## Install and use it

```bash
npm install --save getpass
```

```javascript
const mod_getpass = require('getpass');
```

## API

### `mod_getpass.getPass([options, ]callback)`

Gets a password from the terminal. If available, this uses `/dev/tty` to avoid
interfering with any data being piped in or out of stdio.

This function prints a prompt (by default `Password:`) and then accepts input
without echoing.

Parameters:

 * `options`, an Object, with properties:
   * `prompt`, an optional String
 * `callback`, a `Func(error, password)`, with arguments:
   * `error`, either `null` (no error) or an `Error` instance
   * `password`, a String
";
        
        $__internal_86db93d148ab51d85df174e7ef207365fd35c4ab61652d271a2dbbedb93b6bcd->leave($__internal_86db93d148ab51d85df174e7ef207365fd35c4ab61652d271a2dbbedb93b6bcd_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/getpass/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("## getpass

Get a password from the terminal. Sounds simple? Sounds like the `readline`
module should be able to do it? NOPE.

## Install and use it

```bash
npm install --save getpass
```

```javascript
const mod_getpass = require('getpass');
```

## API

### `mod_getpass.getPass([options, ]callback)`

Gets a password from the terminal. If available, this uses `/dev/tty` to avoid
interfering with any data being piped in or out of stdio.

This function prints a prompt (by default `Password:`) and then accepts input
without echoing.

Parameters:

 * `options`, an Object, with properties:
   * `prompt`, an optional String
 * `callback`, a `Func(error, password)`, with arguments:
   * `error`, either `null` (no error) or an `Error` instance
   * `password`, a String
", "node_modules/fsevents/node_modules/getpass/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/getpass/README.md");
    }
}
