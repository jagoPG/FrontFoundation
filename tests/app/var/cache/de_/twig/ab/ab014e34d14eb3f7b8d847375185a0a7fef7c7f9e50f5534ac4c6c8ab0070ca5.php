<?php

/* node_modules/has-unicode/index.js */
class __TwigTemplate_6c4fbb7e0c236ab68c498b2efd51a5cf1ae10f86e6b415e1b48e668b51a69d4f extends Twig_Template
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
        $__internal_c6ffbfdaf324196cb6ee5e6bea782cc2565d8c331d89c49edc7c550ed9813264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6ffbfdaf324196cb6ee5e6bea782cc2565d8c331d89c49edc7c550ed9813264->enter($__internal_c6ffbfdaf324196cb6ee5e6bea782cc2565d8c331d89c49edc7c550ed9813264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/has-unicode/index.js"));

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
        
        $__internal_c6ffbfdaf324196cb6ee5e6bea782cc2565d8c331d89c49edc7c550ed9813264->leave($__internal_c6ffbfdaf324196cb6ee5e6bea782cc2565d8c331d89c49edc7c550ed9813264_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/has-unicode/index.js";
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
", "node_modules/has-unicode/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/has-unicode/index.js");
    }
}
