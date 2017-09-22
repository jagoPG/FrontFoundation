<?php

/* node_modules/babel-messages/README.md */
class __TwigTemplate_263f4472524398fbf83bad3c2ee33f27e79511a39ade5338249e27383c8c2bb6 extends Twig_Template
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
        $__internal_4d20d5172ed0144738cc0826d87f66ea4d7ddc9673b0ba2ef8b2cfd406b01380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d20d5172ed0144738cc0826d87f66ea4d7ddc9673b0ba2ef8b2cfd406b01380->enter($__internal_4d20d5172ed0144738cc0826d87f66ea4d7ddc9673b0ba2ef8b2cfd406b01380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/babel-messages/README.md"));

        // line 1
        echo "# babel-messages

> Collection of debug messages used by Babel.

## Install

```sh
npm install --save-dev babel-messages
```

## Usage

```js
import * as messages from 'babel-messages';

messages.get('tailCallReassignmentDeopt');
// > \"Function reference has been...\"
```
";
        
        $__internal_4d20d5172ed0144738cc0826d87f66ea4d7ddc9673b0ba2ef8b2cfd406b01380->leave($__internal_4d20d5172ed0144738cc0826d87f66ea4d7ddc9673b0ba2ef8b2cfd406b01380_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/babel-messages/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# babel-messages

> Collection of debug messages used by Babel.

## Install

```sh
npm install --save-dev babel-messages
```

## Usage

```js
import * as messages from 'babel-messages';

messages.get('tailCallReassignmentDeopt');
// > \"Function reference has been...\"
```
", "node_modules/babel-messages/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/babel-messages/README.md");
    }
}
