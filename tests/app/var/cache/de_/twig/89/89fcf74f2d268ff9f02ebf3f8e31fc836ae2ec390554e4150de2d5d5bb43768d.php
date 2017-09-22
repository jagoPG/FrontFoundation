<?php

/* node_modules/fsevents/node_modules/buffer-shims/readme.md */
class __TwigTemplate_d362e8dcb1c6dd4362680a13eee1bea7df937c08e2019075f99932eaad854264 extends Twig_Template
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
        $__internal_0b8f76d4d662ef8813897574d141ad9262def6040e9683e5f098472654d0449f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8f76d4d662ef8813897574d141ad9262def6040e9683e5f098472654d0449f->enter($__internal_0b8f76d4d662ef8813897574d141ad9262def6040e9683e5f098472654d0449f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/buffer-shims/readme.md"));

        // line 1
        echo "buffer-shims
===

functions to make sure the new buffer methods work in older browsers.

```js
var bufferShim = require('buffer-shims');
bufferShim.from('foo');
bufferShim.alloc(9, 'cafeface', 'hex');
bufferShim.allocUnsafe(15);
bufferShim.allocUnsafeSlow(21);
```

should just use the original  in newer nodes and on older nodes uses fallbacks.

Known Issues
===
- this does not patch the buffer object, only the constructor stuff
- it's actually a polyfill

![](https://i.imgur.com/zxII3jJ.gif)
";
        
        $__internal_0b8f76d4d662ef8813897574d141ad9262def6040e9683e5f098472654d0449f->leave($__internal_0b8f76d4d662ef8813897574d141ad9262def6040e9683e5f098472654d0449f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/buffer-shims/readme.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("buffer-shims
===

functions to make sure the new buffer methods work in older browsers.

```js
var bufferShim = require('buffer-shims');
bufferShim.from('foo');
bufferShim.alloc(9, 'cafeface', 'hex');
bufferShim.allocUnsafe(15);
bufferShim.allocUnsafeSlow(21);
```

should just use the original  in newer nodes and on older nodes uses fallbacks.

Known Issues
===
- this does not patch the buffer object, only the constructor stuff
- it's actually a polyfill

![](https://i.imgur.com/zxII3jJ.gif)
", "node_modules/fsevents/node_modules/buffer-shims/readme.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/buffer-shims/readme.md");
    }
}
