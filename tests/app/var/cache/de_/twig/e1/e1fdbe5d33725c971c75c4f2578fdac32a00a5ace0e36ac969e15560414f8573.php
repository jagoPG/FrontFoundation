<?php

/* node_modules/uid-number/get-uid-gid.js */
class __TwigTemplate_93565105a42785b40d48a3e824780f8c44625b31472e919f1fd3ccddbb520c65 extends Twig_Template
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
        $__internal_362e4bf9033ed6eaa5629d232c13f398d85203d4d9081c0062312dbc771d3d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_362e4bf9033ed6eaa5629d232c13f398d85203d4d9081c0062312dbc771d3d3f->enter($__internal_362e4bf9033ed6eaa5629d232c13f398d85203d4d9081c0062312dbc771d3d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/uid-number/get-uid-gid.js"));

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
        
        $__internal_362e4bf9033ed6eaa5629d232c13f398d85203d4d9081c0062312dbc771d3d3f->leave($__internal_362e4bf9033ed6eaa5629d232c13f398d85203d4d9081c0062312dbc771d3d3f_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/uid-number/get-uid-gid.js";
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
", "node_modules/uid-number/get-uid-gid.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/uid-number/get-uid-gid.js");
    }
}
