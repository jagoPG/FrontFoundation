<?php

/* node_modules/fs.realpath/README.md */
class __TwigTemplate_209dd37b4d958639b46b3b24f36d604d7166ea272e8a42d9882d763e325e7cd1 extends Twig_Template
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
        $__internal_3a1e6f98f2127deabb2e7da12d72613ca33d4d5757e3f726d96eef0a18d372c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1e6f98f2127deabb2e7da12d72613ca33d4d5757e3f726d96eef0a18d372c0->enter($__internal_3a1e6f98f2127deabb2e7da12d72613ca33d4d5757e3f726d96eef0a18d372c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fs.realpath/README.md"));

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
        
        $__internal_3a1e6f98f2127deabb2e7da12d72613ca33d4d5757e3f726d96eef0a18d372c0->leave($__internal_3a1e6f98f2127deabb2e7da12d72613ca33d4d5757e3f726d96eef0a18d372c0_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fs.realpath/README.md";
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
", "node_modules/fs.realpath/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fs.realpath/README.md");
    }
}
