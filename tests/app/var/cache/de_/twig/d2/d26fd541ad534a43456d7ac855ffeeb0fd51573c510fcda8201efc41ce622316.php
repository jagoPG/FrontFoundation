<?php

/* node_modules/set-blocking/index.js */
class __TwigTemplate_163d4a61d5d09979cd572ac69dd49096beec3f19b2f26a76e558c75cbea65e8e extends Twig_Template
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
        $__internal_212adde4cefee912233d810bd73c519a4c35d72a4fa898a056dd495c38b57bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212adde4cefee912233d810bd73c519a4c35d72a4fa898a056dd495c38b57bc8->enter($__internal_212adde4cefee912233d810bd73c519a4c35d72a4fa898a056dd495c38b57bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "node_modules/set-blocking/index.js"));

        // line 1
        echo "module.exports = function (blocking) {
  [process.stdout, process.stderr].forEach(function (stream) {
    if (stream._handle && stream.isTTY && typeof stream._handle.setBlocking === 'function') {
      stream._handle.setBlocking(blocking)
    }
  })
}
";
        
        $__internal_212adde4cefee912233d810bd73c519a4c35d72a4fa898a056dd495c38b57bc8->leave($__internal_212adde4cefee912233d810bd73c519a4c35d72a4fa898a056dd495c38b57bc8_prof);

    }

    public function getTemplateName()
    {
        return "node_modules/set-blocking/index.js";
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
", "node_modules/set-blocking/index.js", "/Users/mikel/Developer/DEV/FrontFoundation/tests/app/node_modules/set-blocking/index.js");
    }
}
