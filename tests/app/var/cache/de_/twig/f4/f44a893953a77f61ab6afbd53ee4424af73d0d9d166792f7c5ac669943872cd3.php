<?php

/* node_modules/fsevents/node_modules/has-unicode/index.js */
class __TwigTemplate_0b92fc69514e5b39fa26a01d7cd68ae530344126dcb7a0b0c8dbaf7cb49f359e extends Twig_Template
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
        $__internal_49ee9f9a5e087f2ae64c96f08eb297e83a942be249af9e5afaef546554408b5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ee9f9a5e087f2ae64c96f08eb297e83a942be249af9e5afaef546554408b5e->enter($__internal_49ee9f9a5e087f2ae64c96f08eb297e83a942be249af9e5afaef546554408b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/has-unicode/index.js"));

        // line 1
        echo "\"use strict\"
var os = require(\"os\")

var hasUnicode = module.exports = function () {
  // Recent Win32 platforms (>XP) CAN support unicode in the console but
  // don't have to, and in non-english locales often use traditional local
  // code pages. There's no way, short of windows system calls or execing
  // the chcp command line program to figure this out. As such, we default
  // this to false and encourage your users to override it via config if
  // appropriate.
  if (os.type() == \"Windows_NT\") { return false }

  var isUTF8 = /UTF-?8\$/i
  var ctype = process.env.LC_ALL || process.env.LC_CTYPE || process.env.LANG
  return isUTF8.test(ctype)
}
";
        
        $__internal_49ee9f9a5e087f2ae64c96f08eb297e83a942be249af9e5afaef546554408b5e->leave($__internal_49ee9f9a5e087f2ae64c96f08eb297e83a942be249af9e5afaef546554408b5e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/has-unicode/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\"use strict\"
var os = require(\"os\")

var hasUnicode = module.exports = function () {
  // Recent Win32 platforms (>XP) CAN support unicode in the console but
  // don't have to, and in non-english locales often use traditional local
  // code pages. There's no way, short of windows system calls or execing
  // the chcp command line program to figure this out. As such, we default
  // this to false and encourage your users to override it via config if
  // appropriate.
  if (os.type() == \"Windows_NT\") { return false }

  var isUTF8 = /UTF-?8\$/i
  var ctype = process.env.LC_ALL || process.env.LC_CTYPE || process.env.LANG
  return isUTF8.test(ctype)
}
", "node_modules/fsevents/node_modules/has-unicode/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/has-unicode/index.js");
    }
}
