<?php

/* node_modules/setprototypeof/README.md */
class __TwigTemplate_d79d3c06cf50a5ef54d32011907fe50a1599e2af393913bad4b4a5156265af10 extends Twig_Template
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
        $__internal_c1b20cfb05ecacbed4da4d97a93ac3dd7981c909fc1da567297a4fc4a79efca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1b20cfb05ecacbed4da4d97a93ac3dd7981c909fc1da567297a4fc4a79efca5->enter($__internal_c1b20cfb05ecacbed4da4d97a93ac3dd7981c909fc1da567297a4fc4a79efca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/setprototypeof/README.md"));

        // line 1
        echo "# Polyfill for `Object.setPrototypeOf`

A simple cross platform implementation to set the prototype of an instianted object.  Supports all modern browsers and at least back to IE8.

## Usage:

```
\$ npm install --save setprototypeof
```

```javascript
var setPrototypeOf = require('setprototypeof');

var obj = {};
setPrototypeOf(obj, {
\tfoo: function() {
\t\treturn 'bar';
\t}
});
obj.foo(); // bar
```
";
        
        $__internal_c1b20cfb05ecacbed4da4d97a93ac3dd7981c909fc1da567297a4fc4a79efca5->leave($__internal_c1b20cfb05ecacbed4da4d97a93ac3dd7981c909fc1da567297a4fc4a79efca5_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/setprototypeof/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# Polyfill for `Object.setPrototypeOf`

A simple cross platform implementation to set the prototype of an instianted object.  Supports all modern browsers and at least back to IE8.

## Usage:

```
\$ npm install --save setprototypeof
```

```javascript
var setPrototypeOf = require('setprototypeof');

var obj = {};
setPrototypeOf(obj, {
\tfoo: function() {
\t\treturn 'bar';
\t}
});
obj.foo(); // bar
```
", "node_modules/setprototypeof/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/setprototypeof/README.md");
    }
}
