<?php

/* node_modules/fsevents/node_modules/set-blocking/index.js */
class __TwigTemplate_0c7f46c0e819de114143be52dd8df4b5ac043b49592d6bdf819d96c79351eef0 extends Twig_Template
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
        $__internal_4795007efb7ef2a30a5a9f764d4617ea4268e3434a7a78b95cfd874d4c0b1c88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4795007efb7ef2a30a5a9f764d4617ea4268e3434a7a78b95cfd874d4c0b1c88->enter($__internal_4795007efb7ef2a30a5a9f764d4617ea4268e3434a7a78b95cfd874d4c0b1c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/fsevents/node_modules/set-blocking/index.js"));

        // line 1
        echo "module.exports = function (blocking) {
  [process.stdout, process.stderr].forEach(function (stream) {
    if (stream._handle && stream.isTTY && typeof stream._handle.setBlocking === 'function') {
      stream._handle.setBlocking(blocking)
    }
  })
}
";
        
        $__internal_4795007efb7ef2a30a5a9f764d4617ea4268e3434a7a78b95cfd874d4c0b1c88->leave($__internal_4795007efb7ef2a30a5a9f764d4617ea4268e3434a7a78b95cfd874d4c0b1c88_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/fsevents/node_modules/set-blocking/index.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("module.exports = function (blocking) {
  [process.stdout, process.stderr].forEach(function (stream) {
    if (stream._handle && stream.isTTY && typeof stream._handle.setBlocking === 'function') {
      stream._handle.setBlocking(blocking)
    }
  })
}
", "node_modules/fsevents/node_modules/set-blocking/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/fsevents/node_modules/set-blocking/index.js");
    }
}
