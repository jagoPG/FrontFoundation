<?php

/* node_modules/fsevents/node_modules/fs.realpath/README.md */
class __TwigTemplate_a5c67b57c6baaa9b643e07e1c67f8d0db585e4064a5c3082aaa6ea21d207f0fe extends Twig_Template
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
        $__internal_f296f94d3f84446ce52e5363bb4ce10a5cdaebe5e0c582e2540e71747e6f3b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f296f94d3f84446ce52e5363bb4ce10a5cdaebe5e0c582e2540e71747e6f3b81->enter($__internal_f296f94d3f84446ce52e5363bb4ce10a5cdaebe5e0c582e2540e71747e6f3b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/fs.realpath/README.md"));

        // line 1
        echo "# fs.realpath

A backwards-compatible fs.realpath for Node v6 and above

In Node v6, the JavaScript implementation of fs.realpath was replaced
with a faster (but less resilient) native implementation.  That raises
new and platform-specific errors and cannot handle long or excessively
symlink-looping paths.

This module handles those cases by detecting the new errors and
falling back to the JavaScript implementation.  On versions of Node
prior to v6, it has no effect.

## USAGE

```js
var rp = require('fs.realpath')

// async version
rp.realpath(someLongAndLoopingPath, function (er, real) {
  // the ELOOP was handled, but it was a bit slower
})

// sync version
var real = rp.realpathSync(someLongAndLoopingPath)

// monkeypatch at your own risk!
// This replaces the fs.realpath/fs.realpathSync builtins
rp.monkeypatch()

// un-do the monkeypatching
rp.unmonkeypatch()
```
";
        
        $__internal_f296f94d3f84446ce52e5363bb4ce10a5cdaebe5e0c582e2540e71747e6f3b81->leave($__internal_f296f94d3f84446ce52e5363bb4ce10a5cdaebe5e0c582e2540e71747e6f3b81_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/fs.realpath/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("# fs.realpath

A backwards-compatible fs.realpath for Node v6 and above

In Node v6, the JavaScript implementation of fs.realpath was replaced
with a faster (but less resilient) native implementation.  That raises
new and platform-specific errors and cannot handle long or excessively
symlink-looping paths.

This module handles those cases by detecting the new errors and
falling back to the JavaScript implementation.  On versions of Node
prior to v6, it has no effect.

## USAGE

```js
var rp = require('fs.realpath')

// async version
rp.realpath(someLongAndLoopingPath, function (er, real) {
  // the ELOOP was handled, but it was a bit slower
})

// sync version
var real = rp.realpathSync(someLongAndLoopingPath)

// monkeypatch at your own risk!
// This replaces the fs.realpath/fs.realpathSync builtins
rp.monkeypatch()

// un-do the monkeypatching
rp.unmonkeypatch()
```
", "node_modules/fsevents/node_modules/fs.realpath/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/fs.realpath/README.md");
    }
}
