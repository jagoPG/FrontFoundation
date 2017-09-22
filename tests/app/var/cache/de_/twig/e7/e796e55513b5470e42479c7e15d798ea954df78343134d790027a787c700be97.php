<?php

/* node_modules/uid-number/README.md */
class __TwigTemplate_9af426fc9f2b488bded86db1133a3617f72ce5ddd0755e744c6aa5d6f1fb46a1 extends Twig_Template
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
        $__internal_a256cd2d9bc73238c400840d5c324044457a9c3f3bb1ea8f5d37a4a496b9bc49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a256cd2d9bc73238c400840d5c324044457a9c3f3bb1ea8f5d37a4a496b9bc49->enter($__internal_a256cd2d9bc73238c400840d5c324044457a9c3f3bb1ea8f5d37a4a496b9bc49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uid-number/README.md"));

        // line 1
        echo "Use this module to convert a username/groupname to a uid/gid number.

Usage:

```
npm install uid-number
```

Then, in your node program:

```javascript
var uidNumber = require(\"uid-number\")
uidNumber(\"isaacs\", function (er, uid, gid) {
  // gid is null because we didn't ask for a group name
  // uid === 24561 because that's my number.
})
```
";
        
        $__internal_a256cd2d9bc73238c400840d5c324044457a9c3f3bb1ea8f5d37a4a496b9bc49->leave($__internal_a256cd2d9bc73238c400840d5c324044457a9c3f3bb1ea8f5d37a4a496b9bc49_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uid-number/README.md";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Use this module to convert a username/groupname to a uid/gid number.

Usage:

```
npm install uid-number
```

Then, in your node program:

```javascript
var uidNumber = require(\"uid-number\")
uidNumber(\"isaacs\", function (er, uid, gid) {
  // gid is null because we didn't ask for a group name
  // uid === 24561 because that's my number.
})
```
", "node_modules/uid-number/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uid-number/README.md");
    }
}
