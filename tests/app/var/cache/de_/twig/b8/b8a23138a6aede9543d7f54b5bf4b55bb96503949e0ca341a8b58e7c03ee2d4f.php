<?php

/* node_modules/fsevents/node_modules/uid-number/README.md */
class __TwigTemplate_f151ea24b05070b283bebacafe95034a332007d6c9292e9cbcc4bc1a4502ffa2 extends Twig_Template
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
        $__internal_404f795e5bde6a416162f561bfdef7c175994036595117c5090dd566fe344351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404f795e5bde6a416162f561bfdef7c175994036595117c5090dd566fe344351->enter($__internal_404f795e5bde6a416162f561bfdef7c175994036595117c5090dd566fe344351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uid-number/README.md"));

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
        
        $__internal_404f795e5bde6a416162f561bfdef7c175994036595117c5090dd566fe344351->leave($__internal_404f795e5bde6a416162f561bfdef7c175994036595117c5090dd566fe344351_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uid-number/README.md";
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
", "node_modules/fsevents/node_modules/uid-number/README.md", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uid-number/README.md");
    }
}
