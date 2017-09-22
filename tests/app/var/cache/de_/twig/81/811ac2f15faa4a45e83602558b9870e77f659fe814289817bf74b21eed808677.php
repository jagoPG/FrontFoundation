<?php

/* node_modules/fsevents/node_modules/uid-number/get-uid-gid.js */
class __TwigTemplate_2598bb1996bfbdf18c09d28f08efbdadd60851181050e9e44b4d604795acd917 extends Twig_Template
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
        $__internal_eff10a5c8de62e6a34585f1c5b6028a0bc853522234a9c06cea3fce0686b213b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eff10a5c8de62e6a34585f1c5b6028a0bc853522234a9c06cea3fce0686b213b->enter($__internal_eff10a5c8de62e6a34585f1c5b6028a0bc853522234a9c06cea3fce0686b213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/uid-number/get-uid-gid.js"));

        // line 1
        echo "if (module !== require.main) {
  throw new Error(\"This file should not be loaded with require()\")
}

if (!process.getuid || !process.getgid) {
  throw new Error(\"this file should not be called without uid/gid support\")
}

var argv = process.argv.slice(2)
  , user = argv[0] || process.getuid()
  , group = argv[1] || process.getgid()

if (!isNaN(user)) user = +user
if (!isNaN(group)) group = +group

console.error([user, group])

try {
  process.setgid(group)
  process.setuid(user)
  console.log(JSON.stringify({uid:+process.getuid(), gid:+process.getgid()}))
} catch (ex) {
  console.log(JSON.stringify({error:ex.message,errno:ex.errno}))
}
";
        
        $__internal_eff10a5c8de62e6a34585f1c5b6028a0bc853522234a9c06cea3fce0686b213b->leave($__internal_eff10a5c8de62e6a34585f1c5b6028a0bc853522234a9c06cea3fce0686b213b_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/uid-number/get-uid-gid.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("if (module !== require.main) {
  throw new Error(\"This file should not be loaded with require()\")
}

if (!process.getuid || !process.getgid) {
  throw new Error(\"this file should not be called without uid/gid support\")
}

var argv = process.argv.slice(2)
  , user = argv[0] || process.getuid()
  , group = argv[1] || process.getgid()

if (!isNaN(user)) user = +user
if (!isNaN(group)) group = +group

console.error([user, group])

try {
  process.setgid(group)
  process.setuid(user)
  console.log(JSON.stringify({uid:+process.getuid(), gid:+process.getgid()}))
} catch (ex) {
  console.log(JSON.stringify({error:ex.message,errno:ex.errno}))
}
", "node_modules/fsevents/node_modules/uid-number/get-uid-gid.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/uid-number/get-uid-gid.js");
    }
}
