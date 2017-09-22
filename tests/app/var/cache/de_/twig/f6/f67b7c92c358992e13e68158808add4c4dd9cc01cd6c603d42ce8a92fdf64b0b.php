<?php

/* node_modules/parsleyjs/UPGRADE-2.1.md */
class __TwigTemplate_de48185b275372ddf31ef280c1c005cf729f7ddb31df1d9810e1f1e6ab315ed9 extends Twig_Template
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
        $__internal_da02d2f86208a27956789fddafbeadae534ee9c90e1d38d2e0ac4b2d21449576 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da02d2f86208a27956789fddafbeadae534ee9c90e1d38d2e0ac4b2d21449576->enter($__internal_da02d2f86208a27956789fddafbeadae534ee9c90e1d38d2e0ac4b2d21449576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/parsleyjs/UPGRADE-2.1.md"));

        // line 1
        echo "# UPGRADE FROM 2.0.x to 2.1.0

## General

2.1.0 version introduced some minor BC Breaks. Here is the list:

### `isValid()` field methods returns boolean. If you had a test case like this:

```javascript
if ('object' === typeof \$('#field').parsley().isValid() && !\$('#field').parsley().isValid().length) {
    // field is optional and empty, nor valid, nor invalid
}
```

becomes

```javascript
if (\$('#field').parsley().isValid() && !\$('#field').parsley().needsValidation()) {
    // field is optional and empty, nor valid, nor invalid
}
```
";
        
        $__internal_da02d2f86208a27956789fddafbeadae534ee9c90e1d38d2e0ac4b2d21449576->leave($__internal_da02d2f86208a27956789fddafbeadae534ee9c90e1d38d2e0ac4b2d21449576_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/parsleyjs/UPGRADE-2.1.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# UPGRADE FROM 2.0.x to 2.1.0

## General

2.1.0 version introduced some minor BC Breaks. Here is the list:

### `isValid()` field methods returns boolean. If you had a test case like this:

```javascript
if ('object' === typeof \$('#field').parsley().isValid() && !\$('#field').parsley().isValid().length) {
    // field is optional and empty, nor valid, nor invalid
}
```

becomes

```javascript
if (\$('#field').parsley().isValid() && !\$('#field').parsley().needsValidation()) {
    // field is optional and empty, nor valid, nor invalid
}
```
", "node_modules/parsleyjs/UPGRADE-2.1.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/parsleyjs/UPGRADE-2.1.md");
    }
}
