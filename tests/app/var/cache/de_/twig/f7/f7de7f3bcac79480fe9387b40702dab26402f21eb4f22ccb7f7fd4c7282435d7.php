<?php

/* node_modules/buffer-xor/inplace.js */
class __TwigTemplate_7a6197701dd091af989a70d8c770aefd6aea35d4691c91800da1b54575e0e9e2 extends Twig_Template
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
        $__internal_1a17628cb654705013e0ce20def9753567a1cb4b678c39f67a1c69795daaf94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a17628cb654705013e0ce20def9753567a1cb4b678c39f67a1c69795daaf94e->enter($__internal_1a17628cb654705013e0ce20def9753567a1cb4b678c39f67a1c69795daaf94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/buffer-xor/inplace.js"));

        // line 1
        echo "module.exports = function xorInplace (a, b) {
  var length = Math.min(a.length, b.length)

  for (var i = 0; i < length; ++i) {
    a[i] = a[i] ^ b[i]
  }

  return a.slice(0, length)
}
";
        
        $__internal_1a17628cb654705013e0ce20def9753567a1cb4b678c39f67a1c69795daaf94e->leave($__internal_1a17628cb654705013e0ce20def9753567a1cb4b678c39f67a1c69795daaf94e_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/buffer-xor/inplace.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function xorInplace (a, b) {
  var length = Math.min(a.length, b.length)

  for (var i = 0; i < length; ++i) {
    a[i] = a[i] ^ b[i]
  }

  return a.slice(0, length)
}
", "node_modules/buffer-xor/inplace.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/buffer-xor/inplace.js");
    }
}
